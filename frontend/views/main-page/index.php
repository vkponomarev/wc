<?php

/* @var $this yii\web\View */


?>
<div class="container  container-no-top-padding-extended">

    <div class="h1-main">
        <img src="/files/category-icons/1.png" alt="<?=Yii::t('app','Woman')?> <?=Yii::t('app','Calculator')?>" width="70" height="70" class="h1-img">
        <div class="h1-and-breadcrumbs">
            <h1 class="h1-all"><?= Yii::$app->params['page']['h1'] ?></h1>

            <span class="breadcrumbs"><?=Yii::t('app','Home')?></span>
        </div>



    </div>
    <br>
    <p><?= Yii::$app->params['page']['text1'] ?></p>

    <?php

    ?>


    <div class="row row-padding margin-top">

        <div class="col-lg-9 col-xs-12 div-left">

            <?php foreach ($mainPageCategories as $pageCategory):?>

                <?php if($pageCategory['parent_id'] == 0): ?>
                    <h2><?=$pageCategory['index_name']?></h2>
                    <div class="row  row-flex">

                        <a href="/<?= Yii::$app->language ?>/<?=$pageCategory['url']?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                            <div class="plates">

                                <p><img class="plates-img" src="/files/category-icons/<?=$pageCategory['id']?>.png" alt="<?=$pageCategory['plates_title']?>" width="50"></p>

                                <p class="plates-title"><?=$pageCategory['plates_title']?>
                                </p>
                                <p class="plates-under-title"></p>
                            </div>
                        </a>


                <?php foreach ($mainPageCategories as $pageParentCategory):?>

                    <?php if($pageParentCategory['parent_id'] == $pageCategory['id']): ?>
                    <a href="/<?= Yii::$app->language ?>/<?= $pageParentCategory['url'] ?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                        <div class="plates">
                            <p>
                                <img class="plates-img" src="/files/category-icons/<?= $pageParentCategory['id'] ?>.png" alt="<?= $pageParentCategory['plates_title'] ?>" width="50">
                            </p>
                            <p class="plates-title">
                                <?= $pageParentCategory['plates_title'] ?>
                            </p>
                            <p class="plates-under-title"></p>

                        </div>
                    </a>
                    <?php endif; ?>
                <?php endforeach;?>
                    </div>
                <?php endif; ?>
            <?php endforeach;?>
            <br>
            <div class="mail-index">
                <div id="vk_comments_browse"></div>
                <script type="text/javascript">
                    window.onload = function () {
                        VK.init({apiId: 7213089, onlyWidgets: true});
                        VK.Widgets.CommentsBrowse('vk_comments_browse', {width: 500, limit: 15, mini: 0});
                    }
                </script>
            </div>

        </div>

        <div class="form-right col-sm-3">



            <?php //= $this->render('/partials/ads/_ads_2', [
            //'allAdvertising' => $allAdvertising])
            ?>

        </div>

    </div>









</div>