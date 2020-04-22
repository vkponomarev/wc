<?php

namespace common\components\gii;


class CreateCalculator
{


    /**
     * Создание калькулятора для бекэнда:
     * 1.
     */

    /**
     * 1. Создать файл калькуляора /common/components/womenPages/calculation/HERE
     * 2. Создать текст для вставки в GetPages
     * 3. Создать текст для вставки в GetParams
     * 4. Создать текст для вставки в Result
     */


    function __construct($mainFolder, $calcFolder, $calcName, $calcCreate, $calcView, $calcResultUseFolder)
    {

        $this->names = $this->makeNames($calcName);

        if ($calcCreate == 1) {

            $this->createCalculator = $this->createCalculator(
                $calcFolder,
                $this->names['fileName'],
                $this->names['functionName']
            );

            if (!$this->createCalculator['result']) {

                //echo 'Калькулятор не создан';
                $this->result = [

                    'result' => false

                ];

            };

            $getParams = $this->createGetParams(
                $this->names['filePath'],
                $mainFolder,
                $this->names['functionName']
            );

            $result = $this->createResult(
                $this->names['filePath'],
                $mainFolder,
                $this->names['fileName'],
                $this->names['functionName'],
                $calcResultUseFolder
            );



        } else {

            $this->createCalculator['filePath'] = 'Файл калькулятора не был создан так как этот пунтк был выбран не создавать калькулятор.';
            $getParams = 'Файл getParams не был изменен так как калькулятор не был создан.';
            $result = 'Файл result не был изменен так как калькулятор не был создан.';
        }

        $this->createCalculatorView = $this->createView($calcView, $this->names['viewName']);

        $getPages = $this->createGetPages(
            $this->names['filePath'],
            $mainFolder,
            $this->names['viewName'],
            $this->names['functionName'],
            $calcCreate
        );


        $this->result = [
            'result' => true,
            'calculatorCreated' => $this->createCalculator['filePath'],
            'viewCreated' => $this->createCalculatorView['filePath'],
            'getPages' => $getPages,
            'getParams' => $getParams,
            'getResult' => $result
        ];


    }

    function makeNames($calcName)
    {

        $str = $calcName;
        $str = mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');
        //echo $str; //Тут Кто - То Был!

        //Имя файла для калькулятора
        $fileName = preg_replace('/\s/', '', $str);

        //Имя для функции
        $functionName = lcfirst($fileName);

        //Имя для файла вида
        $viewName = str_replace(' ', '-', $calcName);


        $filePath = realpath($_SERVER['DOCUMENT_ROOT'] . '/../../') . "/common/components/";
        $usePath = "/common/components/";

        return [

            'fileName' => $fileName,
            'functionName' => $functionName,
            'viewName' => $viewName,
            'filePath' => $filePath,
            'usePath' => $usePath,

        ];

    }

    function createCalculator($calcFolder, $fileName, $functionName)
    {


        $text = (new TemplateCalculator())->templateCalculator($fileName, $functionName);

        //делается попытка создать его
        $filePath = "../../common/components/" . $calcFolder . "/" . $fileName . ".php";

        if (file_exists($filePath)) {

            return [

                'message' => 'Калькулятор не создан так как уже имеется такой файл',
                'result' => false

            ];

        }

        $fp = fopen($filePath, "w");
        // записываем в файл текст
        fwrite($fp, $text);
        // закрываем
        fclose($fp);
        //chown($filePath, "ivan");
        //chmod ($filePath, 0777);
        return [

            'filePath' => $filePath,
            'message' => 'Калькулятор успешно создан',
            'result' => true

        ];

    }

    function createGetPages($filePath, $mainFolder, $viewName, $functionName, $calcCreate)
    {

        if ($calcCreate <> 1){
            $functionName = 'none';
        }
        $text = (new TemplateGetPages())->templateGetPages($viewName, $functionName);

        $fullPath = $filePath . $mainFolder . '/' . ucfirst($mainFolder) . 'GetPages.php';
        $s = file_get_contents($fullPath);
        $s = str_replace('return $getPages[$pageId];', $text . '         return $getPages[$pageId];', $s);

        //echo $s;

        file_put_contents($fullPath, $s);

        return $fullPath;

    }

    function createGetParams($filePath, $mainFolder, $functionName)
    {

        $text = (new TemplateGetParams())->templateGetParams($functionName);

        $fullPath = $filePath . $mainFolder . '/' . ucfirst($mainFolder) . 'GetParams.php';
        $s = file_get_contents($fullPath);
        $s = str_replace('return $getParams;', $text . '         return $getParams;', $s);

        //echo $s;

        file_put_contents($fullPath, $s);

        return $fullPath;

    }

    function createResult($filePath, $mainFolder, $fileName, $functionName, $calcResultUseFolder)
    {

        $text = (new TemplateResult())->templateResult($fileName, $functionName);
        $useText = 'use ' . $calcResultUseFolder . $fileName . ';';
        $fullPath = $filePath . $mainFolder . '/' . ucfirst($mainFolder) . 'Result.php';
        $s = file_get_contents($fullPath);
        $s = str_replace('return $result;', $text . '         return $result;', $s);

        $s = str_replace('//my-gii-use', $useText . '
//my-gii-use', $s);

        //echo $s;

        file_put_contents($fullPath, $s);

        return $fullPath;

    }


    function createView($calcView, $viewName)
    {


        $text = (new TemplateView())->templateView();

        //делается попытка создать его
        $filePath = "../../frontend/views/" . $calcView . "/" . $viewName . ".php";

        if (file_exists($filePath)) {

            return [

                'filePath' => 0,
                'message' => 'Калькулятор не создан так как уже имеется такой файл',
                'result' => false

            ];

        }

        $fp = fopen($filePath, "w");
        // записываем в файл текст
        fwrite($fp, $text);
        // закрываем
        fclose($fp);
        //chown($filePath, "ivan");
        //chmod ($filePath, 0777);
        return [

            'filePath' => $filePath,
            'message' => 'Файл вида калькулятора успешно создан',
            'result' => true

        ];

    }


}
