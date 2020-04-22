<?php

/* @var $this \yii\web\View */
/* @var $content string */

//	Страницы после текста 2
if (!Yii::$app->params['embed']) {

    echo \common\models\Advertising::showAdvertising(4, $allAdvertising);

}
?>

