<?php

namespace common\components\mainPagesData;



use Yii;

class MainPagesDataArray
{

    public function mainPagesArray($mainUrl){

        $mainPagesArray[0] = 0;
        $mainPagesArray['index-1'] ='';
        $mainPagesArray['health-2'] ='health';
        $mainPagesArray['medical-3'] ='medical';
        $mainPagesArray['analysis-152'] ='analysis';
        $mainPagesArray['clothing-4'] ='clothing';
        $mainPagesArray['embed-47'] ='embed';
        $mainPagesArray['cms'] ='cms';
        return $mainPagesArray[$mainUrl];

    }

    public function mainPagesArrayMainPage(){

        $mainPagesArray[0] = 0;
        $mainPagesArray['index-1'] ='';
        $mainPagesArray['health-2'] ='health';
        $mainPagesArray['medical-3'] ='medical';
        $mainPagesArray['analysis-152'] ='analysis';
        $mainPagesArray['clothing-4'] ='clothing';
        $mainPagesArray['embed-47'] ='embed';
        $mainPagesArray['cms'] ='cms';
        return $mainPagesArray;

    }



}

