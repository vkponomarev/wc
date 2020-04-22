<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ChildWeightHeightCalculation
{


    public function childWeightHeightCalculation($childGender,$childAgeYears,$childAgeMonths){
        $viewResult = 1;
        if (!$childGender){
            $childGender = 1;
            $childAgeYears = 1;
            $childAgeMonths = 1;
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


        //echo $viewResult;
        if ($childGender == 1){

            return [
                'childMiddleHeight' =>   $boysHeight,
                'childMiddleWeight' => $boysWeight,
                'childMiddleHead' => $boysHead,
                'viewResult' => $viewResult,
            ];

        } elseif ($childGender == 2) {

            return [
                'childMiddleHeight' =>   $girlsHeight,
                'childMiddleWeight' => $girlsWeight,
                'childMiddleHead' => $girlsHead,
                'viewResult' => $viewResult,
            ];


        }



    }

}
