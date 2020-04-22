<?php

namespace common\components\womenPages\calculation;


use Yii;
use yii\web\NotFoundHttpException;





class PregnancyCalculationByFetalMovement
{


    public function pregnancyCalculationByFetalMovement($pregnancyCalculationMethod, $pregnancyCalculationDate){



        if ($pregnancyCalculationMethod==3){

            $daysToDueDate = 140;

        } else {

            $daysToDueDate = 154;

        }

        if (!$pregnancyCalculationMethod){

            $pregnancyCalculationDivShow = false;

        }else{

            $pregnancyCalculationDivShow = true;

        }


        $pregnancyCalculationDateInverse = implode('-', array_reverse(explode('-', $pregnancyCalculationDate)));
        $dueDate = new \DateTime($pregnancyCalculationDateInverse);
        $dueDate->add(new \DateInterval('P' . $daysToDueDate . 'D'));

        $todayDate = new \DateTime();
        $pregnancyWeeks = 0;
        $pregnancyDays = 0;
        $pregnancyBeginDate = new \DateTime($pregnancyCalculationDateInverse);
        $differenceBetweenTodayAndChosenDay = $pregnancyBeginDate->diff($todayDate);
        $differenceBetweenTodayAndChosenDay = $differenceBetweenTodayAndChosenDay->format("%a");
        $pregnancyDays =  $daysToDueDate;
        //echo $pregnancyWeeks . '<br>';
        //echo $pregnancyDays . '<br>';
        $pregnancyCalculationDate = new \DateTime($pregnancyCalculationDateInverse);

        $pregnancyCalculationException = 'echoWeeks';

        if ($todayDate->format('Y-m-d') <= $pregnancyCalculationDate->format('Y-m-d')) {

            //echo 'Сегодняшняя дата меньше чем выбранная';
            if ($pregnancyCalculationMethod == 3) {

                if ($differenceBetweenTodayAndChosenDay >= 0 && $differenceBetweenTodayAndChosenDay < 140) {
                    $pregnancyDays-=$differenceBetweenTodayAndChosenDay;
                    $pregnancyCalculationException = 'echoWeeks';

                } else{

                    $pregnancyCalculationException = 'echoPlanning';

                }

            } else {

                //echo $pregnancyDays;

                if ($differenceBetweenTodayAndChosenDay >= 0 && $differenceBetweenTodayAndChosenDay < 154) {

                    $pregnancyDays-=$differenceBetweenTodayAndChosenDay;
                    $pregnancyCalculationException = 'echoWeeks';

                } else {
                    $pregnancyCalculationException = 'echoPlanning';
                }

            }

        } else {

            if ($pregnancyCalculationMethod == 3) {

                if ($differenceBetweenTodayAndChosenDay >= 0 && $differenceBetweenTodayAndChosenDay < 140) {
                    $pregnancyDays+=$differenceBetweenTodayAndChosenDay;
                    $pregnancyCalculationException = 'echoWeeks';

                } else{

                    $pregnancyCalculationException = 'echoHaveBaby';

                }

            } else {

                //echo $pregnancyDays;

                if ($differenceBetweenTodayAndChosenDay >= 0 && $differenceBetweenTodayAndChosenDay < 154) {

                    $pregnancyDays+=$differenceBetweenTodayAndChosenDay;
                    $pregnancyCalculationException = 'echoWeeks';

                } else {

                    $pregnancyCalculationException = 'echoHaveBaby';
                }

            }

        }



        $pregnancyWeeks = $pregnancyDays / 7;
        if ($pregnancyCalculationMethod == 3) {

            $pregnancyWeeks = ceil($pregnancyWeeks) ;

        } else {

            $pregnancyWeeks = ceil($pregnancyWeeks);

        }
        /*
        echo 'Дней беременности ' . $pregnancyDays . '<br>';
        echo  'недель беременности ' . $pregnancyWeeks . '<br>';
        echo  'разница беременности ' . $differenceBetweenTodayAndChosenDay . '<br>';
        echo  'дней до рождения ' .  $daysToDueDate . '<br>';
        */
        return [

            'dueDate' => Yii::$app->formatter->asDate($dueDate->format('Y-m-d'),'long'),
            'pregnancyWeeks' => $pregnancyWeeks,
            'pregnancyCalculationException' => $pregnancyCalculationException,
            'pregnancyCalculationDivShow' => $pregnancyCalculationDivShow,
            'pregnancyCalculationMethod' => $pregnancyCalculationMethod,

        ];
    }

}
