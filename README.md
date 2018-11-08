yii2-z1site
========================
It is a module for site.It will loading config file according to the conditions.and there are the common pages of site.
It use the [myzero1/yii2-theme-layui](https://github.com/myzero1/yii2-theme-layui) as it's theme.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require-dev myzero1/yii2-z1site：*
```

or add

```
"myzero1/yii2-z1site：": "*"
```

to the require-dev section of your `composer.json` file.


Setting
-----

Once the extension is installed, simply modify your application configuration as follows:

#### in main.php ####

```php
return [
    ......
    'basePath' => myzero1\z1site\components\MainLoader::getAppPath(),
    'runtimePath' => myzero1\z1site\components\MainLoader::getAppPath() . '/runtime', //basePath,runtimePath,vendorPath,timeZone
    'controllerNamespace' => 'myzero1\z1site\controllers',
    'bootstrap' => [
        'classMap' => function(){
            \Yii::$classMap['yii\captcha\CaptchaAction'] = '@app/components/libs/CaptchaAction.php';
            // \Yii::$classMap['myzero1\z1site\controllers\ActController'] = '@vendor/myzero1/yii2-z1site/src/controllers/act/ActController.php';
            // \Yii::$classMap['myzero1\z1site\models\LoginForm'] = '@vendor/myzero1/yii2-z1site/src/models/rewrite/LoginForm.php';
        }
    ],
    'modules' => [
        ......
        'z1siteid' => [ // z1siteid mybe ajust
            'class' => 'myzero1\z1site\Module',
        ],
        ......
    ],
    'components' => [
        ......
        'errorHandler' => [
            'errorAction' => 'z1siteid/site/error', // z1siteid mybe ajust
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:[\w\-]+>/<action:[\w\-]+>' => 'z1siteid/<controller>/<action>' // z1siteid mybe ajust
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
        ......
    ],
    ......
];
```


Usage
-----

You can then access home page to watch the theme.

```
http://localhost/path/to/index.php
```

#### rewrite ####

* ` set rewrite `

```php
return [
    ......
    'bootstrap' => [
        'classMap' => function(){
            \Yii::$classMap['yii\captcha\CaptchaAction'] = '@app/components/libs/CaptchaAction.php';
            \Yii::$classMap['myzero1\z1site\controllers\ActController'] = '@vendor/myzero1/yii2-z1site/src/controllers/act/ActController.php';
            \Yii::$classMap['myzero1\z1site\models\LoginForm'] = '@vendor/myzero1/yii2-z1site/src/models/rewrite/LoginForm.php';
        }
    ],
    ......
];
```

* ` rewrite controller `

Add and Modify action by classMap.

Rewrite the view of action.through rewrite the beforeAction of controller.


* ` rewrite class `

You can add and rewrite the function of class, only use the classMap.



LICENSE
-----
MIT