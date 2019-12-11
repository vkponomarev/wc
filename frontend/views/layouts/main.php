<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
//echo $this->params['title'];

    //Url::home();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <style>
        @font-face {
            font-family: Arial;
            font-display: swap;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130047868-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130047868-2');
    </script>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php if ($this->params['pagesTranslations']->description): ?>
    <meta name="description" content="<?=$this->params['pagesTranslations']->description;?>">
    <?php endif?>
    <?php if ($this->params['pagesTranslations']->keywords): ?>
    <meta name="keywords" content="<?=$this->params['pagesTranslations']->keywords;?>">
    <?php endif?>

    <?= $this->render('/partials/open-graph/_open-graph.php', [
        'pages' => $this->params['pages'],
        'pagesTranslations' => $this->params['pagesTranslations']]);
    ?>

    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->params['pagesTranslations']->title) ?></title>

    <?php $this->head() ?>


    <?= $this->render('/partials/alternate/_alternate');?>
    <?= $this->render('/partials/canonical/_canonical');?>



    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

    <script type="text/javascript">
        VK.init({apiId: 7213089, onlyWidgets: true});
    </script>
    <meta name="yandex-verification" content="40aa82a8394e6c36" />


</head>
<body role="document">
<?php $this->beginBody() ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?=$this->params['currentLanguages']->lang_lang?>/sdk.js#xfbml=1&version=v5.0&appId=174556506430768&autoLogAppEvents=1"></script>
<div class="wrap">
    <?php
    //\common\models\Pages::menuItems();

    ?>

    <nav class="navbar-default nav-shadow">
        <div class="container container-extended">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed nav-button" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand dropdown-a-extended brand-link-extended" href="/"><img class="brand-image"
                                                                                              src="/files/logo1.png"
                                                                                              alt="<?=Yii::t('app','Woman')?> <?=Yii::t('app','Calculator')?>"
                                                                                              width="70">
                    <div class="brand-div"><?=Yii::t('app','Woman')?><br>
                        <?=Yii::t('app','Calculator')?></div>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse nav-bar-collapsed nav-bar-padding">
                <ul class="navbar-right nav navbar-nav nav-bar-collapsed-ul">

                    <?php foreach ($this->params['menuItems']['menuItems'] as $item): ?>

                        <li class="dropdown dropdown-menu-hover"><a
                                    href="/<?= $this->params['currentLanguages']->url; ?>/<?= $item['url']; ?>/"
                                    class="dropdown-toggle dropdown-a-extended"
                                    data-toggle="dropdown" role="button"
                                    aria-haspopup="false" aria-expanded="true">
                                <?= $item['menu_name']; ?>

                                <span class="caret">

                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-extended">
                                <li class="show-only-small-resolution dropdown-li-extended"><a href="/<?= $this->params['currentLanguages']->url; ?>/<?= $item['url']; ?>/"
                                       class="dropdown-li-a-extended">

                                        <?= $item['menu_name']; ?>

                                    </a></li>

                                <?php if (isset($this->params['menuItems']['menuItemsParent'][$item['parent_id']])): ?>

                                    <?php foreach ($this->params['menuItems']['menuItemsParent'][$item['parent_id']] as $itemParent): ?>

                                        <li class="dropdown-li-extended">
                                            <a href="/<?= $this->params['currentLanguages']->url; ?>/<?= $itemParent['url']; ?>/"
                                               class="dropdown-li-a-extended">

                                                <?= $itemParent['menu_name']; ?>

                                            </a></li>

                                    <?php endforeach ?>

                                <?php endif; ?>

                            </ul>
                        </li>

                    <?php endforeach ?>


                    </li>
                </ul>
            </div>
        </div>
    </nav>








        <?= $content ?>



</div>

<footer>
    <div class="container container-no-top-padding-extended text-center text-md-left">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <span class="choose-languages">

                   <span class="fa fa-globe globe-size">
                   </span>

                   <?=$this->params['currentLanguages']->name?>

                   <span class="fa fa-sort-down sort-down-languages">
                   </span>
                   <ul class="languages-dropdown">

                       <?php foreach ($this->params['languagesSwitcher'] as $item): ?>

                           <li>

                               <?= \yii\helpers\Html::a($item->name, array_merge(Yii::$app->request->get(),
                                   [Yii::$app->controller->route, 'language' => $item->url]));?>

                           </li>

                       <?php endforeach?>


                   </ul>

               </span>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Read')?></span>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/cookie/" rel="nofollow"><?=Yii::t('app','Cookie info')?></a>
                    </li>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/policy/" rel="nofollow"><?=Yii::t('app','Privacy policy')?></a>
                    </li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Help')?></span>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/translation/" rel="nofollow"><?=Yii::t('app','Translations')?></a>
                    </li>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/donation/" rel="nofollow"><?=Yii::t('app','Donations')?></a>
                    </li>


                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Contacts')?></span>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/contact/" rel="nofollow"><?=Yii::t('app','Write to us')?></a>
                    </li>

                </ul>
            </div>


        </div>
    </div>
    <br><br><br>
</footer>

<script>

    /**/



    $('.dropdown-toggle').click(function(e) {
        if ($(document).width() > 768) {
            e.preventDefault();
            var url = $(this).attr('href');
            if (url !== '#') {
                window.location.href = url;
            }
        }
    });


</script>

<?php $this->endBody() ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dbbf2586b540d45"></script>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js" async="async"></script>

<?= $this->render('/partials/counters/_counters');?>


</body>
</html>
<?php $this->endPage() ?>
