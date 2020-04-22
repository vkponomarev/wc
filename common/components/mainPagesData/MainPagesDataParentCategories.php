<?php

namespace common\components\mainPagesData;



use Yii;

class MainPagesDataParentCategories
{

    public function parentCategories($pageId, $currentLanguageId, $parentPageId){

        $parentCategories = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.plates_title
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where 
            pages.parent_id = '. $pageId .' 
            and pages_text.languages_id = ' . $currentLanguageId . ' 
            and pages.active=1
            order by pages.sort
            ')
            ->queryAll();

        //echo '<pre>';
        //var_dump($texts);
        //print_r($parentCategories);
        //echo '</pre>';

        if (!$parentCategories) {

            $parentCategories = Yii::$app->db
                ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.plates_title
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where 
            pages.parent_id = '. $parentPageId .' 
            and pages_text.languages_id = ' . $currentLanguageId . ' 
            and pages.active=1
            order by pages.sort
            ')
                ->queryAll();

        }

        //echo '<pre>';
        //var_dump($texts);
        //print_r($parentCategories);
        //echo '</pre>';


        return $parentCategories;

    }

}

