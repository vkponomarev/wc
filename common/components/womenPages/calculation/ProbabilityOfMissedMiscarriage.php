<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityOfMissedMiscarriage
{


    public function probabilityOfMissedMiscarriage($age)
    {
        $viewResult = 1;
        $missedMiscarriage = 0;
        $averageMissedMiscarriage = 0;
        if (!$age) {
            $age = 1;
            $viewResult = 0;

        }

        $averageMissedMiscarriage = '10 - 25';

        if ($age >= 18 and $age < 35)
            $missedMiscarriage = 10;

        if ($age >= 35 and $age < 45)
            $missedMiscarriage = 25;

        if ($age >= 45 and $age <= 50)
            $missedMiscarriage = 50;

        return [

            'missedMiscarriage' => $missedMiscarriage,
            'averageMissedMiscarriage' => $averageMissedMiscarriage,
            'viewResult' => $viewResult,
        ];

    }
}
