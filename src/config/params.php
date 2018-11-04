<?php

return [
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
];