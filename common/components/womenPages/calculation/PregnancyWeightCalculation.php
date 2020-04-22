<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class PregnancyWeightCalculation
{


    public function pregnancyWeightCalculation($weightBeforePregnancy,$weightAfterPregnancy,$pregnancyWeek){

        $viewResult =1;

        if (!$weightBeforePregnancy){
            $weightBeforePregnancy=0;
            $weightAfterPregnancy=0;
            $pregnancyWeek=0;
            $viewResult = 0;
        }

        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $pregnancyWeeks = $womanCalculatorsDataArrays->pregnancyWeeks();

        $pregnancyWeightShouldBe = round($weightBeforePregnancy + $pregnancyWeeks[$pregnancyWeek]['weightGain']/1000,1);
        $pregnancyWeightDifference = $weightAfterPregnancy - $pregnancyWeightShouldBe;

        //echo 'viewResult  ' .  $viewResult . '<br>';
        //echo '$pregnancyWeek  ' .  $pregnancyWeek . '<br>';
        //echo '$weightAfterPregnancy  ' .  $weightAfterPregnancy . '<br>';
        //echo '$pregnancyWeightShouldBe  ' .  $pregnancyWeightShouldBe . '<br>';
        //echo '$pregnancyWeightDifference  ' .  $pregnancyWeightDifference . '<br>';
        //echo '$pregnancyWeeks[$pregnancyWeek][\'fetusHeight\']  ' .  $pregnancyWeeks[$pregnancyWeek]['fetusHeight'] . '<br>';
        //echo '$pregnancyWeeks[$pregnancyWeek][\'fetusWeight\']  ' .  $pregnancyWeeks[$pregnancyWeek]['fetusWeight'] . '<br>';
        //echo '$pregnancyWeeks[$pregnancyWeek][\'fetusHeadSize\']  ' .  $pregnancyWeeks[$pregnancyWeek]['fetusHeadSize'] . '<br>';
        //echo '$pregnancyWeeks[$pregnancyWeek][\'fetusHipLength\']  ' .  $pregnancyWeeks[$pregnancyWeek]['fetusHipLength'] . '<br>';
        //echo '$pregnancyWeeks[$pregnancyWeek][\'fetusChestDiameter\']  ' .  $pregnancyWeeks[$pregnancyWeek]['fetusChestDiameter'] . '<br>';

        return [
            'viewResult' => $viewResult,
            'pregnancyWeek' => $pregnancyWeek,
            'pregnancyWeight' => $weightAfterPregnancy,
            'pregnancyWeightShouldBe' => $pregnancyWeightShouldBe,
            'pregnancyDifference' => $pregnancyWeightDifference,
            'fetusHeight' => $pregnancyWeeks[$pregnancyWeek]['fetusHeight'],
            'fetusWeight' => $pregnancyWeeks[$pregnancyWeek]['fetusWeight'],
            'fetusHeadSize' => $pregnancyWeeks[$pregnancyWeek]['fetusHeadSize'],
            'fetusHipLength' => $pregnancyWeeks[$pregnancyWeek]['fetusHipLength'],
            'fetusChestDiameter' => $pregnancyWeeks[$pregnancyWeek]['fetusChestDiameter'],
        ];
    }

}
