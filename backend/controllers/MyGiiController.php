<?php

namespace backend\controllers;

use common\components\gii\CreateCalculator;
use Yii;
use common\models\Mail;
use common\models\MailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MailController implements the CRUD actions for Mail model.
 */
class MyGiiController extends Controller
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

    /**
     * Lists all Mail models.
     * @return mixed
     */
    public function actionIndex()
    {

        if (Yii::$app->request->get('calc-name')) {

            $mainFolder = Yii::$app->request->get('main-folder');
            $calcFolder = Yii::$app->request->get('calc-folder');
            $calcName = Yii::$app->request->get('calc-name');
            $calcCreate = Yii::$app->request->get('calc-create');
            $calcView = Yii::$app->request->get('calc-view');
            $calcResultUseFolder = Yii::$app->request->get('calc-result-use-folder');
            $createCalculator = new CreateCalculator($mainFolder, $calcFolder, $calcName, $calcCreate, $calcView, $calcResultUseFolder);


            return $this->render('index', [

                'createCalculator' => $createCalculator->result,

            ]);

        } else {

            return $this->render('index', [

            'createCalculator' => false,

            ]);

        }
    }

}