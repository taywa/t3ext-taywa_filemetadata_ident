<?php
if (!defined('TYPO3_MODE')) {
        die ('Access denied.');
}

/*
$temporaryColumn = array(
	'palettes' => array(
		'20' => array('showitem' => 'creator_tool, publisher, source', 'indent', 'canNotCollapse' => '1'),
	),
	'columns' => array(
		'ident' => array(
			'exclude' => 1,
			'l10n_mode' => 'exclude',
			'l10n_display' => 'defaultAsReadonly',
			'label' => 'LLL:EXT:taywa_filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ident',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim'
			),
		),
	),
);
*/

$temporaryColumn = array(
	'ident' => array(
		'exclude' => 1,
		'l10n_mode' => 'exclude',
		'l10n_display' => 'defaultAsReadonly',
		'label' => 'LLL:EXT:taywa_filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ident',
		'config' => array(
			'type' => 'input',
			'size' => 20,
			'eval' => 'trim'
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'sys_file_metadata',
        $temporaryColumn
);
/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'sys_file_metadata',
        'ident',
        '',
        'after:creator'
);
*/


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'sys_file_metadata',
        '20',
        'ident',
        'before:creator_tool'
);

//$GLOBALS['TCA']['sys_file_metadata'] = array_replace_recursive($GLOBALS['TCA']['sys_file_metadata'], $tca);
