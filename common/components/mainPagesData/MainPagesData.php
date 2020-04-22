<?php

namespace common\components\mainPagesData;


use Yii;



class MainPagesData
{

    /**
    Yii::$app->params['language']; // массив с данными текущего языка
    Yii::$app->params['language']['name'] // Название языка
    Yii::$app->params['language']['id'] // id языка
    Yii::$app->params['language']['selection'] // меню выбора языка

    Yii::$app->params['page'] // массив с сео текстами текущей страницы
    Yii::$app->params['page']['title']
    Yii::$app->params['page']['h1']
    Yii::$app->params['page']['description']
    Yii::$app->params['page']['text1']
    Yii::$app->params['page']['text2']
     *
    //Yii::$app->params['menu'] массив с меню
     *
     */

    function __construct($givenUrl, $mainUrl)
    {

        /** Запускаем проверку введенного урла если какие либо ошибки возвращаем 404
         * Если все нормально возвращаем pageId
         */
        $checkResult = new MainPagesDataUrlCheck($givenUrl);

        /** Вытаскиваем текущий язык и его данные и записываем в глобальную переменную*/
        $currentLanguage = $this->currentLanguage();
        /** Вытаскиваем все активные языки для построения выбора языка и записываем в глобальную переменную*/
        //$this->languageSelection(); Перевел на готовый html

        /** Записываем в глобальные переменные все сео текста данной страницы*/
        $this->pageText($checkResult->pageId, $currentLanguage['id']);

        /** Объявляем переменную pageId*/

        $this->pageId = $checkResult->pageId;


        /** Записываем в глобальную переменную наше меню на определенном языке*/
        //$this->menu($currentLanguage['id']); Перевел на готовый html

        //$this->mainBreadcrumb($mainUrl);

        /** Если мы не на главной странице то вытаскиваем внутренние категории текущей категории*/
        //$this->parentCategories = $this->parentCategories($checkResult->pageId, $currentLanguage['id'], $givenUrl, $checkResult->parentPageId);
        // Отключено так как сделали физические файлы для каждого случая

        $this->mainPagesArrayMainPage();

        //$this->breadcrumbs = $this->mainPagesBreadcrumbs($checkResult->parentPageId, $currentLanguage['id']);
        //$this->breadcrumbs = $this->mainPagesBreadcrumbs($checkResult->parentPageId, $currentLanguage['id'], $givenUrl); Отключили так как сделали физические крошки

        /** Записываем в глобальную переменную массив с главными страницами сайта*/


        /** Проверяем это встроенная страница или нет и присваиваем ссответствующие данные
         * Yii::$app->controller->layout layout обычный или для embed
         * $this->workUrl рабочий урл страницы
         * Yii::$app->params['embed'] true/false
         * Yii::$app->params['embedTitle'] true/false
         */
        $this->workUrl = $this->embed();

        $this->getUrls = [

            'mainUrl' => $this->mainPagesArray($mainUrl),
            'url' => $givenUrl,

        ];

        $this->canonical($givenUrl, $mainUrl);
        //$this->alternate($givenUrl, $mainUrl);

    }

    function currentLanguage()
    {

        $currentLanguage = MainPagesDataLanguage::currentLanguage();
        Yii::$app->params['language']['name'] = $currentLanguage['name'];
        Yii::$app->params['language']['id'] = $currentLanguage['id'];
        Yii::$app->params['language']['url'] = $currentLanguage['url'];
        return $currentLanguage;

    }


    function languageSelection()
    {

        $languageSelection = MainPagesDataLanguage::LanguageSelection();
        Yii::$app->params['language']['selection'] = $languageSelection;
        //return $currentLanguage;

    }


    function pageText($currentPageId, $currentLanguageId)
    {

        $pageText = MainPagesDataPageText::pageText($currentPageId, $currentLanguageId);
        //return $pageText;
        Yii::$app->params['page']['title'] = $pageText['title'];
        Yii::$app->params['page']['h1'] = $pageText['h1'];
        Yii::$app->params['page']['description'] = $pageText['description'];
        Yii::$app->params['page']['text1'] = $pageText['text1'];
        Yii::$app->params['page']['text2'] = $pageText['text2'];

    }


    function menu($currentLanguageId)
    {

        $menu = MainPagesDataMenu::menu($currentLanguageId);
        Yii::$app->params['menu'] = $menu;
        //$key = array_search($mainUrl, array_column($menu, 'url'));
        //Yii::$app->params['breadcrumbsMain'] = $menu[$key];


    }
    /*
    function mainBreadcrumb($mainUrl)
    {

        $key = array_search($mainUrl, array_column(Yii::$app->params['menu'], 'url'));
        Yii::$app->params['breadcrumbsMain'] = Yii::$app->params['menu'][$key];

    }*/

    function parentCategories($pageId, $currentLanguageId, $givenUrl, $parentPageId)
    {

        if ($givenUrl <> 'index') {

            $parentCategories = MainPagesDataParentCategories::parentCategories($pageId, $currentLanguageId, $parentPageId);
            return $parentCategories;
        } else {

            return 0;

        }

    }

    function mainPagesArrayMainPage()
    {

        $mainPagesArray = MainPagesDataArray::mainPagesArrayMainPage();
        Yii::$app->params['mainPagesArray'] = $mainPagesArray;

    }

    function mainPagesBreadcrumbs($parentPageId, $currentLanguageId, $givenUrl)
    {

        return (new MainPagesDataBreadcrumbs)->mainPagesBreadcrumbs($parentPageId, $currentLanguageId, $givenUrl);

    }

    function embed()
    {

        $embed = new MainPagesDataEmbed();
        return $embed->workUrl;

    }

    function mainPagesArray($mainUrl)
    {

        return $mainPagesArray = MainPagesDataArray::mainPagesArray($mainUrl);

    }

    function canonical($givenUrl, $mainUrl)
    {

        (new MainPagesDataCanonical())->canonical($givenUrl, $mainUrl);

    }

    function alternate($givenUrl, $mainUrl)
    {

        (new MainPagesDataAlternate())->alternate($givenUrl, $mainUrl);

    }



    function test()
    {

        echo 'test is good';

    }


}
