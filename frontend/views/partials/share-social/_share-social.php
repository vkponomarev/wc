<?php

/* @var $this \yii\web\View */
/* @var $content string */



//AppAsset::register($this);
//echo $this->params['title'];


use yii\widgets\Pjax;

?>

<?php Pjax::begin(); ?>

<?php if (!Yii::$app->params['embed']): ?>
<br>
<div class="social-center">
<?php if (Yii::$app->language == 'ru'):?>


    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter"></div>

<?php else:?>
    <div class="addthis_inline_share_toolbox"></div>
<?php endif;?>
</div>
<?php endif;?>
<br>

<?php Pjax::end(); ?>