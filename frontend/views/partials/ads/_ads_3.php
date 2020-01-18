<?php

/* @var $this \yii\web\View */
/* @var $content string */


//Страницы перед текстом 2
if (!$this->params['isEmbed']) {

    echo \common\models\Advertising::showAdvertising(3,$allAdvertising);

}
?>

