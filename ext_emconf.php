<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Core Bugfix Tester Extension',
    'description' => 'Issue Tester',
    'category' => 'misc',
    'author' => 'Benni Mack',
    'author_email' => 'benni@typo3.org',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
