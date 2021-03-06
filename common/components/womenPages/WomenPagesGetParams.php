<?php

namespace common\components\womenPages;


use Yii;

class WomenPagesGetParams
{

    public function getParams($getParam)
    {

        if ($getParam == 0)
            $getParams[] = 0;
        if ($getParam == 'none')
            $getParams[] = 0;


        if ($getParam == 'pregnancyCalculator') {

            $getParams = [
                'method' => Yii::$app->request->get('method'),
                'date' => Yii::$app->request->get('date'),

                'large' => [800, 400],
                'middle' => [600, 460],
                'small' => [280, 550],

            ];
        }

        if ($getParam == 'pregnancyCalculationByFetalMovement') {

            $getParams = [
                'method' => Yii::$app->request->get('method'),
                'date' => Yii::$app->request->get('date'),

                'large' => [800, 380],
                'middle' => [600, 460],
                'small' => [280, 590],

            ];
        }

        if ($getParam == 'pregnancyCalculatorWeeks') {

            $getParams = [
                'method' => Yii::$app->request->get('method'),
                'date' => Yii::$app->request->get('date'),

                'large' => [1000, 1950],
                'middle' => [620, 2800],
                'small' => [305, 4820],

            ];
        }

        if ($getParam == 'pregnancyCalculatorWeight') {

            $getParams = [
                'weightBeforePregnancy' => Yii::$app->request->get('weight-before-pregnancy'),
                'pregnancyWeek' => Yii::$app->request->get('pregnancy-week'),
                'weightAfterPregnancy' => Yii::$app->request->get('weight-after-pregnancy'),
                'large' => [800, 580],
                'middle' => [600, 560],
                'small' => [280, 580],

            ];
        }

        if ($getParam == 'pregnancyCalculatorUzi') {

            $getParams = [
                'fetalLength' => Yii::$app->request->get('fetal-length'),
                'large' => [800, 380],
                'middle' => [600, 380],
                'small' => [280, 460],

            ];
        }

        if ($getParam == 'pregnancyCalculatorConceptionDateDueDate') {

            $getParams = [
                'date' => Yii::$app->request->get('date'),
                'large' => [800, 380],
                'middle' => [600, 390],
                'small' => [280, 390],

            ];
        }

        if ($getParam == 'calendarOvulation') {

            $getParams = [
                'date' => Yii::$app->request->get('date'),
                'cycleLength' => Yii::$app->request->get('cycle-length'),
                'menstrualLength' => Yii::$app->request->get('menstrual-length'),
                'large' => [1000, 1050],
                'middle' => [620, 1570],
                'small' => [305, 2800],

            ];
        }

        if ($getParam == 'calendarConception') {

            $getParams = [
                'date' => Yii::$app->request->get('date'),
                'cycleLength' => Yii::$app->request->get('cycle-length'),
                'menstrualLength' => Yii::$app->request->get('menstrual-length'),
                'large' => [1000, 1090],
                'middle' => [620, 1600],
                'small' => [305, 2890],

            ];
        }

        if ($getParam == 'calendarConceptionChinese') {

            $getParams = [
                'date' => Yii::$app->request->get('date'),
                'mothersAge' => Yii::$app->request->get('mother-age'),
                'large' => [1000, 1070],
                'middle' => [620, 1600],
                'small' => [305, 2860],

            ];
        }

        if ($getParam == 'calendarConceptionJapan') {

            $getParams = [
                'date' => Yii::$app->request->get('date'),
                'mothersMonthBirth' => Yii::$app->request->get('mother-birth'),
                'fathersMonthBirth' => Yii::$app->request->get('father-birth'),
                'large' => [1000, 1140],
                'middle' => [620, 1640],
                'small' => [305, 2920],

            ];

        }

        if ($getParam == 'childGenderBloodRenewal') {

            $getParams = [
                'date' => Yii::$app->request->get('date'),
                'motherBirthDate' => Yii::$app->request->get('mother-birth-date'),
                'fatherBirthDate' => Yii::$app->request->get('father-birth-date'),
                'large' => [800, 530],
                'middle' => [600, 620],
                'small' => [280, 740],

            ];

        }

        if ($getParam == 'childGenderBloodType') {

            $getParams = [
                'motherBloodType' => Yii::$app->request->get('mother-blood-type'),
                'fatherBloodType' => Yii::$app->request->get('father-blood-type'),
                'large' => [800, 430],
                'middle' => [600, 420],
                'small' => [280, 440],

            ];

        }

        if ($getParam == 'childGenderRhFactor') {

            $getParams = [
                'motherRhFactor' => Yii::$app->request->get('mother-rh-factor'),
                'fatherRhFactor' => Yii::$app->request->get('father-rh-factor'),
                'large' => [800, 430],
                'middle' => [600, 420],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'childHeightWeight') {

            $getParams = [
                'childGender' => Yii::$app->request->get('child-gender'),
                'childAgeYears' => Yii::$app->request->get('child-age-years'),
                'childAgeMonths' => Yii::$app->request->get('child-age-months'),
                'large' => [800, 550],
                'middle' => [600, 550],
                'small' => [280, 590],

            ];

        }

        if ($getParam == 'childEyesColor') {

            $getParams = [
                'motherEyesColor' => Yii::$app->request->get('mother-eyes-color'),
                'fatherEyesColor' => Yii::$app->request->get('father-eyes-color'),
                'large' => [800, 480],
                'middle' => [600, 470],
                'small' => [280, 470],

            ];

        }

        if ($getParam == 'childHeightFuture') {

            $getParams = [
                'childGender' => Yii::$app->request->get('child-gender'),
                'motherHeight' => Yii::$app->request->get('mother-height'),
                'fatherHeight' => Yii::$app->request->get('father-height'),
                'large' => [800, 570],
                'middle' => [600, 570],
                'small' => [280, 580],

            ];

        }

        if ($getParam == 'dueDatePregnancyWeek') {

            $getParams = [
                'pregnancyWeek' => Yii::$app->request->get('pregnancy-week'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'bloodTypeOfTheChild') {

            $getParams = [
                'motherBloodType' => Yii::$app->request->get('mother-blood-type'),
                'fatherBloodType' => Yii::$app->request->get('father-blood-type'),
                'large' => [800, 510],
                'middle' => [600, 500],
                'small' => [280, 580],

            ];

        }


        if ($getParam == 'childRhesusFactor') {

            $getParams = [
                'motherRhesusFactor' => Yii::$app->request->get('mother-rhesus-factor'),
                'fatherRhesusFactor' => Yii::$app->request->get('father-rhesus-factor'),
                'large' => [800, 480],
                'middle' => [600, 450],
                'small' => [280, 490],

            ];

        }

        if ($getParam == 'childLeftHandedOrRightHanded') {

            $getParams = [
                'motherHand' => Yii::$app->request->get('mother-hand'),
                'fatherHand' => Yii::$app->request->get('father-hand'),
                'large' => [800, 450],
                'middle' => [600, 450],
                'small' => [280, 490],

            ];

        }

        if ($getParam == 'childColorBlindness') {

            $getParams = [
                'motherColor' => Yii::$app->request->get('mother-color'),
                'fatherColor' => Yii::$app->request->get('father-color'),
                'large' => [800, 560],
                'middle' => [600, 560],
                'small' => [280, 610],

            ];

        }

        if ($getParam == 'childMigraine') {

            $getParams = [
                'motherMigraine' => Yii::$app->request->get('mother-migraine'),
                'fatherMigraine' => Yii::$app->request->get('father-migraine'),
                'large' => [800, 480],
                'middle' => [600, 480],
                'small' => [280, 520],

            ];

        }


        if ($getParam == 'childHemophilia') {

            $getParams = [
                'motherHemophilia' => Yii::$app->request->get('mother-hemophilia'),
                'fatherHemophilia' => Yii::$app->request->get('father-hemophilia'),
                'large' => [800, 580],
                'middle' => [600, 580],
                'small' => [280, 620],

            ];

        }

        if ($getParam == 'probabilityHavingHealthyChild') {

            $getParams = [

                'motherAge' => Yii::$app->request->get('mother-age'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'childHairColor') {

            $getParams = [

                'motherHairColor' => Yii::$app->request->get('mother-hair-color'),
                'fatherHairColor' => Yii::$app->request->get('father-hair-color'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'probabilityHavingFairHairedChild') {

            $getParams = [

                'motherHairColor' => Yii::$app->request->get('mother-hair-color'),
                'fatherHairColor' => Yii::$app->request->get('father-hair-color'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'probabilityHavingChildCertainGender') {

            $getParams = [

                'gender' => Yii::$app->request->get('gender'),
                'large' => [800, 480],
                'middle' => [600, 480],
                'small' => [280, 500],

            ];

        }

        if ($getParam == 'childrensNumberByDateOfBirth') {

            $getParams = [

                'date' => Yii::$app->request->get('date'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'probabilityOfPregnancy') {

            $getParams = [

                'contraception' => Yii::$app->request->get('contraception'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800, 510],
                'middle' => [600, 500],
                'small' => [280, 580],

            ];

        }

        if ($getParam == 'probabilityOfMissedMiscarriage') {

            $getParams = [

                'age' => Yii::$app->request->get('age'),
                'large' => [800, 440],
                'middle' => [600, 440],
                'small' => [280, 520],

            ];

        }

        if ($getParam == 'probabilityOfEctopicPregnancy') {

            $getParams = [

                'age' => Yii::$app->request->get('age'),
                'large' => [800, 600],
                'middle' => [600, 600],
                'small' => [280, 720],

            ];

        }

        if ($getParam == 'probabilityOfInVitroFertilization') {

            $getParams = [

                'age' => Yii::$app->request->get('age'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 400],

            ];

        }

        if ($getParam == 'probabilityOfBirthOfGirl') {

            $getParams = [

                'choose' => Yii::$app->request->get('choose'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'childBodyArea') {

            $getParams = [

                'height' => Yii::$app->request->get('height'),
                'weight' => Yii::$app->request->get('weight'),
                'large' => [800, 450],
                'middle' => [600, 450],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'childBodyMassIndex') {

            $getParams = [

                'childGender' => Yii::$app->request->get('child-gender'),
                'childAgeYears' => Yii::$app->request->get('child-age-years'),
                'childAgeMonths' => Yii::$app->request->get('child-age-months'),
                'height' => Yii::$app->request->get('height'),
                'weight' => Yii::$app->request->get('weight'),
                'large' => [800, 710],
                'middle' => [600, 700],
                'small' => [280, 800],

            ];

        }

        if ($getParam == 'childSleep') {

            $getParams = [

                'childGender' => Yii::$app->request->get('child-gender'),
                'childAgeYears' => Yii::$app->request->get('child-age-years'),
                'childAgeMonths' => Yii::$app->request->get('child-age-months'),
                'large' => [800, 570],
                'middle' => [600, 570],
                'small' => [280, 600],

            ];

        }

        if ($getParam == 'childFood') {

            $getParams = [

                'childAge' => Yii::$app->request->get('child-age'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];

        }

        if ($getParam == 'childAge') {

            $getParams = [

                'date' => Yii::$app->request->get('date'),
                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 480],

            ];


        }

        if ($getParam == 'probabilityOfPregnancyTest') {

            $getParams = [

                'large' => [800, 410],
                'middle' => [600, 400],
                'small' => [280, 580],

            ];
        }
        return $getParams;

    }

}
