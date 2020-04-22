<?php

namespace common\components\mainPagesData;



use Yii;
use yii\web\NotFoundHttpException;

/**
 * Class MainPagesDataUrlCheck
 * @package common\models\mainPagesData
 *
 *
 * function __construct($givenUrl)
 * При создании этого объека будет инициализированна полная проверка URL
 *
 * function UrlSeparator($givenUrl)
 * Разделяем данный URL на составляющие
 * URL вида:  tekst-url-5646 - стандартные урл для всего сайта.
 * Отделяем 5646 Это id станицы если не получилось то есть в самом конце текста после - не цифры или нет цифр
 * или цифры с вхождением букв то выводим ошибку.
 *
 * function getTruePageUrl($pageId)
 * По выделенному выше ID достаем из базы данных настоящий url данной страницы
 * Если не получилось выдаем 404
 *
 *
 * function pageUrlCheck($givenUrl, $truePageUrl)
 * Сравниваем переданный урл и настоящий урл страницы если они не совпадают выдаем 404
 *
 *
 */

class MainPagesDataUrlCheck
{




    function __construct($givenUrl){

        //$this->pageId = $this->UrlSeparator($givenUrl);
        $truePageUrl = $this->getTruePageUrl($givenUrl);
        $this->parentPageId = $truePageUrl['parent_id'];
        $this->pageId = $truePageUrl['id'];
        //$this->pageUrlCheck($givenUrl, $truePageUrl['url']);


    }



/*
    public function UrlSeparator($givenUrl)
    {

        if (!preg_match('/(?<=-)[0-9]+$/', $givenUrl, $pageId)){

            throw new NotFoundHttpException('404');

        }

        $pageId = (int) $pageId['0'];
        return $pageId;

    }
*/


    public function getTruePageUrl($givenUrl)
    {
        //echo $pageId;
        $truePageUrl = Yii::$app->db
            ->createCommand('
            select
            id,
            parent_id,
            name,
            url,
            parent_id
            from
            pages
            where url = :givenUrl 
            and active = 1
            ', [':givenUrl' => $givenUrl])->queryOne();


        //echo '<pre>';
        //var_dump($texts);
        //print_r($truePageUrl);
        //echo '</pre>';

        if (!$truePageUrl) {

            throw new NotFoundHttpException('404');

        }
        return $truePageUrl;
    }

/*
    function pageUrlCheck($givenUrl, $truePageUrl){

        if ($givenUrl <> $truePageUrl){

            throw new NotFoundHttpException('404');

        }
        //echo $givenUrl . '<br>';
        //echo $truePageUrl . '<br>';
    }
*/

}

