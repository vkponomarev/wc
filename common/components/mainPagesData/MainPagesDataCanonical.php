<?php

namespace common\components\mainPagesData;



use Yii;

class MainPagesDataCanonical
{

    function canonical($givenUrl, $mainUrl){



        if ($givenUrl){

            if ($givenUrl <> 'index')
                Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . $givenUrl . '/';
            else
                Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/';

        }else{

            Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/';

        }


/*
        if  ($givenUrl == $mainUrl)
            Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . Yii::$app->params['mainPagesArray'][$mainUrl];

        else
            Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . Yii::$app->params['mainPagesArray'][$mainUrl] . '/' . $givenUrl . '/';
*/
    }

}

