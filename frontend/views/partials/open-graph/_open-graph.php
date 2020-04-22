<?php

/* @var $this \yii\web\View */
/* @var $content string */



//AppAsset::register($this);
//echo $this->params['title'];
$relativeHomeUrl = \yii\helpers\Url::home(true);


?>
    <meta property="og:title" content="<?= Yii::$app->params['page']['title'] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$relativeHomeUrl?><?=Yii::$app->language?>/<?=$getUrls['url']?>/" />
    <meta property="og:image" content="<?=$relativeHomeUrl?>files/category-icons/<?=$icon?>" />
    <meta property="og:description" content="<?= Yii::$app->params['page']['description'] ?>" />
