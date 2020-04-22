<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArraysSecond;


class ChildSleep
{


    public function childSleep($childGender, $childAgeYears, $childAgeMonths)
    {
        $viewResult = 1;
        $childSleep = 0;
        if (!$childGender) {
            $childGender = 0;
            $childAgeYears = 0;
            $childAgeMonths = 0;
            $viewResult = 0;
        }

        //$childSleep[11][9][0] = ['0','0'];
        //$childSleep[11][9][1] = '9-11';
        //$childSleep[11][9][2] = '9-11';

        $arrays = new WomanCalculatorsDataArraysSecond();
        $childSleep = $arrays->childSleep();

        return [
            'childSleep' => $childSleep[$childAgeYears][$childAgeMonths],
            'viewResult' => $viewResult,
        ];


    }
}
