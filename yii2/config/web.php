<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
      'admin'=>[
        'class' => 'app\modules\admin\Module',
      ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'K6L2Cb_-KB3JMi1iluIQsA1cGYruVOwf',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        'baseUrl'=>'/web',
        'defaultRoute' => 'site/hello',
        'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false,
              'rules' => [
                // '<controller:\w+>/<id:\d+>' => '<controller>/view',
                // '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                // '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                // '<controller>/<action>/<id:\d+>'=>'<controller>/<action>',
                'view/<id:\d+>' => 'site/view',
                // 'view/<id:\d+>' => 'admin/default/view',
                '/' => 'site/index',
                '<action:\w+>' => 'site/<action>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                // '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>'
                // '<module:[\w-]+>/<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>] => <module>/<controller>/<action>'
                // '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>'
                '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',﻿
                // '/' => 'site/hello'
                // 'defaultRoute' => 'site/hello',
              ],
         ],
         ],


    'params' => $params,
];

// return [
//     'modules'=> [
//         'gii'=> [
//             'class'=>'system.gii.GiiModule',
//             'password'=> 123
//         ],
//     ],
// ]

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
