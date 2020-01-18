<?php

/* @var $this \yii\web\View */
/* @var $content string */

//	Страницы после текста 2
if (!$this->params['isEmbed']) {

    echo \common\models\Advertising::showAdvertising(4, $allAdvertising);

}
?>

