<?php

/* @var $this yii\web\View */


?>
<div class="container  container-no-top-padding-extended">

    <div class="h1-main">

        <div class="h1-and-breadcrumbs">
            <h1 class="h1-all"><?= Yii::$app->params['h1'] ?></h1>

            <span class="breadcrumbs"><?=Yii::t('app','Home')?></span>
        </div>



    </div>
    <br>


    <?php

    //common\models\mainPage\MainPageCategories::mainPageCategories();
    //echo '<pre>';
    //var_dump($texts);
    //print_r($mainPageCategories);
    //print_r(Yii::$app->params['mainPagesArray']);
    //echo '</pre>';



    ?>


    <div class="row row-padding margin-top">

        <div class="col-lg-9 col-xs-12 div-left">

            <?php foreach ($mainPageCategories as $pageCategory):?>

                <?php if($pageCategory['parent_id'] == 0): ?>
                    <h2><?=$pageCategory['plates_title']?></h2>
                    <div class="row  row-flex">

                        <a href="/<?= Yii::$app->language ?>/<?= Yii::$app->params['mainPagesArray'][$pageCategory['url']]; ?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                            <div class="plates">

                                <p><img class="plates-img" src="/files/category-icons/2.png" alt="Калькулятор беременности" width="50"></p>

                                <p class="plates-title"><?=$pageCategory['plates_title']?>
                                </p>
                                <p class="plates-under-title"></p>
                            </div>
                        </a>


                <?php foreach ($mainPageCategories as $pageParentCategory):?>

                    <?php if($pageParentCategory['parent_id'] == $pageCategory['id']): ?>
                    <a href="/<?= Yii::$app->language ?>/<?= Yii::$app->params['mainPagesArray'][$pageCategory['url']]; ?>/<?= $pageParentCategory['url'] ?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                        <div class="plates">
                            <p>
                                <img class="plates-img" src="/files/category-icons/5.png" alt="Калькулятор беременности по месячным" width="50">
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



        </div>

        <div class="form-right col-sm-3">

            sdfwdef

            <?php //= $this->render('/partials/ads/_ads_2', [
            //'allAdvertising' => $allAdvertising])
            ?>

        </div>

    </div>









</div>