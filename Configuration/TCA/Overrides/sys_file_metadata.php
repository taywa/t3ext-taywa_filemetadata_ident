<?php
if (!defined('TYPO3_MODE')) {
        die ('Access denied.');
}

$temporaryColumn = array(
	'ident' => array(
		'exclude' => 1,
		'l10n_mode' => 'exclude',
		'l10n_display' => 'defaultAsReadonly',
		'label' => 'LLL:EXT:taywa_filemetadata_ident/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ident',
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


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'sys_file_metadata',
        '20',
        'ident',
        'before:creator_tool'
);