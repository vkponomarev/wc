<?php

namespace common\components\cmsPages;



use Yii;

class CmsPagesGetPages
{

    public function cmsPagesGetPages($pageId){

        $healthPagesGetPages[41] = [
            'pageName' => 'donation',
            'getParam' => 'none',
            'specify' => 'none',
        ];

        $healthPagesGetPages[42] = [
            'pageName' => 'cookie',
            'getParam' => 'none',
            'specify' => 'none',
        ];
        $healthPagesGetPages[43] = [
            'pageName' => 'policy',
            'getParam' => 'none',
            'specify' => 'none',
        ];
        $healthPagesGetPages[44] = [
            'pageName' => 'translation',
            'getParam' => 'none',
            'specify' => 'none',
        ];
        $healthPagesGetPages[45] = [
            'pageName' => 'contact',
            'getParam' => 'none',
            'specify' => 'none',
        ];


        return $healthPagesGetPages[$pageId];

    }



}

