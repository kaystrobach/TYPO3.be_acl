<?php

namespace KayStrobach\BeAcl\Tca;

class ProcessDatamapHook {

	function processDatamap_afterDatabaseOperations($status, $table, $id, $fieldArray) {
		if ($table == 'pages' && $status == 'new' ) {
			$GLOBALS['BE_USER']->setAndSaveSessionData('be_acl', array() );
			$GLOBALS['BE_USER']->getPagePermsClause(1);
		}

	}
}

?>
