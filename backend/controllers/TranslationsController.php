<?php

namespace backend\controllers;

use common\models\PagesText;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * MailController implements the CRUD actions for Mail model.
 */
class TranslationsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * Lists all Mail models.
     * @return mixed
     */


    public function actionIndex()
    {

        $languages = Yii::$app->db
            ->createCommand('
            select
            languages.id,
            languages.name_ru,
            languages.url,
            languages.active
            from
            languages
            where languages.active = 1
            '
            )
            ->queryAll();

        //echo '<pre>';
        //var_dump($texts);
        //print_r($languages);
        //echo '</pre>';
        $count = 0;
        $translation = array();

        if (Yii::$app->request->post('id')){
            foreach ($languages as $language){

                if ($language['url']<>'ru' and $language['url']<>'en') {
                    $count++;
                    $translation[$language['url']] = Yii::$app->request->post($language['url']);
                    if (!$translation[$language['url']])
                        throw new NotFoundHttpException('Не все поля были заполнены');
                }

            }
        }


        if (Yii::$app->request->post('id')){
            foreach ($languages as $language){

                if ($language['url']<>'ru' and $language['url']<>'en') {

                    $str = explode("\n", $translation[$language['url']]);
                    $count = 0;

                    //echo 'В массиве строк = ' . count($str) . '<br>';

                    if (count($str)==6){

                        $model = new PagesText();
                        $model->pages_id = Yii::$app->request->post('id');
                        $model->languages_id = $language['id'];
                        $model->index_name = '';
                        $model->short_description = '';
                        $model->keywords = '';
                        $model->text2 = '';

                        $model->menu_name = $str[0];
                        $model->title = $str[1];
                        $model->plates_title = $str[2];
                        $model->h1 = $str[3];
                        $model->description = $str[4];
                        $model->text1 = $str[5];
                        $model->active = 1;
                        $model->save();
                        //echo 'Menu Name ' . $str[0] . '<br>';
                        //echo 'Title ' . $str[1] . '<br>';
                        //echo 'Plates title ' . $str[2] . '<br>';
                        //echo 'H1 ' . $str[3] . '<br>';
                        //echo 'Description ' . $str[4] . '<br>';
                        //echo 'Text1 ' . $str[5] . '<br>';

                    }

                    if (count($str)==7){

                        $model = new PagesText();
                        $model->pages_id = Yii::$app->request->post('id');
                        $model->languages_id = $language['id'];
                        $model->short_description = '';
                        $model->keywords = '';
                        $model->text2 = '';

                        $model->menu_name = $str[0];
                        $model->index_name= $str[1];
                        $model->title = $str[2];
                        $model->plates_title = $str[3];
                        $model->h1 = $str[4];
                        $model->description = $str[5];
                        $model->text1 = $str[6];
                        $model->active = 1;
                        $model->save();

                        //echo 'Menu Name ' . $str[0] . '<br>';
                        //echo 'idex name ' . $str[1] . '<br>';
                        //echo 'Title ' . $str[2] . '<br>';
                        //echo 'Plates title ' . $str[3] . '<br>';
                        //echo 'H1 ' . $str[4] . '<br>';
                        //echo 'Description ' . $str[5] . '<br>';
                        //echo 'Text1 ' . $str[6] . '<br>';

                    }

                    /*foreach ($strTest as $one) {
                        $count++;

                        echo 'Строка ' . $count . ' = ' . $one . '<br>';

                    }*/
                }

            }
        }

        Yii::$app->request->post('id');


        echo 'id= ' . Yii::$app->request->post('id');


        return $this->render('index', [

            'createCalculator' => false,
            'languages' => $languages,
        ]);


    }

}