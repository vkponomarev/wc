<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\DaysInMonths;
use Yii;
use yii\web\NotFoundHttpException;





class PregnancyCalendar
{


    public function pregnancyCalendar(
        $pregnancyCalculationMethod,
        $pregnancyCalculationDate
    )
    {

        // format('n') - порядковый номер месяца
        // format('W') - порядковый номер недели
        // format('N') - порядковый номер дня недели
        // format('j') - порядковый номер дня месяца
        // Настройки для 6 месяцев от выбранной даты.

        $startOfCalendar = new \DateTime($pregnancyCalculationDate);
        //echo  'Начало календаря ' . $startOfCalendar->format('Y-m-d') . '<br>';
        //$startOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $todayDate = new \DateTime();
        $dueDate = new \DateTime($pregnancyCalculationDate);
        //echo  'сегодняшняя дата ' . $todayDate->format('Y-m-d') . '<br>';

        //echo $startMonth . '<br>';
        $startWeek = $startOfCalendar->format('W');
        //echo $startOfCalendar->format('Y m d');
        //echo $eachDay->format('Y m d');

        $endOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));

        //echo $endOfCalendar->format('Y m d');

        $startOfPregnancy = new \DateTime($pregnancyCalculationDate);

        //echo  'Начало отсчета ' . $startOfPregnancy->format('Y-m-d') . '<br>';

        $endOfPregnancy = new \DateTime($pregnancyCalculationDate);
        $endOfPregnancy->modify('+42 week');

        if ($pregnancyCalculationMethod==2) {
            $startOfPregnancy->modify('-14 day');
            $endOfPregnancy->modify('-14 day');
            $startOfCalendar->modify('-14 day');
            //$endOfCalendar->modify('-13 day');
            $dueDate->modify('-14 day');
        }
        $startOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $startMonth = $startOfCalendar->format('n');

        //echo  'Начало беременности ' . $startOfPregnancy->format('Y-m-d') . '<br>';
        //echo  'начало календаря ' . $startOfCalendar->format('Y-m-d') . '<br>';

        //echo  'начальный месяц беременности' . $startOfPregnancy->format('n') . '<br>';
        //echo  'начальный месяц календаря' . $startOfCalendar->format('n') . '<br>';
        /*if ($startOfPregnancy->format('n') <> $startOfCalendar->format('n')){

            $refineStartMonth=1;

        } else{

            $refineStartMonth=0;

        }*/


        $monthOfPregnancy1 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy2 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy3 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy4 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy5 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy6 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy7 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy8 = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $monthOfPregnancy9 = new \DateTime($startOfPregnancy->format('Y-m-d'));

        $monthOfPregnancy1->modify('+28 day');
        $monthOfPregnancy2->modify('+62 day');
        $monthOfPregnancy3->modify('+93 day');
        $monthOfPregnancy4->modify('+124 day');
        $monthOfPregnancy5->modify('+155 day');
        $monthOfPregnancy6->modify('+185 day');
        $monthOfPregnancy7->modify('+216 day');
        $monthOfPregnancy8->modify('+249 day');
        $monthOfPregnancy9->modify('+280 day');


        $endOfCalendar->modify('+44 week');
        $dueDate->modify('+280 day');
        $endOfCalendar = new \DateTime($endOfCalendar->format('Y-m-t'));
        $eachDay = new \DateTime($startOfCalendar->format('Y-m-01'));
        $countDays = 0;

        $daysInMonths = DaysInMonths::daysInMonths($pregnancyCalculationDate);

        do {

            $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')] =
                [
                    'dayInMonth' => $eachDay->format('j'),
                    'trimesterTwo' => 0,
                    'trimesterThree' => 0,
                    'pregnancyWeek' => 0,
                    'pregnancyMonth' => 0,
                    'todayDate' => 0,
                    'thisWeek' => $eachDay->format('W'),
                    'thisMonth' => $eachDay->format('n'),
                    'dueDate' => 0,
                    'monthOfPregnancy1' => 0,
                    'monthOfPregnancy2' => 0,
                    'monthOfPregnancy3' => 0,
                    'monthOfPregnancy4' => 0,
                    'monthOfPregnancy5' => 0,
                    'monthOfPregnancy6' => 0,
                    'monthOfPregnancy7' => 0,
                    'monthOfPregnancy8' => 0,
                    'monthOfPregnancy9' => 0,
                ];

            /*echo 'номер месяца \'n\'  ' . $eachDay->format('n') . '<br>';
            echo 'номер недели \'W\' ' . $eachDay->format('W') . '<br>';
            echo 'номер дня    \'N\' ' . $eachDay->format('N') . '<br>';*/

            $countDays++;
            $eachDay->modify('+1 day');

        } while ($eachDay->format('Y m d') <= $endOfCalendar->format('Y m d'));

        // Начало формирования календаря беременности.
        $countDays = 0;
        $countDaysForOneWeek=0;
        $countTodayDate = 0;
        $pregnancyWeek = 1;
        $pregnancyMonth = 1;

        $eachDay = new \DateTime($startOfCalendar->format('Y-m-01'));

        $startOfPregnancyTrimesterTwo = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $startOfPregnancyTrimesterTwo->modify('+84 day');


        $startOfPregnancyTrimesterThree = new \DateTime($startOfPregnancy->format('Y-m-d'));
        $startOfPregnancyTrimesterThree->modify('+196 day');
        //echo $startOfPregnancyTrimesterThree->format('Y-m-d');
        //echo $eachDay->format('Y m d');
        //echo $endOfCalendar->format('Y m d');
        $pregnancyTrimesterTwo = 0;
        $pregnancyTrimesterThree = 0;
        $pregnancyStarted = 0;
        $pregnancyEnded = 0;
        $findDueDate = 0;
        $findMonthOfPregnancy1 = 0;
        do {


            // Находим даты 1 месяца беременности
            if ($monthOfPregnancy1->format('Y-m-d') > $eachDay->format('Y-m-d')){
                $findMonthOfPregnancy1 = 1;
                //echo $eachDay->format('d m Y') . '<br>';
            } else   $findMonthOfPregnancy1 = 0;

            // Находим даты 2 месяца беременности
            if ($monthOfPregnancy2->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy2 = 1;

            } else   $findMonthOfPregnancy2 = 0;

            // Находим даты 3 месяца беременности
            if ($monthOfPregnancy3->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy3 = 1;

            } else   $findMonthOfPregnancy3 = 0;

            // Находим даты 4 месяца беременности
            if ($monthOfPregnancy4->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy3==0)
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy4 = 1;

            } else   $findMonthOfPregnancy4 = 0;

            // Находим даты 5 месяца беременности
            if ($monthOfPregnancy5->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy4==0)
                && ($findMonthOfPregnancy3==0)
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy5 = 1;

            } else   $findMonthOfPregnancy5 = 0;

            // Находим даты 6 месяца беременности
            if ($monthOfPregnancy6->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy5==0)
                && ($findMonthOfPregnancy4==0)
                && ($findMonthOfPregnancy3==0)
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy6 = 1;

            } else   $findMonthOfPregnancy6 = 0;

            // Находим даты 7 месяца беременности
            if ($monthOfPregnancy7->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy6==0)
                && ($findMonthOfPregnancy5==0)
                && ($findMonthOfPregnancy4==0)
                && ($findMonthOfPregnancy3==0)
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy7 = 1;

            } else   $findMonthOfPregnancy7 = 0;

            // Находим даты 8 месяца беременности
            if ($monthOfPregnancy8->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy7==0)
                && ($findMonthOfPregnancy6==0)
                && ($findMonthOfPregnancy5==0)
                && ($findMonthOfPregnancy4==0)
                && ($findMonthOfPregnancy3==0)
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy8 = 1;

            } else   $findMonthOfPregnancy8 = 0;

            // Находим даты 9 месяца беременности
            if ($monthOfPregnancy9->format('Y-m-d') > $eachDay->format('Y-m-d')
                && ($findMonthOfPregnancy8==0)
                && ($findMonthOfPregnancy7==0)
                && ($findMonthOfPregnancy6==0)
                && ($findMonthOfPregnancy5==0)
                && ($findMonthOfPregnancy4==0)
                && ($findMonthOfPregnancy3==0)
                && ($findMonthOfPregnancy2==0)
                && ($findMonthOfPregnancy1==0)
            ){
                $findMonthOfPregnancy9 = 1;

            } else   $findMonthOfPregnancy9 = 0;

            // Находим дату предолагаемой беременности
            if ($dueDate->format('Y-m-d') == $eachDay->format('Y-m-d')){
                $findDueDate = 1;

            } else  $findDueDate = 0;


            // Находим дату Начала третьего триместра
            if ($startOfPregnancyTrimesterThree->format('Y-m-d') == $eachDay->format('Y-m-d')){
                $pregnancyTrimesterThree = 1;

            } else  $pregnancyTrimesterThree = 0;


            // Находим дату Начала второго триместра
            if ($startOfPregnancyTrimesterTwo->format('Y-m-d') == $eachDay->format('Y-m-d')){
                $pregnancyTrimesterTwo = 1;
                //echo 'Нашли триместр два ' . $eachDay->format('d m Y');
            } else  $pregnancyTrimesterTwo = 0;


            // Находим дату начала беременности
            if ($startOfPregnancy->format('Y-m-d') == $eachDay->format('Y-m-d')){
                $pregnancyStarted =1;
                // echo 'Нашел день начала периода <br>';
                //echo 'Начало беременности ' . $startOfPregnancy->format('Y-m-d') . '<br>';
            }
            // Находим дату окончания беременности
            if ($endOfPregnancy->format('Y-m-d') == $eachDay->format('Y-m-d')){
                $pregnancyEnded =1;
                //echo 'Нашел день начала периода';
            }

            // Находим Сегодняшнюю дату
            if ($todayDate->format('Y-m-d') == $eachDay->format('Y-m-d')){
                $countTodayDate = 1;
                //echo 'Нашел день начала периода';
            } else $countTodayDate = 0;

            if (($pregnancyStarted==1)&&($pregnancyEnded<>1))
            {
                //echo 'Текущий день ' . $eachDay->format('d m Y') . '<br>';
                //Начинаем отсчитываение недели
                $countDaysForOneWeek++;

                //Записываем в календарь текущую неделю
                $calendar[$eachDay->format('n')][$eachDay->format('W')][$eachDay->format('N')] =
                    [
                        'dayInMonth' => $eachDay->format('j'),
                        'trimesterTwo' => $pregnancyTrimesterTwo,
                        'trimesterThree' => $pregnancyTrimesterThree,
                        'pregnancyWeek' => $pregnancyWeek,
                        'pregnancyMonth' => $pregnancyMonth,
                        'todayDate' => $countTodayDate,
                        'thisWeek' => $eachDay->format('W'),
                        'thisMonth' => $eachDay->format('n'),
                        'dueDate' => $findDueDate,
                        'monthOfPregnancy1' => $findMonthOfPregnancy1,
                        'monthOfPregnancy2' => $findMonthOfPregnancy2,
                        'monthOfPregnancy3' => $findMonthOfPregnancy3,
                        'monthOfPregnancy4' => $findMonthOfPregnancy4,
                        'monthOfPregnancy5' => $findMonthOfPregnancy5,
                        'monthOfPregnancy6' => $findMonthOfPregnancy6,
                        'monthOfPregnancy7' => $findMonthOfPregnancy7,
                        'monthOfPregnancy8' => $findMonthOfPregnancy8,
                        'monthOfPregnancy9' => $findMonthOfPregnancy9,
                    ];

                //Если неделя завершена то сбрасываем отсчет
                if ($countDaysForOneWeek==7){
                    //Добавляем одну неделю к беременности
                    $pregnancyWeek++;
                    //Сбрасываем счетчик дней недели так как сейчас седьмой день недели
                    $countDaysForOneWeek=0;
                }

            }

            $countDays++;
            $eachDay->modify('+1 day');




        } while ($eachDay->format('Y-m-d') <= $endOfCalendar->format('Y-m-d'));
        //echo '<pre>' . print_r($calendar) . '</pre>';
        return [
            'calendar' => $calendar,
            'daysInMonths' => $daysInMonths,
            'startMonth' => $startMonth,
            'startWeek' => $startWeek,
            'calculationDate' => $startOfCalendar->format('Y-m-01')
        ];
    }

}
