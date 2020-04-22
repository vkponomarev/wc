<?php

/* @var $this \yii\web\View */
/* @var $content string */


?>

<?php if (!Yii::$app->params['embed']): ?>
    <div class="row  row-flex">

        <?php (new \common\components\dump\Dump())->printR($parentCategories);
        foreach ($parentCategories as $parentCategory):?>
        <?php if ($parentCategory['url'] <> $this->params['getUrls']['url']):?>

            <a href="/<?= Yii::$app->language ?>/<?= $parentCategory['url'] ?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                <div class="plates">

                    <p><img class="plates-img" src="/files/category-icons/<?= $parentCategory['id'] ?>.png" alt="<?=$parentCategory['plates_title']?>" width="50"></p>

                    <p class="plates-title"><?=$parentCategory['plates_title']?>
                    </p>
                    <p class="plates-under-title"></p>
                </div>
            </a>

        <?php endif;?>
        <?php endforeach;?>
    </div>
<?php endif;?>
