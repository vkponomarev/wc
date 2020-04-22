<?php

namespace common\components\mainPagesData;



use Yii;

class MainPagesDataMenu
{

    public function menu($currentLanguageId){

        $menu = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.menu_name
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where pages.menu_active = 1 and pages_text.languages_id = "' . $currentLanguageId . '"
            order by pages.sort
            ')
            ->queryAll();

        //echo '<pre>';
        //var_dump($texts);
        //print_r($menu);
        //echo '</pre>';

        return $menu;

    }

}

