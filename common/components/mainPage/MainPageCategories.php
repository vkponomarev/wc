<?php

namespace common\components\mainPage;



use Yii;

class MainPageCategories
{

    public function mainPageCategories(){

        $mainPageCategories = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.plates_title,
            pages_text.index_name
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where pages.main_page_active = 1
            and pages_text.languages_id = :languageId
            order by pages.sort
            ', [':languageId' => Yii::$app->params['language']['id']])->queryAll();

        //echo '<pre>';
        //var_dump($texts);
        // print_r($mainPageCategories);
        //echo '</pre>';

        return $mainPageCategories;

    }



}

