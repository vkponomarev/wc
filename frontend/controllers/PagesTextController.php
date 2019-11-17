<?php

namespace frontend\controllers;

use common\models\Languages;
use common\models\PagesText;
use common\models\Pages;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PagesTextController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $pages = PagesText::getIndex();

        return $this->render('index', ['pages'=>$pages]);

    }


    public function actionOne($url)
    {


       // Yii::$app->language = $pagesTest->url;
       // echo 'Язык который в урл система $language = '. $pagesTest->url . '<br><br>';
        //Yii::$app->language = 'ru';
        if($pages = PagesText::find()->andWhere(['url' => $url])->one()){

            return $this->render('one', ['pages' => $pages]);

        }

        throw new NotFoundHttpException('ой, нет такого блога.');

     /*   if($pages = PagesText::getOther($url)){

            return $this->render('one', ['pages' => $pages]);

        }

        throw new NotFoundHttpException('ой, нет такого блога.');
*/
    }





}
