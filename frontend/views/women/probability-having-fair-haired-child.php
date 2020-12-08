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

                <div class="form-left-title"><?= Yii::t('app', 'Mother\'s hair colour:') ?></div>

                <select id="cycle-length-from" name="mother-hair-color" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['motherHairColor']) {
                                if ($i == $getParams['motherHairColor'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        >
                            <?php if ($i == 1): ?>
                                <?= Yii::t('app', 'Dark heterozygous') ?> Аа
                            <?php elseif ($i == 2): ?>
                                <?= Yii::t('app', 'Dark homozygous') ?> АA
                            <?php else: ?>
                                <?= Yii::t('app', 'Light') ?> aa
                            <?php endif ?>
                        </option>
                    <?php endfor; ?>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Father\'s hair colour:') ?></div>

                <select id="cycle-length-from" name="father-hair-color" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['fatherHairColor']) {
                                if ($i == $getParams['fatherHairColor'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        >
                            <?php if ($i == 1): ?>
                                <?= Yii::t('app', 'Dark heterozygous') ?> Аа
                            <?php elseif ($i == 2): ?>
                                <?= Yii::t('app', 'Dark homozygous') ?> АA
                            <?php else: ?>
                                <?= Yii::t('app', 'Light') ?> aa
                            <?php endif ?>
                        </option>
                    <?php endfor; ?>

                </select>

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

                    <?= Yii::t('app', 'The probability of having a fair-haired baby:') ?> <?= $result['fairHairedChild'][2] ?> %<br>



            </span>

    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>










<?php

?>




