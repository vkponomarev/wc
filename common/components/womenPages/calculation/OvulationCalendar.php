<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class OvulationCalendar
{


    public function ovulationCalendar(
        $ovulationCalculationMenstrualLength,
        $ovulationCalculationCycleLength,
        $ovulationCalculationDate
    )
    {
        if (!isset($ovulationCalculationMenstrualLength))
            $ovulationCalculationMenstrualLength=5;
        if (!isset($ovulationCalculationCycleLength))
            $ovulationCalculationCycleLength=28;

        // format('n') - порядковый номер месяца
        // format('W') - порядковый номер недели
        // format('N') - порядковый номер дня недели
        // format('j') - порядковый номер дня месяца

        // Менструальный период 25 каждые 25 дней
        // В самом начале идет менструация 5 дней
        // потом идет пару дней перерыв
        // потом идет овуляция 7 дней
        // Потом перерыв до следующей менструации.

        // Настройки для полного года
        /* $calendar = array();
        $startOfCalendar = new \DateTime('first day of January');
        $eachDay = $startOfCalendar;
        $daysInYear = date('L') ? 366 : 365;*/

        // Настройки для 6 месяцев от выбранной даты.
        $startOfCalendar = new \DateTime($ovulationCalculationDate);
        $startOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));


        //echo $startOfCalendar->format('Y m d');
        $eachDay = new \DateTime($startOfCalendar->format('Y-m-01'));
        //echo $eachDay->format('Y m d');

        $endOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $endOfCalendar->modify('+5 month');
        $endOfCalendar = new \DateTime($endOfCalendar->format('Y-m-t'));
        //echo $endOfCalendar->format('Y m d');

        $daysInYear = date('L') ? 366 : 365;
        $countDays = 0;
        do {

            $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')] =
                [
                    'dayInMonth' => $eachDay->format('j'),
                    'menstruationDay' => 0,
                    'ovulationDay' => 0,
                ];

            $countDays++;
            $eachDay->modify('+1 day');

        } while ($eachDay->format('Y m d') <= $endOfCalendar->format('Y m d'));

        // Начало формирования менструального периода.
        $menstruationStart = new \DateTime($ovulationCalculationDate);
        $menstruationPeriod = $ovulationCalculationCycleLength;
        //echo 'Период менструации ' . $menstruationPeriod . '<br>';
        $ovulationDays = 7; // Сколько длиться овуляция
        $ovulationStart = $menstruationPeriod-17; // С какого дня меструального периода начинается овуляция
        //echo 'Старт овуляции ' . $ovulationStart;
        $countMenstruationPeriodDays = 0;
        $countOvulationDays=0;
        $countMenstruationDays = 0;
        $menstruationPeriodStarted = 0;
        $countDays = 0;

        // Настройки для 6 месяцев от выбранной даты.
        $eachDay = new \DateTime($startOfCalendar->format('Y-m-01'));
        //echo $eachDay->format('Y m d');
        $endOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $endOfCalendar->modify('+5 month');
        $endOfCalendar = new \DateTime($endOfCalendar->format('Y-m-t'));
        //echo $endOfCalendar->format('Y m d');

        do {

            if ($menstruationStart->format('d m Y') == $eachDay->format('d m Y')){
                $menstruationPeriodStarted =1;
                //echo 'Нашел день начала периода';
            }

            // Если день начала периода наступил то начинаем
            // Заполнять календарь
            if ($menstruationPeriodStarted==1) {
                $countMenstruationPeriodDays++;

                // Если мы находимся в меструационном периоде
                if ($countMenstruationPeriodDays < $menstruationPeriod) {

                    // Если сейчас идет менструация
                    // То записываем в календарь что это день менструации
                    if (($countMenstruationPeriodDays>=$ovulationStart)&&($countOvulationDays<$ovulationDays)){

                        $countOvulationDays++;
                        $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')] =
                            [
                                'dayInMonth' => $eachDay->format('j'),
                                'menstruationDay' =>
                                    $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')]['menstruationDay']
                                ,
                                'ovulationDay' => 1,
                            ];
                        if ($countOvulationDays==4) {
                            $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')] =
                                [
                                    'dayInMonth' => $eachDay->format('j'),
                                    'menstruationDay' =>
                                        $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')]['menstruationDay']
                                    ,
                                    'ovulationDay' => 2,
                                ];
                        }

                        // Если овуляция закончилась то проверяем наступил ли новый менструационный период чтобы запустить новую овуляцию
                    } else {
                        if (($countMenstruationPeriodDays+1)==($menstruationPeriod)){

                            $countOvulationDays = 0;
                        }
                    }

                    if ($countMenstruationDays < $ovulationCalculationMenstrualLength) {



                        $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')] =
                            [
                                'dayInMonth' => $eachDay->format('j'),
                                'menstruationDay' => 1,
                                'ovulationDay' =>
                                    $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')]['ovulationDay']
                                ,
                            ];
                        $countMenstruationDays++;
                    } else {
                        if (($countMenstruationPeriodDays+1)==($menstruationPeriod)){

                            $countMenstruationDays = 0;
                        }
                    }
                    // Если сейчас идет овуляция то записываем в календарь что это день овуляции


                    // Если очередной период менструации завершился то
                    // Нужно его начать сначала
                } else {
                    //echo 'Менструационный период закончился';
                    $countMenstruationPeriodDays=0;

                }
            }

            $countDays++;
            $eachDay->modify('+1 day');

        } while ($eachDay->format('Y m d') <= $endOfCalendar->format('Y m d'));
        //echo '<pre>' . print_r($calendar) . '</pre>';

        return $calendar;
    }

}
