<?php

namespace common\components\gii\createViewPartials\breadcrumbs;


use common\models\Languages;
use common\models\Pages;
use Yii;

class BreadcrumbsTemplate
{


    function template($path, $partialsConfig)
    {

        set_time_limit(300);
        $template = '';

        $pages = Pages::find()->andWhere(['active' => 1])->all();
        $languages = Languages::find()->andWhere(['active' => 1])->all();

        //основной цикл это мы проходимся по каждой странице.


        foreach ($pages as $page) {


            //в этом цикле мы создаем папки для страниц по id страницы
            $pagePath = $path . '/' . $page['id'];
            if (!is_dir($pagePath)) {

                mkdir($pagePath, 0755, true);

            }

            //второй цикл мы проходимся по каждому из активных языков


            foreach ($languages as $language) {

                $template = '';
                //здесь мы запускаем создание крошек для конкретного языка и конкретной страницы

                //если parent_id<>0
                if ($page['parent_id'] <> 0) {
                    //то создаем для этой страницы крошки
                    $breadcrumbs = $this->mainPagesBreadcrumbs($page['parent_id'], $language['id']);
                    $position = 1;
                    foreach ($breadcrumbs as $breadcrumb) {
                        $position++;

                        $template = $template . '
<li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            /  <a href="/' . $language['url'] . '/' . $breadcrumb['url'] . '/" itemprop="item">
                    <span itemprop="name">
                        ' . $breadcrumb['plates_title'] . '
                    </span>
                            </a>
                            <meta itemprop="position" content="' . $position . '" />
                        </li>';


                    }

                    $fp = fopen($pagePath . '/_' . $language['url'] . '.php', "w");
                    // записываем в файл текст
                    fwrite($fp, $template);
                    // закрываем
                    fclose($fp);


                } else {

                    //если parent_id == 0 то здесь крошек не должно быть то есть создаем пустой файл
                    $template = '';
                    $fp = fopen($pagePath . '/_' . $language['url'] . '.php', "w");
                    // записываем в файл текст
                    fwrite($fp, $template);
                    // закрываем
                    fclose($fp);

                }

            }


        }


    }


    function mainPagesBreadcrumbs($parentPageId, $currentLanguageId)
    {


        //$params = [':parentPageId' => (int)$parentPageId, ':currentLanguageId' => (int)$currentLanguageId, ':active' =>1];
        $mainPagesBreadcrumbs = Yii::$app->db
            ->createCommand('
                SELECT T2.id, T2.url, T3.plates_title
                FROM (
                    SELECT
                        @r AS _id,
                        @p := @r AS previous,
                        (SELECT @r := parent_id FROM pages WHERE id = _id) AS parent_id,
                        @l := @l + 1 AS lvl
                    FROM
                        (SELECT @r := ' . $parentPageId . ', @p := 0, @l := 0) vars,
                        pages h
                    WHERE @r <> 0 AND @r <> @p) T1
                JOIN pages T2
                ON T1._id = T2.id
                JOIN pages_text T3
                ON T1._id = T3.pages_id where T3.languages_id = ' . $currentLanguageId . '
                ORDER BY T1.lvl DESC
                ')
            ->queryAll();


        //echo '<pre>';
        //var_dump($texts);
        //print_r($mainPagesBreadcrumbs);
        //print_r(Yii::$app->params['mainPagesArray']);
        //echo '</pre>';


        return $mainPagesBreadcrumbs;

    }


}
