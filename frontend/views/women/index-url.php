<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.08.19
 * Time: 18:06
 */

use common\models\Pages;

/* @var $this yii\web\View */
/* @var $pages Pages */
/** @var \common\models\Pages $currentLanguages
 */
/** @var TYPE_NAME $pagesTranslations */


/** @var TYPE_NAME $languagesSwitcher */
/** @var TYPE_NAME $pregnancyCalculationMethod */
/** @var TYPE_NAME $pregnancyCalculationResult */
/** @var TYPE_NAME $pregnancyCalculationDate */
/** @var TYPE_NAME $parentPageCategories */

if (isset($getParams['date']))
$this->params['calculationDate'] = $getParams['date'];
else $this->params['calculationDate'] = (new \DateTime())->format('d-m-Y');

$this->params['getUrls'] = $getUrls;
$this->params['icon'] = $getPages['icon'];

$position = 1;

//echo '<pre>';
//print_r($breadcrumbs);
//echo '</pre>';

/*
 *
 *                 <?php foreach ($breadcrumbs as $breadcrumb):?>
                    <?php $position++ ?>
                    <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    /  <a href="/<?= Yii::$app->language ?>/<?= $breadcrumb['url'] ?>/" itemprop="item">
                    <span itemprop="name">
                        <?= $breadcrumb['plates_title'] ?>
                    </span>
                    </a>
                    <meta itemprop="position" content="<?= $position ?>" />
                </li>
                <?php endforeach; ?>
 *
 *
 *
 *            <?=$this->render('/partials/view/parent-categories/parent-categories' ,[
                'parentCategories' => $parentCategories,
                'getIcon' => $getPages['icon'],

            ]);?>
 *<?=$this->render('/partials/parent-categories/_parent-categories' ,[
                'parentCategories' => $parentCategories,
                'getIcon' => $getPages['icon'],

            ]);?>
 * */


?>


<div class="container container-no-top-padding-extended">

    <div class="h1-main">
        <img src="/files/category-icons/<?=$getPages['icon']?>"
             alt="<?= Yii::$app->params['page']['h1'] ?>"
             width="70" height="70" class="h1-img">


        <div class="h1-and-breadcrumbs">
            <h1 class="h1-all"><?= Yii::$app->params['page']['h1'] ?></h1>

            <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">

                <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    <a href="/<?= Yii::$app->language ?>/" itemprop="item">
                        <span itemprop="name">
                        <?=Yii::t('app','Home')?>
                        </span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>

                <?=$this->render('/partials/view/breadcrumbs/breadcrumbs',[
                    'pageID' => $pageID,

                ]);?>


            </ol>
        </div>


    </div><br>
    <p><?= Yii::$app->params['page']['text1'] ?></p>


    <?php /* $this->render('/partials/ads/_ads_1', [
        'allAdvertising' => $allAdvertising])*/
    ?>

    <div class="row row-padding margin-top">


        <div class="col-lg-9 col-xs-12 div-left">

            <?php

            echo  $this->render($getPages['pageName'], [
                'getSpecify' => $getPages['specify'],
                'getParams' => $getParams,
                'result' => $result,

                 ])  ?>


            <?= $this->render('/partials/view/parent-categories/parent-categories',[
               'pageID' => $pageID,

            ]);?>


            <?php if (($pageID<>41)
                and ($pageID<>42)
                and ($pageID<>43)
                and ($pageID<>44)
                and ($pageID<>45)
                and ($pageID<>47)
            ):?>
                <?php if (Yii::$app->language == 'ru'):?>
                    <?= $this->render('/partials/comments/_vk-comments.php')?>
                <?php else:?>
                    <?= $this->render('/partials/comments/_fb-comments.php')?>
                <?php endif;?>
            <?php endif;?>

        </div>


        <div class="form-right col-sm-3">

            <?php if (isset($getPages['embed'])):?>
                <?=$getPages['embed']?>
            <?php endif;?>
            <?php //= $this->render('/partials/ads/_ads_2', [
            //'allAdvertising' => $allAdvertising])
            ?>

        </div>

    </div>


</div>
