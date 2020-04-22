<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ChildHand
{


    public function childHand($motherHand, $fatherHand)
    {

        $viewResult = 1;

        if (!$motherHand) {
            $motherHand = 1;
            $fatherHand = 1;
            $viewResult = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childHand = $womanCalculatorsDataArrays->childHand($motherHand, $fatherHand);


        return [
            'childHand' => $childHand,

            'viewResult' => $viewResult,
        ];


    }

}
