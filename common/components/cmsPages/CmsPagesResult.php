<?php

namespace common\components\cmsPages;



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
class CmsPagesResult
{

    /**
     * @param $getCalculationFunction
     * @param $getParams
     * @return mixed
     */
    public function cmsPagesResult($getCalculationFunction, $getParams){


        if ($getCalculationFunction == 0)
            $healthPagesResult = 0;


        return $healthPagesResult;

    }



}

