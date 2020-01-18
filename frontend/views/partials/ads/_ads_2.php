<?php

/* @var $this \yii\web\View */
/* @var $content string */


//Страницы правая колонка
if (!$this->params['isEmbed']) {

    echo \common\models\Advertising::showAdvertising(2,$allAdvertising);

}
?>

