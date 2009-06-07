<?php

########################################################################
# Extension Manager/Repository config file for ext: "be_acl"
#
# Auto generated 12-01-2009 16:57
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Backend ACLs',
	'description' => 'Backend Access Control Lists',
	'category' => 'be',
	'shy' => 0,
	'version' => '1.4.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Sebastian Kurfuerst',
	'author_email' => 'sebastian@garbage-group.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'lang' => '',
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:15:{s:21:"ext_conf_template.txt";s:4:"23d5";s:12:"ext_icon.gif";s:4:"1bea";s:17:"ext_localconf.php";s:4:"5cdf";s:14:"ext_tables.php";s:4:"aceb";s:14:"ext_tables.sql";s:4:"1076";s:21:"icon_tx_beacl_acl.gif";s:4:"1bea";s:16:"locallang_db.php";s:4:"0f61";s:7:"tca.php";s:4:"01cc";s:14:"doc/manual.sxw";s:4:"4db3";s:19:"doc/wizard_form.dat";s:4:"e68f";s:20:"doc/wizard_form.html";s:4:"4e9b";s:10:"res/acl.js";s:4:"80ec";s:36:"res/class.tx_beacl_userauthgroup.php";s:4:"3d8c";s:38:"res/class.ux_sc_mod_web_perm_index.php";s:4:"4bb6";s:22:"res/locallang_perm.php";s:4:"9a96";}',
);

?>