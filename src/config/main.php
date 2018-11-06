<?php

return [
    'id' => 'z1site-backend',
    'basePath' => myzero1\z1site\components\MainLoader::getAppPath(),
    'runtimePath' => myzero1\z1site\components\MainLoader::getAppPath() . '/runtime', //basePath,runtimePath,vendorPath,timeZone
    'controllerNamespace' => 'myzero1\z1site\controllers',
    'controllerMap' => [
        'site' => 'myzero1\z1site\controllers\SiteController',
        'extend' => 'myzero1\z1site\controllers\extendcontroller\ExtendController',
        'extendu' => 'myzero1\z1user\controllers\extendcontroller\ExtendController',
    ],
    'bootstrap' => ['log'],
    'modules' => [
        'z1siteid' => [ // z1siteid mybe ajust
            'class' => 'myzero1\z1site\Module',
        ],
        'z1user' => [
            'class' => 'myzero1\z1user\Module',
        ],
        'layui' => [
            'class' => 'myzero1\layui\Module',
        ],
    ],
    'components' => [
        'errorHandler' => [
            'errorAction' => 'z1siteid/site/error', // z1siteid mybe ajust
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // '<controller:[\w\-]+>/<action:[\w\-]+>' => 'z1siteid/<controller>/<action>' // z1siteid mybe ajust
            ],
        ],
        'user' => [
            'identityClass' => 'myzero1\z1site\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/myzero1/yii2-theme-layui/src/views', // using the layui theme
                ],
            ],
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'forceCopy' => true,
            // 'linkAssets' => true,//link to assets,no cache.used in develop.
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
    ],
    'params' => require __DIR__ . '/params.php',
];
