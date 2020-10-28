<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Pjax;

AppAsset::register($this);
//echo $this->params['title'];

    //Url::home();
/*
 *
 *
 * */
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




    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="<?= Yii::$app->params['page']['description'] ?>">


    <?=$this->render('/partials/view/alternate/alternate');?>
    <?php
    //$this->render('/partials/alternate/_alternate');
    ?>


    <?= $this->render('/partials/canonical/_canonical');?>


<?php if (isset($this->params['icon'])):?>
<?=$this->render('/partials/open-graph/_open-graph' ,[
            'getUrls' => $this->params['getUrls'],
            'icon' => $this->params['icon'],
        ]);?>
<?php endif;?>

    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode(Yii::$app->params['page']['title']) ?></title>

    <?php $this->head() ?>

    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

    <script type="text/javascript">
        VK.init({apiId: 7213089, onlyWidgets: true});
    </script>

    <meta name="yandex-verification" content="40aa82a8394e6c36" />
    <meta property="fb:admins" content="100001835686449"/>

</head>
<body role="document">
<?php $this->beginBody() ?>

<div id="fb-root"></div>


<div class="wrap">



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
                <a class="navbar-brand dropdown-a-extended brand-link-extended" href="/">

                    <img class="brand-image" src="/files/logo1.png" alt="<?=Yii::t('app','Woman')?> <?=Yii::t('app','Calculator')?>" width="70">

                    <div class="brand-div"><?=Yii::t('app','Woman')?><br>
                        <?=Yii::t('app','Calculator')?></div>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse nav-bar-collapsed nav-bar-padding">
                <ul class="navbar-right nav navbar-nav nav-bar-collapsed-ul">



                    <?=$this->render('/partials/view/menu/menu');?>

                    <?php

                    //$this->render('/partials/menu-items/_menu-items');

                    ?>

                </ul>
            </div>
        </div>
    </nav>



        <?= $content ?>



</div>

<footer>
    <div class="container container-no-top-padding-extended text-center text-md-left">
        <div class="row">

            <?= $this->render('/partials/view/language-selection/language-selection');
            ?>




            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Read')?></span>

                    <li>
                        <a href="/<?= Yii::$app->language ?>/embed/" rel="nofollow"><?=Yii::t('app','Embed calculator')?></a>
                    </li>

                     <li>
                         <br>
                    </li>


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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130047868-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130047868-2');
</script>
<script data-ad-client="ca-pub-6533211636627045" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?=Yii::$app->params['language']['lang']?>/sdk.js#xfbml=1&version=v5.0&appId=174556506430768&autoLogAppEvents=1"></script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dbbf2586b540d45"></script>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js" async="async"></script>

<?= $this->render('/partials/counters/_counters');?>


</body>
</html>
<?php $this->endPage() ?>
