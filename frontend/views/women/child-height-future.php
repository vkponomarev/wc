<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.08.19
 * Time: 16:24
 */
/** @var TYPE_NAME $pregnancyCalculationResult */
/** @var TYPE_NAME $currentLanguages */
/** @var TYPE_NAME $pregnancyCalculationDate */

/** @var TYPE_NAME $pregnancyCalculationMethod */


?>


<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>


        <div class="form-content">

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-left-title"><?= Yii::t('app', 'Choose the gender of the child:') ?></div>

                <div>
                    <label class="pregnancy-form-label" id="pregnancy-form-label-id-one">
                            <span class="pregnancy-form-radio">

                                <?php
                                if ($getParams['childGender'] == 1):?>
                                    <input type="radio" name="child-gender" value="1" checked="checked" class="">
                                <?php elseif (!$getParams['childGender']): ?>
                                    <input type="radio" name="child-gender" value="1" checked="checked" class="">
                                <?php else: ?>
                                    <input type="radio" name="child-gender" value="1" class="">
                                <?php endif; ?>

                            </span>
                        <span class="pregnancy-form-radio"><?= Yii::t('app', 'Boy') ?></span>
                    </label>

                    <br>
                    <label class="pregnancy-form-label" id="pregnancy-form-label-id-two">
                            <span class="pregnancy-form-radio">

                                <?php if ($getParams['childGender'] == 2): ?>
                                    <input type="radio" name="child-gender" checked="checked" value="2">
                                <?php else: ?>
                                    <input type="radio" name="child-gender" value="2">
                                <?php endif ?>
                            </span>

                        <span class="pregnancy-form-radio"><?= Yii::t('app', 'Girl') ?></span>
                    </label>

                </div>

                <div class="form-left-title"><?= Yii::t('app', 'Mom\'s height (cm):') ?></div>

                <input id="cycle-length-from" name="mother-height" class="form-control select-extended" type="text"
                       size="40"
                       value="<?php if ($getParams['motherHeight']): ?><?= $getParams['motherHeight'] ?><?php else: ?>155<?php endif ?>">


                <div class="form-left-title"><?= Yii::t('app', 'Dad\'s height (cm):') ?></div>


                <input id="cycle-length-from" name="father-height" class="form-control select-extended" type="text"
                       size="40"
                       value="<?php if ($getParams['fatherHeight']): ?><?= $getParams['fatherHeight'] ?><?php else: ?>165<?php endif ?>">


            </div>


            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="clearfix"></div>
                <div class="form-ad col-12">
                    <a name="result"></a>

                    <?= $this->render('/partials/ads/_ads_5')
                    ?>


                </div>
            </div>

        </div>

        <div>
            <div class="form-button-div">
                <br>
                <br>
                <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Calculate') ?>"
                       id="button_calc">
                <?= $this->render('/partials/embed/_embed-label-link.php'); ?>
            </div>


        </div>
        <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>
    </form>

</div>


<div class="<?php if (($result['viewResult'] <> 0) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

        <span class="form-result">
            <?= Yii::t('app', 'Result') ?>
        </span>

    <br><br>
    <div class="result-div-text">
            <span class="result-pre-text">
                <?php if ($result['childHeightFolk'] <> 0): ?>
                    <?= Yii::t('app', 'According to the folk formula:') ?>
                    <?= $result['childHeightFolk'] ?> <?= Yii::t('app', 'cm') ?><br>
                <?php endif; ?>
                <?php if ($result['childHeightHawker'] <> 0): ?>
                    <?= Yii::t('app', 'According to the Hawker formula:') ?>
                    <?= $result['childHeightHawker'] ?> <?= Yii::t('app', 'cm') ?><br>
                <?php endif; ?>
                <?php if ($result['childHeightKarkus'] <> 0): ?>
                    <?= Yii::t('app', 'According to the Karkus formula:') ?>
                    <?= $result['childHeightKarkus'] ?> <?= Yii::t('app', 'cm') ?><br>
                <?php endif; ?>
                <?php if ($result['childHeightSmirnovFrom'] <> 0): ?>
                    <?= Yii::t('app', 'According to the Smirnov formula') ?> <?= Yii::t('app', 'from') ?>
                    <?= $result['childHeightSmirnovFrom'] ?> <?= Yii::t('app', 'to') ?>
                    <?= $result['childHeightSmirnovTo'] ?> <?= Yii::t('app', 'cm') ?>
                    <br>
                <?php endif; ?>
            </span>

    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>






<?php

?>




