<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ConceptionDateByDueDateCalculation
{


    public function conceptionDateByDueDateCalculation($dueDate){

        $viewResult = 1;
 
        if (!$dueDate){
            $dueDate = 0;
            $viewResult = 0;
        }


        //$now = time();
        $dueDate = new \DateTime($dueDate);


        $conceptionDate = $dueDate->sub(new \DateInterval('P266D'));


        return [

            'conceptionDate' => Yii::$app->formatter->asDate($conceptionDate->format('Y-m-d'), 'long'),
            'viewResult' => $viewResult,

        ];


    }

}
