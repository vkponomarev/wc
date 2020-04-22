<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ConceptionChineseCalendar
{


    public function conceptionChineseCalendar(
        $chineseCalendarCalculationMothersAge=18,
        $calendarCalculationDate
    )
    {
        if (!isset($chineseCalendarCalculationMothersAge))
            $chineseCalendarCalculationMothersAge=18;
        if (!isset($calendarCalculationDate))
            $calendarCalculationDate=new \DateTime();
        // g-girl
        // b-boy

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $chineseCalendarMonth = $womanCalculatorsDataArrays->chineseCalendarMonth($chineseCalendarCalculationMothersAge);


        $startOfCalendar = new \DateTime($calendarCalculationDate);
        $startOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $endOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $endOfCalendar->modify('+12 month');
        $eachMonth = new \DateTime($startOfCalendar->format('Y-m-01'));

        do {
            //echo $eachMonth->format('n');
            $calendar[$eachMonth->format('n')]=$chineseCalendarMonth[$eachMonth->format('n')];
            $eachMonth->modify('+1 month');

        } while ($eachMonth->format('Y-m-d') <= $endOfCalendar->format('Y-m-d'));


        return $calendar;
    }

}
