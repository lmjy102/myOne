<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

    ],
    'modules' => [
        'post' => [
            'class' => 'me\modules\post\admin\AdminModule',
        ],
        'v1' => [
            'class' => 'me\api\v1\v1',
        ],
        'v2' => [
            'class' => 'me\api\v2\v2',
        ],
    ],
];
