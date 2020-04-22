<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ChildBodyMassIndex
{


    public function childBodyMassIndex($childGender,$childAgeYears,$childAgeMonths, $height, $weight)
    {
        $viewResult = 1;
        if (!$childGender){
            $childGender = 1;
            $childAgeYears = 1;
            $childAgeMonths = 1;
            $height = 1;
            $weight = 1;
            $viewResult = 0;
        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $girlsHeight = $womanCalculatorsDataArrays->girlsHeight();
        $girlsWeight = $womanCalculatorsDataArrays->girlsWeight();
        $girlsHead = $womanCalculatorsDataArrays->girlsHead();
        $boysHeight = $womanCalculatorsDataArrays->boysHeight();
        $boysWeight = $womanCalculatorsDataArrays->boysWeight();
        $boysHead = $womanCalculatorsDataArrays->boysHead();
        //echo print_r($girlsHeight);
        /*echo $girlsHeight[1][5][0] . '<br>';
        echo $girlsWeight[1][5][0] . '<br>';
        echo $girlsHead[1][5][0] . '<br>';
        echo $boysHeight[1][5][0] . '<br>';
        echo $boysWeight[1][5][0] . '<br>';
        echo $boysHead[1][5][0] . '<br>';*/

        if (!isset($boysHeight[$childAgeYears][$childAgeMonths][3])){
            $boysHeight = 0;
        } else {
            $boysHeight = $boysHeight[$childAgeYears][$childAgeMonths][3];
        }

        if (!isset($boysWeight[$childAgeYears][$childAgeMonths][3])){
            $boysWeight = 0;
        } else {
            $boysWeight = $boysWeight[$childAgeYears][$childAgeMonths][3];
        }

        if (!isset($boysHead[$childAgeYears][$childAgeMonths][3])){
            $boysHead = 0;
        } else {
            $boysHead = $boysHead[$childAgeYears][$childAgeMonths][3];
        }

        if (!isset($girlsHeight[$childAgeYears][$childAgeMonths][3])){
            $girlsHeight = 0;
        } else {
            $girlsHeight = $girlsHeight[$childAgeYears][$childAgeMonths][3];
        }

        if (!isset($girlsWeight[$childAgeYears][$childAgeMonths][3])){
            $girlsHeight = 0;
        } else {
            $girlsWeight = $girlsWeight[$childAgeYears][$childAgeMonths][3];
        }

        if (!isset($girlsHead[$childAgeYears][$childAgeMonths][3])){
            $girlsHead = 0;
        } else {
            $girlsHead = $girlsHead[$childAgeYears][$childAgeMonths][3];
        }
        //I={\frac  {m}{h^{2}}},
        $BMI = round($weight/(($height/100)*($height/100)),2);

        //echo $viewResult;
        if ($childGender == 1){

            return [
                'childMiddleHeight' =>   $boysHeight,
                'childMiddleWeight' => $boysWeight,
                'childMiddleHead' => $boysHead,
                'BMI' => $BMI,
                'viewResult' => $viewResult,
            ];

        } elseif ($childGender == 2) {

            return [
                'childMiddleHeight' =>   $girlsHeight,
                'childMiddleWeight' => $girlsWeight,
                'childMiddleHead' => $girlsHead,
                'BMI' => $BMI,
                'viewResult' => $viewResult,
            ];


        }
    }

}
