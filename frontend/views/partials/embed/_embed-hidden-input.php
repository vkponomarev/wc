<?php

/* @var $this \yii\web\View */
/* @var $content string */


?>

<?php if (Yii::$app->params['embed']): ?>
    <input type="hidden" name="embed" value="1">
<?php endif; ?>
<?php if (Yii::$app->params['embedTitle']): ?>
    <input type="hidden" name="title" value="2">
<?php endif; ?>
