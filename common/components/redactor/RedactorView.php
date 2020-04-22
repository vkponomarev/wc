<?php

namespace common\components\redactor;


use Yii;
use yii\web\NotFoundHttpException;





class RedactorView
{

    function __construct($PageID){


        $this->loadData($PageID);
        

    }


    function redactorView($PageID){


        view = '

<div class="redactor-my">
        
        
        
</div>

        ';









        return MainPageCategories::mainPageCategories();

    }


}
