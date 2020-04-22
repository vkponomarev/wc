<?php

namespace common\components\textRedactors;


use common\models\PagesText;
use Yii;

class TextNumericCopyCreate
{

    function create($pagesID, $numberKeys, $textKeys, $text, $languageID)
    {




        foreach ($range as $one) {

            $pages_id = $rangeNow;
            $languages_id = $languageID;
            $str[$one] = explode("\n", $text[$one]);

            if (count($str[$one]) == 6) {
/*
                $model = new PagesText();
                $model->pages_id = $one;
                $model->languages_id = $languageID;
                $model->index_name = '';
                $model->short_description = '';
                $model->keywords = '';
                $model->text2 = '';

                $model->menu_name = $str[$one][0];
                $model->title = $str[$one][1];
                $model->plates_title = $str[$one][2];
                $model->h1 = $str[$one][3];
                $model->description = $str[$one][4];
                $model->text1 = $str[$one][5];
                $model->active = 1;
                $model->save();*/

                echo 'Menu Name ' . $str[$one][0] . '<br>';
                echo 'Title ' . $str[$one][1] . '<br>';
                echo 'Plates title ' . $str[$one][2] . '<br>';
                echo 'H1 ' . $str[$one][3] . '<br>';
                echo 'Description ' . $str[$one][4] . '<br>';
                echo 'Text1 ' . $str[$one][5] . '<br>';

            }

            if (count($str[$one]) == 7) {
/*
                $model = new PagesText();
                $model->pages_id = $one;
                $model->languages_id = $languageID;
                $model->short_description = '';
                $model->keywords = '';
                $model->text2 = '';

                $model->menu_name = $str[$one][0];
                $model->index_name = $str[$one][1];
                $model->title = $str[$one][2];
                $model->plates_title = $str[$one][3];
                $model->h1 = $str[$one][4];
                $model->description = $str[$one][5];
                $model->text1 = $str[$one][6];
                $model->active = 1;
                $model->save();
*/
                echo 'Menu Name ' . $str[0] . '<br>';
                echo 'idex name ' . $str[1] . '<br>';
                echo 'Title ' . $str[2] . '<br>';
                echo 'Plates title ' . $str[3] . '<br>';
                echo 'H1 ' . $str[4] . '<br>';
                echo 'Description ' . $str[5] . '<br>';
                echo 'Text1 ' . $str[6] . '<br>';

            }

        }


}



}

