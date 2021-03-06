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

                <div class="form-choose-date-text-1"
                     id="form-radio-choose-text-one">
                    <?= Yii::t('app', 'Choose a week of pregnancy:') ?>
                </div>

                <select name="pregnancy-week" class="form-control select-extended">

                    <?php for ($i = 1; $i <= 40; $i++): ?>
                        <option value="<?= $i ?>"
                            <?php if ($getParams['pregnancyWeek']) {
                                if ($i == $getParams['pregnancyWeek'])
                                    echo 'selected="selected"';
                            } elseif ($i == 1) {
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?= $i ?>
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


<div class="<?php if (($result['viewResult']) or Yii::$app->params['embed']): ?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

            <span class="form-result">

                <?= Yii::t('app', 'Result') ?>

            </span>


    <br><br>

    <div class="result-div-text">
            <span class="result-pre-text">
                <?= Yii::t('app', 'Your gestational age:') ?>
                <br>
            </span>

        <span class="result-main-text">

                <?= Yii::t('app', '{n,plural, one{# week} few{# weeks} other{# weeks}}', ['n' => $getParams['pregnancyWeek']]) ?>

           </span>
    </div>


    <div class="result-div-text">

            <span class="result-pre-text">
                <?= Yii::t('app', 'Estimated due date:'); ?><br>
            </span>


        <span class="result-main-text">

                    <?= $result['dueDate']; ?>
            </span>

    </div>

</div>


<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>





<?php

?>




