<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityOfPregnancy
{


    public function probabilityOfPregnancy($contraception, $age)
    {
        $viewResult = 1;
        $contraceptionPoints = 0;
        $pregnancyProbability = 0;
        if (!$contraception) {
            $contraception = 1;
            $viewResult = 0;
            $age = 0;
        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArraysSecond();
        $contraceptionPoints = $womanCalculatorsDataArrays->contraception($contraception);

        if ($age >= 18 and $age <= 44)
        $pregnancyProbability = $womanCalculatorsDataArrays->pregnancyProbability($age);

        return [

            'contraceptionPoints' => $contraceptionPoints,
            'pregnancyProbability' => $pregnancyProbability,
            'viewResult' => $viewResult,
        ];

    }
}
