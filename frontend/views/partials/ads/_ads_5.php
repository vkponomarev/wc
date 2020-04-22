<?php

/* @var $this \yii\web\View */
/* @var $content string */

//Страницы внутри формы калькулятора
if (!Yii::$app->params['embed']){

    echo \common\components\mainPagesData\MainPagesDataAdvertising::showAdvertising(5);

}


