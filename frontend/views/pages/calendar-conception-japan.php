<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.08.19
 * Time: 16:24
 */


/*

Каледнарь беременности

*/
use kartik\date\DatePicker;

?>





    <div class="form-left">

        <?=$this->render('/partials/embed/_embed-label-link.php');?>

        <form action="./<?php if (!Yii::$app->params['embed']):?>#result<?php endif;?>">

            <?=$this->render('/partials/embed/_embed-hidden-input.php');?>

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-element-title">
                    <?=Yii::t('app','Choose mom\'s month of birth:')?>
                </div>

                <select id="cycle-length-from" name="mother-birth" class="form-control select-extended">

                    <?php for ($i=1;$i<=12;$i++):?>
                        <option value="<?=$i?>"
                            <?php if ($conceptionJapanCalendarData['japanCalendarCalculationMothersMonthBirth']){
                                if ($i==$conceptionJapanCalendarData['japanCalendarCalculationMothersMonthBirth'])
                                    echo 'selected="selected"';
                            } elseif ($i==6){
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?=$i?>
                        </option>
                    <?php endfor;?>

                </select>

                <div class="form-element-title">
                    <?=Yii::t('app','Choose dad\'s month of birth:')?>
                </div>

                <select id="cycle-length-from" name="father-birth" class="form-control select-extended">

                    <?php for ($i=1;$i<=12;$i++):?>
                        <option value="<?=$i?>"
                            <?php
                            if ($conceptionJapanCalendarData['japanCalendarCalculationFathersMonthBirth']){
                                if ($i==$conceptionJapanCalendarData['japanCalendarCalculationFathersMonthBirth'])
                                    echo 'selected="selected"';
                            } elseif ($i==6){
                                echo 'selected="selected"';
                            }
                            ?>
                        ><?=$i?>
                        </option>
                    <?php endfor;?>

                </select>


            </div>


            <div class="col-xs-12 col-sm-6 align-mid">
                <hr class="form-hr-xs-block">

                <div class="form-choose-date-text-1"
                     id="form-radio-choose-text-one">
                    <?=Yii::t('app','Select a calendar start date:')?>
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

                <input class="btn btn-success form-button" type="submit" value="<?=Yii::t('app','Calculate conception')?>"
                       id="button_calc">

            </div>
            <br>

        </form>

    </div>

    <?=$this->render('/partials/embed/_embed-link-to-embed.php');?>

    <?=$this->render('/partials/share-social/_share-social.php');?>

    <div class="calendar-center">
        <?php
        $countMonths = 0;
        $countWeeks = 0;
        foreach ($conceptionJapanCalendar as $months) :?>
            <?php $countMonths ++;?>
            <div class="calendar-chinese-one-month">
                <div class="col-xs-12 calendar-month-name">
                <span class="fa fa-calendar calendar-month-icon">
                </span><span>

                    <?=$allCalendarsData['nameOfMonthsInYear'][$countMonths];?>

                </span>
                </div>
                <div>
                    <?php if ($months=='g'):?>
                        <div class="col-xs-12 calendar-month-name">
                <span>

                <img src="/files/baby-girl-icon.png" width="100" />

                </span>
                        </div>
                    <?php else:?>
                        <div class="col-xs-12 calendar-month-name">
                <span>

                    <img src="/files/baby-boy-icon.png" width="100" />


                </span>
                        </div>
                    <?php endif;?>
                </div>

            </div>
        <?php endforeach; ?>

    </div>








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









