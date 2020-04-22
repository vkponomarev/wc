<?php

namespace common\components\textRedactors;



use common\models\PagesText;
use Yii;

class TextNumericCopyCreateText
{

    function createText($text, $range, $numberKeys, $textKeys)
    {


        foreach ($range as $one){

            $text[$range] = str_replace('{numberKey}', $numberKeys[$range], $text);
            $text[$range] = str_replace('{textKeys}', $textKeys[$range], $text[$range]);

        }

        return $text;

    }

}

