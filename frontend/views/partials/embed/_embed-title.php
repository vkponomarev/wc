<?php

/* @var $this \yii\web\View */
/* @var $content string */


?>

<?php if (Yii::$app->params['embed']): ?>
    <?php if (Yii::$app->params['embedTitle']): ?>

        <div class="embed-title">
            <?= Yii::$app->params['page']['h1'] ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
