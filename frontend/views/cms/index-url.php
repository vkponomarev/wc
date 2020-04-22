<?php

/* @var $this yii\web\View */
$this->params['getUrls'] = $getUrls;
$this->params['model'] = $model;
?>
<div class="container  container-no-top-padding-extended">

    <div class="h1-main">

        <div class="h1-and-breadcrumbs">
            <h1 class="h1-all"><?= Yii::$app->params['page']['h1'] ?></h1>

            <span class="breadcrumbs"><?=Yii::t('app','Home')?></span>
        </div>

    </div>


    <div class="row row-padding margin-top">

        <div class="col-lg-9 col-xs-12 div-left">

            <?php
            echo '<p>' . Yii::$app->params['page']['text1'] . '</p>';
            echo  $this->render($getPages['pageName'], [
                'getSpecify' => $getPages['specify'],
                'getParams' => $getParams,
                'result' => $result,

            ])  ?>


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