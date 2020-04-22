<?php

/* @var $this \yii\web\View */
/* @var $content string */


// Страницы после текста 1
if (!Yii::$app->params['embed']) {

    echo \common\models\Advertising::showAdvertising(1, $allAdvertising);

}
?>

