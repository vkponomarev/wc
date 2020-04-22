<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ChildColorBlindness
{


    public function childColorBlindness($motherColorBlindness, $fatherColorBlindness)
    {

        $viewResult = 1;

        if (!$motherColorBlindness) {
            $motherColorBlindness = 1;
            $fatherColorBlindness = 1;
            $viewResult = 0;

        }



        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childColorBlindness = $womanCalculatorsDataArrays->childColorBlindness($motherColorBlindness, $fatherColorBlindness);


        return [
            'childColorBlindness' => $childColorBlindness,

            'viewResult' => $viewResult,
        ];


    }

}
