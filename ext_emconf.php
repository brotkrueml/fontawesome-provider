<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FontAwesome Provider',
    'description' => 'Integrates legacy FontawesomeIconProvider and FontAwesome 4.7',
    'category' => 'be',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3 Community',
    'author_email' => '',
    'author_company' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.5.99',
            'backend' => '12.0.0-12.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];