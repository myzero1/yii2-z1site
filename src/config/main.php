<?php

return [
    'id' => 'z1site-backend',
    'language' => 'zh-CN',
    'name' => 'yii2-z1site',
    'basePath' => myzero1\z1site\components\MainLoader::getAppPath(),
    'runtimePath' => myzero1\z1site\components\MainLoader::getAppPath() . '/runtime', //basePath,runtimePath,vendorPath,timeZone
    // 'defaultRoute' => '/adminlteiframe/layout', // for adminlteiframe theme
    'controllerNamespace' => 'myzero1\z1site\controllers',
    'controllerMap' => [
        // 'adminlteiframe' => [ // for adminlteiframe theme
        //     'class' => 'myzero1\adminlteiframe\controllers\SiteController'
        // ],
        'demo' => [ // for the menu of demo
            'class' => 'myzero1\adminlteiframe\controllers\DemoController'
        ]
    ],
    'bootstrap' => [
        'classMap' => function(){
            // \Yii::$classMap['myzero1\z1site\controllers\ActController'] = '@vendor/myzero1/yii2-z1site/src/controllers/act/ActController.php';
            // \Yii::$classMap['myzero1\z1site\models\LoginForm'] = '@vendor/myzero1/yii2-z1site/src/models/rewrite/LoginForm.php';
        }
    ],
    'modules' => [
        'z1siteid' => [ // z1siteid mybe ajust
            'class' => 'myzero1\z1site\Module',
            'params' => [
                'menu' => [
                    [
                        'id' => "平台首页",
                        'text' => "平台首页",
                        'title'=>"平台首页",
                        'icon' => "fa fa-dashboard",
                        'targetType' => 'iframe-tab',
                        'urlType' => 'abosulte',
                        'url' => ['/z1siteid/site/index'],
                        'isHome' => true,
                    ],
                    [
                        'id' => "level1",
                        'text' => "level1",
                        'title'=>"level1",
                        'icon' => "fa fa-dashboard",
                        'targetType' => 'iframe-tab',
                        'urlType' => 'abosulte',
                        'url' => ['/z1siteid/site/level1'],
                    ],
                    [
                        'id' => "level2",
                        'text' => "level2",
                        'title'=>"level2",
                        'icon' => "fa fa-laptop",
                        'url' => ['#'],
                        'children' => [
                            [
                                'id' => "level21",
                                'text' => "level21",
                                'title'=>"level21",
                                'icon' => "fa fa-angle-double-right",
                                'targetType' => 'iframe-tab',
                                'urlType' => 'abosulte',
                                'url' => ['/z1siteid/site/level21'],
                            ],
                            [
                                'id' => "level22",
                                'text' => "level22",
                                'title'=>"level22",
                                'icon' => "fa fa-angle-double-right",
                                'targetType' => 'iframe-tab',
                                'urlType' => 'abosulte',
                                'url' => ['/z1siteid/site/level22'],
                            ],
                        ],
                    ],
                ],
            ],
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
                'site/captcha' => 'site/captcha', // z1siteid mybe ajust
                '<controller:[\w\-]+>/<action:[\w\-]+>' => 'z1siteid/<controller>/<action>', // z1siteid mybe ajust
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
                    '@app/views' => '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlte', // using the adminlte theme
                    // '@app/views' => '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlteiframe', // using the adminlteiframe theme
                ],
            ],
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'forceCopy' => false,
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
