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
                    <?= Yii::t('app', 'Weight before pregnancy:') ?>
                </div>

                <input name="weight-before-pregnancy" class="form-control select-extended" type="text" size="40"
                       value="<?php if ($getParams['weightBeforePregnancy']): ?><?= $getParams['weightBeforePregnancy'] ?><?php else: ?>50.2<?php endif ?>">

                <div class="form-element-title">
                    <?= Yii::t('app', 'Your gestational age:') ?>
                </div>

                <select name="pregnancy-week" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 40; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['pregnancyWeek']) {
                                if ($i == $getParams['pregnancyWeek'])
                                    echo 'selected="selected"';
                            } elseif (!($getSpecify === false)){
                                if ($i == $getSpecify)
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $i]) ?>
                        </option>
                    <?php endfor; ?>

                </select>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Current weight:') ?>
                </div>

                <input name="weight-after-pregnancy" class="form-control select-extended" type="text" size="40"
                       value="<?php if ($getParams['weightAfterPregnancy']): ?><?= $getParams['weightAfterPregnancy'] ?><?php else: ?>50.2<?php endif ?>">


            </div>

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="clearfix"></div>
                <div class="form-ad col-12">
                    <a name="result"></a>

                    <?= $this->render('/partials/ads/_ads_5')
                    ?>


                </div>
            </div>
            <br>
        </div>
        <div>
            <div class="form-button-div">
                <br>
                <br>
                <input class="btn btn-success form-button" type="submit"
                       value="<?= Yii::t('app', 'Calculate pregnancy') ?>"
                       id="button_calc">
                <?= $this->render('/partials/embed/_embed-label-link.php'); ?>
            </div>


        </div>
        <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>

    </form>

</div>


<div class="<?php if (($result['viewResult'] == 1) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

            <span class="form-result">

                <?= Yii::t('app', 'Result') ?>

            </span>


    <br><br>


    <div class="result-div-text">

                <span class="result-pre-text">
                     <?= Yii::t('app', 'Pregnancy week:') ?>
                    <?= $result['pregnancyWeek'] ?>
                    <br>
                    <?= Yii::t('app', 'Current weight:') ?>
                    <?= $result['pregnancyWeight'] ?> <?= Yii::t('app', 'kg') ?>
                    <br>
                    <?= Yii::t('app', 'Weight which should be:') ?>
                    <?= $result['pregnancyWeightShouldBe'] ?> <?= Yii::t('app', 'kg') ?>
                    <br>
                    <?= Yii::t('app', 'Weight difference:') ?>
                    <?= $result['pregnancyDifference'] ?> <?= Yii::t('app', 'kg') ?>
                    <br>
                    <?php if ($result['fetusHeight']): ?>
                        <?= Yii::t('app', 'Fetal length:') ?>
                        <?= $result['fetusHeight'] ?> <?= Yii::t('app', 'cm') ?>
                        <br>
                    <?php endif; ?>

                    <?php if ($result['fetusWeight']): ?>
                        <?= Yii::t('app', 'Fetal weight:') ?>
                        <?= $result['fetusWeight'] ?> <?= Yii::t('app', 'gm') ?>
                        <br>
                    <?php endif; ?>

                    <?php if ($result['fetusHeadSize']): ?>
                        <?= Yii::t('app', 'Fetal head size:') ?>
                        <?= $result['fetusHeadSize'] ?> <?= Yii::t('app', 'cm') ?>
                        <br>
                    <?php endif; ?>

                    <?php if ($result['fetusHipLength']): ?>
                        <?= Yii::t('app', 'Fetal femur length:') ?>
                        <?= $result['fetusHipLength'] ?> <?= Yii::t('app', 'cm') ?>
                        <br>
                    <?php endif; ?>

                    <?php if ($result['fetusChestDiameter']): ?>
                        <?= Yii::t('app', 'Fetal chest diameter:') ?>
                        <?= $result['fetusChestDiameter'] ?> <?= Yii::t('app', 'cm') ?>
                    <?php endif; ?>


                </span>


    </div>

</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>




<?php

?>




