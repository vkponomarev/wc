<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class BloodTypeOfTheChild
{


    public function bloodTypeOfTheChild($motherBloodType, $fatherBloodType)
    {

        $viewResult = 1;

        if (!$motherBloodType) {
            $motherBloodType = 1;
            $fatherBloodType = 1;
            $viewResult = 0;

        }
        $bloodTypes[1] = 'I (O)';
        $bloodTypes[2] = 'II (A)';
        $bloodTypes[3] = 'III (B)';
        $bloodTypes[4] = 'IV (AB)';

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $bloodTypeOfTheChild = $womanCalculatorsDataArrays->bloodTypeOfTheChild($motherBloodType, $fatherBloodType);


        return [
            'bloodTypeOfTheChild' => $bloodTypeOfTheChild,
            'bloodTypes' => $bloodTypes,
            'viewResult' => $viewResult,
        ];


    }

}
