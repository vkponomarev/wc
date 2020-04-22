<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ChildHeightFutureCalculation
{


    public function childHeightFutureCalculation($childGender,$motherHeight,$fatherHeight){

        $viewResult = 1;

        if (!$childGender){
            $childGender = 1;
            $motherHeight = 155;
            $fatherHeight = 165;
            $viewResult = 0;
        }

        if ($childGender == 1 ) {

            $childHeightFolk = ($motherHeight + $fatherHeight) * 0.54 - 4.5;
            $childHeightHawker = ($motherHeight + $fatherHeight) / 2 + 6.4;
            $childHeightKarkus = (($motherHeight * 1.08) + $fatherHeight) / 2;
            $childHeightSmirnovFrom = ($motherHeight + $fatherHeight + 12.5) / 2 - 8;
            $childHeightSmirnovTo = ($motherHeight + $fatherHeight + 12.5) / 2 + 8;

        }else{

            $childHeightFolk = ($motherHeight + $fatherHeight) * 0.51 - 7.5;
            $childHeightHawker = ($motherHeight + $fatherHeight) / 2 - 6.4;
            $childHeightKarkus = ($motherHeight + ($fatherHeight * 0.923)) / 2;
            $childHeightSmirnovFrom = ($motherHeight + $fatherHeight + 12.5) / 2 - 8;
            $childHeightSmirnovTo = ($motherHeight + $fatherHeight + 12.5) / 2 + 8;

        }


        return [
            'childHeightFolk' =>   round($childHeightFolk),
            'childHeightHawker' => round($childHeightHawker),
            'childHeightKarkus' => round($childHeightKarkus),
            'childHeightSmirnovFrom' => round($childHeightSmirnovFrom),
            'childHeightSmirnovTo' => round($childHeightSmirnovTo),
            'viewResult' => $viewResult,
        ];

    }

}
