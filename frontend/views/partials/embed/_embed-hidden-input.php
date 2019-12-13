<?php

/* @var $this \yii\web\View */
/* @var $content string */


?>

<?php if ($this->params['isEmbed']): ?>
    <input type="hidden" name="embed" value="<?=$this->params['isEmbed']?>">
<?php endif; ?>
