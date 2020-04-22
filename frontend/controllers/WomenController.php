<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\components\womenPages\WomenPages;
//use common\components\womenPages\WomenPagesGetIcon;

use common\components\womenPages\womenPagesGetPages;
use common\components\mainPagesData\MainPagesData;
use common\components\mainPage\MainPage;
use common\models\Pages;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * MainPage controller
 *
 * Контроллер для главной страницы сайта
 *
 *
 *
 */
class WomenController extends Controller
{



    public function actionIndex()
    {
    }



    public function actionUrl($url)
    {

        $mainPagesData = new MainPagesData($url,0);

        $womenPages = new womenPages($mainPagesData->pageId);

        return $this->render($mainPagesData->workUrl, [

            'pageID' => $mainPagesData->pageId,
            //'parentCategories' => $mainPagesData->parentCategories,
            'getPages' => $womenPages->getPages,
            'getParams' => $womenPages->getParams,
            'result' => $womenPages->result,
            'getUrls' => $mainPagesData->getUrls,
            //'breadcrumbs' => $mainPagesData->breadcrumbs,



        ]);

    }







}
