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

use kartik\date\DatePicker;

if (!$getParams['motherBirthDate']) {

    $getParams['motherBirthDate'] = $this->params['calculationDate'];
    $getParams['fatherBirthDate'] = $this->params['calculationDate'];

}

?>


<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>


        <div class="col-xs-12 col-sm-6 align-mid">

            <div class="form-left-title"><?= Yii::t('app', 'Choose mom\'s birthday:') ?></div>

            <div class="well well-sm form-date-picker-extended xs-align-mid">
                <?= DatePicker::widget([
                    'name' => 'mother-birth-date',
                    'value' => $getParams['motherBirthDate'],
                    'pluginOptions' => [
                        'format' => 'dd-m-yyyy',
                        'multidate' => false
                    ],
                    'options' => [
                        'format' => 'dd-m-yyyy',
                    ]
                ]); ?>
            </div>

            <div class="form-left-title"><?= Yii::t('app', 'Choose dad\'s birthday:') ?></div>


            <div class="well well-sm form-date-picker-extended xs-align-mid">
                <?= DatePicker::widget([
                    'name' => 'father-birth-date',
                    'value' => $getParams['fatherBirthDate'],
                    'pluginOptions' => [
                        'format' => 'dd-m-yyyy',
                        'multidate' => false
                    ],
                    'options' => [
                        'format' => 'dd-m-yyyy',
                    ]
                ]); ?>
            </div>

        </div>


        <div class="col-xs-12 col-sm-6 align-mid">
            <hr class="form-hr-xs-block">

            <div class="form-choose-date-text-1"
                 id="form-radio-choose-text-one">
                <?= Yii::t('app', 'Select the date of conception:') ?>
            </div>

            <?= $this->render('/partials/date-picker/_standard-date-picker.php') ?>


        </div>

        <div class="clearfix"></div>
        <div class="form-ad col-12">
            <a name="result"></a>

            <?= $this->render('/partials/ads/_ads_5')
            ?>


        </div>
        <br>

        <div class="form-button-div">

            <input class="btn btn-success form-button" type="submit" value="<?= Yii::t('app', 'Calculate') ?>"
                   id="button_calc">
            <?= $this->render('/partials/embed/_embed-label-link.php'); ?>
        </div>
        <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>

    </form>

</div>


<div class="<?php if (($result['childGender'] <> 'n') or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

        <span class="form-result">
            <?= Yii::t('app', 'Result') ?>
        </span>

    <br><br>
    <div class="result-div-text">
            <span class="result-main-text">
                <?php if ($result['childGender'] == 'g'): ?>
                    <?= Yii::t('app', 'You will have a girl') ?>
                <?php else: ?>
                    <?= Yii::t('app', 'You will have a boy') ?>
                <?php endif; ?>
                    <br>
            </span>

        <span class="result-pre-text">
                <?= Yii::t('app', 'Days Since Mom\'s Last Blood Update:') ?>
            <?= $result['countDaysFromMotherLastBloodRenewal']; ?>
                <br>
                <?= Yii::t('app', 'Days Since Dad\'s Last Blood Update:') ?>
            <?= $result['countDaysFromFatherLastBloodRenewal']; ?>
                <br>
                <?= Yii::t('app', 'Date of Mom\'s last blood update:') ?>
            <?= $result['motherLastRenewalDate']; ?>
                <br>
                <?= Yii::t('app', 'Date of Dad\'s last blood update:') ?>
            <?= $result['fatherLastRenewalDate']; ?>
            </span>
    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>










