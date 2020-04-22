<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ChildFood
{


    public function childFood($childAgeMonths)
    {
        $viewResult = 1;
        $childFood = 0;
        if (!$childAgeMonths) {
            $childAgeMonths = 1;
            $viewResult = 0;
        }

        //$childSleep[11][9][0] = ['0','0'];
        //$childSleep[11][9][1] = '9-11';
        //$childSleep[11][9][2] = '9-11';


        $arrays = new WomanCalculatorsDataArraysSecond();
        $childFood = $arrays->childFood();

        return [
            'childFood' => $childFood[$childAgeMonths],
            'viewResult' => $viewResult,
        ];


    }
}
