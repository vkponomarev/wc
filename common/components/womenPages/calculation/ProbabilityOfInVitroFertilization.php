<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityOfInVitroFertilization
{


    public function probabilityOfInVitroFertilization($age)
    {
        $viewResult = 1;
        $IVF = 0;
        if (!$age) {
            $age = 1;
            $viewResult = 0;

        }


        if ($age >= 18 and $age < 30)
            $IVF = '83';
        if ($age >= 30 and $age < 35)
            $IVF = '61';
        if ($age >= 35 and $age < 40)
            $IVF = '34';
        if ($age >= 40 )
            $IVF = '27.6';

        return [

            'IVF' => $IVF,
            'viewResult' => $viewResult,
        ];

    }
}
