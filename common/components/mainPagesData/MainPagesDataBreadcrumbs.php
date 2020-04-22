<?php

namespace common\components\mainPagesData;



use Yii;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeCalories;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeProtein;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeFat;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeCarbohydrates;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeWater;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeNuts;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeSalt;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeSugar;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeIron;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminC;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminD;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminE;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminD3;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminB12;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminOmega3;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeZinc;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeIodine;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeMagnesium;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakePotassium;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeCalcium;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeFolicAcid;
use common\models\healthPages\healthPagesNorms\HealthPagesHeartRate;
use common\models\healthPages\healthPagesNorms\HealthPagesBloodPressure;
use common\models\healthPages\healthPagesNorms\HealthPagesEyePressure;
use common\models\healthPages\healthPagesNorms\HealthPagesHumidityRate;
use common\models\healthPages\healthPagesNorms\HealthPagesGrowthRateChildrens;
use common\models\healthPages\healthPagesNorms\HealthPagesGrowthRateTeenagers;
use common\models\healthPages\healthPagesNorms\HealthPagesGrowthRate;
use common\models\healthPages\healthPagesNorms\HealthPagesBodyTemperatureRate;
use common\models\healthPages\healthPagesNorms\HealthPagesBloodCalculator;
use common\models\healthPages\healthPagesNorms\HealthPagesHowMuchDrinkWater;
use common\models\healthPages\healthPagesNorms\HealthPagesHowMuchWaterInMan;
use common\models\healthPages\healthPagesNorms\HealthPagesComfortableTemperature;
use common\models\healthPages\healthPagesNorms\HealthPagesHumanBiorhythms;
use common\models\healthPages\healthPagesNorms\HealthPagesLifeSpan;
use common\models\healthPages\healthPagesNorms\HealthPagesSmokingIndex;
use common\models\healthPages\healthPagesNorms\HealthPagesNicotineAddiction;
use common\models\healthPages\healthPagesNorms\HealthPagesPriceOfSmoking;

use common\models\healthPages\healthPagesNorms\HealthPagesAlcoholWithdrawal;
use common\models\healthPages\healthPagesNorms\HealthPagesDegreeOfIntoxication;
use common\models\healthPages\healthPagesNorms\HealthPagesPpmAlcohol;


/**
 * Class HealthPagesResult
 * @package common\models\healthPages
 */
class MainPagesDataBreadcrumbs
{



    public function mainPagesBreadcrumbs($parentPageId, $currentLanguageId, $givenUrl){



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








    /*
    public function mainPagesBreadcrumbs($parentPageId, $currentLanguageId){



            $mainPagesBreadcrumbs = Yii::$app->db
                ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.index_name
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where 
            pages.id = :parentPageId
            and pages_text.languages_id = :currentLanguageId
            and pages.active = 1
            ', [':parentPageId' => (int)$parentPageId, ':currentLanguageId' => (int)$currentLanguageId])
                ->queryONe();

            //echo '<pre>';
            //var_dump($texts);
            //print_r($mainPagesBreadcrumbs);
            //print_r(Yii::$app->params['mainPagesArray']);
            //echo '</pre>';


            return $mainPagesBreadcrumbs;

    }
*/

}

