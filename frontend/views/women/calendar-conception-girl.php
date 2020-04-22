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


        <div class="col-xs-12 col-sm-6 align-mid">

            <div class="form-element-title">
                <?= Yii::t('app', 'Menstrual cycle duration:') ?>
            </div>

            <select id="cycle-length-from" name="cycle-length" class="form-control select-extended">

                <?php for ($i = 21; $i <= 40; $i++): ?>
                    <option value="<?= $i ?>"
                        <?php if ($getParams['cycleLength']) {
                            if ($i == $getParams['cycleLength'])
                                echo 'selected="selected"';
                        } elseif ($i == 28) {
                            echo 'selected="selected"';
                        }
                        ?>
                    ><?= Yii::t('app', '{n,plural, one{# day} few{# days} other{# days}}', ['n' => $i]) ?>
                    </option>
                <?php endfor; ?>

            </select>

            <div class="form-element-title">
                <?= Yii::t('app', 'Menstruation duration:') ?>
            </div>

            <select id="menstrual-length" name="menstrual-length" class="form-control select-extended">

                <?php for ($i = 3; $i <= 7; $i++): ?>
                    <option value="<?= $i ?>"
                        <?php if ($getParams['menstrualLength']) {
                            if ($i == $getParams['menstrualLength'])
                                echo 'selected="selected"';
                        } elseif ($i == 5) {
                            echo 'selected="selected"';
                        }
                        ?>
                    ><?= Yii::t('app', '{n,plural, one{# day} few{# days} other{# days}}', ['n' => $i]) ?>
                    </option>
                <?php endfor; ?>

            </select>

        </div>


        <div class="col-xs-12 col-sm-6 align-mid">
            <hr class="form-hr-xs-block">

            <div class="form-choose-date-text-1"
                 id="form-radio-choose-text-one">
                <?= Yii::t('app', 'Select the first day of your last period:') ?>
            </div>
            <div class="form-choose-date-text-2"
                 id="form-radio-choose-text-two">
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

            <input class="btn btn-success form-button" type="submit"
                   value="<?= Yii::t('app', 'Calculate conception') ?>"
                   id="button_calc">
            <?= $this->render('/partials/embed/_embed-label-link.php'); ?>
        </div>
        <?php if (!Yii::$app->params['embed']):?>
            <br>
        <?php endif;?>

    </form>

</div>

<?= $this->render('/partials/embed/_embed-link-to-embed.php'); ?>

<?= $this->render('/partials/share-social/_share-social.php'); ?>

<div class="calendar-center">
    <?php
    $countMonths = 0;
    $countWeeks = 0;
    foreach ($result['calendar'] as $months) :?>
        <?php $countMonths++; ?>
        <div class="calendar-one-month">
            <div class="col-xs-12 calendar-month-name">
                <span>

                    <?= $result['nameOfMonthsInYear'][$countMonths]; ?>

                </span>
            </div>
            <div>


                <div class="calendar-days-name">
                    <?php for ($i = 1; $i <= 7; $i++): ?>
                        <div class="col-xs-12 calendar-one-day-name">
                    <span>

                        <?= $result['nameOfDaysInWeek'][$i] ?>

                    </span>
                        </div>
                    <?php endfor; ?>
                </div>

                <?php foreach ($months as $week): ?>
                    <div class="calendar-one-week">

                        <?php for ($i = 1; $i <= 7; $i++): ?>

                            <?php if (isset($week[$i])): ?>

                                <?php if ($week[$i]['menstruationDay'] == 1): ?>
                                    <div class="col-xs-12 calendar-one-day menstruation-day"
                                         data-title="<?= Yii::t('app', 'Menstruation') ?>">
                                <span>
                                     <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>
                                <?php if (($week[$i]['ovulationDay'] == 1) && ($week[$i]['menstruationDay'] == 0)): ?>
                                    <div class="col-xs-12 conception-girl-day"
                                         data-title="<?= Yii::t('app', 'Favorable days for conception of a girl') ?>">
                                <span>
                                    <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>
                                <?php if (($week[$i]['ovulationDay'] == 2) && ($week[$i]['menstruationDay'] == 0)): ?>
                                    <div class="col-xs-12 calendar-one-day ovulation-middle-day"
                                         data-title="<?= Yii::t('app', 'Ovulation') ?>">
                                <span>
                                    <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>
                                <?php if (($week[$i]['ovulationDay'] == 3) && ($week[$i]['menstruationDay'] == 0)): ?>
                                    <div class="col-xs-12 calendar-one-day ovulation-day"
                                         data-title="<?= Yii::t('app', 'Favorable days for conception') ?>">
                                <span>
                                    <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>
                                <?php if (($week[$i]['ovulationDay'] == 0) && ($week[$i]['menstruationDay'] == 0) && ($week[$i]['conceptionNegativeDay'] == 1)): ?>
                                    <div class="col-xs-12 calendar-one-day conception-negative-day"
                                         data-title="<?= Yii::t('app', 'Unfavorable days for conception') ?>">
                                <span>
                                    <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>
                                <?php if (($week[$i]['ovulationDay'] == 0) && ($week[$i]['menstruationDay'] == 0) && ($week[$i]['conceptionNegativeDay'] == 2)): ?>
                                    <div class="col-xs-12 calendar-one-day conception-negative-day"
                                         data-title="<?= Yii::t('app', 'Unfavorable days for conception') ?>">
                                <span>
                                    <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>
                                <?php if (($week[$i]['ovulationDay'] == 0) && ($week[$i]['menstruationDay'] == 0) && ($week[$i]['conceptionNegativeDay'] == 0)): ?>
                                    <div class="col-xs-12 calendar-one-day">
                                <span>
                                    <?= $week[$i]['dayInMonth']; ?>
                                </span>
                                    </div>
                                <?php endif; ?>

                            <?php else: ?>
                                <div class="col-xs-12 calendar-one-day">
                            <span>

                            </span>
                                </div>
                            <?php endif; ?>


                        <?php endfor; ?>

                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    <?php endforeach; ?>

</div>

<div class="legend-center">

    <div class="calendar-legend">
        <div class="calendar-legend-image menstruation-day-legend">

        </div>
        <div class="calendar-legend-text">
            <?= Yii::t('app', 'Menstruation') ?>
        </div>

    </div>
    <div class="calendar-legend">
        <div class="calendar-legend-image ovulation-day-legend">

        </div>

        <div class="calendar-legend-text">
            <?= Yii::t('app', 'Favorable days for conception') ?>
        </div>
    </div>
    <div class="calendar-legend">
        <div class="calendar-legend-image conception-girl-day-legend">

        </div>
        <div class="calendar-legend-text">
            <?= Yii::t('app', 'Favorable days for conception of a girl') ?>
        </div>
    </div>
    <div class="calendar-legend">
        <div class="calendar-legend-image ovulation-middle-day-legend">

        </div>
        <div class="calendar-legend-text">
            <?= Yii::t('app', 'Ovulation') ?>
        </div>
    </div>
    <div class="calendar-legend">
        <div class="calendar-legend-image conception-negative-day-legend">

        </div>
        <div class="calendar-legend-text">
            <?= Yii::t('app', 'Unfavorable days for conception') ?>
        </div>


    </div>
</div>

<br>









