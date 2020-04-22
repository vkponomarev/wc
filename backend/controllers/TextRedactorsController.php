<?php

namespace backend\controllers;

use common\components\textRedactors\TextNumericCopy;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * MailController implements the CRUD actions for Mail model.
 */
class TextRedactorsController extends Controller
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


    public function actionNumericCopy()
    {

        $TextNumericCopy = 0;

        /* if ($get) {
             $TextNumericCopy = new TextNumericCopy($pageID);
             $textNumericCopy->save($textNumericCopy->execute($get));
         }*/
        echo 'Контроллер' . '<br>';
        echo Yii::$app->request->post('id');
        if (Yii::$app->request->post('id')) {
            echo 'Есть ID' . '<br>';
            $pagesID = Yii::$app->request->post('id');
            $numberKeys = Yii::$app->request->post('numberKeys');
            $textKeys = Yii::$app->request->post('textKeys');
            $text = Yii::$app->request->post('text');
            $languageID = Yii::$app->request->post('language');

            (new TextNumericCopy($pagesID, $numberKeys, $textKeys, $text, $languageID));

        }


        return $this->render('index', [

            'createCalculator' => false,
            //'languages' => $languages,

        ]);


    }

}