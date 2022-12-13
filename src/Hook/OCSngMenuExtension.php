<?php
/*
 * @copyright   Copyright (C) 2010-2022 Combodo SARL
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
				IssueLog::Info('ICI');
				$iOCSID = $param->Get('ocs_id');
				IssueLog::Info('idocs'.$iOCSID);
				if ($iOCSID !== null) {
					$sOcsngURL = MetaModel::GetModuleSetting('itop-ocsng', 'ocsng_url', '');
					$sHostURL = $sOcsngURL.'index.php?function=computer&head=1&systemid='.$iOCSID;
					$oButtonOCS = new URLButtonItem('OCS_Inventory', Dict::S('OCS_link'), $sHostURL, '_ocs'.get_class($param).$iOCSID);
					$oButtonOCS->SetIconClass("ocs_icon");
					$aExtraMenus[] = $oButtonOCS;
				}
			}

			/*$aSynchroData = $param->GetSynchroData();
			$iOCSID = null;
			foreach ($aSynchroData as $iSourceId => $aData) {
				/**
				 * @var SynchroDataSource $oSynchroDataSource
				 *
				$oSynchroDataSource = $aData['source'];
				if (str_contains($oSynchroDataSource->GetName(), 'OCSng')) {
					/**
					 * @var SynchroReplica $oReplica
					 *
					foreach ($aData['replica'] as $oReplica) {
						// Ignore non-synchronized replicas
						if ($oReplica->Get('status') !== 'synchronized') {
							continue;
						}

						$sSQLTable = $oSynchroDataSource->GetDataTable();
						$aExtraData = $oReplica->LoadExtendedDataFromTable($sSQLTable);
						// Hack: the OCSID is stored in the NON-SYNCHRONIZED field 'tickets_list' !!!
						$iOCSID = $aExtraData['tickets_list'];
						// Stop once we've found one OCS ID (we'll display only one iframe)
						break;
					}
				}
			}*/
		}

		return $aExtraMenus;
	}
}
