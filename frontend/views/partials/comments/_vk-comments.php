<?php

/* @var $this \yii\web\View */

use yii\widgets\Pjax;

/* @var $content string */



//AppAsset::register($this);
//echo $this->params['title'];


?>

<?php if (!Yii::$app->params['embed']): ?>
<p><br></p>
<div id="vk_comments"></div>
<script type="text/javascript">
    VK.Widgets.Comments("vk_comments", {limit: 15, attach: "*"});
</script>
<p><br><br></p>
<?php endif;?>

