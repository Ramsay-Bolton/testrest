<?php
return [
    'enablePrettyUrl'     => true,
    'enableStrictParsing' => false,
    'showScriptName'      => false,
    'rules'               => [
//        ''     => 'site/login',
//        'login' => 'site/login',
        ['class'         => 'yii\rest\UrlRule',
         'pluralize'     => false,
         'controller'    => [ 'person' ],
        ],
    ],
];