<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 11.11.15
 * Time: 20:09
 */

namespace KayStrobach\BeAcl\Tca;

use TYPO3\CMS\Backend\Utility\BackendUtility;

class AclLabelUserFunc
{
	public function label(&$params, &$pObj) {
		$label = '';

		$item = BackendUtility::getRecord('tx_beacl_acl', $params['row']['uid']);

		if($item['type']== '0') {
			$label .= $GLOBALS['LANG']->sL('LLL:EXT:be_acl/Resources/Private/Language/locallang_db.xml:tx_beacl_acl.type.I.0');
			$label .= $this->getLabel($params['object_id'], 'be_users', 'username');
		} else {
			$label .= $GLOBALS['LANG']->sL('LLL:EXT:be_acl/Resources/Private/Language/locallang_db.xml:tx_beacl_acl.type.I.1');
			$label .= $this->getLabel($item['object_id'], 'be_groups', 'title');
		}
		$label .= ' / ' . $item['permissions'];
		$params['title'] = $label;
	}

	/**
	 * @param $uid
	 * @param $table
	 * @param $labelField
	 * @return string
	 */
	public function getLabel($uid, $table, $labelField) {
		return '/ ' . BackendUtility::getRecord($table, $uid, $labelField)[$labelField];
	}
}