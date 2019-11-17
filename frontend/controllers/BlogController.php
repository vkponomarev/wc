<?php
namespace frontend\controllers;

use common\models\Blog;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class BlogController extends Controller
{

   /*
  *  Здесь выводятся все элементы блога
  */
    public function actionIndex()
    {
        $blogs = Blog::find()->with('author')->andWhere(['status_id' => 1])->orderBy('sort');


        $dataProvider = new ActiveDataProvider([
            'query' => $blogs,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ],
            ],
        ]);


        return $this->render('all', ['dataProvider' => $dataProvider]);




    }
    /*
   *  Здесь выводится один элемент блога
   */

    public function actionOne($url)
    {
       if($blog = Blog::find()->andWhere(['url' => $url])->one()){

           return $this->render('one', ['blog' => $blog]);

       }

       throw new NotFoundHttpException('ой, нет такого блога.');

    }

}
