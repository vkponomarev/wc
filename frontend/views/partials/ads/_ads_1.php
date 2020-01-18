<?php

/* @var $this \yii\web\View */
/* @var $content string */


// Страницы после текста 1
if (!$this->params['isEmbed']) {

    echo \common\models\Advertising::showAdvertising(1, $allAdvertising);

}
?>

