<?php

namespace common\components\gii\createViewPartials\menu;


use common\components\mainPagesData\MainPagesDataLanguage;
use common\components\mainPagesData\MainPagesDataMenu;
use Yii;

class MenuTemplate
{


    function template($path)
    {
        $template = '';

        $languageSelection = (new MainPagesDataLanguage())->LanguageSelection();

        foreach ($languageSelection as $language) {
            $template = '';
            $menu = MainPagesDataMenu::menu($language['id']);

            foreach ($menu as $item) {

                if ($item['parent_id'] == 0) {


                    $template = $template . '
                
                <li class="dropdown dropdown-menu-hover"><a
                                        href="/' . $language['url'] . '/' . $item['url'] . '/"
                class="dropdown-toggle dropdown-a-extended"
                                        data-toggle="dropdown" role="button"
                                        aria-haspopup="false" aria-expanded="true">
                ' . $item['menu_name'] . '
                <span class="caret">
                </span>
                </a>
                                <ul class="dropdown-menu dropdown-extended">
                                    <li class="show-only-small-resolution dropdown-li-extended">
                                    <a href="/' . $language['url'] . '/"
                                                                                                   class="dropdown-li-a-extended">
                ' . $item['menu_name'] . '
                </a></li>
                ';

                    foreach ($menu as $itemParent) {

                        if ($itemParent['parent_id'] == $item['id']) {


                            $template = $template . '
                        <li class="dropdown-li-extended">
                                                <a href="/' . $language['url'] . '/' . $itemParent['url'] . '/"
                                                   class="dropdown-li-a-extended">
                        ' . $itemParent['menu_name'] . '
                        </a></li>
                        ';


                        }

                    }

                    $template = $template . '
                </ul>
                            </li>
                ';


                }

            }

            $template = $template . '
                </li>
                ';



            $fp = fopen($path . '/_' . $language['url'] . '.php', "w");
            // записываем в файл текст
            fwrite($fp, $template);
            // закрываем
            fclose($fp);



        }




        return $template;
    }


}
