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
/*

Калькулятор беременности

*/


?>


<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>


        <div class="form-content">

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-element-title">
                    <?= Yii::t('app', 'Age (18 - 50):') ?>
                </div>

                <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                       size="40"
                       value="<?php if ($getParams['age']): ?><?= $getParams['age'] ?><?php else: ?>25<?php endif ?>">


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


                <?= Yii::t('app', 'The probability of an ectopic pregnancy relative to age:') ?>
                <?= $result['ectopicPregnancy'] ?> %<br><br>
                 <?= Yii::t('app', 'The total frequency of ectopic pregnancy per 1000 pregnant women:') ?>
                12-14
                <br><br>
                <?= Yii::t('app', 'Risk factors for ectopic pregnancy:') ?><br>
                <?= Yii::t('app', 'Operations on the fallopian tubes:') ?> 20,0 <br>
                <?= Yii::t('app', 'History of WB:') ?> 10,0 <br>
                <?= Yii::t('app', 'Anamnesis of salpingitis:') ?> 4,0 <br>
                <?= Yii::t('app', 'Infertility treatment:') ?> 4,0 <br>
                <?= Yii::t('app', 'Age less than 25 years:') ?> 3,0 <br>
                <?= Yii::t('app', 'Anamnesis of infertility:') ?> 2,5 <br>
                <?= Yii::t('app', 'Smoking:') ?> 2,5 <br>
                <?= Yii::t('app', 'Vaginal douching:') ?> 2,5 <br>

            </span>

    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>










<?php

?>




