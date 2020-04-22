<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ChildHemophilia
{


    public function childHemophilia($motherHemophilia, $fatherHemophilia)
    {

        $viewResult = 1;

        if (!$motherHemophilia) {
            $motherHemophilia = 1;
            $fatherHemophilia = 1;
            $viewResult = 0;

        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childHemophilia = $womanCalculatorsDataArrays->childHemophilia($motherHemophilia, $fatherHemophilia);


        return [
            'childHemophilia' => $childHemophilia,
            'viewResult' => $viewResult,
        ];


    }

}
