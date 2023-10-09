<?php

/**
 * Extension Manager/Repository config file for ext "mra12".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'mra12',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ItMontanaLlc\\Mra12\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Dave Angove',
    'author_email' => 'dwa@itmontana.com',
    'author_company' => 'IT Montana LLC',
    'version' => '1.0.0',
];
