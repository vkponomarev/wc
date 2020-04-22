<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ProbabilityHavingHealthyChild
{


    public function probabilityHavingHealthyChild($motherAge)
    {
        $viewResult = 1;

        $downSyndrome = 0;
        $someChromosomeDisease = 0;

        if (!$motherAge){
            $motherAge = 0;
            $viewResult = 0;
        }



        if ($motherAge < 20 or $motherAge > 49){

            $viewResult = 0;

        } else {
            
            $healthyChildProbability = (new WomanCalculatorsDataArraysSecond())->diseaseProbability($motherAge);
            $downSyndrome = $healthyChildProbability[1];
            $someChromosomeDisease = $healthyChildProbability[2];

        }



        return [

            'viewResult' => $viewResult,
            'downSyndrome' => $downSyndrome,
            'someChromosomeDisease' => $someChromosomeDisease,
        ];
    }

}
