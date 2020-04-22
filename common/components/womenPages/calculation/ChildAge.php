<?php

namespace common\components\womenPages\calculation;


class ChildAge
{


    public function childAge($date)
    {
        $viewResult = 1;
        $childAge = 0;
        if (!$date) {
            $date = 0;
            $viewResult = 0;

        }

        if ($date) {
            $date = new \DateTime($date);
            $todayDate = new \DateTime();
            if ($date->format('Y-m-d') == $todayDate->format('Y-m-d')){
                $viewResult = 0;

                $date->modify('-6 month');
            }



            //echo '$date ' . $date->format('Y-m-d') . '<br>';
            //echo '$todayDate ' . $todayDate->format('Y-m-d') . '<br>';

            $childAge = date_diff($todayDate, $date);
            //$childAge = $childAge->format('%y');


            $childAge =[

                1 => $childAge->format('%y'),
                2 => $childAge->format('%m'),
                3 => $childAge->format('%d'),
                4 => $childAge->format('%h'),
                5 => $childAge->format('%i'),
                6 => $childAge->format('%s'),

            ];

        }

        //PARA: Date Should In YYYY-MM-DD Format
        //RESULT FORMAT:
        // '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'        =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
        // '%y Year %m Month %d Day'                                    =>  1 Year 3 Month 14 Days
        // '%m Month %d Day'                                            =>  3 Month 14 Day
        // '%d Day %h Hours'                                            =>  14 Day 11 Hours
        // '%d Day'                                                        =>  14 Days
        // '%h Hours %i Minute %s Seconds'                                =>  11 Hours 49 Minute 36 Seconds
        // '%i Minute %s Seconds'                                        =>  49 Minute 36 Seconds
        // '%h Hours                                                    =>  11 Hours
        // '%a Days                                                        =>  468 Days
        //////////////////////////////////////////////////////////////////////


        return [
            'childAge' => $childAge,
            'viewResult' => $viewResult,
        ];

    }

}
