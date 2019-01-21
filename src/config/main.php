<?php

return [
    'id' => 'z1site-backend',
    'language' => 'zh-CN',
    'name' => 'yii2-z1site',
    'basePath' => myzero1\z1site\components\MainLoader::getAppPath(),
    'runtimePath' => myzero1\z1site\components\MainLoader::getAppPath() . '/runtime', //basePath,runtimePath,vendorPath,timeZone
    'controllerNamespace' => 'myzero1\z1site\controllers',
    // 'defaultRoute' => '/adminlteiframe/layout', // for adminlteiframe theme
    // 'controllerMap' => [
    //     'adminlteiframe' => [ // for adminlteiframe theme
    //         'class' => 'myzero1\adminlteiframe\controllers\SiteController'
    //     ],
    // ],
    'bootstrap' => [
        'classMap' => function(){
            // \Yii::$classMap['myzero1\z1site\controllers\ActController'] = '@vendor/myzero1/yii2-z1site/src/controllers/act/ActController.php';
            // \Yii::$classMap['myzero1\z1site\models\LoginForm'] = '@vendor/myzero1/yii2-z1site/src/models/rewrite/LoginForm.php';
        }
    ],
    'modules' => [
        'z1siteid' => [ // z1siteid mybe ajust
            'class' => 'myzero1\z1site\Module',
        ],
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlte', // using the adminlte theme
                    // '@app/views' => '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlteiframe', // using the adminlteiframe theme
                ],
            ],
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'forceCopy' => false,
            /*'bundles'=> [
                'myzero1\adminlteiframe\assets\php\components\LayoutAsset' => [
                    'skin' => 'skin-red',// skin-{blue|black|purple|green|red|yellow}[-light],example skin-blue,skin-blue-light,
                    'menuRefreshTab' => false, // true,false
                    'jsVersion' => '1.7',
                    'cssVersion' => '1.7',
                ], // for adminlteiframe theme
                'myzero1\adminlteiframe\assets\php\components\AdminLteAsset' => [
                    'skin' => 'skin-red',// skin-{blue|black|purple|green|red|yellow}[-light],example skin-blue,skin-blue-light,
                    'jsVersion' => '1.7',
                    'cssVersion' => '1.7',
                ], // for adminlte theme
                'myzero1\adminlteiframe\assets\php\components\MainAsset' => [
                    'showJParticle' => 'false', // 'false'/'true', default 'true',required
                ], // for all theme
            ],*/
        ],
        'errorHandler' => [
            'errorAction' => 'z1siteid/site/error', // z1siteid mybe ajust
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'site/captcha' => 'site/captcha', // z1siteid mybe ajust
                '<controller:[\w\-]+>/<action:[\w\-]+>' => 'z1siteid/<controller>/<action>', // z1siteid mybe ajust
            ],
        ],
        'user' => [
            'identityClass' => 'myzero1\z1site\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
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
