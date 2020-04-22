<?php

namespace common\components\womenPages\additional;


use common\models\components\WomanCalendars;
use Yii;
use yii\web\NotFoundHttpException;





class NameOfMonthsInYear
{

    public function nameOfMonthsInYear($calculationDate)
    {


        $firstMonth = new \DateTime($calculationDate);
        $firstMonth = new \DateTime($firstMonth->format('Y-m-15'));
        $firstMonth->modify('-1 month');
        $countNameOfMonths = 0;
        $nameOfMonths = array();

        do {

            $nameOfMonths[$countNameOfMonths] = Yii::$app->formatter->asDate($firstMonth, 'LLLL Y');
            $firstMonth->modify('+1 month');
            //echo $nameOfDaysInWeek[$countNameOfDaysInWeek] . '<br>';
            $countNameOfMonths++;

        } while ($countNameOfMonths !== 13);

        return $nameOfMonths;
    }

}
