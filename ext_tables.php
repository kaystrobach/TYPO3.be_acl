<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_beacl_acl");

$TCA["tx_beacl_acl"] = Array (
	"ctrl" => Array (
		"title" => "LLL:EXT:be_acl/Resources/Private/Language/locallang_db.xml:tx_beacl_acl",
		"label" => "uid",
		"label_userFunc" => 'KayStrobach\BeAcl\Tca\AclLabelUserFunc->label',
		"tstamp" => "tstamp",
		"crdate" => "crdate",
		"cruser_id" => "cruser_id",
		"type" => "type",
		"default_sortby" => "ORDER BY type",
		"dynamicConfigFile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY)."tca.php",
		"iconfile" => "EXT:be_acl/Resources/Public/Icons/icon_tx_beacl_acl.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "type, object_id, permissions, recursive",
	)
);

?>
