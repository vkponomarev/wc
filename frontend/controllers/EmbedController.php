<?php
namespace frontend\controllers;


use common\components\mainPagesData\MainPagesData;
use common\components\mainPagesData\MainPagesDataEmbedPage;
use Yii;
use yii\web\Controller;


/**
 * MainPage controller
 *
 * Контроллер для главной страницы сайта
 *
 *
 *
 */
class EmbedController extends Controller
{



    public function actionIndex()
    {
        $embedUrl = Yii::$app->request->get('embed-url');

        if ($embedUrl) {

            $embed = new MainPagesDataEmbedPage();

            $mainPagesData = new MainPagesData('embed', 0);

            return $this->render('index', [

                'getParams' => $embed->getEmbedPageParams->getParams,
                'embedUrl' => $embed->getEmbedParams['embedUrl'],
                'embedTitle' => $embed->getEmbedParams['embedTitle'],

            ]);
        }else{

            $mainPagesData = new MainPagesData('embed', 0);

            return $this->render('embed');

        }

    }


}
