<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);


return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    //'bootstrap' => ['debug'],
    //'modules' => [
    //    'debug' => [
    //        'class' => 'yii\debug\Module',
    //        'allowedIPs' => ['*'],
    //    ],
    //],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [

       'mailer' => [
            'class' => 'yii\swiftmailer\Mailer'
        ],
        'request' => [
           // 'csrfParam' => '_csrf-frontend',
            'baseUrl' => '', //убрать frontend/web
           // 'class' => 'codemix\localeurls\UrlManager',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['en','ru','es','pt','ja','de','ko','fr'],
            'enableDefaultLanguageUrlCode' => true,
            'rules' => [
                '/' => 'pages/index',
                '/<url>' => 'pages/one',
                '/print/<url>' => 'pages/print',
                '<action:(contact|login|logout|language|about|signup)>' => 'site/<action>',
                //'blog/<url>' => 'blog/one',
                //'blog' => 'blog/index',


            ],

            'suffix' => '/',
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'normalizeTrailingSlash' => true,
                'collapseSlashes' => true,
            ],

        ],


        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en',
                    
                ],
            ],
        ],


    ],
    'sourceLanguage' => 'en',
    'language' => 'en',
    'params' => $params,
];
