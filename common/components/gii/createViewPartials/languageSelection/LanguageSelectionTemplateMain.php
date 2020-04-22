<?php

namespace common\components\gii\createViewPartials\languageSelection;


use Yii;

class LanguageSelectionTemplateMain
{


    /**
     * CreateViewPartialsLanguageSelection constructor.
     *
     * Здесь мы создаем часть сайта выбор текущего языка.
     *
     * 1. Удаление предыдущего созданной части сайта.
     * 2. Создание новой части сайта.
     *
     *
     *  frontend/view/partials/view/language-selection/
     *  en.php
     *  ru.php
     *  ......
     *
     *  Удаление конкретной папки
     *
     */




    function template($partialsConfig)
    {

        $template = '
        
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <span class="choose-languages">

      <span class="fa fa-globe globe-size">
      </span>


      <?=$this->render(\'/' . $partialsConfig['path'] . '/_\' . Yii::$app->language);?>
      <?=$this->render(\'/' . $partialsConfig['path'] . '/_drop-down\');?>

      </span>

</div>
        
        ';
        return $template;
    }



}
