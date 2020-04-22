<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\DaysInMonths;
use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ChildGenderRhFactor
{


    public function childGenderRhFactor($motherRhFactor,$fatherRhFactor){

        if (!$motherRhFactor) {

            $motherRhFactor = 0;
            $fatherRhFactor = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childGenderRhFactor = $womanCalculatorsDataArrays->childGenderRhFactor();


        //echo 'Тип крови мамы  ' .  $motherRhFactor . '<br>';
        //echo 'Тип крови папы  ' .  $fatherRhFactor . '<br>';
        //echo 'Пол ребенка  ' .  $childGender[$motherRhFactor][$fatherRhFactor] . '<br>';


        return $childGenderRhFactor[$motherRhFactor][$fatherRhFactor];

    }

}
