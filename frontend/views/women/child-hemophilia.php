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

                <div class="form-left-title"><?= Yii::t('app', 'Mother:') ?></div>

                <select id="cycle-length-from" name="mother-hemophilia" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 2; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['motherHemophilia']) {
                                if ($i == $getParams['motherHemophilia'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        >
                            <?php if ($i == 1) :?>
                            <?= Yii::t('app','No hemophilia')?>
                            <?php endif; ?>

                            <?php if ($i == 2) :?>
                                <?= Yii::t('app','Hemophilia is present')?>
                            <?php endif; ?>

                        </option>
                    <?php endfor; ?>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Dad:') ?></div>

                <select id="cycle-length-from" name="father-hemophilia" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 2; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['fatherHemophilia']) {
                                if ($i == $getParams['fatherHemophilia'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        >
                            <?php if ($i == 1) :?>
                                <?= Yii::t('app','No hemophilia')?>
                            <?php endif; ?>

                            <?php if ($i == 2) :?>
                                <?= Yii::t('app','Hemophilia is present')?>
                            <?php endif; ?>
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
                <?= Yii::t('app', 'Probability table for hemophilia in a child:') ?> <br><br>

                <?= Yii::t('app', 'Girls:') ?><br>
                <?= Yii::t('app', 'No hemophilia') ?> - <?= $result['childHemophilia'][1][1] ?> %<br>
                <?= Yii::t('app', 'Hemophilia is present') ?> - <?= $result['childHemophilia'][1][2] ?> %<br>
                <?= Yii::t('app', 'Carrier') ?> - <?= $result['childHemophilia'][1][3] ?> %<br>

                <?= Yii::t('app', 'Boys:') ?><br>
                <?= Yii::t('app', 'No hemophilia') ?> - <?= $result['childHemophilia'][2][1] ?> %<br>
                <?= Yii::t('app', 'Hemophilia is present') ?> - <?= $result['childHemophilia'][2][2] ?> %<br>


            </span>


    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>










<?php

?>




