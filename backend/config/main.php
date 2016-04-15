<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language' => 'zh-CN',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
            'rules' => [
                ''=>'site/index'
            ],
        ],
        'authManager' => [
            'class' => 'mdm\admin\components\DbManager',
            'db' => 'db',
        ],
        'errorHandler' => [
            'maxSourceLines' => 20,
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'controllerMap' => [
            ],
            'menus' => [
                'assignment' => [
                    'label' => '角色分配',
                ],
                'menu' => [
                    'label' => '菜单列表',
                ],
            ]
        ]
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
        ]
    ],
    'params' => $params,
];
