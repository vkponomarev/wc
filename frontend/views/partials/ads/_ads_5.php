<?php

/* @var $this \yii\web\View */
/* @var $content string */

//Страницы внутри формы калькулятора
if (!$this->params['isEmbed']){

    echo \common\models\Advertising::showAdvertising(5,$allAdvertising);

}


