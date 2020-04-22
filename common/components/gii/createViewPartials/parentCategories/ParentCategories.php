<?php

namespace common\components\gii\createViewPartials\parentCategories;


use Yii;

class ParentCategories
{



    function __construct($partialsConfig)
    {

        $this->realPath = $this->realPath($partialsConfig);
        $this->clean($this->realPath);
        $this->create($this->realPath, $partialsConfig);

    }

    function realPath($partialsConfig)
    {

        return realpath($_SERVER['DOCUMENT_ROOT'] . '/../../') . "/frontend/views/" . $partialsConfig['path'];

    }

    function clean($path)
    {
        //(new \common\components\dump\Dump())->printR($path);
        // если путь существует и это папка
        if (file_exists($path) AND is_dir($path)) {
            // открываем папку
            //(new \common\components\dump\Dump())->printR($path);
            $dir = opendir($path);
            while (false !== ($element = readdir($dir))) {
                // удаляем только содержимое папки
                if ($element != '.' AND $element != '..') {
                    $tmp = $path . '/' . $element;
                    chmod($tmp, 0777);
                    // если элемент является папкой, то
                    // удаляем его используя нашу функцию RDir
                    if (is_dir($tmp)) {
                        $this->clean($tmp);
                        // если элемент является файлом, то удаляем файл
                    } else {
                        unlink($tmp);
                    }
                }
            }
            // закрываем папку
            closedir($dir);
            // удаляем саму папку
            if (file_exists($path)) {
                rmdir($path);
            }
        }

    }


    /**
     * Для того чтобы создать крошки нам нужно
     * 1. ID страницы
     * 2. language
     * 3. код вытаскивающий все кроши данной страницы и язык.
     * 4. код сохраняющий полученные данные.
     *
     *
     */


    function create($path, $partialsConfig)
    {




        //(new \common\components\dump\Dump())->printR($path);
        //Создаем папку
        if (!is_dir($path)) {

             mkdir($path, 0755, true);

        }

        //создаем основной файл для крошек
        $template = '<div>
<?=$this->render(\'/partials/view/parent-categories/\' . $pageID . \'/_\' . Yii::$app->language);?>
</div>
<div class="clearfix"></div>';
        $fp = fopen($path . '/' . $partialsConfig['getParam'] . '.php', "w");
        // записываем в файл текст
        fwrite($fp, $template);
        // закрываем
        fclose($fp);



        //создаем все прошки
        $template = (new ParentCategoriesTemplate())->template($path, $partialsConfig);


    }

}
