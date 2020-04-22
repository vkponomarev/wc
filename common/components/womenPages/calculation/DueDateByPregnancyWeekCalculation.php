<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\DaysInMonths;
use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class DueDateByPregnancyWeekCalculation
{


    public function dueDateByPregnancyWeekCalculation($pregnancyWeek){

        $viewResult = 1;

        if (!$pregnancyWeek){
            $pregnancyWeek = 0;
            $viewResult = 0;
        }

        $weeksLeft = 40 - $pregnancyWeek;
        $daysLeft = $weeksLeft * 7;

        $todayDate = new \DateTime();
        $dueDate = $todayDate->add(new \DateInterval('P' . $daysLeft . 'D'));

        return [

            'dueDate' => Yii::$app->formatter->asDate($dueDate->format('Y-m-d'), 'long'),
            'viewResult' => $viewResult,

        ];


    }

}
