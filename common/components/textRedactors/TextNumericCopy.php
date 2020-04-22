<?php

namespace common\components\textRedactors;


class TextNumericCopy
{


    function __construct($pagesID, $numberKeys, $textKeys, $text, $languageID)
    {
        echo 'Зашли в компонент ' . '<br>';
        $range = (new TextNumericCopyRange())->range($pagesID);

        //$textKeys = (new TextNumericCopyTextKeys())->textKeys($textKeys, $range);

        //$numberKeys = (new TextNumericCopyNumberKeys())->numberKeys($numberKeys, $range);

        //$text = (new TextNumericCopyCreateText())->createText($text, $range, $numberKeys, $textKeys);

        //(new TextNumericCopyCreate())->create($pagesID, $numberKeys, $textKeys, $text, $languageID);

    }


}


