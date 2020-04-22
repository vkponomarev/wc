<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ProbabilityOfEctopicPregnancy
{


    public function probabilityOfEctopicPregnancy($age)
    {
        $viewResult = 1;
        $ectopicPregnancy = 0;
        if (!$age) {
            $age = 1;
            $viewResult = 0;

        }

        if ($age >= 18 and $age < 20)
            $ectopicPregnancy = 1.2;
        if ($age >= 20 and $age < 25)
            $ectopicPregnancy = 1.2;
        if ($age >= 25 and $age < 30)
            $ectopicPregnancy = 1.2;
        if ($age >= 30 and $age < 35)
            $ectopicPregnancy = 1.2;
        if ($age >= 35 and $age < 40)
            $ectopicPregnancy = 1.2;
        if ($age >= 40 and $age < 45)
            $ectopicPregnancy = 1.2;
        if ($age >= 45 and $age <= 50)
            $ectopicPregnancy = 1.2;

        return [

            'ectopicPregnancy' => $ectopicPregnancy,
            'viewResult' => $viewResult,
        ];

    }
}
