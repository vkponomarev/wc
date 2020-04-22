<?php

namespace common\components\textRedactors;



use common\models\PagesText;
use Yii;

class TextNumericCopyTextKeys
{

    function textKeys($textKeys, $range)
    {

        if (!$textKeys){

            $textKeys = 0;

        }

        $isTextKeysRange = explode('`,`', $textKeys);

        if ($isTextKeysRange){

            $textKeysTmp = $isTextKeysRange;

        } else {

            $textKeysTmp = $textKeys;

        }


        $count = 0;

        foreach ($range as $one){

            if ($isTextKeysRange) {

                $textKeys[$one] = $textKeysTmp[$count];

            } else {

                $textKeys[$one] = $textKeysTmp;

            }

            $count ++;

        }


        return $textKeys;


    }

}

