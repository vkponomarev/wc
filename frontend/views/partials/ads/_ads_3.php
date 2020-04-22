<?php

/* @var $this \yii\web\View */
/* @var $content string */


//Страницы перед текстом 2
if (!Yii::$app->params['embed']) {

    echo \common\models\Advertising::showAdvertising(3,$allAdvertising);

}
?>

