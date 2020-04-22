<?php

namespace common\components\womenPages\calculation;


class ChildBodyArea
{


    public function childBodyArea($height, $weight)
    {
        $viewResult = 1;

        if (!$height) {
            $height = 1;
            $height = 1;
            $viewResult = 0;

        }

        $childBodyArea = round(sqrt($height * $weight / 3600),2);

        return [

            'childBodyArea' => $childBodyArea,
            'viewResult' => $viewResult,
        ];
    }
}
