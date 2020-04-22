<?php

namespace common\components\womenPages\additional;


use common\models\components\WomanCalendars;
use Yii;
use yii\web\NotFoundHttpException;





class NameOfDaysInWeek
{

    public function nameOfDaysInWeek()
    {
        $firstDayOfWeek = new \DateTime('Last Monday');
        $countNameOfDaysInWeek = 1;
        $nameOfDaysInWeek = array();

        //$prevMonthDays = array_fill(1, 7,  Yii::$app->formatter->asDate($firstDayOfWeek->modify ('+1 day'), 'php:D'));
        do {

            $nameOfDaysInWeek[$countNameOfDaysInWeek] = Yii::$app->formatter->asDate($firstDayOfWeek, 'php:D');
            $firstDayOfWeek->modify('+1 day');
            //echo $nameOfDaysInWeek[$countNameOfDaysInWeek] . '<br>';
            $countNameOfDaysInWeek++;

        } while ($countNameOfDaysInWeek !== 8);

        return $nameOfDaysInWeek;
    }
}
