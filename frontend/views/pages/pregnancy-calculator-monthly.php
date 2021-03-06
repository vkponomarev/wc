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

Калькулятор беременности по неделям

*/
use kartik\date\DatePicker;

?>



    <div class="form-left">

        <?=$this->render('/partials/embed/_embed-label-link.php');?>

        <form action="./<?php if (!Yii::$app->params['embed']):?>#result<?php endif;?>">

            <?=$this->render('/partials/embed/_embed-hidden-input.php');?>


            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-left-title"><?=Yii::t('app','Pregnancy calculation method:')?></div>

                <div>
                    <label class="form-left-label" id="form-label-id-one">
                            <span class="form-radio">
                                <?php if ($pregnancyCalculation['pregnancyCalculationMethod'] == 1):?>
                                    <input type="radio" name="method" value="1" checked="checked" class="">
                                <?php elseif (!$pregnancyCalculation['pregnancyCalculationMethod']): ?>
                                    <input type="radio" name="method" value="1" checked="checked" class="">
                                <?php else: ?>
                                    <input type="radio" name="method" value="1" class="">
                                <?php endif; ?>

                            </span>
                        <span class="form-radio"><?=Yii::t('app','By date of last period')?></span>
                    </label>

                    <br>

                    <label class="form-left-label" id="form-label-id-two">
                            <span class="form-radio">

                                <?php if ($pregnancyCalculation['pregnancyCalculationMethod'] == 2): ?>
                                    <input type="radio" name="method" checked="checked" value="2">
                                <?php else: ?>
                                    <input type="radio" name="method" value="2">
                                <?php endif ?>

                            </span>

                        <span class="form-radio"><?=Yii::t('app','By date of conception')?></span>
                    </label>

                </div>

            </div>


            <div class="col-xs-12 col-sm-6 align-mid">
                <hr class="form-hr-xs-block">

                <div class="form-choose-date-text-1"
                     id="form-radio-choose-text-one">
                    <?=Yii::t('app','Select the first day of your last period:')?>
                </div>
                <div class="form-choose-date-text-2"
                     id="form-radio-choose-text-two">
                    <?=Yii::t('app','Select the date of conception:')?>
                </div>

                <?= $this->render('/partials/date-picker/_standard-date-picker.php')?>

            </div>


            <div class="clearfix"></div>
            <div class="form-ad col-12">
                <a name="result"></a>

                <?= $this->render('/partials/ads/_ads_5')
                        ?>



            </div>
            <br>

            <div class="form-button-div" >

                <input class="btn btn-success form-button" type="submit" value="<?=Yii::t('app','Calculate pregnancy')?>"
                       id="button_calc">

            </div>
            <br>

        </form>

    </div>


    <div class="<?php if (($pregnancyCalculation['pregnancyCalculationDivShow']) or Yii::$app->params['embed']):?>result-div-on<?php else: ?>result-div-off<?php endif ?>">

            <span class="form-result">

                <?=Yii::t('app','Result')?>

            </span>


        <br><br>

        <div class="result-div-text">
                <span class="result-pre-text">
                    <?=Yii::t('app','Your gestational age:')?>
                    <br>
                </span>
            <span class="result-main-text">


                    <?php if ($pregnancyCalculation['pregnancyCalculationExceptionMonth'] == 'echoPlanning'): ?>

                        <?=Yii::t('app','You are planning a pregnancy')?>

                    <?php endif ?>

                <?php if ($pregnancyCalculation['pregnancyCalculationExceptionMonth'] == 'echoHaveBaby'): ?>

                        <?=Yii::t('app','You have already given birth to a baby')?>

                <?php endif ?>

                <?php if ($pregnancyCalculation['pregnancyCalculationExceptionMonth'] == 'echoMonths'): ?>

                   <?= Yii::t('app', '{n,plural, one{# month} few{# months} other{# months}}', ['n' => $pregnancyCalculation['pregnancyMonths']]) ?>

                <?php endif ?>

                </span>
        </div>


        <div class="result-div-text">

                <span class="result-pre-text">
                    <?=Yii::t('app','Estimated due date:')?><br>
                </span>


            <span class="result-main-text">
                    <?= $pregnancyCalculation['dueDate']; ?>
                </span>

        </div>

    </div>

    <?=$this->render('/partials/embed/_embed-link-to-embed.php');?>

    <?=$this->render('/partials/share-social/_share-social.php');?>

    <div class="calendar-center">
        <?php
        $countMonthsForName = 0;
        //echo $countMonths . '<br>';
        $countMonths = $pregnancyCalendar['startMonth'];
        //echo  $pregnancyCalendar['startMonth'];
        foreach ($pregnancyCalendar['calendar'] as $months) :?>
            <?php $countMonthsForName ++;?>

            <?php if ($countMonths==13){
                $countMonths=1;
            }
            ?>

            <div class="calendar-one-month">
                <div class="col-xs-12 calendar-month-name">
                <span class="fa fa-calendar calendar-month-icon">
                </span>
                    <span>

                    <?=$allCalendarsData['nameOfMonthsInYear'][$countMonthsForName];?>

                </span>
                </div>
                <div>


                    <div class="calendar-days-name">
                        <?php for($i=1;$i<=7;$i++): ?>
                            <div class="col-xs-12 calendar-one-day-name">
                    <span>

                        <?=$allCalendarsData['nameOfDaysInWeek'][$i]?>

                    </span>
                            </div>
                        <?php endfor;?>
                    </div>
                    <?php $countWeeks = 0;?>
                    <?php foreach ($months as $week):?>
                        <?php $countWeeks ++;?>
                        <?php $countWeekDay = 0;?>

                        <?php $findFirstWeekDay = 0;?>
                        <div class="calendar-one-week">

                            <?php for ($i = 1; $i <= 7; $i++):?>

                                <?php if (isset($week[$i])):?>

                                    <?php $countWeekDay ++;?>
                                    <?php if (($week[$i]['monthOfPregnancy1'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)

                                    ):?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-odd" data-title="1 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>

                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy2'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-even" data-title="2 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy3'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-odd" data-title="3 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy4'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-even" data-title="4 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy5'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-odd" data-title="5 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy6'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-even" data-title="6 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy7'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-odd" data-title="7 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy8'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-even" data-title="8 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['monthOfPregnancy9'] == 1)
                                        &&($week[$i]['todayDate']<>1)
                                        &&($week[$i]['trimesterTwo']<>1)
                                        &&($week[$i]['trimesterThree']<>1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-day-odd" data-title="9 <?=Yii::t('app','month of pregnancy')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif (($week[$i]['todayDate']==1)
                                        &&($week[$i]['dueDate']<>1)
                                    ): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-today-day" data-title="<?=Yii::t('app','Present day')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif ($week[$i]['trimesterTwo']==1): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-trimester-two-day" data-title="<?=Yii::t('app','Start of the second trimester')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif ($week[$i]['trimesterThree']==1): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-trimester-three-day" data-title="<?=Yii::t('app','Start of the third trimester')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php elseif ($week[$i]['dueDate']==1): ?>
                                        <div class="col-xs-12 calendar-one-day pregnancy-due-date" data-title="<?=Yii::t('app','Estimated due date')?>">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php else: ?>

                                        <div class="col-xs-12 calendar-one-day ">
                                <span>
                                     <?=$week[$i]['dayInMonth'];?>
                                </span>
                                        </div>
                                    <?php endif ?>

                                <?php else: ?>

                                    <div class="col-xs-12 calendar-one-day  not-this-month-day">
                            <span>

                            </span>
                                    </div>
                                <?php endif;?>



                            <?php endfor;?>

                        </div>




                    <?php endforeach; ?>
                </div>

            </div>
            <?php $countMonths ++;?>
        <?php endforeach; ?>

    </div>

    <div class="legend-center">

        <div class="calendar-legend">
            <div class="calendar-legend-image today-day-legend">

            </div>
            <div class="calendar-legend-text">
                <?=Yii::t('app','Present day')?>
            </div>

        </div>
        <div class="calendar-legend">
            <div class="calendar-legend-image second-trimester-day-legend">

            </div>

            <div class="calendar-legend-text">
                <?=Yii::t('app','Start of the second trimester')?>
            </div>
        </div>
        <div class="calendar-legend">
            <div class="calendar-legend-image third-trimester-day-legend">

            </div>
            <div class="calendar-legend-text">
                <?=Yii::t('app','Start of the third trimester')?>
            </div>
        </div>

        <div class="calendar-legend">
            <div class="calendar-legend-image due-date-day-legend">

            </div>
            <div class="calendar-legend-text">
                <?=Yii::t('app','Estimated due date')?>
            </div>
        </div>

    </div>





<script>
    document.getElementById('form-label-id-one').onclick = function () {

        document.getElementById('form-radio-choose-text-one').style.display = 'block';
        document.getElementById('form-radio-choose-text-two').style.display = 'none';
    };
    document.getElementById('form-label-id-two').onclick = function () {

        document.getElementById('form-radio-choose-text-one').style.display = 'none';
        document.getElementById('form-radio-choose-text-two').style.display = 'block';
    };

</script>

<?php
/*
*/
?>




