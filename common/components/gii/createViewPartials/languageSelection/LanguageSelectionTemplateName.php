<?php

namespace common\components\gii\createViewPartials\languageSelection;


use common\components\mainPagesData\MainPagesDataLanguage;
use Yii;

class LanguageSelectionTemplateName
{


    function template($partialsConfig, $path)
    {

        $languageSelection = (new MainPagesDataLanguage())->LanguageSelection();

        foreach ($languageSelection as $one) {

            $template = '
        
' . $one['name'] . '

';
            $fp = fopen($path . '/_' . $one['url'] . '.php', "w");
            // записываем в файл текст
            fwrite($fp, $template);
            // закрываем
            fclose($fp);
        }

        //return $template;
    }



}
