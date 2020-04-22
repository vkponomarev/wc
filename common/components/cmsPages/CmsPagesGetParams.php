<?php

namespace common\components\cmsPages;



use Yii;

class CmsPagesGetParams
{

    public function cmsPagesGetParams($getParam){

        if ($getParam == 0)
            $healthPagesGetParams = 0;
        if ($getParam == 'none')
            $healthPagesGetParams = 0;


        return $healthPagesGetParams;

    }



}

