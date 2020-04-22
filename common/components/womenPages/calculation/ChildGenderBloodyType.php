<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ChildGenderBloodyType
{


    public function childGenderBloodType($motherBloodType,$fatherBloodType){

        if (!$motherBloodType) {

            $motherBloodType = 0;
            $fatherBloodType = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childGenderBloodType = $womanCalculatorsDataArrays->childGenderBloodType();
        //echo 'Тип крови мамы  ' .  $motherBloodType . '<br>';
        //echo 'Тип крови папы  ' .  $fatherBloodType . '<br>';
        //echo 'Пол ребенка  ' .  $childGender[$motherBloodType][$fatherBloodType] . '<br>';


        return $childGenderBloodType[$motherBloodType][$fatherBloodType];

    }

}
