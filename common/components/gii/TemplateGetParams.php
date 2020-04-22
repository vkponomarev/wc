<?php

namespace common\components\gii;


use Yii;
use yii\web\NotFoundHttpException;





class TemplateGetParams
{


    function templateGetParams($functionName)
    {


        $text = '   if ($getParam == \'' . $functionName . '\') {

            $getParams = [

                \'\' => Yii::$app->request->get(\'\'),
                \'\' => Yii::$app->request->get(\'\'),
                \'large\' => [800,410],
                \'middle\' => [600,400],
                \'small\' => [280,480],

            ];

        }
        
';
        return $text;

    }


}
