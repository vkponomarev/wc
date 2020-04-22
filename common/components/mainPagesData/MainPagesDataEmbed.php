<?php

namespace common\components\mainPagesData;



use Yii;
use yii\web\NotFoundHttpException;

class MainPagesDataEmbed
{

    function __construct(){

        if ($this->getEmbedParam()){

            Yii::$app->params['embed'] = true;
            Yii::$app->controller->layout = 'embed.php';
            $this->workUrl = 'index-url-embed';

        } else {

            Yii::$app->params['embed'] = false;
            $this->workUrl = 'index-url';
        }

       if ($this->getEmbedTitleParam()){

            Yii::$app->params['embedTitle'] = true;

       } else {

            Yii::$app->params['embedTitle'] = false;

       }

        return $this->workUrl;


    }

    public function getEmbedParam()
    {

        $getEmbedParam = Yii::$app->request->get('embed');
        return $getEmbedParam;

    }

    public function getEmbedTitleParam()
    {

        $getEmbedTitleParam = Yii::$app->request->get('title');
        return $getEmbedTitleParam;

    }

}

