<?php

namespace common\components\cmsPages;


use Yii;
use yii\web\NotFoundHttpException;





class CmsPages
{


    function __construct($pageId,$embed = 0){

        $this->getPages = $this->cmsPagesGetPages($pageId);
        $this->getParams = $this->cmsPagesGetParams($this->getPages['getParam']);

        if (!$embed)
        {
            $this->result = $this->cmsPagesResult($this->getPages['getParam'], $this->getParams);
        }

    }



    function cmsPagesGetPages($pageId){

        return (new CmsPagesGetPages)->cmsPagesGetPages($pageId);

    }

    function cmsPagesGetParams($getParam){

        return (new CmsPagesGetParams)->cmsPagesGetParams($getParam);

    }

    function cmsPagesResult($getCalculationFunction,$getParams){

        return (new CmsPagesResult)->cmsPagesResult($getCalculationFunction,$getParams);

    }




}
