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

                <div class="form-element-title">
                    <?= Yii::t('app', 'Embryo Length (3 to 84 mm):') ?>
                </div>

                <input id="cycle-length-from" name="fetal-length" class="form-control select-extended" type="text"
                       size="40"
                       value="<?php if ($getParams['fetalLength']): ?><?= $getParams['fetalLength'] ?><?php else: ?>30<?php endif ?>">


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
                <?= Yii::t('app', 'Gestational age by Smith:') ?>

                <?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $result['pregnancyWeek']['smith'][0]]) ?>
                <?= Yii::t('app', '{n,plural, one{# day} few{# days} other{# days}}', ['n' => $result['pregnancyWeek']['smith'][1]]) ?>
                <br>
                <?= Yii::t('app', 'Gestational age by Visser:') ?>

                <?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $result['pregnancyWeek']['wisser'][0]]) ?>
                <?= Yii::t('app', '{n,plural, one{# day} few{# days} other{# days}}', ['n' => $result['pregnancyWeek']['wisser'][1]]) ?>

                <br>
            </span>

    </div>

</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>





<?php

?>




