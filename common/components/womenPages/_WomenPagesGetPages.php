<?php

namespace common\components\womenPages;



use Yii;

class WomenPagesGetPages
{

    public function getPages($pageId){

        $getPages[2] = [
            'pageName' => 'pregnancy-calculator',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '2.png',
        ];

        $getPages[5] = [
            'pageName' => 'pregnancy-calculator-menstrual',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '5.png',
        ];

        $getPages[6] = [
            'pageName' => 'pregnancy-calculator-conception-date',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '6.png',
        ];

        $getPages[8] = [
            'pageName' => 'pregnancy-calculator-fetal-movement',
            'getParam' => 'pregnancyCalculationByFetalMovement',
            'specify' => 'none',
            'icon' => '8.png',
        ];

        $getPages[9] = [
            'pageName' => 'pregnancy-calculator-weeks',
            'getParam' => 'pregnancyCalculatorWeeks',
            'specify' => 'none',
            'icon' => '9.png',
        ];

        $getPages[23] = [
            'pageName' => 'pregnancy-calculator-monthly',
            'getParam' => 'pregnancyCalculatorWeeks',
            'specify' => 'none',
            'icon' => '23.png',
        ];

        $getPages[31] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 'none',
            'icon' => '31.png',
        ];

        $getPages[34] = [
            'pageName' => 'pregnancy-calculator-uzi',
            'getParam' => 'pregnancyCalculatorUzi',
            'specify' => 'none',
            'icon' => '34.png',
        ];

        $getPages[50] = [
            'pageName' => 'pregnancy-calculator-gestational-age',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '50.png',
        ];

        $getPages[52] = [
            'pageName' => 'pregnancy-calculator-conception-date-due-date',
            'getParam' => 'pregnancyCalculatorConceptionDateDueDate',
            'specify' => 'none',
            'icon' => '52.png',
        ];

        $getPages[3] = [
            'pageName' => 'calendar',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '3.png',
        ];

        $getPages[11] = [
            'pageName' => 'calendar-ovulation',
            'getParam' => 'calendarOvulation',
            'specify' => 'none',
            'icon' => '11.png',
        ];

        $getPages[12] = [
            'pageName' => 'calendar-menstruation',
            'getParam' => 'calendarOvulation',
            'specify' => 'none',
            'icon' => '12.png',
        ];

        $getPages[13] = [
            'pageName' => 'calendar-pregnancy',
            'getParam' => 'pregnancyCalculatorWeeks',
            'specify' => 'none',
            'icon' => '13.png',
        ];

        $getPages[14] = [
            'pageName' => 'calendar-conception',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '14.png',
        ];

        $getPages[15] = [
            'pageName' => 'calendar-conception-girl',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '15.png',
        ];

        $getPages[16] = [
            'pageName' => 'calendar-conception-boy',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '16.png',
        ];

        $getPages[17] = [
            'pageName' => 'calendar-conception-chinese',
            'getParam' => 'calendarConceptionChinese',
            'specify' => 'none',
            'icon' => '17.png',
        ];

        $getPages[24] = [
            'pageName' => 'calendar-conception-japan',
            'getParam' => 'calendarConceptionJapan',
            'specify' => 'none',
            'icon' => '24.png',
        ];

        $getPages[33] = [
            'pageName' => 'calendar-safe-days',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '33.png',
        ];

        $getPages[49] = [
            'pageName' => 'calendar-fertile-day',
            'getParam' => 'calendarOvulation',
            'specify' => 'none',
            'icon' => '49.png',
        ];

        $getPages[53] = [
            'pageName' => 'calendar-child-gender',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '53.png',
        ];

        $getPages[4] = [
            'pageName' => 'child-gender',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '4.png',
        ];

        $getPages[18] = [
            'pageName' => 'child-gender-blood-renewal',
            'getParam' => 'childGenderBloodRenewal',
            'specify' => 'none',
            'icon' => '18.png',
        ];

        $getPages[19] = [
            'pageName' => 'child-gender-blood-type',
            'getParam' => 'childGenderBloodType',
            'specify' => 'none',
            'icon' => '19.png',
        ];

        $getPages[20] = [
            'pageName' => 'child-gender-parents-age',
            'getParam' => 'childGenderBloodRenewal',
            'specify' => 'none',
            'icon' => '20.png',
        ];

        $getPages[21] = [
            'pageName' => 'child-gender-rh-factor',
            'getParam' => 'childGenderRhFactor',
            'specify' => 'none',
            'icon' => '21.png',
        ];

        $getPages[25] = [
            'pageName' => 'child-gender-chinese-table',
            'getParam' => 'calendarConceptionChinese',
            'specify' => 'none',
            'icon' => '25.png',
        ];

        $getPages[26] = [
            'pageName' => 'child-gender-japan-table',
            'getParam' => 'calendarConceptionJapan',
            'specify' => 'none',
            'icon' => '26.png',
        ];

        $getPages[27] = [
            'pageName' => 'child-gender-conception-date',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '27.png',
        ];

        $getPages[28] = [
            'pageName' => 'child-gender-latest-menstrual',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '28.png',
        ];

        $getPages[35] = [
            'pageName' => 'child-height-weight',
            'getParam' => 'childHeightWeight',
            'specify' => 'none',
            'icon' => '35.png',
        ];

        $getPages[37] = [
            'pageName' => 'child-eyes-color',
            'getParam' => 'childEyesColor',
            'specify' => 'none',
            'icon' => '37.png',
        ];

        $getPages[40] = [
            'pageName' => 'child-height-future',
            'getParam' => 'childHeightFuture',
            'specify' => 'none',
            'icon' => '40.png',
        ];

        $getPages[48] = [
            'pageName' => 'child-gender-ovulation',
            'getParam' => 'calendarConception',
            'specify' => 'none',
            'icon' => '48.png',
        ];

        $getPages[7] = [
            'pageName' => 'due-date',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '7.png',
        ];

        $getPages[29] = [
            'pageName' => 'due-date-menstrual',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '29.png',
        ];

        $getPages[30] = [
            'pageName' => 'due-date-conception-date',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '30.png',
        ];

        $getPages[51] = [
            'pageName' => 'due-date-pregnancy-week',
            'getParam' => 'dueDatePregnancyWeek',
            'specify' => 'none',
            'icon' => '51.png',
        ];


        $getPages[41] = [
            'pageName' => 'cms-donation',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '41.png',
        ];

        $getPages[42] = [
            'pageName' => 'cms-cookie',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '42.png',
        ];
        $getPages[43] = [
            'pageName' => 'cms-policy',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '43.png',
        ];
        $getPages[44] = [
            'pageName' => 'cms-translation',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '44.png',
        ];
        $getPages[45] = [
            'pageName' => 'cms-contact',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '45.png',
        ];


        $getPages[54] = [
            'pageName' => 'blood-type-of-the-child',
            'getParam' => 'bloodTypeOfTheChild',
            'specify' => 'none',
            'icon' => '54.png',
        ];


        $getPages[55] = [
            'pageName' => 'child-rhesus-factor',
            'getParam' => 'childRhesusFactor',
            'specify' => 'none',
            'icon' => '55.png',
        ];

        $getPages[57] = [
            'pageName' => 'child-left-handed-or-right-handed',
            'getParam' => 'childLeftHandedOrRightHanded',
            'specify' => 'none',
            'icon' => '57.png',
        ];

        $getPages[58] = [
            'pageName' => 'child-color-blindness',
            'getParam' => 'childColorBlindness',
            'specify' => 'none',
            'icon' => '58.png',
        ];

        $getPages[59] = [
            'pageName' => 'child-migraine',
            'getParam' => 'childMigraine',
            'specify' => 'none',
            'icon' => '59.png',
        ];

        $getPages[60] = [
            'pageName' => 'child-hemophilia',
            'getParam' => 'childHemophilia',
            'specify' => 'none',
            'icon' => '60.png',
        ];


        return $getPages[$pageId];

    }

}

