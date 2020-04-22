<?php

namespace common\components\womenPages\additional;

class WomanCalculatorsDataArraysSecond {


    public function diseaseProbability($motherAge){

        $childHemophilia[20] = [
            1 => 1667,
            2 => 526,
            ];

        $childHemophilia[21] = [
            1 => 1667,
            2 => 526,
            ];
        $childHemophilia[22] = [
            1 => 1429,
            2 => 500,
            ];
        $childHemophilia[23] = [
            1 => 1429,
            2 => 500,
            ];
        $childHemophilia[24] = [
            1 => 1250,
            2 => 476,
            ];
        $childHemophilia[25] = [
            1 => 1250,
            2 => 476,
            ];
        $childHemophilia[26] = [
            1 => 1176,
            2 => 476,
            ];
        $childHemophilia[27] = [
            1 => 1111,
            2 => 455,
            ];
        $childHemophilia[28] = [
            1 => 1053,
            2 => 435,
            ];
        $childHemophilia[29] = [
            1 => 1000,
            2 => 417,
            ];
        $childHemophilia[30] = [
            1 => 952,
            2 => 384,
            ];
        $childHemophilia[31] = [
            1 => 909,
            2 => 384,
            ];
        $childHemophilia[32] = [
            1 => 769,
            2 => 322,
            ];
        $childHemophilia[33] = [
            1 => 625,
            2 => 317,
            ];
        $childHemophilia[34] = [
            1 => 500,
            2 => 260,
            ];
        $childHemophilia[35] = [
            1 => 385,
            2 => 204,
            ];
        $childHemophilia[36] = [
            1 => 294,
            2 => 164,
            ];
        $childHemophilia[37] = [
            1 => 227,
            2 => 130,
            ];
        $childHemophilia[38] = [
            1 => 175,
            2 => 103,
            ];
        $childHemophilia[39] = [
            1 => 137,
            2 => 82,
            ];
        $childHemophilia[40] = [
            1 => 106,
            2 => 65,
            ];
        $childHemophilia[41] = [
            1 => 82,
            2 => 51,
            ];
        $childHemophilia[42] = [
            1 => 64,
            2 => 40,
            ];
        $childHemophilia[43] = [
            1 => 50,
            2 => 32,
            ];
        $childHemophilia[44] = [
            1 => 38,
            2 => 25,
            ];
        $childHemophilia[45] = [
            1 => 30,
            2 => 20,
            ];
        $childHemophilia[46] = [
            1 => 23,
            2 => 15,
            ];
        $childHemophilia[47] = [
            1 => 18,
            2 => 12,
            ];
        $childHemophilia[48] = [
            1 => 14,
            2 => 10,
            ];
        $childHemophilia[49] = [
            1 => 11,
            2 => 7,
            ];


        return $childHemophilia[$motherAge];

    }

    public function childHairColor($motherHairColor,$fatherHairColor){

        /**
        1 - Темный
         * 2 - Светлый
         * 3 - Рыжий
         */

        /**
        1 - Темный
         * 2 - темный или русый
         * 3 - 	блондин или светло-русый
         * 4 - не рыжий
         * 5 - 	рыжий
         * 6 - светло-русый или рыжий
         */


        $childHairColor['1']['1'] = 1;
        $childHairColor['1']['2'] = 2;
        $childHairColor['1']['3'] = 2;
        $childHairColor['2']['1'] = 2;
        $childHairColor['2']['2'] = 3;
        $childHairColor['2']['3'] = 6;
        $childHairColor['3']['1'] = 2;
        $childHairColor['3']['2'] = 6;
        $childHairColor['3']['3'] = 5;


        //,
        return $childHairColor[$motherHairColor][$fatherHairColor];


    }

    public function fairHairedChild($motherHairColor,$fatherHairColor){

        /**
         *
         * 1 - Темный гетерозиготный Аа
         * 2 - Темный гомозиготный АA
         * 3 - Светлый aa
         *
         */

        /**
         *
         * 1 - Темноволосый
         * 2 - Светловолосый
         *
         */





        $fairHairedChild['1']['1'] = [
            1 => 75,
            2=> 25,
        ];
        $fairHairedChild['1']['2'] = [
            1 => 99,
            2=> 1,
        ];
        $fairHairedChild['1']['3'] = [
            1 => 50,
            2=> 50,
        ];

        $fairHairedChild['2']['1'] = [
            1 => 99,
            2=> 1,
        ];
        $fairHairedChild['2']['2'] = [
            1 => 99,
            2=> 1,
        ];
        $fairHairedChild['2']['3'] = [
            1 => 99,
            2=> 1,
        ];
        $fairHairedChild['3']['1'] = [
            1 => 50,
            2=> 50,
        ];
        $fairHairedChild['3']['2'] = [
            1 => 99,
            2=> 1,
        ];
        $fairHairedChild['3']['3'] = [
            1 => 1,
            2=> 99,
        ];


        //,
        return $fairHairedChild[$motherHairColor][$fatherHairColor];


    }

    public function childCertainGender($gender){

        /**
         * 1- Девочка
         * 2- Мальчик
         */

        /**
         * 1 - Россия
         * 2 - Украина
         * 3 - США
         * 4 - Казахстан
         * 5 - Исландия
         *
         */

        $childCertainGender['1'] = [
            1 => 53.7,
            2 => 54,
            3 => 50.6,
            4 => 52,
            5 => 49.6,

            ];

        $childCertainGender['2'] = [
            1 => 46.3,
            2 => 46,
            3 => 49.4,
            4 => 48,
            5 => 50.4,

        ];


        //,
        return $childCertainGender[$gender];


    }

    public function contraception($contraception){

        /**Методы контрацепции
        1 Незащищенный половой акт:
        2 Незащищенный половой акт при месячных
        3 Незащищенный половой акт за день до месячных
        4 Незащищенный половой акт в день овуляции
        5 Прерванный половой акт
        6 Календарный метод
        7 Спермициды
        8 Презерватив (женский)
        9 Презерватив (мужской)
        10 Шеечные колпачки (рожавшие)
        11 Шеечные колпачки (нерожавшие)
        12 Влагалищная диафрагма
        13 Внутриматочная спираль
        14 Комплексные гормональные
        15 Прогестагеновые контрацептивы
        16 Симптотермальный метод распознавания плодности
        17 Стерилизация (женская)
        18 Стерилизация (мужская)
         *
         */

        /**
         * Индекс перля - 1
         * Проценты - 2
         */

        $contraceptionPoints['1'] = [
            1 => 0,
            2 => 85,
        ];
        $contraceptionPoints['2'] = [
            1 => 0,
            2 => 20,
        ];
        $contraceptionPoints['3'] = [
            1 => 0,
            2 => 25,
        ];
        $contraceptionPoints['4'] = [
            1 => 0,
            2 => '30 - 50',
        ];
        $contraceptionPoints['5'] = [
            1 => 18,
            2 => 19,
        ];
        $contraceptionPoints['6'] = [
            1 => '14 - 40',
            2 => 19,
        ];
        $contraceptionPoints['7'] = [
            1 => '18 - 30',
            2 => 26,
        ];
        $contraceptionPoints['8'] = [
            1 => '12 - 20',
            2 => 21,
        ];
        $contraceptionPoints['9'] = [
            1 => '12 - 20',
            2 => 14,
        ];
        $contraceptionPoints['10'] = [
            1 => 0,
            2 => 40,
        ];
        $contraceptionPoints['11'] = [
            1 => 0,
            2 => 20,
        ];
        $contraceptionPoints['12'] = [
            1 => 0,
            2 => 20,
        ];
        $contraceptionPoints['13'] = [
            1 => '0.8 - 1.9',
            2 => 1,
        ];
        $contraceptionPoints['14'] = [
            1 => '0.3 - 1.0',
            2 => 3,
        ];
        $contraceptionPoints['15'] = [
            1 => '0.4 - 4.3',
            2 => 3,
        ];
        $contraceptionPoints['16'] = [
            1 => '0.2 - 0.4',
            2 => 3,
        ];
        $contraceptionPoints['17'] = [
            1 => '0.1',
            2 => 0.5,
        ];
        $contraceptionPoints['18'] = [
            1 => '0.1',
            2 => 0.15,
        ];

        $contraceptionPoints['19'] = [
            1 => 0,
            2 => 25,
        ];

        //,
        return $contraceptionPoints[$contraception];


    }

    public function pregnancyProbability($age){

        /**
         * 1 - Вероятность забеременеть за 1 месяц
         * 2 - за 6 месяцев
         * 3 - за 1 год
         * 4 - за 2 года
         * 5 - вероятность выкидыша
         *
         */

        if ($age >= 18 and $age < 22)
            $pregnancyProbability = [
                1 => 25,
                2 => 82,
                3 => 96.8,
                4 => 99.9,
                5 => '5 - 10',
            ];
        if ($age >= 22 and $age < 24)
            $pregnancyProbability = [
                1 => 25,
                2 => 82,
                3 => 96.8,
                4 => 99.9,
                5 => '5 - 10',
            ];
        if ($age >= 24 and $age < 26)
            $pregnancyProbability = [
                1 => 25,
                2 => 82,
                3 => 96.8,
                4 => 99.9,
                5 => '5 - 10',
            ];
        if ($age >= 26 and $age < 28)
            $pregnancyProbability = [
                1 => 20,
                2 => 73,
                3 => 93.13,
                4 => 99.5,
                5 => '5 - 10',
            ];
        if ($age >= 28 and $age < 30)
            $pregnancyProbability = [
                1 => 20,
                2 => 73,
                3 => 93.1,
                4 => 99.5,
                5 => '5 - 10',
            ];
        if ($age >= 30 and $age < 32)
            $pregnancyProbability = [
                1 => 15,
                2 => 62,
                3 => 85.7,
                4 => 97.9,
                5 => 20,
            ];
        if ($age >= 32 and $age < 34)
            $pregnancyProbability = [
                1 => 15,
                2 => 62,
                3 => 85.7,
                4 => 97.9,
                5 => 20,
            ];
        if ($age >= 34 and $age < 36)
            $pregnancyProbability = [
                1 => 15,
                2 => 62,
                3 => 85.7,
                4 => 97.9,
                5 => 20,
            ];
        if ($age >= 36 and $age < 38)
            $pregnancyProbability = [
                1 => 10,
                2 => 46,
                3 => 71.7,
                4 => 95,
                5 => 25,
            ];
        if ($age >= 38 and $age < 40)
            $pregnancyProbability = [
                1 => 10,
                2 => 46,
                3 => 71.7,
                4 => 92,
                5 => 33,
            ];
        if ($age >= 40 and $age < 42)
            $pregnancyProbability = [
                1 => 5,
                2 => 26,
                3 => 45.9,
                4 => 70.8,
                5 => 33,
            ];
        if ($age >= 42 and $age <= 44)
            $pregnancyProbability = [
                1 => 5,
                2 => 26,
                3 => 45.9,
                4 => 70.8,
                5 => 33,
            ];
        //,
        return $pregnancyProbability;


    }

    public function childrensNumberByDateOfBirth($number){

        $result['1'] = '>3';
        $result['2'] = '2';
        $result['3'] = '1';
        $result['4'] = '2 - 3';
        $result['5'] = '2 - 3';
        $result['6'] = '>2';
        $result['7'] = '1';
        $result['8'] = '1';
        $result['9'] = '2';


        //,
        return $result[$number];


    }

    public function probabilityHavingChild($choose){

        /**
         * 1 - Девочка
         * 2 - Мальчик
         */

        $result['1'] = [
            1 => 1,
            2 => 0,
        ];
        $result['2'] = [
            1 => 2,
            2 => 0,
        ];
        $result['3'] = [
            1 => 3,
            2 => 0,
        ];
        $result['4'] = [
            1 => 4,
            2 => 0,
        ];
        $result['5'] = [
            1 => 0,
            2 => 1,
        ];
        $result['6'] = [
            1 => 0,
            2 => 2,
        ];
        $result['7'] = [
            1 => 0,
            2 => 3,
        ];
        $result['8'] = [
            1 => 0,
            2 => 4,
        ];
        $result['9'] = [
            1 => 1,
            2 => 1,
        ];
        $result['10'] = [
            1 => 1,
            2 => 2,
        ];
        $result['11'] = [
            1 => 2,
            2 => 1,
        ];
        $result['12'] = [
            1 => 2,
            2 => 2,
        ];
        $result['13'] = [
            1 => 3,
            2 => 1,
        ];
        $result['14'] = [
            1 => 3,
            2 => 2,
        ];
        $result['15'] = [
            1 => 3,
            2 => 3,
        ];
        $result['16'] = [
            1 => 1,
            2 => 3,
        ];
        $result['17'] = [
            1 => 2,
            2 => 3,
        ];


        //,
        return $result[$choose];


    }

    public function probabilityHavingChildPercent($choose){

        /**
         * 1 - Девочка
         * 2 - Мальчик
         */

        $result['1'] = 50;
        $result['2'] = 25;
        $result['3'] = 25;
        $result['4'] = 20;
        $result['5'] = 50;
        $result['6'] = 25;
        $result['7'] = 25;
        $result['8'] = 20;
        $result['9'] = 25;
        $result['10'] = 25;
        $result['11'] = 25;
        $result['12'] = 20;
        $result['13'] = 20;
        $result['14'] = 17;
        $result['15'] = 14;
        $result['16'] = 20;
        $result['17'] = 17;


        return $result[$choose];


    }

    public function childSleep(){

        // Килограммы
        $childSleep[0][0][0] = ['1-3','4-5'];
        $childSleep[0][0][1] = '5-6';
        $childSleep[0][0][2] = '16-19';


        $childSleep[0][1][0] = ['5-7','4-5'];
        $childSleep[0][1][1] = '8-11';
        $childSleep[0][1][2] = '14-17';


        $childSleep[0][2][0] = ['5-7','4-5'];
        $childSleep[0][2][1] = '8-11';
        $childSleep[0][2][2] = '14-17';


        $childSleep[0][3][0] = ['4-6','3-4'];
        $childSleep[0][3][1] = '10-12';
        $childSleep[0][3][2] = '14-17';


        $childSleep[0][4][0] = ['4-6','3-4'];
        $childSleep[0][4][1] = '10-12';
        $childSleep[0][4][2] = '14-17';


        $childSleep[0][5][0] = ['4-6','3-4'];
        $childSleep[0][5][1] = '10-12';
        $childSleep[0][5][2] = '14-17';


        $childSleep[0][6][0] = ['2-3','2-3'];
        $childSleep[0][6][1] = '10-12';
        $childSleep[0][6][2] = '12-15';


        $childSleep[0][7][0] = ['2-3','2-3'];
        $childSleep[0][7][1] = '10-12';
        $childSleep[0][7][2] = '12-15';


        $childSleep[0][8][0] = ['2-3','2-3'];
        $childSleep[0][8][1] = '10-12';
        $childSleep[0][8][2] = '12-15';


        $childSleep[0][9][0] = ['2-3','2-3'];
        $childSleep[0][9][1] = '10-12';
        $childSleep[0][9][2] = '12-15';


        $childSleep[0][10][0] = ['2-3','2-3'];
        $childSleep[0][10][1] = '10-12';
        $childSleep[0][10][2] = '12-15';


        $childSleep[0][11][0] = ['2-3','2-3'];
        $childSleep[0][11][1] = '10-12';
        $childSleep[0][11][2] = '12-15';


        $childSleep[1][0][0] = ['2-3','1-2'];
        $childSleep[1][0][1] = '10-12';
        $childSleep[1][0][2] = '12-14';


        $childSleep[1][1][0] = ['2-3','1-2'];
        $childSleep[1][1][1] = '10-12';
        $childSleep[1][1][2] = '12-14';


        $childSleep[1][2][0] = ['2-3','1-2'];
        $childSleep[1][2][1] = '10-12';
        $childSleep[1][2][2] = '12-14';

        $childSleep[1][3][0] = ['2-3','1-2'];
        $childSleep[1][3][1] = '10-12';
        $childSleep[1][3][2] = '12-14';


        $childSleep[1][4][0] = ['2-3','1-2'];
        $childSleep[1][4][1] = '10-12';
        $childSleep[1][4][2] = '12-14';


        $childSleep[1][5][0] = ['2-3','1-2'];
        $childSleep[1][5][1] = '10-12';
        $childSleep[1][5][2] = '12-14';


        $childSleep[1][6][0] = ['2-3','1-2'];
        $childSleep[1][6][1] = '10-12';
        $childSleep[1][6][2] = '12-14';


        $childSleep[1][7][0] = ['2-3','1-2'];
        $childSleep[1][7][1] = '10-12';
        $childSleep[1][7][2] = '12-14';


        $childSleep[1][8][0] = ['2-3','1-2'];
        $childSleep[1][8][1] = '10-12';
        $childSleep[1][8][2] = '12-14';


        $childSleep[1][9][0] = ['2-3','1-2'];
        $childSleep[1][9][1] = '10-12';
        $childSleep[1][9][2] = '12-14';

        $childSleep[1][10][0] = ['2-3','1-2'];
        $childSleep[1][10][1] = '10-12';
        $childSleep[1][10][2] = '12-14';


        $childSleep[1][11][0] = ['2-3','1-2'];
        $childSleep[1][11][1] = '10-12';
        $childSleep[1][11][2] = '12-14';

        $childSleep[2][0][0] = ['1-3','1'];
        $childSleep[2][0][1] = '10-11';
        $childSleep[2][0][2] = '11-13';

        $childSleep[2][1][0] = ['1-3','1'];
        $childSleep[2][1][1] = '10-11';
        $childSleep[2][1][2] = '11-13';

        $childSleep[2][2][0] = ['1-3','1'];
        $childSleep[2][2][1] = '10-11';
        $childSleep[2][2][2] = '11-13';


        $childSleep[2][3][0] = ['1-3','1'];
        $childSleep[2][3][1] = '10-11';
        $childSleep[2][3][2] = '11-13';


        $childSleep[2][4][0] = ['1-3','1'];
        $childSleep[2][4][1] = '10-11';
        $childSleep[2][4][2] = '11-13';

        $childSleep[2][5][0] = ['1-3','1'];
        $childSleep[2][5][1] = '10-11';
        $childSleep[2][5][2] = '11-13';

        $childSleep[2][6][0] = ['1-3','1'];
        $childSleep[2][6][1] = '10-11';
        $childSleep[2][6][2] = '11-13';

        $childSleep[2][7][0] = ['1-3','1'];
        $childSleep[2][7][1] = '10-11';
        $childSleep[2][7][2] = '11-13';


        $childSleep[2][8][0] = ['1-3','1'];
        $childSleep[2][8][1] = '10-11';
        $childSleep[2][8][2] = '11-13';


        $childSleep[2][9][0] = ['1-3','1'];
        $childSleep[2][9][1] = '10-11';
        $childSleep[2][9][2] = '11-13';


        $childSleep[2][10][0] = ['1-3','1'];
        $childSleep[2][10][1] = '10-11';
        $childSleep[2][10][2] = '11-13';


        $childSleep[2][11][0] = ['1-3','1'];
        $childSleep[2][11][1] = '10-11';
        $childSleep[2][11][2] = '11-13';


        $childSleep[3][0][0] = ['1-3','1'];
        $childSleep[3][0][1] = '10-11';
        $childSleep[3][0][2] = '11-13';


        $childSleep[3][1][0] = ['1-3','1'];
        $childSleep[3][1][1] = '10-11';
        $childSleep[3][1][2] = '11-13';


        $childSleep[3][2][0] = ['1-3','1'];
        $childSleep[3][2][1] = '10-11';
        $childSleep[3][2][2] = '11-13';


        $childSleep[3][3][0] = ['1-3','1'];
        $childSleep[3][3][1] = '10-11';
        $childSleep[3][3][2] = '11-13';


        $childSleep[3][4][0] = ['1-3','1'];
        $childSleep[3][4][1] = '10-11';
        $childSleep[3][4][2] = '11-13';

        $childSleep[3][5][0] = ['1-3','1'];
        $childSleep[3][5][1] = '10-11';
        $childSleep[3][5][2] = '11-13';

        $childSleep[3][6][0] = ['1-3','1'];
        $childSleep[3][6][1] = '10-11';
        $childSleep[3][6][2] = '11-13';

        $childSleep[3][7][0] = ['1-3','1'];
        $childSleep[3][7][1] = '10-11';
        $childSleep[3][7][2] = '11-13';

        $childSleep[3][8][0] = ['1-3','1'];
        $childSleep[3][8][1] = '10-11';
        $childSleep[3][8][2] = '11-13';

        $childSleep[3][9][0] = ['1-3','1'];
        $childSleep[3][9][1] = '10-11';
        $childSleep[3][9][2] = '11-13';


        $childSleep[3][10][0] = ['1-3','1'];
        $childSleep[3][10][1] = '10-11';
        $childSleep[3][10][2] = '11-13';


        $childSleep[3][11][0] =['1-3','1'];
        $childSleep[3][11][1] ='10-11';
        $childSleep[3][11][2] ='11-13';


        $childSleep[4][0][0] = ['1-2','1'];
        $childSleep[4][0][1] = '9.5-11';
        $childSleep[4][0][2] = '10-13';


        $childSleep[4][1][0] = ['1-2','1'];
        $childSleep[4][1][1] = '9.5-11';
        $childSleep[4][1][2] = '10-13';


        $childSleep[4][2][0] = ['1-2','1'];
        $childSleep[4][2][1] = '9.5-11';
        $childSleep[4][2][2] = '10-13';


        $childSleep[4][3][0] = ['1-2','1'];
        $childSleep[4][3][1] = '9.5-11';
        $childSleep[4][3][2] = '10-13';

        $childSleep[4][4][0] = ['1-2','1'];
        $childSleep[4][4][1] = '9.5-11';
        $childSleep[4][4][2] = '10-13';

        $childSleep[4][5][0] = ['1-2','1'];
        $childSleep[4][5][1] = '9.5-11';
        $childSleep[4][5][2] = '10-13';


        $childSleep[4][6][0] = ['1-2','1'];
        $childSleep[4][6][1] = '9.5-11';
        $childSleep[4][6][2] = '10-13';

        $childSleep[4][7][0] = ['1-2','1'];
        $childSleep[4][7][1] = '9.5-11';
        $childSleep[4][7][2] = '10-13';


        $childSleep[4][8][0] = ['1-2','1'];
        $childSleep[4][8][1] = '9.5-11';
        $childSleep[4][8][2] = '10-13';

        $childSleep[4][9][0] = ['1-2','1'];
        $childSleep[4][9][1] = '9.5-11';
        $childSleep[4][9][2] = '10-13';

        $childSleep[4][10][0] = ['1-2','1'];
        $childSleep[4][10][1] = '9.5-11';
        $childSleep[4][10][2] = '10-13';


        $childSleep[4][11][0] = ['1-2','1'];
        $childSleep[4][11][1] = '9.5-11';
        $childSleep[4][11][2] = '10-13';

        $childSleep[5][0][0] = ['1-2','1'];
        $childSleep[5][0][1] = '9.5-11';
        $childSleep[5][0][2] = '10-13';

        $childSleep[5][1][0] = ['1-2','1'];
        $childSleep[5][1][1] = '9.5-11';
        $childSleep[5][1][2] = '10-13';

        $childSleep[5][2][0] = ['1-2','1'];
        $childSleep[5][2][1] = '9.5-11';
        $childSleep[5][2][2] = '10-13';


        $childSleep[5][3][0] = ['1-2','1'];
        $childSleep[5][3][1] = '9.5-11';
        $childSleep[5][3][2] = '10-13';


        $childSleep[5][4][0] = ['1-2','1'];
        $childSleep[5][4][1] = '9.5-11';
        $childSleep[5][4][2] = '10-13';


        $childSleep[5][5][0] = ['1-2','1'];
        $childSleep[5][5][1] = '9.5-11';
        $childSleep[5][5][2] = '10-13';


        $childSleep[5][6][0] = ['1-2','1'];
        $childSleep[5][6][1] = '9.5-11';
        $childSleep[5][6][2] = '10-13';


        $childSleep[5][7][0] = ['1-2','1'];
        $childSleep[5][7][1] = '9.5-11';
        $childSleep[5][7][2] = '10-13';


        $childSleep[5][8][0] = ['1-2','1'];
        $childSleep[5][8][1] = '9.5-11';
        $childSleep[5][8][2] = '10-13';


        $childSleep[5][9][0] = ['1-2','1'];
        $childSleep[5][9][1] = '9.5-11';
        $childSleep[5][9][2] = '10-13';

        $childSleep[5][10][0] = ['1-2','1'];
        $childSleep[5][10][1] = '9.5-11';
        $childSleep[5][10][3] = '10-13';

        $childSleep[5][11][0] = ['1-2','1'];
        $childSleep[5][11][1] = '9.5-11';
        $childSleep[5][11][2] = '10-13';

        $childSleep[6][0][0] = ['1-2','1'];
        $childSleep[6][0][1] = '9.5-11';
        $childSleep[6][0][2] = '10-13';


        $childSleep[6][1][0] = ['1-2','1'];
        $childSleep[6][1][1] = '9.5-11';
        $childSleep[6][1][2] = '10-13';


        $childSleep[6][2][0] = ['1-2','1'];
        $childSleep[6][2][1] = '9.5-11';
        $childSleep[6][2][2] = '10-13';


        $childSleep[6][3][0] = ['1-2','1'];
        $childSleep[6][3][1] = '9.5-11';
        $childSleep[6][3][2] = '10-13';


        $childSleep[6][4][0] = ['1-2','1'];
        $childSleep[6][4][1] = '9.5-11';
        $childSleep[6][4][2] = '10-13';


        $childSleep[6][5][0] = ['1-2','1'];
        $childSleep[6][5][1] = '9.5-11';
        $childSleep[6][5][2] = '10-13';


        $childSleep[6][6][0] = ['1-2','1'];
        $childSleep[6][6][1] = '9.5-11';
        $childSleep[6][6][2] = '10-13';


        $childSleep[6][7][0] = ['1-2','1'];
        $childSleep[6][7][1] = '9.5-11';
        $childSleep[6][7][2] = '10-13';


        $childSleep[6][8][0] = ['1-2','1'];
        $childSleep[6][8][1] = '9.5-11';
        $childSleep[6][8][2] = '10-13';


        $childSleep[6][9][0] = ['1-2','1'];
        $childSleep[6][9][1] = '9.5-11';
        $childSleep[6][9][2] = '10-13';


        $childSleep[6][10][0] = ['1-2','1'];
        $childSleep[6][10][1] = '9.5-11';
        $childSleep[6][10][2] = '10-13';


        $childSleep[6][11][0] = ['1-2','1'];
        $childSleep[6][11][1] = '9.5-11';
        $childSleep[6][11][2] = '10-13';


        $childSleep[7][0][0] = ['0','0'];
        $childSleep[7][0][1] = '10-11';
        $childSleep[7][0][2] = '10-11';


        $childSleep[7][1][0] = ['0','0'];
        $childSleep[7][1][1] = '10-11';
        $childSleep[7][1][2] = '10-11';


        $childSleep[7][2][0] = ['0','0'];
        $childSleep[7][2][1] = '10-11';
        $childSleep[7][2][2] = '10-11';

        $childSleep[7][3][0] = ['0','0'];
        $childSleep[7][3][1] = '10-11';
        $childSleep[7][3][2] = '10-11';


        $childSleep[7][4][0] = ['0','0'];
        $childSleep[7][4][1] = '10-11';
        $childSleep[7][4][2] = '10-11';


        $childSleep[7][5][0] = ['0','0'];
        $childSleep[7][5][1] = '10-11';
        $childSleep[7][5][2] = '10-11';


        $childSleep[7][6][0] = ['0','0'];
        $childSleep[7][6][1] = '10-11';
        $childSleep[7][6][2] = '10-11';


        $childSleep[7][7][0] = ['0','0'];
        $childSleep[7][7][1] = '10-11';
        $childSleep[7][7][2] = '10-11';


        $childSleep[7][8][0] = ['0','0'];
        $childSleep[7][8][1] = '10-11';
        $childSleep[7][8][2] = '10-11';


        $childSleep[7][9][0] = ['0','0'];
        $childSleep[7][9][1] = '10-11';
        $childSleep[7][9][2] = '10-11';

        $childSleep[7][10][0] = ['0','0'];
        $childSleep[7][10][1] = '10-11';
        $childSleep[7][10][2] = '10-11';

        $childSleep[7][11][0] = ['0','0'];
        $childSleep[7][11][1] = '10-11';
        $childSleep[7][11][2] = '10-11';


        $childSleep[8][0][0] = ['0','0'];
        $childSleep[8][0][1] = '10-11';
        $childSleep[8][0][2] = '10-11';


        $childSleep[8][1][0] = ['0','0'];
        $childSleep[8][1][1] = '10-11';
        $childSleep[8][1][2] = '10-11';


        $childSleep[8][2][0] = ['0','0'];
        $childSleep[8][2][1] = '10-11';
        $childSleep[8][2][2] = '10-11';

        $childSleep[8][3][0] = ['0','0'];
        $childSleep[8][3][1] = '10-11';
        $childSleep[8][3][2] = '10-11';

        $childSleep[8][4][0] = ['0','0'];
        $childSleep[8][4][1] = '10-11';
        $childSleep[8][4][2] = '10-11';

        $childSleep[8][5][0] = ['0','0'];
        $childSleep[8][5][1] = '10-11';
        $childSleep[8][5][2] = '10-11';


        $childSleep[8][6][0] = ['0','0'];
        $childSleep[8][6][1] = '10-11';
        $childSleep[8][6][2] = '10-11';


        $childSleep[8][7][0] = ['0','0'];
        $childSleep[8][7][1] = '10-11';
        $childSleep[8][7][2] = '10-11';

        $childSleep[8][8][0] = ['0','0'];
        $childSleep[8][8][1] = '10-11';
        $childSleep[8][8][2] = '10-11';

        $childSleep[8][9][0] = ['0','0'];
        $childSleep[8][9][1] = '10-11';
        $childSleep[8][9][2] = '10-11';

        $childSleep[8][10][0] = ['0','0'];
        $childSleep[8][10][1] = '10-11';
        $childSleep[8][10][2] = '10-11';

        $childSleep[8][11][0] = ['0','0'];
        $childSleep[8][11][1] = '10-11';
        $childSleep[8][11][2] = '10-11';
  

        $childSleep[9][0][0] = ['0','0'];
        $childSleep[9][0][1] = '10-11';
        $childSleep[9][0][2] = '10-11';

        $childSleep[9][1][0] = ['0','0'];
        $childSleep[9][1][1] = '10-11';
        $childSleep[9][1][2] = '10-11';

        $childSleep[9][2][0] = ['0','0'];
        $childSleep[9][2][1] = '10-11';
        $childSleep[9][2][2] = '10-11';


        $childSleep[9][3][0] = ['0','0'];
        $childSleep[9][3][1] = '10-11';
        $childSleep[9][3][2] = '10-11';
 

        $childSleep[9][4][0] = ['0','0'];
        $childSleep[9][4][1] = '10-11';
        $childSleep[9][4][2] = '10-11';


        $childSleep[9][5][0] = ['0','0'];
        $childSleep[9][5][1] = '10-11';
        $childSleep[9][5][2] = '10-11';

        $childSleep[9][6][0] = ['0','0'];
        $childSleep[9][6][1] = '10-11';
        $childSleep[9][6][2] = '10-11';

        $childSleep[9][7][0] = ['0','0'];
        $childSleep[9][7][1] = '10-11';
        $childSleep[9][7][2] = '10-11';
 

        $childSleep[9][8][0] = ['0','0'];
        $childSleep[9][8][1] = '10-11';
        $childSleep[9][8][2] = '10-11';


        $childSleep[9][9][0] = ['0','0'];
        $childSleep[9][9][1] = '10-11';
        $childSleep[9][9][2] = '10-11';


        $childSleep[9][10][0] = ['0','0'];
        $childSleep[9][10][1] = '10-11';
        $childSleep[9][10][2] = '10-11';


        $childSleep[9][11][0] = ['0','0'];
        $childSleep[9][11][1] = '10-11';
        $childSleep[9][11][2] = '10-11';


        $childSleep[10][0][0] = ['0','0'];
        $childSleep[10][0][1] = '9-11';
        $childSleep[10][0][2] = '9-11';


        $childSleep[10][1][0] = ['0','0'];
        $childSleep[10][1][1] = '9-11';
        $childSleep[10][1][2] = '9-11';

        $childSleep[10][2][0] = ['0','0'];
        $childSleep[10][2][1] = '9-11';
        $childSleep[10][2][2] = '9-11';


        $childSleep[10][3][0] = ['0','0'];
        $childSleep[10][3][1] = '9-11';
        $childSleep[10][3][2] = '9-11';


        $childSleep[10][4][0] = ['0','0'];
        $childSleep[10][4][1] = '9-11';
        $childSleep[10][4][2] = '9-11';

        $childSleep[10][5][0] = ['0','0'];
        $childSleep[10][5][1] = '9-11';
        $childSleep[10][5][2] = '9-11';


        $childSleep[10][6][0] = ['0','0'];
        $childSleep[10][6][1] = '9-11';
        $childSleep[10][6][2] = '9-11';


        $childSleep[10][7][0] = ['0','0'];
        $childSleep[10][7][1] = '9-11';
        $childSleep[10][7][2] = '9-11';

        $childSleep[10][8][0] = ['0','0'];
        $childSleep[10][8][1] = '9-11';
        $childSleep[10][8][2] = '9-11';

        $childSleep[10][9][0] = ['0','0'];
        $childSleep[10][9][1] = '9-11';
        $childSleep[10][9][2] = '9-11';


        $childSleep[10][10][0] = ['0','0'];
        $childSleep[10][10][1] = '9-11';
        $childSleep[10][10][2] = '9-11';
  

        $childSleep[10][11][0] = ['0','0'];
        $childSleep[10][11][1] = '9-11';
        $childSleep[10][11][2] = '9-11';


        $childSleep[11][0][0] = ['0','0'];
        $childSleep[11][0][1] = '9-11';
        $childSleep[11][0][2] = '9-11';


        $childSleep[11][1][0] = ['0','0'];
        $childSleep[11][1][1] = '9-11';
        $childSleep[11][1][2] = '9-11';
  

        $childSleep[11][2][0] = ['0','0'];
        $childSleep[11][2][1] = '9-11';
        $childSleep[11][2][2] = '9-11';

        $childSleep[11][3][0] = ['0','0'];
        $childSleep[11][3][1] = '9-11';
        $childSleep[11][3][2] = '9-11';

        $childSleep[11][4][0] = ['0','0'];
        $childSleep[11][4][1] = '9-11';
        $childSleep[11][4][2] = '9-11';


        $childSleep[11][5][0] = ['0','0'];
        $childSleep[11][5][1] = '9-11';
        $childSleep[11][5][2] = '9-11';
 

        $childSleep[11][6][0] = ['0','0'];
        $childSleep[11][6][1] = '9-11';
        $childSleep[11][6][2] = '9-11';


        $childSleep[11][7][0] = ['0','0'];
        $childSleep[11][7][1] = '9-11';
        $childSleep[11][7][2] = '9-11';

        $childSleep[11][8][0] = ['0','0'];
        $childSleep[11][8][1] = '9-11';
        $childSleep[11][8][2] = '9-11';

        $childSleep[11][9][0] = ['0','0'];
        $childSleep[11][9][1] = '9-11';
        $childSleep[11][9][2] = '9-11';


        $childSleep[11][10][0] = ['0','0'];
        $childSleep[11][10][1] = '9-11';
        $childSleep[11][10][2] = '9-11';


        $childSleep[11][11][0] = ['0','0'];
        $childSleep[11][11][1] = '9-11';
        $childSleep[11][11][2] = '9-11';

        return $childSleep;


    }

    public function childFood(){

        // Килограммы
        $childFood[1] = ['20-60','200-300'];
        $childFood[2] = ['50-80','400'];
        $childFood[3] = ['60-90','500'];

        $childFood[4] = ['100-110','600'];
        $childFood[5] = ['120-150','700'];
        $childFood[6] = ['150-180','800'];
        $childFood[7] = ['180-210','900'];
        $childFood[8] = ['210-240','1000'];
        $childFood[9] = ['210-240','1000'];
        $childFood[10] = ['240-250','1000'];
        $childFood[11] = ['240-250','1000'];
        $childFood[12] = ['240-250','1000'];
        $childFood[13] = ['240-250','1000'];
        $childFood[14] = ['240-250','1000'];
        $childFood[15] = ['240-250','1000'];
        return $childFood;


    }


}