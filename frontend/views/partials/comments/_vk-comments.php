<?php

/* @var $this \yii\web\View */

use yii\widgets\Pjax;

/* @var $content string */



//AppAsset::register($this);
//echo $this->params['title'];

/*
 * <script type="text/javascript">
    VK.Widgets.Comments("vk_comments", {limit: 15, attach: "*"});
</script>
 * */
?>
<?php if (!Yii::$app->params['embed']): ?>
<p><br>
<div id="vk_comments"></div>

    <script onload="showvk()" data-aload data-original="https://vk.com/js/api/openapi.js?162"></script>

    <script>
        function showvk() {
            VK.init({apiId: 7213089, onlyWidgets: true});
            VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
        }
    </script>


<br><br></p>
<?php endif;?>
