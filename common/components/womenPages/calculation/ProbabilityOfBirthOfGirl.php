<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityOfBirthOfGirl
{


    public function probabilityOfBirthOfGirl($choose)
    {
        $viewResult = 1;
        $probabilityOfBirth = 0;
        if (!$choose) {
            $choose = 0;
            $viewResult = 0;

        }

        if ($choose) {

            //$arrays = new WomanCalculatorsDataArraysSecond();
            //$choose2 = $arrays->probabilityHavingChild($choose);

            $arrays = new WomanCalculatorsDataArraysSecond();
            $probabilityOfBirth = $arrays->probabilityHavingChildPercent($choose);


        }

        //echo $choose[1] . ' ' . $choose[2] . '<br>';
        //echo $girlCount . '<br>';
        //echo $boyCount . '<br>';












        return [

            'probabilityOfBirth' => $probabilityOfBirth,
            'viewResult' => $viewResult,
        ];

    }

}
