<?php

namespace common\components\gii;


use Yii;
use yii\web\NotFoundHttpException;





class TemplateGetPages
{


    function templateGetPages($viewName, $functionName)
    {


        $text = '   $getPages[] = [
            \'pageName\' => \'' . $viewName . '\',
            \'getParam\' => \'' . $functionName . '\',
            \'specify\' => \'none\',
            \'icon\' => \'.png\',
        ];
                
';
        return $text;

    }


}
