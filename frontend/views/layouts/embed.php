<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAssetEmbed;
use common\widgets\Alert;

//AppAsset::register($this);

AppAssetEmbed::register($this);
//echo $this->params['title'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>


    <?php $this->head() ?>

</head>
<body class="background-transparent">
<?php $this->beginBody() ?>



        <?= $content ?>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
