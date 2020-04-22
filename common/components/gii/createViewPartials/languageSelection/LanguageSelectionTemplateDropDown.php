<?php

namespace common\components\gii\createViewPartials\languageSelection;


use common\components\mainPagesData\MainPagesDataLanguage;
use Yii;

class LanguageSelectionTemplateDropDown
{


    function template($partialsConfig)
    {




        $template = '
        
<span class="fa fa-sort-down sort-down-languages">
                                       </span>
<ul class="languages-dropdown">

';

        $languageSelection = (new MainPagesDataLanguage())->LanguageSelection();

        foreach ($languageSelection as $one){

            $template = $template . '
            
<li>

<?= \yii\helpers\Html::a(\'' . $one['name'] . '\', array_merge(Yii::$app->request->get(),
                                   [Yii::$app->controller->route, \'language\' => \'' . $one['url'] . '\']));?>
                                   

</li>
            
            ';


            //<a href="/' . $one['url'] . '/">' . $one['name'] . '</a>
        }

    $template = $template . '

   </ul>
   
        ';
        return $template;
    }



}
