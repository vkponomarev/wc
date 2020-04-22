<?php

namespace common\components\textRedactors;



use common\models\PagesText;
use Yii;

class TextNumericCopyNumberKeys
{

    function numberKeys($numberKeys, $range)
    {

        $isRangeNumberKeys = explode('`-`', $numberKeys);
        $isNumberNumberKeys = explode('`,`', $numberKeys);

        if ($isRangeNumberKeys){

            $start = $isRange[0];
            $end = $isRange[3];
            $range = $end - $start;
            $rangeNow = $start;
            $count = 0;
            while ($rangeNow <= $end){

                $numberKeysTmp[$count] = $rangeNow;
                $rangeNow++;
                $count++;
            }

        }

        if ($isNumberNumberKeys){

            $numberKeysTmp = $isNumberNumberKeys;

        }

        $count = 0;

        foreach ($range as $one){

            $numberKeys[$one] = $numberKeysTmp[$count];

            $count ++;

        }


        return $numberKeys;


    }

}

