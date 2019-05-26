<?php

/**
 * Extension Manager/Repository config file for ext "algolia_search".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Algolia Search',
    'description' => 'Search aimed to work with Algolia as a backend',
    'category' => 'frontend',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'CheeCodes\\AlgoliaSearch\\' => 'Classes/'
        ],
    ],
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Fabian Bettag',
    'author_email' => 'fabian@chee.codes',
    'author_company' => 'Chee Codes',
    'version' => '0.0.1',
];
