<?php

namespace common\components\textRedactors;




use common\components\dump\Dump;
use common\models\PagesText;
use Yii;

class TextNumericCopyRange
{

    function range($pagesID)
    {


      
        $isRange = explode('-', $pagesID);
        $isNumbers = explode(',', $pagesID);





        if ($isRange) {

            $start = (int)$isRange[0];
            $end = (int)$isRange[1];
            //(new \common\components\dump\Dump())->printR($end);
            $rangeNow = $start;
            //(new \common\components\dump\Dump())->printR($rangeNow);
            $count = 0;
            //Проходим по всем выбранным ID
            while ($rangeNow <= $end) {

                $range[$rangeNow] = $rangeNow;

                $rangeNow++;

            }
        }
/*
        if ($isNumbers){


            foreach ($isNumbers as $isNumber) {

                $range[$isNumber] = $isNumber;

            }

            
        }*/

        (new \common\components\dump\Dump())->printR($range);

        return $range;



    }

}

