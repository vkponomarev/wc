<?php

/* @var $this \yii\web\View */
/* @var $content string */



//AppAsset::register($this);
//echo $this->params['title'];

echo \common\models\Advertising::showAdvertising(5,$allAdvertising);

?>

