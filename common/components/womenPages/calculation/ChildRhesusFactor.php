<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ChildRhesusFactor
{


    public function childRhesusFactor($motherRhesusFactor, $fatherRhesusFactor)
    {

        $viewResult = 1;

        if (!$motherRhesusFactor) {
            $motherRhesusFactor = 1;
            $fatherRhesusFactor = 1;
            $viewResult = 0;

        }
        $rhesusFactors[1] = 'Rh+';
        $rhesusFactors[2] = 'Rh-';

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childRhesusFactor = $womanCalculatorsDataArrays->childRhesusFactor($motherRhesusFactor, $fatherRhesusFactor);


        return [
            'childRhesusFactor' => $childRhesusFactor,
            'rhesusFactors' => $rhesusFactors,
            'viewResult' => $viewResult,
        ];


    }

}
