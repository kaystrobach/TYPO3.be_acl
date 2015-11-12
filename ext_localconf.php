<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tx_beacl_acl=1
');



$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauthgroup.php']['calcPerms'][] = 'KayStrobach\BeAcl\Hooks\UserAuthGroup->calcPerms';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauthgroup.php']['getPagePermsClause'][] = 'KayStrobach\BeAcl\Hooks\UserAuthGroup->getPagePermsClause';



$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Perm\\Controller\\PermissionModuleController'] = array(
	'className' => 'KayStrobach\BeAcl\Xclass\PermissionModuleController',
);


$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'KayStrobach\BeAcl\Tca\ProcessDatamapHook';

?>
