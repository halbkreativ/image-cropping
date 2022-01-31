<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cropping for tt_content images',
    'description' => 'Adds simple cropping options to CType textpic, image and textmedia.',
    'category' => 'be',
    'author' => 'Sigfried Arnold',
    'author_email' => 's.arnold@go-west.at',
    'author_company' => 'GO.WEST Communications GmbH',
    'state' => 'stable',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];
