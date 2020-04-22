<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ChildHairColor
{


    public function childHairColor($motherHairColor,$fatherHairColor)
    {
        $viewResult = 1;
        $childHairColor = 0;
        if (!$motherHairColor){
            $motherHairColor = 1;
            $fatherHairColor = 1;
            $viewResult = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArraysSecond();
        $childHairColor = $womanCalculatorsDataArrays->childHairColor($motherHairColor,$fatherHairColor);


        if ($childHairColor<>0) {
            return [

                'childHairColor' => $childHairColor,
                'viewResult' => $viewResult,
            ];
        } else {

            return [

                'childHairColor' => $childHairColor,
                'viewResult' => $viewResult,
            ];


        }
    }

}
