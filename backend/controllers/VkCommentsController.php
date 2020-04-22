<?php

namespace backend\controllers;

use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * MailController implements the CRUD actions for Mail model.
 */
class VkCommentsController extends Controller
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


        return $this->render('index', [


        ]);


    }

}