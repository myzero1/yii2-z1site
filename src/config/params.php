<?php

return [
    'layuiTheme' => [
        'navs' => [
            "businessManagement" => [
                'topMenu' => [
                    "menu" => "businessManagement",
                    "title" => "业务管理",
                    "icon" => "&#xe653;",
                    "class" => "layui-icon",
                ],
                [
                    "title" => "业务介绍",
                    "icon" => "icon-text",
                    "href" => "/site/placeholder?position=introduction",
                    "spread" => false
                ],
                [
                    "title" => "CRUD操作",
                    "icon" => "icon-xiugai",
                    "href" => "",
                    "spread" => false,
                    "children" => [
                        [
                            "title" => "操作初始化",
                            "icon" => "z1iconfont z1icon-init",
                            "href" => "/site/placeholder?position=init",
                            "spread" => false
                        ],
                        [
                            "title" => "列表页面",
                            "icon" => "&#xe60a;",
                            "href" => "/site/placeholder?position=index",
                            "spread" => false
                        ],
                    ]
                ],
            ],
            "memberCenter" => [
                'topMenu' => [
                    "menu" => "memberCenter",
                    "title" => "用户中心",
                    "icon" => "icon-icon10",
                    "class" => "seraph icon-icon10",
                ],
                [
                    "title" => "用户管理",
                    "icon" => "&#xe66f;",
                    "href" => "/site/placeholder?position=user-index",
                    "spread" => false
                ],
                [
                    "title" => "角色管理",
                    "icon" => "&#xe770;",
                    "href" => "/site/placeholder?position=role",
                    "spread" => false
                ]
            ],
            "systemeManagement" => [
                'topMenu' => [
                    "menu" => "systemeManagement",
                    "title" => "系统管理",
                    "icon" => "&#xe620;",
                    "class" => "layui-icon",
                ],
                [
                    "title" => "平台公告",
                    "icon" => "&#xe638;",
                    "href" => "/site/notice",
                    "spread" => false
                ],
                [
                    "title" => "静态缓存",
                    "icon" => "&#xe638;",
                    "href" => "/site/clear-assets-cache",
                    "spread" => false
                ],
                [
                    "title" => "403页面",
                    "icon" => "&#xe638;",
                    "href" => "/site/e403",
                    "spread" => false
                ],
                [
                    "title" => "404页面",
                    "icon" => "&#xe638;",
                    "href" => "/site/e404",
                    "spread" => false
                ],
                [
                    "title" => "500页面",
                    "icon" => "&#xe638;",
                    "href" => "/site/e500",
                    "spread" => false
                ],
            ],
        ],
        'rightNavs' => [
            [
                "title" => "个人资料",
                "icon" => "seraph icon-ziliao",
                "href" => "/site/placeholder?position=userInfo",
                "spread" => false
            ],
            [
                "title" => "修改密码",
                "icon" => "seraph icon-xiugai",
                "href" => "/site/placeholder?position=changePwd",
                "spread" => false
            ],
        ],
        'addLayoutAssets' => function(){
            // backend\assets\AppAsset::register(\Yii::$app->view);
        },
        'addMainAssests' => function(){
            // backend\assets\AppAsset::register(\Yii::$app->view);
        },
        'mainUrl' => '/site/placeholder?position=main', // default z1site/site/main
        'noticeUrl' => '/site/placeholder?position=notice', // defult z1site/site/notice
        // 'funcSettting' => false, // default true
        // 'skin' => false, // default true
        // 'copyright' => false,// default '<p><span>copyright @2018-2028 myzero1</span><a href="https://github.com/myzero1/yii2-theme-layui" target="_blank"><img class="layui-nav-img userAvatar" src="LayoutAssetBundleBaseUrl/resources/images/myzero1.jpg" style="margin-left:10px;cursor:pointer;"></a></p>'
    ],
    'menu' => [
        [
            'id' => "平台首页",
            'text' => "平台首页2",
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
];