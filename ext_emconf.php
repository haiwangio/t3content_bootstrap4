<?php

# Extension Manager/Repository config file for ext: "t3content_bootstrap4"

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Content - Bootstrap4',
    'description' => 'This extension provides flux content elements for the t3cms theme bootstrap4',
    'category' => 'templates',
    'author' => 'Salvatore Eckel',
    'author_email' => 'salvaracer@gmx.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.18-9.99.99',
        ],
        'conflicts' => [],
        'suggests' => [
            't3themes_bootstrap4' => '1.0.0-0.0.0',
        ],
    ],
];