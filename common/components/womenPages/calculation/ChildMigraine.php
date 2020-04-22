<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ChildMigraine
{


    public function childMigraine($motherMigraine, $fatherMigraine)
    {

        $viewResult = 1;

        if (!$motherMigraine) {
            $motherMigraine = 1;
            $fatherMigraine = 1;
            $viewResult = 0;

        }



        $womanCalculatorsDataArrays = new WomanCalculatorsDataArrays();
        $childMigraine = $womanCalculatorsDataArrays->childMigraine($motherMigraine, $fatherMigraine);


        return [
            'childMigraine' => $childMigraine,

            'viewResult' => $viewResult,
        ];


    }

}
