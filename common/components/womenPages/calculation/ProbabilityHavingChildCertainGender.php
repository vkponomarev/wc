<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityHavingChildCertainGender
{


    public function probabilityHavingChildCertainGender($gender)
    {
        $viewResult = 1;
        $childCertainGender = 0;
        if (!$gender){
            $gender = 1;
            $viewResult = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArraysSecond();
        $childCertainGender = $womanCalculatorsDataArrays->childCertainGender($gender);


        if ($childCertainGender<>0) {
            return [

                'childCertainGender' => $childCertainGender,
                'viewResult' => $viewResult,
            ];
        } else {

            return [

                'childCertainGender' => $childCertainGender,
                'viewResult' => $viewResult,
            ];
        }
    }

}
