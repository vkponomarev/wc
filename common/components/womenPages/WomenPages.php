<?php

namespace common\components\womenPages;


use Yii;
use yii\web\NotFoundHttpException;





class WomenPages
{


    function __construct($pageId, $embed = 0){

        $this->getPages = $this->getPages($pageId);
        $this->getParams = $this->getParams($this->getPages['getParam']);
        
        if (isset($this->getParams['date']))
        $this->date($this->getParams['date']);

        if (!$embed)
        {
            $this->result = $this->result($this->getPages['getParam'], $this->getParams);
        }

    }



    function getPages($pageId){

        return (new WomenPagesGetPages())->getPages($pageId);

    }

    function getParams($getParam){

        return (new WomenPagesGetParams())->getParams($getParam);

    }

    function result($getCalculationFunction,$getParams){

        return (new WomenPagesResult)->result($getCalculationFunction,$getParams);

    }

    function date($date){

        if (!$date){

            $date = new \DateTime();

            $this->getParams['date'] = $date->format('d-m-Y');

        }

        }



}
