<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ChildEyesColorCalculation
{


    public function childEyesColorCalculation($motherEyesColor,$fatherEyesColor){

        $viewResult = 1;

        if (!$motherEyesColor){
            $motherEyesColor = 1;
            $fatherEyesColor = 1;
            $viewResult = 0;
            $childEyesColor = 0;
        }
        $eyesColor[1]='brown';
        $eyesColor[2]='green';
        $eyesColor[3]='blue';

        $motherEyesColor = $eyesColor[$motherEyesColor];
        $fatherEyesColor = $eyesColor[$fatherEyesColor];


        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childEyesColor = $womanCalculatorsDataArrays->childEyesColor($motherEyesColor,$fatherEyesColor);


        if ($childEyesColor<>0) {
            return [
                'childEyesColorBrown' => $childEyesColor['childEyesColorBrown'],
                'childEyesColorGreen' => $childEyesColor['childEyesColorGreen'],
                'childEyesColorBlue' => $childEyesColor['childEyesColorBlue'],
                'viewResult' => $viewResult,
            ];
        } else {

            return [
                'childEyesColorBrown' => $childEyesColor['childEyesColorBrown'],
                'childEyesColorGreen' => $childEyesColor['childEyesColorGreen'],
                'childEyesColorBlue' => $childEyesColor['childEyesColorBlue'],
                'viewResult' => $viewResult,
            ];


        }
    }

}
