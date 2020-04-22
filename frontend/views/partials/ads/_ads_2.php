<?php

/* @var $this \yii\web\View */
/* @var $content string */


//Страницы правая колонка
if (!Yii::$app->params['embed']) {

    echo \common\models\Advertising::showAdvertising(2,$allAdvertising);

}
?>

