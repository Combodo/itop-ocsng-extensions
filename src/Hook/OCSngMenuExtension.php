<?php
/*
 * @copyright   Copyright (C) 2010-2024 Combodo SAS
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

/**
 * Module itop-ocsng
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
class OCSngMenuExtension implements iPopupMenuExtension
{
	public static function EnumItems($iMenuId, $param)
	{
		$aExtraMenus = array();
		if ($iMenuId == iPopupMenuExtension::MENU_OBJDETAILS_ACTIONS && in_array(get_class($param), ['PC', 'Server', 'VirtualMachine', 'MobilePhone'])) {
			if (MetaModel::IsValidAttCode(get_class($param), 'ocs_id')) {
				$iOCSID = $param->Get('ocs_id');
				if ($iOCSID !== null) {
					$sOcsngURL = MetaModel::GetModuleSetting('itop-ocsng', 'ocsng_url', '');
					$sHostURL = $sOcsngURL.'index.php?function=computer&head=1&systemid='.$iOCSID;
					$oButtonOCS = new URLButtonItem('OCS_Inventory', Dict::S('UI:Menu:OCS_Inventory'), $sHostURL, '_ocs'.get_class($param).$iOCSID);
					if (! (version_compare(ITOP_DESIGN_LATEST_VERSION , '3.0') < 0) ) {
						$oButtonOCS->SetIconClass("ocs_icon");
					}
					$aExtraMenus[] = $oButtonOCS;
				}
			}
		}

		return $aExtraMenus;
	}
}
