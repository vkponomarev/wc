<?php

/* @var $this yii\web\View */


?>

<div class="container container-no-top-padding-extended">


    <div class="h1-main">

        <div class="h1-and-breadcrumbs">
            <h1 class="h1-all"><?= Yii::$app->params['page']['h1'] ?></h1>

            <span class="breadcrumbs"><?=Yii::t('app','Home')?></span>
        </div>



    </div>
    <br>



    <br>
    <div class="form-embed">
        <form action="./">

            <input type="hidden" name="embed-url" value="<?=$embedUrl?>">

            <div class="form-embed">
                <input <?php if ($embedTitle) {echo 'checked';} ?>
                        onchange="submit();"
                        class="form-check-input" type="checkbox"
                        value="<?php if ($embedTitle) {echo '0';} else {echo '1';}?>"
                        name="title"
                        id="defaultCheck1">

                <label class="form-check-label form-embed-label" for="defaultCheck1">
                    <?=Yii::t('app','Calculator title')?>
                </label>

            </div>
        </form>
    </div>


<?php if($embedUrl):?>

    <?php if ($embedTitle):?>

        <?php $getParams['large'][1] += 50;?>
        <?php $getParams['middle'][1] += 50;?>
        <?php $getParams['small'][1] += 50;?>

    <?php endif;?>
    <div class="form-embed">
        <h2><?php
            //$embedPageTranslations->plates_title;
            ?></h2>
    </div>
    1.
    <br>

    <iframe
            src="<?=\yii\helpers\Url::home(true);?><?= Yii::$app->language ?>/<?=$embedUrl;?>/?embed=1<?php if ($embedTitle) {echo '&title=1';}?>"
            width="<?=$getParams['large'][0]?>"
            height="<?=$getParams['large'][1]?>"
            frameborder="0"
            scrolling="no"
            allowfullscreen>
    </iframe>



    <br><br>

    <div class="embed-code">
        &lt;iframe
        src="<?=\yii\helpers\Url::home(true);?><?= Yii::$app->language ?>/<?=$embedUrl;?>/?embed=1<?php if ($embedTitle) {echo '&title=1';}?>"
        width="<?=$getParams['large'][0]?>"
        height="<?=$getParams['large'][1]?>"
        frameborder="0"
        scrolling="no"
        allowfullscreen&gt;
        &lt;/iframe&gt;
    </div>
    <br>
    <br>
    2.
    <br>

    <iframe
            src="<?=\yii\helpers\Url::home(true);?><?= Yii::$app->language ?>/<?=$embedUrl;?>/?embed=1<?php if ($embedTitle) {echo '&title=1';}?>"
            width="<?=$getParams['middle'][0]?>"
            height="<?=$getParams['middle'][1]?>"
            frameborder="0"
            scrolling="no"
            allowfullscreen>
    </iframe>



    <br><br>

    <div class="embed-code">
        &lt;iframe
        src="<?=\yii\helpers\Url::home(true);?><?= Yii::$app->language ?>/<?=$embedUrl;?>/?embed=1<?php if ($embedTitle) {echo '&title=1';}?>"
        width="<?=$getParams['middle'][0]?>"
        height="<?=$getParams['middle'][1]?>"
        frameborder="0"
        scrolling="no"
        allowfullscreen&gt;
        &lt;/iframe&gt;
    </div>
    <br>
    <br>
    3.

    <br>
    <iframe
            src="<?=\yii\helpers\Url::home(true);?><?= Yii::$app->language ?>/<?=$embedUrl;?>/?embed=1<?php if ($embedTitle) {echo '&title=1';}?>"
            width="<?=$getParams['small'][0]?>"
            height="<?=$getParams['small'][1]?>"
            frameborder="0"
            scrolling="no"
            allowfullscreen>
    </iframe>




    <br><br>

    <div class="embed-code">
        &lt;iframe
        src="<?=\yii\helpers\Url::home(true);?><?= Yii::$app->language ?>/<?=$embedUrl;?>/?embed=1<?php if ($embedTitle) {echo '&title=1';}?>"
        width="<?=$getParams['small'][0]?>"
        height="<?=$getParams['small'][1]?>"
        frameborder="0"
        scrolling="no"
        allowfullscreen&gt;
        &lt;/iframe&gt;
    </div>
<?php else:?>





<?php endif;?>

</div>
