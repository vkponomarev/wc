<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\components\cmsPages\CmsPages;

use common\models\Mail;
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
class CmsController extends Controller
{







    public function actionCookie()
    {

        $mainPagesData = new MainPagesData('cookie', 0);

        $cmsPages = new CmsPages($mainPagesData->pageId);

        $model = new Mail();

        if ($model->load(Yii::$app->request->post()) && $_POST['Mail']['check'] === 'nospam'){

            if ($model->validate() && $model->save()){
                $model->contact(Yii::$app->params['emailto']);
                Yii::$app->session->setFlash('success', 'send');
                //$pageViewData['successMess'] = true
                $this->refresh();
                return false;
            }

        }

        return $this->render($mainPagesData->workUrl, [

            'getPages' => $cmsPages->getPages,
            'getParams' => $cmsPages->getParams,
            'result' => $cmsPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'model' => $model,

        ]);

    }


    public function actionPolicy()
    {

        $mainPagesData = new MainPagesData('policy', 0);

        $cmsPages = new CmsPages($mainPagesData->pageId);

        $model = new Mail();

        if ($model->load(Yii::$app->request->post()) && $_POST['Mail']['check'] === 'nospam'){

            if ($model->validate() && $model->save()){
                $model->contact(Yii::$app->params['emailto']);
                Yii::$app->session->setFlash('success', 'send');
                //$pageViewData['successMess'] = true
                $this->refresh();
                return false;
            }

        }

        return $this->render($mainPagesData->workUrl, [

            'getPages' => $cmsPages->getPages,
            'getParams' => $cmsPages->getParams,
            'result' => $cmsPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'model' => $model,

        ]);

    }


    public function actionTranslation()
    {

        $mainPagesData = new MainPagesData('translation', 0);

        $cmsPages = new CmsPages($mainPagesData->pageId);

        $model = new Mail();

        if ($model->load(Yii::$app->request->post()) && $_POST['Mail']['check'] === 'nospam'){

            if ($model->validate() && $model->save()){
                $model->contact(Yii::$app->params['emailto']);
                Yii::$app->session->setFlash('success', 'send');
                //$pageViewData['successMess'] = true
                $this->refresh();
                return false;
            }

        }

        return $this->render($mainPagesData->workUrl, [

            'getPages' => $cmsPages->getPages,
            'getParams' => $cmsPages->getParams,
            'result' => $cmsPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'model' => $model,

        ]);

    }

    public function actionContact()
    {

        $mainPagesData = new MainPagesData('contact', 0);

        $cmsPages = new CmsPages($mainPagesData->pageId);

        $model = new Mail();

        if ($model->load(Yii::$app->request->post()) && $_POST['Mail']['check'] === 'nospam'){

            if ($model->validate() && $model->save()){
                $model->contact(Yii::$app->params['emailto']);
                Yii::$app->session->setFlash('success', 'send');
                //$pageViewData['successMess'] = true
                $this->refresh();
                return false;
            }

        }

        return $this->render($mainPagesData->workUrl, [

            'getPages' => $cmsPages->getPages,
            'getParams' => $cmsPages->getParams,
            'result' => $cmsPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'model' => $model,

        ]);

    }


    public function actionDonation()
    {

        $mainPagesData = new MainPagesData('donation', 0);

        $cmsPages = new CmsPages($mainPagesData->pageId);

        $model = new Mail();

        if ($model->load(Yii::$app->request->post()) && $_POST['Mail']['check'] === 'nospam'){

            if ($model->validate() && $model->save()){
                $model->contact(Yii::$app->params['emailto']);
                Yii::$app->session->setFlash('success', 'send');
                //$pageViewData['successMess'] = true
                $this->refresh();
                return false;
            }

        }

        return $this->render($mainPagesData->workUrl, [

            'getPages' => $cmsPages->getPages,
            'getParams' => $cmsPages->getParams,
            'result' => $cmsPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'model' => $model,

        ]);

    }



}
