<?php

namespace common\components\womenPages\calculation;



use common\components\womenPages\additional\WomanCalculatorsDataArrays;
use Yii;
use yii\web\NotFoundHttpException;





class ChildGenderBloodRenewal
{


    public function childGenderBloodRenewal($motherBirthDate,$fatherBirthDate,$calculationDate){



        $calculationDateInverse = implode('-', array_reverse(explode('-', $calculationDate)));
        //echo $fatherBirthDate . '<br>';


        $calculationDate = new \DateTime($calculationDate);
        $fatherBirthDate = new \DateTime($fatherBirthDate);
        $motherBirthDate = new \DateTime($motherBirthDate);
        //echo 'Дата рождения папы ' .  $fatherBirthDate->format('Y-m-d') . '<br>';
        //echo 'Дата рождения мамы ' .  $motherBirthDate->format('Y-m-d') . '<br>';
        $countDaysFromFatherBirthDateToCalculationDate = $fatherBirthDate->diff($calculationDate);
        $countDaysFromFatherBirthDateToCalculationDate = $countDaysFromFatherBirthDateToCalculationDate->format('%a');
        $countFatherBloodRenewalFullTimes = (int) ($countDaysFromFatherBirthDateToCalculationDate/365/4);
        $countFatherBloodRenewalFullYears = $countFatherBloodRenewalFullTimes * 4;
        $fatherBirthDate->modify( "+ $countFatherBloodRenewalFullYears year");
        //echo 'Дата последнего обновления крови папы ' . $fatherBirthDate->format('Y-m-d') . '<br>';
        $countDaysFromFatherLastBloodRenewal = $fatherBirthDate->diff($calculationDate);

        $countDaysFromFatherLastBloodRenewal = $countDaysFromFatherLastBloodRenewal->format('%a');
        //echo 'Прошло дней от последнего обновления крови папы ' . $countDaysFromFatherLastBloodRenewal . '<br>';
        //echo $fatherBirthDate->format('Y-m-d') . '<br>';
        //echo $countDaysFromFatherLastBloodRenewal . '<br>';

        $countDaysFromMotherBirthDateToCalculationDate = $motherBirthDate->diff($calculationDate);
        $countDaysFromMotherBirthDateToCalculationDate = $countDaysFromMotherBirthDateToCalculationDate->format('%a');
        $countMotherBloodRenewalFullTimes = (int) ($countDaysFromMotherBirthDateToCalculationDate/365/3);
        $countMotherBloodRenewalFullYears = $countMotherBloodRenewalFullTimes * 3;
        $motherBirthDate->modify( "+ $countMotherBloodRenewalFullYears year");
        //echo 'Дата последнего обновления крови мамы' .  $motherBirthDate->format('Y-m-d') . '<br>';
        $countDaysFromMotherLastBloodRenewal = $motherBirthDate->diff($calculationDate);
        $countDaysFromMotherLastBloodRenewal = $countDaysFromMotherLastBloodRenewal->format('%a');
        //echo 'Прошло дней от последнего обновления крови мамы ' . $countDaysFromMotherLastBloodRenewal . '<br>';
        //echo $motherBirthDate->format('Y-m-d') . '<br>';
        //echo $countDaysFromMotherLastBloodRenewal . '<br>';

        // Если количество дней прошедших с последнего обновления крови матери больше чем
        // количество дней прошедних с последнего обновления крови отца то родиться девочка иначе мальчик
        if ($countDaysFromMotherLastBloodRenewal > $countDaysFromFatherLastBloodRenewal){

            $childGender = 'b';

        }else{

            $childGender = 'g';

        }

        // Если задана сегодняшняя дата для всего то ничего не выводим.
        if ($countDaysFromMotherLastBloodRenewal == 0) {

            $childGender = 'n';

        }

        return [
            'childGender' => $childGender,
            'countDaysFromMotherLastBloodRenewal' => $countDaysFromMotherLastBloodRenewal,
            'countDaysFromFatherLastBloodRenewal' => $countDaysFromFatherLastBloodRenewal,
            'fatherLastRenewalDate' => $fatherBirthDate->format('Y-m-d'),
            'motherLastRenewalDate' => $motherBirthDate->format('Y-m-d'),
        ];


    }

}
