<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class PregnancyUziCalculation
{


    public function pregnancyUziCalculation($fetusLength){

        $viewResult =1;

        if (!$fetusLength){
            $fetusLength=0;
            $viewResult = 0;
        }

        //Скрыт массив с данными о неделе и весе плода
        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $pregnancyWeeks = $womanCalculatorsDataArrays->pregnancyWeeks();
        $pregnancyFetalLength = $womanCalculatorsDataArrays->pregnancyFetalLength();

        if ($fetusLength>=3 && $fetusLength<=84){

            $return = $pregnancyFetalLength[$fetusLength];

        } else{

            $viewResult = 0;
            $return = 0;

        }

        if ($viewResult==0){

            $return = 0;

        }

        return [
            'viewResult' => $viewResult,
            'pregnancyWeek' => $return,
        ];
    }

}
