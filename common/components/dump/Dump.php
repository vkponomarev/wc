<?php

namespace common\components\dump;


use Yii;
use yii\web\NotFoundHttpException;





class Dump
{

    function printR($text){

        echo '<pre>';
        print_r($text);
        echo '</pre>';

    }

    function varDump($text){

        var_dump($text);

    }
}
