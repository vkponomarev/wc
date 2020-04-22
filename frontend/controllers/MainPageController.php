<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\components\mainPagesData\MainPagesData;
use common\components\mainPage\MainPage;
use yii\web\Controller;

/**
 * MainPage controller
 *
 * Контроллер для главной страницы сайта
 *
 *
 *
 */
class MainPageController extends Controller
{



    public function actionIndex()
    {


        $mainPagesData = new MainPagesData('index',0);

        $mainPage = new MainPage();

        //$getPagesIcon = (new WomenPagesGetIcon())->womenPagesGetIcon();

        return $this->render('index', [

            'mainPageCategories' => $mainPage->mainPageCategories,
            //'getPagesIcon'=> $getPagesIcon,

        ]);

    }


}
