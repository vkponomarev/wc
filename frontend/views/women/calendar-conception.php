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
                            $ovulationCalculationCycleLength = $getParams['cycleLength'];
                        } elseif ($i == 28) {
                            echo 'selected="selected"';
                            $ovulationCalculationCycleLength = 28;
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
                            $ovulationCalculationMenstrualLength = $getParams['menstrualLength'];
                        } elseif ($i == 5) {
                            echo 'selected="selected"';
                            $ovulationCalculationMenstrualLength = 5;
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

<?php

echo $this->render('/partials/calendar/_calendar-conception.php', [
    'conceptionCalendar' => $result['calendar'],
    'allCalendarsData' => [
            'nameOfMonthsInYear' => $result['nameOfMonthsInYear'],
            'nameOfDaysInWeek' => $result['nameOfDaysInWeek'],
    ],
]);
?>

<br>














<?php


//\common\models\components\WomanCalendars::thisMonthCalendarView();
//\common\models\components\WomanCalendars::thisYearCalendarView();
//\common\models\components\WomanCalendars::ovulationCalendarView(
/*       $ovulationCalculationData['ovulationCalculationMenstrualLength'],
      // $ovulationCalculationData['ovulationCalculationYellowBody'],
       $ovulationCalculationData['ovulationCalculationCycleLength'],
       $ovulationCalculationData['ovulationCalculationDate']
   );*/

?>









