<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Add ident field to sys_file_metadata',
	'description' => 'Add ident field to sys_file_metadata and show it in BE',
	'category' => 'be',
	'state' => 'beta',
	'author' => 'Fabian Thommen',
	'author_email' => 'ft@taywa.ch',
	'author_company' => 'taywa gmbh, Zürich',
	'clearCacheOnLoad' => 1,
	'version' => '0.0.11',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
			'filemetadata' => '6.0.0-7.6.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
