<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ConceptionJapanCalendar
{


    public function conceptionJapanCalendar(
        $japanCalendarCalculationMotherMonthBirth,
        $japanCalendarCalculationFatherMonthBirth,
        $calendarCalculationDate
    )
    {

        if (!$japanCalendarCalculationMotherMonthBirth){
            $japanCalendarCalculationMotherMonthBirth=6;
            $japanCalendarCalculationFatherMonthBirth=6;

        }

        // g-girl
        // b-boy
        // Ниже массив скрыт так как большой

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $fatherMonthBirthAndMotherMonthBirthResult = $womanCalculatorsDataArrays->fatherMonthBirthAndMotherMonthBirthResult();

        $fatherMonthBirthAndMotherMonthBirthResultNumber =
            $fatherMonthBirthAndMotherMonthBirthResult[$japanCalendarCalculationFatherMonthBirth][$japanCalendarCalculationMotherMonthBirth];

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $japanCalendarMonthAndResultNumber = $womanCalculatorsDataArrays->japanCalendarMonthAndResultNumber();

        $startOfCalendar = new \DateTime($calendarCalculationDate);
        $startOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $endOfCalendar = new \DateTime($startOfCalendar->format('Y-m-01'));
        $endOfCalendar->modify('+12 month');
        $eachMonth = new \DateTime($startOfCalendar->format('Y-m-01'));

        do {
            //echo $eachMonth->format('n');
            $calendar[$eachMonth->format('n')]=$japanCalendarMonthAndResultNumber[$eachMonth->format('n')][$fatherMonthBirthAndMotherMonthBirthResultNumber];
            $eachMonth->modify('+1 month');

        } while ($eachMonth->format('Y-m-d') <= $endOfCalendar->format('Y-m-d'));


        return $calendar;
    }


}
