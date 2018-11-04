<?php

return [
    'id' => 'z1site-backend',
    'basePath' => myzero1\z1site\components\MainLoader::getAppPath(),
    'runtimePath' => myzero1\z1site\components\MainLoader::getAppPath() . '/runtime', //basePath,runtimePath,vendorPath,timeZone
    'controllerNamespace' => 'myzero1\z1site\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'z1site' => [
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
        'view' => [
            'theme' => [
                'pathMap' => [
                    // '@app/views' => '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlteiframe', // using the adminlte theme
                    '@app/views' => '@vendor/myzero1/yii2-theme-layui/src/views', // using the adminlteiframe theme
                ],
            ],
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'forceCopy' => true,
            // 'linkAssets' => true,//link to assets,no cache.used in develop.
            'bundles'=> [
                'myzero1\layui\assets\php\components\LayoutAsset' => [
                    // 'copyright' => '<p><span>copyright @2018-2038 myzero1</span></p>', // false
                    'noticeUrl' => '/site/notice',
                    'mainUrl' => '/site/main',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
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
        'errorHandler' => [
            'errorAction' => 'z1site/site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:[\w\-]+>/<action:[\w\-]+>' => 'z1site/<controller>/<action>'
            ],
        ],
    ],
    'params' => require __DIR__ . '/params.php',
];
