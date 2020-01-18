<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.08.19
 * Time: 18:06
 */


/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var $pages \common\models\Pages */

$this->params['pagesTranslations'] = $pagesTranslations;
$this->params['currentLanguages'] = $currentLanguages;
$this->params['languagesSwitcher'] = $languagesSwitcher;
$this->params['menuItems'] = $menuItems;
$this->params['mainPageCategories'] = $mainPageCategories;
$this->params['currentPageId'] = $currentPageId;
$this->params['allAdvertising'] = $allAdvertising;
$this->params['pages'] = $pages;
$this->params['alternate'] = $alternate;
$this->params['canonical'] = $canonical;
$this->params['isEmbed'] = $isEmbed;


?>

<div class="container  container-no-top-padding-extended">

    <div class="h1-main">
        <img src="/files/category-icons/<?=$currentPageId?>.jpg"
             alt="<?= $this->params['pagesTranslations']->h1 ?>"
             width="70" height="70" class="h1-img">

        <div class="h1-and-breadcrumbs">
        <h1 class="h1-all"><?= $this->params['pagesTranslations']->h1 ?></h1>

            <span class="breadcrumbs"><?=Yii::t('app','Home')?></span>
        </div>



    </div><br>
    <p><?= $this->params['pagesTranslations']->text1 ?></p>

    <?= $this->render('/partials/ads/_ads_1', [
        'allAdvertising' => $this->params['allAdvertising']])
    ?>

    <div class="row row-padding margin-top">
        <div class="col-lg-9 col-xs-12 div-left">
            <?php foreach ($this->params['mainPageCategories']['mainPageItems'] as $item): ?>

                <?php //echo print_r($item);?>


                <h2><?= $item['index_name']; ?></h2>
                <div class="row  row-flex"><a href="/<?= $this->params['currentLanguages']->url; ?>/<?= $item['url']; ?>/"
                                              class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                        <div class="plates">

                            <p><img class="plates-img" src="/files/category-icons/<?=$item['id']?>.png"
                                    alt="<?= $item['plates_title'] ?>"
                                    width="50"></p>

                            <p class="plates-title"><?= $item['plates_title']; ?></p>
                            <p class="plates-under-title"><?php // $item['h1']; ?></p>
                        </div>
                    </a>

                    <?php if (isset($this->params['mainPageCategories']['mainPageItemsParent'][$item['parent_id']])): ?>
                        <?php foreach ($this->params['mainPageCategories']['mainPageItemsParent'][$item['parent_id']] as $itemParent): ?>


                            <a href="/<?= $this->params['currentLanguages']->url; ?>/<?= $itemParent['url']; ?>/"
                               class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                                <div class="plates">
                                    <p>
                                        <img class="plates-img" src="/files/category-icons/<?=$itemParent['id']?>.png"
                                             alt="<?= $itemParent['plates_title'] ?>"
                                             width="50">
                                    </p>
                                    <p class="plates-title">
                                        <?= $itemParent['plates_title']; ?>
                                    </p>
                                    <p class="plates-under-title"><?php // $itemParent['short_description']; ?></p></div>
                            </a>


                        <?php endforeach ?>
                    <?php endif; ?>

                </div>

            <?php endforeach ?>
            <p>
                <?php if ($this->params['pagesTranslations']->text2):?>
                <?= $this->params['pagesTranslations']->text2 ?>
                <?php endif;?>
            </p>
        </div>

        <div class="form-right col-sm-3">



            <?= $this->render('/partials/ads/_ads_2', [
                'allAdvertising' => $allAdvertising])
            ?>

        </div>
    </div>
</div>


<?php //\common\models\Pages::mainPageCategories($currentLanguages->id); ?>














