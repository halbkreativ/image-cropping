<?php
defined('TYPO3_MODE') || die('Access denied.');

$newColumns = [
    'tx_imagecrop_crop' => [
        'exclude' => true,
        'label' => 'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_crop',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ]
    ],
    'tx_imagecrop_gravity' => [
        'exclude' => true,
        'label' => 'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_northwest',
                    'northwest',
                    'EXT:image_crop/Resources/Public/Icons/northwest.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_north',
                    'north',
                    'EXT:image_crop/Resources/Public/Icons/north.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_northeast',
                    'northeast',
                    'EXT:image_crop/Resources/Public/Icons/northeast.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_west',
                    'west',
                    'EXT:image_crop/Resources/Public/Icons/west.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_center',
                    'center',
                    'EXT:image_crop/Resources/Public/Icons/center.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_east',
                    'east',
                    'EXT:image_crop/Resources/Public/Icons/east.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_southwest',
                    'southwest',
                    'EXT:image_crop/Resources/Public/Icons/southwest.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_south',
                    'south',
                    'EXT:image_crop/Resources/Public/Icons/south.gif'
                ],
                [
                    'LLL:EXT:image_crop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecrop_gravity_southeast',
                    'southeast',
                    'EXT:image_crop/Resources/Public/Icons/southeast.gif'
                ],
            ],
            'default' => 'center',
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'mediaAdjustments',
    '--linebreak--, tx_imagecrop_crop, tx_imagecrop_gravity',
    'after:imageborder'
);
