<?php
namespace frontend\controllers;

use common\components\womenPages\WomenPages;
use common\models\components\WomanCalendars;
use common\models\Mail;
use common\components\mainPagesData\MainPagesData;
use common\models\Pages;
use common\models\Advertising;
use common\models\components\WomanCalculators;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Main controller
 * pageText($currentPage,$pageUsingKeys)
 *
 *
 *
 *
 */
class ScriptsController extends Controller
{


    public function actionIndex()
    {

        $mainPagesData = new MainPagesData('1',0, 0);

        return $this->render('index', [

        ]);

    }


    public function actionArtistsWork()
    {

        $this->layout = 'embed.php';

        //$mainPagesData = new MainPagesData('1',0, 0);

        return $this->render('artists-work', [

        ]);

    }

    public function actionTranslateUz()
    {

        $this->layout = 'embed.php';

        //$mainPagesData = new MainPagesData('1',0, 0);

        return $this->render('translate-uz', [

        ]);

    }

    public function actionShowAllEnglish()
    {

        $this->layout = 'embed.php';
        $mainPagesData = new MainPagesData(0,0);

        //$womenPages = new womenPages($mainPagesData->pageId);


        return $this->render('show-all-english', [

        ]);

    }

}
