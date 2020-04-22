<?php

namespace common\components\womenPages\additional;


use common\models\components\WomanCalendars;
use Yii;
use yii\web\NotFoundHttpException;





class DaysInMonths
{

    public function daysInMonths($calculationDate){

        $firstMonth = new \DateTime($calculationDate);
        $firstMonth = new \DateTime($firstMonth->format('Y-m-01'));
        //echo $firstMonth->format('Y-m-d');
        $firstMonth->modify('-1 month');
        $countMonths = 0;
        $daysInMonths = array();
        do {

            $daysInMonths[$countMonths] = $firstMonth->format('t');
            //echo $firstMonth->format('Y-m-d') . '  ' . $firstMonth->format('t') . '<br>';
            $firstMonth->modify('+1 month');
            //echo $nameOfDaysInWeek[$countNameOfDaysInWeek] . '<br>';
            $countMonths++;

        } while ($countMonths !== 13);

        return $daysInMonths;
    }

}
