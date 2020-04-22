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

                <div class="form-left-title"><?= Yii::t('app', 'Age in years:') ?></div>

                <select id="cycle-length-from" name="child-age" class="form-control select-extended">

                    <?php
                    $array = [

                        1 => Yii::t('app', '3-4 days'),
                        2 => Yii::t('app', '1 week'),
                        3 => Yii::t('app', '2 weeks'),
                        4 => Yii::t('app', '1 month'),
                        5 => Yii::t('app', '2 months'),
                        6 => Yii::t('app', '3 months'),
                        7 => Yii::t('app', '4 months'),
                        8 => Yii::t('app', '5 months'),
                        9 => Yii::t('app', '6 months'),
                        10 => Yii::t('app', '7 months'),
                        11 => Yii::t('app', '8 months'),
                        12 => Yii::t('app', '9 months'),
                        13 => Yii::t('app', '10 months'),
                        14 => Yii::t('app', '11 months'),
                        15 => Yii::t('app', '12 months'),

                    ];

                    ?>

                    <?php for ($i = 1; $i <= 15; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if (isset($getParams['childAge'])) {
                                if ($i == $getParams['childAge'])
                                    echo 'selected="selected"';
                            } elseif (isset($getSpecify)){
                                if ($i == $getSpecify)
                                    echo 'selected="selected"';
                            }
                            elseif ($i == 0) {
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?= $array[$i]; ?>
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
        <?php if (!Yii::$app->params['embed']): ?>
            <br>
        <?php endif; ?>
    </form>

</div>


<div class="<?php if (($result['viewResult'] <> 0) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

        <span class="form-result">
            <?= Yii::t('app', 'Result') ?>
        </span>

    <br><br>
    <div class="result-div-text">
        <span class="result-pre-text">
            <?php if (isset($result['childFood'])): ?>
                <?= Yii::t('app', 'Amount of mixture / milk for 1 feeding (milliliters):') ?>
                <?= $result['childFood'][0] ?> <br>
                <?= Yii::t('app', 'Amount of mixture / milk per day (milliliters):') ?>
                <?= $result['childFood'][1] ?>

            <br><br>
            <?php endif;?>
        </span>


    </div>
</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>






<?php

?>




