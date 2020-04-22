<?php

namespace common\components\gii\createViewPartials\parentCategories;


use common\components\mainPagesData\MainPagesDataParentCategories;
use common\models\Languages;
use common\models\Pages;

class ParentCategoriesTemplate
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
                //здесь мы запускаем создание ссылок на категории для конкретного языка и страницы

                    //$breadcrumbs = $this->mainPagesBreadcrumbs($page['parent_id'], $language['id']);
                    $parentCategories = (new MainPagesDataParentCategories())->parentCategories($page['id'], $language['id'], $page['parent_id']);

                    foreach ($parentCategories as $parentCategory) {

                        if ($parentCategory['url'] <> $page['url']) {

                            $template = $template . '
            <a href="/' . $language['url'] . '/' . $parentCategory['url'] . '/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                <div class="plates">

                    <p><img class="plates-img" src="/files/category-icons/' . $parentCategory['id'] . '.png" alt="' . $parentCategory['plates_title'] . '" width="50"></p>

                    <p class="plates-title">' . $parentCategory['plates_title'] . '
                    </p>
                    <p class="plates-under-title"></p>
                </div>
            </a>
';

                        }

                    }

                    $fp = fopen($pagePath . '/_' . $language['url'] . '.php', "w");
                    // записываем в файл текст
                    fwrite($fp, $template);
                    // закрываем
                    fclose($fp);

            }


        }
    }
}
