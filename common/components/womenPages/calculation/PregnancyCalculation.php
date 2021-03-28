<?php

namespace common\components\womenPages\calculation;


use Yii;
use yii\web\NotFoundHttpException;





class PregnancyCalculation
{


    public function pregnancyCalculation($pregnancyCalculationMethod,$pregnancyCalculationDate)
    {

        if ($pregnancyCalculationMethod == 1) {

            $daysToDueDate = 280;

        } elseif ($pregnancyCalculationMethod == 2) {

            $daysToDueDate = 266;

        } elseif ($pregnancyCalculationMethod == 3) {

            $daysToDueDate = 140;

        } else {

            $daysToDueDate = 154;

        }

        if (!$pregnancyCalculationMethod) {

            $pregnancyCalculationDivShow = false;
            $daysToDueDate = 280;

        } else {

            $pregnancyCalculationDivShow = true;

        }


        $pregnancyCalculationDateInverse = implode('-', array_reverse(explode('-', $pregnancyCalculationDate)));
        $dueDate = new \DateTime($pregnancyCalculationDateInverse);
        $dueDate->add(new \DateInterval('P' . $daysToDueDate . 'D'));


        $todayDate = new \DateTime();
        $now = time();
        $pregnancyBeginDate = new \DateTime($pregnancyCalculationDateInverse);
        $pregnancyCalculationException = 'echoWeeks';
        $pregnancyWeeks = 0;


        if ($pregnancyCalculationMethod == 1) {

            $pregnancyCalculationStartDate = new \DateTime($pregnancyCalculationDateInverse);
            //echo 'Выбранная дата ' . $pregnancyCalculationStartDate->format('Y-m-d') . '<br>';

            $datediff = $now - strtotime($pregnancyCalculationStartDate->format('Y-m-d'));
            $datediff = ($datediff / (60 * 60 * 24));
            //echo 'в днях между сейчас и выбранной датой ' . $datediff . '<br>';

            if ($datediff < 0) {
                // Если мы указали будущую дату завтра допустим или еще дальше то мы планируем беременность
                $pregnancyCalculationException = 'echoPlanning';

            } else {
                // Если мы указали дату предидущего дня или неделей ранее или месяцем ранее то считаем сколько дней и недель беременность.
                $pregnancyDaysMethodOne = ceil($datediff);
                //echo 'в днях между сейчас и выбранной датой округлено ' . $pregnancyDaysMethodOne . '<br>';
                //echo 'Количество недель ' . ($pregnancyDaysMethodOne / 7) . '<br>';
                $pregnancyWeeksMethodOne = ceil($pregnancyDaysMethodOne / 7);
                //echo 'Количество целых недель ' . $pregnancyWeeksMethodOne . '<br>';
                $pregnancyWeeks = $pregnancyWeeksMethodOne;
                //echo 'Количество целых недель ' . $pregnancyWeeks . '<br>';

                if ($pregnancyWeeks > 40) {
                    $pregnancyCalculationException = 'echoHaveBaby';
                }

            }

        }

        if ($pregnancyCalculationMethod == 2) {

            $pregnancyDaysMethodTwo = 14;

            $pregnancyCalculationStartDate = new \DateTime($pregnancyCalculationDateInverse);
            //echo 'Выбранная дата ' . $pregnancyCalculationStartDate->format('Y-m-d') . '<br>';

            $datediff = $now - strtotime($pregnancyCalculationStartDate->format('Y-m-d'));
            $datediff = ($datediff / (60 * 60 * 24));
            //echo 'в днях между сейчас и выбранной датой ' . $datediff . '<br>';

            if ($datediff < 0) {
                // Если мы указали будущую дату завтра допустим или еще дальше то
                // у нас есть 2 недели запас то есть в методе 2 беременность отсчитывается
                // + 2 недели к выбранной дате зачатия

                $datediff = abs($datediff);
                //echo 'разница преобразованная в положительное число  ' . $datediff . '<br>';
                $datediff = ceil($datediff);
                //echo 'Количество дней разницы  ' . $datediff . '<br>';


                if ($datediff > 14) {

                    $pregnancyCalculationException = 'echoPlanning';

                } else {

                    $pregnancyDaysMethodTwo = $pregnancyDaysMethodTwo - $datediff;
                    //echo 'Срок беременности  ' . $pregnancyDaysMethodTwo . '<br>';
                    $pregnancyWeeksMethodTwo = ceil($pregnancyDaysMethodTwo / 7);
                    //echo 'Срок беременности недель  ' . $pregnancyWeeksMethodTwo . '<br>';
                    $pregnancyWeeks = $pregnancyWeeksMethodTwo;
                    if ($pregnancyWeeks > 40) {
                        $pregnancyCalculationException = 'echoHaveBaby';
                    }
                }

            } else {
                // Если мы указали дату предыдущего дня или неделей ранее или месяцем ранее то считаем сколько дней и недель беременность.
                $pregnancyDaysMethodTwo = $pregnancyDaysMethodTwo + ceil($datediff) - 1;
                //echo 'в днях между сейчас и выбранной датой округлено + 2 недели ' . $pregnancyDaysMethodTwo . '<br>';
                //echo 'Количество недель ' . ($pregnancyDaysMethodTwo / 7) . '<br>';
                $pregnancyWeeksMethodTwo = ceil($pregnancyDaysMethodTwo / 7);
                // echo 'Количество целых недель ' . $pregnancyWeeksMethodTwo . '<br>';
                $pregnancyWeeks = $pregnancyWeeksMethodTwo;
                if ($pregnancyWeeks > 40) {
                    $pregnancyCalculationException = 'echoHaveBaby';
                }
            }

        }


        // текущее время (метка времени)
        $your_date = strtotime($pregnancyCalculationDateInverse); // какая-то дата в строке (1 января 2017 года)

        $pregnancyDays = $todayDate->diff($pregnancyBeginDate);
        //echo 'Дней беременности ' . $pregnancyDays->format("%a") . '<br>';
        $pregnancyDays = $pregnancyDays->format("%a");
        $pregnancyDays++;
        //$pregnancyDaysSecondMethod = $pregnancyDays+13;

        //echo 'Дней беременности ' . $pregnancyDays . '<br>';
        //echo 'Дней беременности 2 метод ' . $pregnancyDaysSecondMethod . '<br>';

        //$pregnancyWeeks = $pregnancyDays / 7;
        $pregnancyMonths = 0;
        $pregnancyCalculationExceptionMonth = 0;

        if ($pregnancyDays > 0 && $pregnancyDays <= 28) {
            $pregnancyMonths = 1;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 28 && $pregnancyDays <= 62) {
            $pregnancyMonths = 2;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 62 && $pregnancyDays <= 93) {
            $pregnancyMonths = 3;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 93 && $pregnancyDays <= 124) {
            $pregnancyMonths = 4;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 124 && $pregnancyDays <= 155) {
            $pregnancyMonths = 5;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 155 && $pregnancyDays <= 185) {
            $pregnancyMonths = 6;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 185 && $pregnancyDays <= 216) {
            $pregnancyMonths = 7;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 216 && $pregnancyDays <= 249) {
            $pregnancyMonths = 8;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 249 && $pregnancyDays <= 280) {
            $pregnancyMonths = 9;
            $pregnancyCalculationExceptionMonth = 'echoMonths';
        } elseif ($pregnancyDays > 280) {
            $pregnancyMonths = 10;
            $pregnancyCalculationExceptionMonth = 'echoHaveBaby';
        }
        if ($pregnancyDays < 0) {
            $pregnancyCalculationExceptionMonth = 'echoPlanning';
            $pregnancyMonths = 0;
        }



        return [

            'dueDate' => Yii::$app->formatter->asDate($dueDate->format('Y-m-d'), 'long'),
            'pregnancyWeeks' => $pregnancyWeeks,
            'pregnancyMonths' => $pregnancyMonths,
            'pregnancyCalculationException' => $pregnancyCalculationException,
            'pregnancyCalculationDivShow' => $pregnancyCalculationDivShow,
            'pregnancyCalculationMethod' => $pregnancyCalculationMethod,
            'pregnancyCalculationExceptionMonth' => $pregnancyCalculationExceptionMonth,

        ];
    }

}
