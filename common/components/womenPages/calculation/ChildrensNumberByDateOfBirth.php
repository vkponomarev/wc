<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;
use Yii;


class ChildrensNumberByDateOfBirth
{


    public function childrensNumberByDateOfBirth($date)
    {
        $viewResult = 1;
        $numberOfChildrens = 1;
        if (!$date){
            $date = 0;
            $viewResult = 0;
        }


        //$now = time();

        if ($date){

            $explodedDate = explode('-', $date);
            //echo $explodedDate[0] . '<br>';
            //echo $explodedDate[1] . '<br>';
            //echo $explodedDate[2] . '<br>';

            if (iconv_strlen($explodedDate[0]) >1) {
                $sumDay = $explodedDate[0][0] + $explodedDate[0][1];
            } else{
                $sumDay = $explodedDate[0];
            }
            if (iconv_strlen($explodedDate[1]) >1) {
                $sumMonth = $explodedDate[1][0] + $explodedDate[0][1];
            } else{
                $sumMonth = $explodedDate[1];
            }

            if (iconv_strlen($explodedDate[1]) >1) {
                $sumMonth = $explodedDate[1][0] + $explodedDate[1][1];
            } else{
                $sumMonth = $explodedDate[1];
            }

            $sumYear = $explodedDate[2][0] + $explodedDate[2][1] + $explodedDate[2][2] + $explodedDate[2][3];

            $allSum = $sumDay + $sumMonth + $sumYear;
            //echo $allSum . '<br>';
            //echo str$allSum[0] . '<br>';

            if (iconv_strlen($allSum) >1){

                $numberOfChildrens = array_sum(str_split($allSum));
                //echo $numberOfChildrens . '<br>';

            } else{

                $numberOfChildrens = $allSum;

            }
        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArraysSecond();
        $numberOfChildrens = $womanCalculatorsDataArrays->childrensNumberByDateOfBirth($numberOfChildrens);




        return [

            'numberOfChildrens' => $numberOfChildrens,
            'viewResult' => $viewResult,

        ];

    }

}
