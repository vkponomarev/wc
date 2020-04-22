<?php

namespace common\components\gii;


use Yii;
use yii\web\NotFoundHttpException;





class TemplateResult
{


    function templateResult($fileName, $functionName)
    {


        $text = '   if ($getCalculationFunction == \'' . $functionName . '\') {
            $result = (new ' . $fileName . '())->' . $functionName . '(
                $getParams[\'\'],
                $getParams[\'\']
            );
        }
        
';
        return $text;

    }


}
