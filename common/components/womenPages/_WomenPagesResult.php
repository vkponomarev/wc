<?php

namespace common\components\womenPages;



use common\components\womenPages\additional\NameOfDaysInWeek;
use common\components\womenPages\additional\NameOfMonthsInYear;
use common\components\womenPages\calculation\BloodTypeOfTheChild;
use common\components\womenPages\calculation\ChildColorBlindness;
use common\components\womenPages\calculation\ChildEyesColorCalculation;
use common\components\womenPages\calculation\ChildGenderBloodRenewal;
use common\components\womenPages\calculation\ChildGenderBloodyType;
use common\components\womenPages\calculation\ChildGenderRhFactor;
use common\components\womenPages\calculation\ChildHand;
use common\components\womenPages\calculation\ChildHeightFutureCalculation;
use common\components\womenPages\calculation\ChildHemophilia;
use common\components\womenPages\calculation\ChildMigraine;
use common\components\womenPages\calculation\ChildRhesusFactor;
use common\components\womenPages\calculation\ChildWeightHeightCalculation;
use common\components\womenPages\calculation\ConceptionCalendar;
use common\components\womenPages\calculation\ConceptionChineseCalendar;
use common\components\womenPages\calculation\ConceptionDateByDueDateCalculation;
use common\components\womenPages\calculation\ConceptionJapanCalendar;
use common\components\womenPages\calculation\DueDateByPregnancyWeekCalculation;
use common\components\womenPages\calculation\OvulationCalendar;
use common\components\womenPages\calculation\PregnancyCalculation;
use common\components\womenPages\calculation\PregnancyCalculationByFetalMovement;
use common\components\womenPages\calculation\PregnancyCalendar;
use common\components\womenPages\calculation\PregnancyUziCalculation;
use common\components\womenPages\calculation\PregnancyWeightCalculation;
use Yii;









/**
 * Class HealthPagesResult
 * @package common\models\healthPages
 */
class WomenPagesResult
{

    public function result($getCalculationFunction, $getParams){

        if (!isset($getParams['date']))
            $getParams['date'] = (new \DateTime())->format('d-m-Y');



        if ($getCalculationFunction == 0)
            $result = 0;

        if ($getCalculationFunction == 'pregnancyCalculator') {
            $result = (new PregnancyCalculation())->pregnancyCalculation(
                $getParams['method'],
                $getParams['date']
            );
        }

        if ($getCalculationFunction == 'pregnancyCalculationByFetalMovement') {
            $result = (new PregnancyCalculationByFetalMovement())->pregnancyCalculationByFetalMovement(
                $getParams['method'],
                $getParams['date']
            );
        }

        if ($getCalculationFunction == 'pregnancyCalculatorWeeks') {
            $result = [
                'calendar' => (new PregnancyCalendar())->pregnancyCalendar(
                    $getParams['method'],
                    $getParams['date']),
                'calculation' => (new PregnancyCalculation())->pregnancyCalculation(
                    $getParams['method'],
                    $getParams['date']),
                'nameOfMonthsInYear' => (new NameOfMonthsInYear())->nameOfMonthsInYear($getParams['date']),
                'nameOfDaysInWeek' => (new NameOfDaysInWeek())->nameOfDaysInWeek(),
            ];
        }


        if ($getCalculationFunction == 'pregnancyCalculatorWeight') {
            $result = (new PregnancyWeightCalculation())->pregnancyWeightCalculation(
                $getParams['weightBeforePregnancy'],
                $getParams['weightAfterPregnancy'],
                $getParams['pregnancyWeek']
            );
        }

        if ($getCalculationFunction == 'pregnancyCalculatorUzi') {
            $result = (new PregnancyUziCalculation())->pregnancyUziCalculation(
                $getParams['fetalLength']
            );
        }

        if ($getCalculationFunction == 'pregnancyCalculatorConceptionDateDueDate') {
            $result = (new ConceptionDateByDueDateCalculation())->conceptionDateByDueDateCalculation(
                $getParams['date']
            );
        }

        if ($getCalculationFunction == 'calendarOvulation') {
            $result = [
                'calendar' => (new OvulationCalendar())->ovulationCalendar(
                    $getParams['menstrualLength'],
                    $getParams['cycleLength'],
                    $getParams['date']),
                'nameOfMonthsInYear' => (new NameOfMonthsInYear())->nameOfMonthsInYear($getParams['date']),
                'nameOfDaysInWeek' => (new NameOfDaysInWeek())->nameOfDaysInWeek(),
            ];
        }

        if ($getCalculationFunction == 'calendarConception') {
            $result = [
                'calendar' => (new ConceptionCalendar())->conceptionCalendar(
                    $getParams['menstrualLength'],
                    $getParams['cycleLength'],
                    $getParams['date']),
                'nameOfMonthsInYear' => (new NameOfMonthsInYear())->nameOfMonthsInYear($getParams['date']),
                'nameOfDaysInWeek' => (new NameOfDaysInWeek())->nameOfDaysInWeek(),
            ];
        }

        if ($getCalculationFunction == 'calendarConceptionChinese') {
            $result = [
                'calendar' => (new ConceptionChineseCalendar())->conceptionChineseCalendar(
                    $getParams['mothersAge'],
                    $getParams['date']),
                'nameOfMonthsInYear' => (new NameOfMonthsInYear())->nameOfMonthsInYear($getParams['date']),
                'nameOfDaysInWeek' => (new NameOfDaysInWeek())->nameOfDaysInWeek(),
            ];
        }

        if ($getCalculationFunction == 'calendarConceptionJapan') {
            $result = [
                'calendar' => (new ConceptionJapanCalendar())->conceptionJapanCalendar(
                    $getParams['mothersMonthBirth'],
                    $getParams['fathersMonthBirth'],
                    $getParams['date']),
                'nameOfMonthsInYear' => (new NameOfMonthsInYear())->nameOfMonthsInYear($getParams['date']),
                'nameOfDaysInWeek' => (new NameOfDaysInWeek())->nameOfDaysInWeek(),
            ];
        }


        if ($getCalculationFunction == 'childGenderBloodRenewal') {
            $result = (new ChildGenderBloodRenewal())->childGenderBloodRenewal(
                $getParams['motherBirthDate'],
                $getParams['fatherBirthDate'],
                $getParams['date']
            );
        }

        if ($getCalculationFunction == 'childGenderBloodType') {
            $result = (new ChildGenderBloodyType())->childGenderBloodType(
                $getParams['motherBloodType'],
                $getParams['fatherBloodType']
            );
        }

        if ($getCalculationFunction == 'childGenderRhFactor') {
            $result = (new ChildGenderRhFactor())->childGenderRhFactor(
                $getParams['motherRhFactor'],
                $getParams['fatherRhFactor']
            );
        }


        if ($getCalculationFunction == 'childHeightWeight') {
            $result = (new ChildWeightHeightCalculation())->childWeightHeightCalculation(
                $getParams['childGender'],
                $getParams['childAgeYears'],
                $getParams['childAgeMonths']
            );
        }

        if ($getCalculationFunction == 'childEyesColor') {
            $result = (new ChildEyesColorCalculation())->childEyesColorCalculation(
                $getParams['motherEyesColor'],
                $getParams['fatherEyesColor']
            );
        }

        if ($getCalculationFunction == 'childHeightFuture') {
            $result = (new ChildHeightFutureCalculation())->childHeightFutureCalculation(
                $getParams['childGender'],
                $getParams['motherHeight'],
                $getParams['fatherHeight']
            );
        }

        if ($getCalculationFunction == 'dueDatePregnancyWeek') {
            $result = (new DueDateByPregnancyWeekCalculation())->dueDateByPregnancyWeekCalculation(
                $getParams['pregnancyWeek']
            );
        }

        if ($getCalculationFunction == 'bloodTypeOfTheChild') {
            $result = (new BloodTypeOfTheChild())->bloodTypeOfTheChild(
                $getParams['motherBloodType'],
                $getParams['fatherBloodType']
            );
        }

        if ($getCalculationFunction == 'childRhesusFactor') {
            $result = (new ChildRhesusFactor())->childRhesusFactor(
                $getParams['motherRhesusFactor'],
                $getParams['fatherRhesusFactor']
            );
        }

        if ($getCalculationFunction == 'childLeftHandedOrRightHanded') {
            $result = (new ChildHand())->childHand(
                $getParams['motherHand'],
                $getParams['fatherHand']
            );
        }

        if ($getCalculationFunction == 'childColorBlindness') {
            $result = (new ChildColorBlindness())->childColorBlindness(
                $getParams['motherColor'],
                $getParams['fatherColor']
            );
        }

        if ($getCalculationFunction == 'childMigraine') {
            $result = (new ChildMigraine())->childMigraine(
                $getParams['motherMigraine'],
                $getParams['fatherMigraine']
            );
        }

        if ($getCalculationFunction == 'childHemophilia') {
            $result = (new ChildHemophilia())->childHemophilia(
                $getParams['motherHemophilia'],
                $getParams['fatherHemophilia']
            );
        }

        return $result;

    }

}
