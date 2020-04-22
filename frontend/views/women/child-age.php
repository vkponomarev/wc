<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.08.19
 * Time: 16:24
 */




?>


<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']): ?>#result<?php endif; ?>">

        <?= $this->render('/partials/embed/_embed-hidden-input.php'); ?>
        <?= $this->render('/partials/embed/_embed-title'); ?>

        <div class="form-content">
            <div class="col-xs-12 col-sm-6 align-mid">

                <input type="hidden" name="method" value="1">

                <div class="form-choose-date-text-1"
                     id="form-radio-choose-text-one">
                    <?= Yii::t('app', 'Choose your baby’s birthday:') ?>
                </div>

                <?= $this->render('/partials/date-picker/_standard-date-picker.php') ?>

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
                       value="<?= Yii::t('app', 'Calculate') ?>"
                       id="button_calc">
                <?= $this->render('/partials/embed/_embed-label-link.php'); ?>
            </div>


        </div>

        <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>
    </form>

</div>


<div class="<?php if (($result['viewResult']) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

            <span class="form-result">

                <?= Yii::t('app', 'Result') ?>

            </span>


    <br><br>

    <div class="result-div-text">

        <span class="result-text">

                    <?php if (isset($result['childAge'])): ?>

                        <?= Yii::t('app', 'Child age:') ?>

                        <?= Yii::t('app', '{n,plural, one{# year} few{# years} other{# year}}', ['n' => $result['childAge'][1]]) ?>
                        <?= Yii::t('app', '{n,plural, one{# month} few{# months} other{# months}}', ['n' => $result['childAge'][2]]) ?>
                        <?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $result['childAge'][3]]) ?>
                        <?= Yii::t('app', '{n,plural, one{# hour} few{# hours} other{# hours}}', ['n' => $result['childAge'][4]]) ?>
                        <?= Yii::t('app', '{n,plural, one{# minute} few{# minutes} other{# minutes}}', ['n' => $result['childAge'][5]]) ?>
                        <?= Yii::t('app', '{n,plural, one{# second} few{# seconds} other{# seconds}}', ['n' => $result['childAge'][6]]) ?>

                    <?php endif ?>

                </span>
    </div>


</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>





<?php

?>




