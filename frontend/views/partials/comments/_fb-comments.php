<?php

/* @var $this \yii\web\View */

use yii\widgets\Pjax;

/* @var $content string */



//AppAsset::register($this);
//echo $this->params['title'];


?>
<?php Pjax::begin(); ?>
<?php if (!Yii::$app->params['embed']): ?>
<p><br></p>
<div class="comments-width">

    <div class="fb-comments" data-href="https://womencalc.com" data-width="100%" data-numposts="15"></div>
</div>
<?php endif;?>
<?php Pjax::end(); ?>
