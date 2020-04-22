<?php

namespace common\components\gii;


use Yii;
use yii\web\NotFoundHttpException;





class TemplateCalculator
{


    function templateCalculator($fileName, $functionName)
    {


        $text = '<?php

namespace common\components\womenPages\calculation;


use common\components\womenPages\additional\WomanCalculatorsDataArrays;


class ' . $fileName . '
{


    public function ' . $functionName . '($one , $two)
    {

    }

}
';
        return $text;

    }


}
