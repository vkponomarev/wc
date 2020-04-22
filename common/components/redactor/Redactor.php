<?php

namespace common\components\redactor;


use Yii;
use yii\web\NotFoundHttpException;





class Redactor
{

    /**
     * Получить через контроллер id сео текстов страниц
     * вывести где нибудь на страницах форму редактирования текстов
     * реализовать сохранение в базу данных
     *
     */
    function __construct($pageID){

       $this->model = $this->loadData($pageID);

    }


    function loadData($pageID){

        return (new RedactorLoad)->RedactorLoad($pageID);

    }

    function view($model){

        return (new RedactorView)->redactorView($model);

    }
}
