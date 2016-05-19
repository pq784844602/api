<?php
$params = array_merge(
    require(__DIR__ . '/../../'.CORE.'/common/config/params.php'),
    require(__DIR__ . '/../../'.CORE.'/common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'rest-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    // 'modules' => [
    //     'v1' => [
    //         'class' => 'api\modules\v1\ApiModule'
    //     ],
    // ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession' => true,
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
        // 'urlManager' => [
        //     'enablePrettyUrl' => true,
        //     'enableStrictParsing' => true,
        //     'showScriptName' => false,
        //     'rules' => [
        //         ['class' => 'yii\rest\UrlRule', 'controller' => ['v1/user','v1/site']],
        //     ],
        // ],
        // 'request' => [
        //     'class' => '\yii\web\Request',
        //     'enableCookieValidation' => false,
        //     'parsers' => [
        //         'application/json' => 'yii\web\JsonParser',
        //     ],
        // ],
        // 'response' => [
        //     'format' => yii\web\Response::FORMAT_JSON,
        //     'charset' => 'UTF-8',
        // ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
