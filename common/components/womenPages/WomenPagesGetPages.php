<?php

namespace common\components\womenPages;


use Yii;

class WomenPagesGetPages
{

    public function getPages($pageId)
    {

        $getPages[2] = [
            'pageName' => 'pregnancy-calculator',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '2.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/pregnant-daily-vitamin-d-intake-528/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'


        ];

        $getPages[5] = [
            'pageName' => 'pregnancy-calculator-menstrual',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '5.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/pregnant-daily-folic-acid-intake-549/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[6] = [
            'pageName' => 'pregnancy-calculator-conception-date',
            'getParam' => 'pregnancyCalculator',
            'specify' => 'none',
            'icon' => '6.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/pregnant-heart-rate-82/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[8] = [
            'pageName' => 'pregnancy-calculator-fetal-movement',
            'getParam' => 'pregnancyCalculationByFetalMovement',
            'specify' => 'none',
            'icon' => '8.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/pregnant-blood-pressure-550/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[9] = [
            'pageName' => 'pregnancy-calculator-weeks',
            'getParam' => 'pregnancyCalculatorWeeks',
            'specify' => 'none',
            'icon' => '9.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/pregnant-temperature-rate-116/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[23] = [
            'pageName' => 'pregnancy-calculator-monthly',
            'getParam' => 'pregnancyCalculatorWeeks',
            'specify' => 'none',
            'icon' => '23.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/how-much-water-should-pregnant-drink-128/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
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
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/how-much-blood-in-period-122/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

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
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/human-biorhythms-140/?embed=1&title=1" 
                        width="280" height="1200" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $getPages[35] = [
            'pageName' => 'child-height-weight',
            'getParam' => 'childHeightWeight',
            'specify' => 'none',
            'icon' => '35.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/children-temperature-rate-113/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $getPages[37] = [
            'pageName' => 'child-eyes-color',
            'getParam' => 'childEyesColor',
            'specify' => 'none',
            'icon' => '37.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/how-much-blood-in-child-121/?embed=1&title=1" 
                        width="280" height="970" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $getPages[40] = [
            'pageName' => 'child-height-future',
            'getParam' => 'childHeightFuture',
            'specify' => 'none',
            'icon' => '40.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/how-much-water-should-children-drink-126/?embed=1&title=1" 
                        width="280" height="770" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
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

        $getPages[61] = [
            'pageName' => 'probability-calculators',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '61.png',
        ];

        $getPages[62] = [
            'pageName' => 'probability-blue-eyed-children',
            'getParam' => 'childEyesColor',
            'specify' => 'none',
            'icon' => '62.png',
        ];

        $getPages[63] = [
            'pageName' => 'probability-brown-eyed-children',
            'getParam' => 'childEyesColor',
            'specify' => 'none',
            'icon' => '63.png',
        ];

        $getPages[64] = [
            'pageName' => 'probability-green-eyed-children',
            'getParam' => 'childEyesColor',
            'specify' => 'none',
            'icon' => '64.png',
        ];

        $getPages[65] = [
            'pageName' => 'probability-having-healthy-child',
            'getParam' => 'probabilityHavingHealthyChild',
            'specify' => 'none',
            'icon' => '65.png',
        ];

        $getPages[66] = [
            'pageName' => 'probability-having-sick-child',
            'getParam' => 'probabilityHavingHealthyChild',
            'specify' => 'none',
            'icon' => '66.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/smoking-index-146/?embed=1&title=1" 
                        width="280" height="800" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[67] = [
            'pageName' => 'child-hair-color',
            'getParam' => 'childHairColor',
            'specify' => 'none',
            'icon' => '67.png',
        ];

        $getPages[68] = [
            'pageName' => 'probability-having-fair-haired-child',
            'getParam' => 'probabilityHavingFairHairedChild',
            'specify' => 'none',
            'icon' => '68.png',
        ];

        $getPages[69] = [
            'pageName' => 'probability-having-dark-haired-child',
            'getParam' => 'probabilityHavingFairHairedChild',
            'specify' => 'none',
            'icon' => '69.png',
        ];

        $getPages[70] = [
            'pageName' => 'probability-having-child-with-genotype',
            'getParam' => 'probabilityHavingHealthyChild',
            'specify' => 'none',
            'icon' => '70.png',
        ];

        $getPages[71] = [
            'pageName' => 'probability-having-child-certain-gender',
            'getParam' => 'probabilityHavingChildCertainGender',
            'specify' => 'none',
            'icon' => '71.png',
        ];

        $getPages[72] = [
            'pageName' => 'probability-having-child-with-down-syndrome',
            'getParam' => 'probabilityHavingHealthyChild',
            'specify' => 'none',
            'icon' => '72.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/alcohol-driver-calculator-5799/?embed=1&title=1" 
                        width="280" height="1600" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $getPages[73] = [
            'pageName' => 'probability-having-color-blind-child',
            'getParam' => 'childColorBlindness',
            'specify' => 'none',
            'icon' => '73.png',
        ];

        $getPages[75] = [
            'pageName' => 'childrens-number-by-date-of-birth',
            'getParam' => 'childrensNumberByDateOfBirth',
            'specify' => 'none',
            'icon' => '75.png',
        ];

        $getPages[76] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => 'none',
            'icon' => '76.png',
        ];

        $getPages[77] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => '5',
            'icon' => '77.png',
        ];

        $getPages[78] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => '2',
            'icon' => '78.png',
        ];

        $getPages[79] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => '3',
            'icon' => '79.png',
        ];

        $getPages[81] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => '19',
            'icon' => '81.png',
        ];

        $getPages[82] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => '4',
            'icon' => '82.png',
        ];

        $getPages[84] = [
            'pageName' => 'probability-of-pregnancy',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => '1',
            'icon' => '84.png',
        ];

        $getPages[85] = [
            'pageName' => 'probability-of-miscarriage',
            'getParam' => 'probabilityOfPregnancy',
            'specify' => 'none',
            'icon' => '85.png',
        ];

        $getPages[86] = [
            'pageName' => 'probability-of-missed-miscarriage',
            'getParam' => 'probabilityOfMissedMiscarriage',
            'specify' => 'none',
            'icon' => '86.png',
        ];

        $getPages[87] = [
            'pageName' => 'probability-of-ectopic-pregnancy',
            'getParam' => 'probabilityOfEctopicPregnancy',
            'specify' => 'none',
            'icon' => '87.png',
        ];

        $getPages[88] = [
            'pageName' => 'probability-of-pregnancy-test',
            'getParam' => 'probabilityOfPregnancyTest',
            'specify' => 'none',
            'icon' => '88.png',
        ];

        $getPages[89] = [
            'pageName' => 'probability-of-in-vitro-fertilization',
            'getParam' => 'probabilityOfInVitroFertilization',
            'specify' => 'none',
            'icon' => '89.png',
        ];

        $getPages[90] = [
            'pageName' => 'probability-of-birth-of-girl',
            'getParam' => 'probabilityOfBirthOfGirl',
            'specify' => 'none',
            'icon' => '90.png',
        ];

        $getPages[91] = [
            'pageName' => 'probability-of-birth-of-girl',
            'getParam' => 'probabilityOfBirthOfGirl',
            'specify' => '5',
            'icon' => '91.png',
        ];

        $getPages[92] = [
            'pageName' => 'probability-of-birth-of-girl',
            'getParam' => 'probabilityOfBirthOfGirl',
            'specify' => '9',
            'icon' => '92.png',
        ];

        $getPages[93] = [
            'pageName' => 'probability-of-birth-of-girl',
            'getParam' => 'probabilityOfBirthOfGirl',
            'specify' => '6',
            'icon' => '93.png',
        ];

        $getPages[94] = [
            'pageName' => 'probability-of-birth-of-girl',
            'getParam' => 'probabilityOfBirthOfGirl',
            'specify' => '17',
            'icon' => '94.png',
        ];

        $getPages[95] = [
            'pageName' => 'probability-of-birth-of-girl',
            'getParam' => 'probabilityOfBirthOfGirl',
            'specify' => '10',
            'icon' => '95.png',
        ];

        $getPages[96] = [
            'pageName' => 'child-body-area',
            'getParam' => 'childBodyArea',
            'specify' => 'none',
            'icon' => '96.png',
        ];

        $getPages[97] = [
            'pageName' => 'child-body-mass-index',
            'getParam' => 'childBodyMassIndex',
            'specify' => 'none',
            'icon' => '97.png',
        ];

        $getPages[98] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 1],
            'icon' => '98.png',
        ];

        $getPages[99] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 2],
            'icon' => '98.png',
        ];

        $getPages[100] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 3],
            'icon' => '98.png',
        ];

        $getPages[101] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 4],
            'icon' => '98.png',
        ];

        $getPages[102] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 5],
            'icon' => '98.png',
        ];

        $getPages[103] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 6],
            'icon' => '98.png',
        ];

        $getPages[104] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 7],
            'icon' => '98.png',
        ];

        $getPages[105] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 8],
            'icon' => '98.png',
        ];

        $getPages[106] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 9],
            'icon' => '98.png',
        ];

        $getPages[107] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 10],
            'icon' => '98.png',
        ];

        $getPages[108] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 11],
            'icon' => '98.png',
        ];

        $getPages[109] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 0],
            'icon' => '98.png',
        ];

        $getPages[110] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 0],
            'icon' => '98.png',
        ];

        $getPages[111] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 0],
            'icon' => '98.png',
        ];

        $getPages[112] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [3, 0],
            'icon' => '98.png',
        ];

        $getPages[113] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [4, 0],
            'icon' => '98.png',
        ];

        $getPages[114] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [5, 0],
            'icon' => '98.png',
        ];

        $getPages[115] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [6, 0],
            'icon' => '98.png',
        ];

        $getPages[116] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [7, 0],
            'icon' => '98.png',
        ];

        $getPages[117] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [8, 0],
            'icon' => '98.png',
        ];

        $getPages[118] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [9, 0],
            'icon' => '98.png',
        ];

        $getPages[119] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [10, 0],
            'icon' => '98.png',
        ];

        $getPages[120] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [11, 0],
            'icon' => '98.png',
        ];

        $getPages[121] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 1],
            'icon' => '98.png',
        ];
        $getPages[122] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 2],
            'icon' => '98.png',
        ];
        $getPages[123] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 3],
            'icon' => '98.png',
        ];
        $getPages[124] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 4],
            'icon' => '98.png',
        ];
        $getPages[125] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 5],
            'icon' => '98.png',
        ];
        $getPages[126] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 6],
            'icon' => '98.png',
        ];
        $getPages[127] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 7],
            'icon' => '98.png',
        ];
        $getPages[128] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 8],
            'icon' => '98.png',
        ];
        $getPages[129] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 9],
            'icon' => '98.png',
        ];
        $getPages[130] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 10],
            'icon' => '98.png',
        ];
        $getPages[131] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 11],
            'icon' => '98.png',
        ];

        $getPages[132] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 1],
            'icon' => '98.png',
        ];
        $getPages[133] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 2],
            'icon' => '98.png',
        ];
        $getPages[134] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 3],
            'icon' => '98.png',
        ];
        $getPages[135] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 4],
            'icon' => '98.png',
        ];
        $getPages[136] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 5],
            'icon' => '98.png',
        ];
        $getPages[137] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 6],
            'icon' => '98.png',
        ];
        $getPages[138] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 7],
            'icon' => '98.png',
        ];
        $getPages[139] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 8],
            'icon' => '98.png',
        ];
        $getPages[140] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 9],
            'icon' => '98.png',
        ];
        $getPages[141] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 10],
            'icon' => '98.png',
        ];
        $getPages[142] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 11],
            'icon' => '98.png',
        ];


        $getPages[144] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 19,
            'icon' => '31.png',
        ];
        $getPages[145] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 20,
            'icon' => '31.png',
        ];
        $getPages[146] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 21,
            'icon' => '31.png',
        ];
        $getPages[147] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 22,
            'icon' => '31.png',
        ];
        $getPages[149] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 23,
            'icon' => '31.png',
        ];
        $getPages[150] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 24,
            'icon' => '31.png',
        ];
        $getPages[151] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 25,
            'icon' => '31.png',
        ];
        $getPages[152] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 26,
            'icon' => '31.png',
        ];
        $getPages[153] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 27,
            'icon' => '31.png',
        ];
        $getPages[154] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 28,
            'icon' => '31.png',
        ];
        $getPages[155] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 29,
            'icon' => '31.png',
        ];
        $getPages[156] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 30,
            'icon' => '31.png',
        ];
        $getPages[157] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 31,
            'icon' => '31.png',
        ];
        $getPages[158] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 32,
            'icon' => '31.png',
        ];
        $getPages[159] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 33,
            'icon' => '31.png',
        ];
        $getPages[160] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 34,
            'icon' => '31.png',
        ];
        $getPages[161] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 35,
            'icon' => '31.png',
        ];
        $getPages[162] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 36,
            'icon' => '31.png',
        ];
        $getPages[163] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 37,
            'icon' => '31.png',
        ];
        $getPages[164] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 38,
            'icon' => '31.png',
        ];
        $getPages[165] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 39,
            'icon' => '31.png',
        ];
        $getPages[166] = [
            'pageName' => 'pregnancy-calculator-weight',
            'getParam' => 'pregnancyCalculatorWeight',
            'specify' => 40,
            'icon' => '31.png',
        ];


        $getPages[167] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => 'none',
            'icon' => '167.png',
        ];

        $getPages[168] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 1],
            'icon' => '168.png',
        ];
        $getPages[169] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 2],
            'icon' => '169.png',
        ];
        $getPages[170] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 3],
            'icon' => '170.png',
        ];
        $getPages[171] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 4],
            'icon' => '171.png',
        ];
        $getPages[172] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 5],
            'icon' => '172.png',
        ];
        $getPages[173] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 6],
            'icon' => '173.png',
        ];
        $getPages[174] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 7],
            'icon' => '174.png',
        ];
        $getPages[175] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 8],
            'icon' => '175.png',
        ];
        $getPages[176] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 9],
            'icon' => '176.png',
        ];
        $getPages[177] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 10],
            'icon' => '177.png',
        ];
        $getPages[178] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [0, 11],
            'icon' => '178.png',
        ];
        $getPages[179] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 0],
            'icon' => '179.png',
        ];
        $getPages[180] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 0],
            'icon' => '180.png',
        ];
        $getPages[181] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [3, 0],
            'icon' => '181.png',
        ];
        $getPages[182] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [4, 0],
            'icon' => '182.png',
        ];
        $getPages[183] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [5, 0],
            'icon' => '183.png',
        ];
        $getPages[184] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [6, 0],
            'icon' => '184.png',
        ];
        $getPages[185] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [7, 0],
            'icon' => '185.png',
        ];
        $getPages[186] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [8, 0],
            'icon' => '186.png',
        ];
        $getPages[187] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [9, 0],
            'icon' => '187.png',
        ];
        $getPages[188] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [10, 0],
            'icon' => '188.png',
        ];
        $getPages[189] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [11, 0],
            'icon' => '189.png',
        ];
        $getPages[190] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 1],
            'icon' => '190.png',
        ];
        $getPages[191] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 2],
            'icon' => '191.png',
        ];
        $getPages[192] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 3],
            'icon' => '192.png',
        ];
        $getPages[193] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 4],
            'icon' => '193.png',
        ];
        $getPages[194] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 5],
            'icon' => '194.png',
        ];
        $getPages[195] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 6],
            'icon' => '195.png',
        ];
        $getPages[196] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 7],
            'icon' => '196.png',
        ];
        $getPages[197] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 8],
            'icon' => '197.png',
        ];
        $getPages[198] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 9],
            'icon' => '198.png',
        ];
        $getPages[199] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 10],
            'icon' => '199.png',
        ];
        $getPages[200] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [1, 11],
            'icon' => '200.png',
        ];
        $getPages[201] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 1],
            'icon' => '201.png',
        ];
        $getPages[202] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 2],
            'icon' => '202.png',
        ];
        $getPages[203] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 3],
            'icon' => '203.png',
        ];
        $getPages[204] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 4],
            'icon' => '204.png',
        ];
        $getPages[205] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 5],
            'icon' => '205.png',
        ];
        $getPages[206] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 6],
            'icon' => '206.png',
        ];
        $getPages[207] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 7],
            'icon' => '207.png',
        ];
        $getPages[208] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 8],
            'icon' => '208.png',
        ];
        $getPages[209] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 9],
            'icon' => '209.png',
        ];
        $getPages[210] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 10],
            'icon' => '210.png',
        ];
        $getPages[211] = [
            'pageName' => 'child-weigh-in-1-month',
            'getParam' => 'childHeightWeight',
            'specify' => [2, 11],
            'icon' => '211.png',
        ];


        $getPages[212] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => 'none',
            'icon' => '212.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/children-blood-pressure-89/?embed=1&title=1" 
                        width="280" height="800" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $getPages[213] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 1],
            'icon' => '212.png',
        ];
        $getPages[215] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 2],
            'icon' => '212.png',
        ];
        $getPages[216] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 3],
            'icon' => '212.png',
        ];
        $getPages[217] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 4],
            'icon' => '212.png',
        ];
        $getPages[218] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 5],
            'icon' => '212.png',
        ];
        $getPages[219] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 6],
            'icon' => '212.png',
        ];
        $getPages[220] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 7],
            'icon' => '212.png',
        ];
        $getPages[221] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 8],
            'icon' => '212.png',
        ];
        $getPages[222] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 9],
            'icon' => '212.png',
        ];
        $getPages[223] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 10],
            'icon' => '212.png',
        ];
        $getPages[224] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [0, 11],
            'icon' => '212.png',
        ];
        $getPages[225] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 0],
            'icon' => '212.png',
        ];
        $getPages[226] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 0],
            'icon' => '212.png',
        ];
        $getPages[227] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [3, 0],
            'icon' => '212.png',
        ];
        $getPages[228] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [4, 0],
            'icon' => '212.png',
        ];
        $getPages[229] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [5, 0],
            'icon' => '212.png',
        ];
        $getPages[230] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [6, 0],
            'icon' => '212.png',
        ];
        $getPages[231] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [7, 0],
            'icon' => '212.png',
        ];
        $getPages[232] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [8, 0],
            'icon' => '212.png',
        ];
        $getPages[233] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [9, 0],
            'icon' => '212.png',
        ];
        $getPages[234] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [10, 0],
            'icon' => '212.png',
        ];
        $getPages[235] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [11, 0],
            'icon' => '212.png',
        ];
        $getPages[236] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 1],
            'icon' => '212.png',
        ];
        $getPages[237] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 2],
            'icon' => '212.png',
        ];
        $getPages[238] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 3],
            'icon' => '212.png',
        ];
        $getPages[239] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 4],
            'icon' => '212.png',
        ];
        $getPages[240] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 5],
            'icon' => '212.png',
        ];
        $getPages[241] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 6],
            'icon' => '212.png',
        ];
        $getPages[242] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 7],
            'icon' => '212.png',
        ];
        $getPages[243] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 8],
            'icon' => '212.png',
        ];
        $getPages[244] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 9],
            'icon' => '212.png',
        ];
        $getPages[245] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 10],
            'icon' => '212.png',
        ];
        $getPages[246] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [1, 11],
            'icon' => '212.png',
        ];
        $getPages[247] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 1],
            'icon' => '212.png',
        ];
        $getPages[249] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 2],
            'icon' => '212.png',
        ];
        $getPages[250] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 3],
            'icon' => '212.png',
        ];
        $getPages[251] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 4],
            'icon' => '212.png',
        ];
        $getPages[252] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 5],
            'icon' => '212.png',
        ];
        $getPages[253] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 6],
            'icon' => '212.png',
        ];
        $getPages[254] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 7],
            'icon' => '212.png',
        ];
        $getPages[255] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 8],
            'icon' => '212.png',
        ];
        $getPages[256] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 9],
            'icon' => '212.png',
        ];
        $getPages[257] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 10],
            'icon' => '212.png',
        ];
        $getPages[258] = [
            'pageName' => 'child-sleep',
            'getParam' => 'childSleep',
            'specify' => [2, 11],
            'icon' => '212.png',
        ];

        $getPages[36] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 'none',
            'icon' => '36.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/childrens-daily-calorie-intake-505/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[261] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 1,
            'icon' => '36.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/childrens-daily-protein-intake-509/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[262] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 2,
            'icon' => '36.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/childrens-daily-fat-intake-513/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];
        $getPages[263] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 3,
            'icon' => '36.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/childrens-daily-vitamin-c-intake-524/?embed=1&title=1" 
                        width="280" height="670" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $getPages[264] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 4,
            'icon' => '36.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/childrens-daily-carbohydrates-intake-516/?embed=1&title=1" 
                        width="280" height="870" frameborder="0" scrolling="no" allowfullscreen> </iframe>'


        ];
        $getPages[265] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 5,
            'icon' => '36.png',
        ];
        $getPages[266] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 6,
            'icon' => '36.png',
        ];
        $getPages[267] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 7,
            'icon' => '36.png',
        ];
        $getPages[268] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 8,
            'icon' => '36.png',
        ];
        $getPages[269] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 9,
            'icon' => '36.png',
        ];
        $getPages[270] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 10,
            'icon' => '36.png',
        ];
        $getPages[271] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 11,
            'icon' => '36.png',
        ];
        $getPages[272] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 12,
            'icon' => '36.png',
        ];
        $getPages[273] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 13,
            'icon' => '36.png',
        ];
        $getPages[274] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 14,
            'icon' => '36.png',
        ];
        $getPages[275] = [
            'pageName' => 'child-food',
            'getParam' => 'childFood',
            'specify' => 15,
            'icon' => '36.png',
        ];
        $getPages[276] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '276.png',
            'embed' => '<iframe src="https://ihealthcalc.com/'. Yii::$app->language . '/health/children-heart-rate-78/?embed=1&title=1" 
                        width="280" height="800" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $getPages[277] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '277.png',
        ];
        $getPages[278] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '278.png',
        ];
        $getPages[279] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '279.png',
        ];
        $getPages[280] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '280.png',
        ];
        $getPages[281] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '276.png',
        ];
        $getPages[282] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '282.png',
        ];
        $getPages[283] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '283.png',
        ];
        $getPages[284] = [
            'pageName' => 'child-age',
            'getParam' => 'childAge',
            'specify' => 'none',
            'icon' => '284.png',
        ];

           $getPages[285] = [
            'pageName' => 'child-calculator',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => '285.png',
        ];
                
         return $getPages[$pageId];

    }

}

