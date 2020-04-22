<?php

/* @var $this \yii\web\View */
/* @var $content string */


?>

<?php if (!Yii::$app->params['embed']): ?>
    <div class="embed-link" >

        <a href="/<?= Yii::$app->language ?>/embed/?embed-url=<?= $this->params['getUrls']['url'] ?>&title=1" rel="nofollow">

            <?=Yii::t('app','Embed on your website')?>

        </a>

    </div>
<?php endif; ?>
