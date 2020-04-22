<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityHavingFairHairedChild
{


    public function probabilityHavingFairHairedChild($motherHairColor , $fatherHairColor)
    {
        $viewResult = 1;
        $fairHairedChild = 0;
        if (!$motherHairColor){
            $motherHairColor = 1;
            $fatherHairColor = 1;
            $viewResult = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArraysSecond();
        $fairHairedChild = $womanCalculatorsDataArrays->fairHairedChild($motherHairColor,$fatherHairColor);


        if ($fairHairedChild<>0) {
            return [

                'fairHairedChild' => $fairHairedChild,
                'viewResult' => $viewResult,
            ];
        } else {

            return [

                'fairHairedChild' => $fairHairedChild,
                'viewResult' => $viewResult,
            ];
        }
    }

}
