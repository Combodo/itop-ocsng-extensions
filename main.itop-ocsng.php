<?php
// Copyright (C) 2010-2018 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Module itop-ocsng
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
class OCSNGPCplugin implements iPopupMenuExtension
{
	public static function EnumItems($iMenuId, $param)
	{
		$aExtraMenus = array();
		if ($iMenuId == iPopupMenuExtension::MENU_OBJDETAILS_ACTIONS && in_array(get_class($param), ['PC', 'Server', 'VirtualMachine'])) {
			$aSynchroData = $param->GetSynchroData();
			$iOCSID = null;
			foreach ($aSynchroData as $iSourceId => $aData) {
				/**
				 * @var SynchroDataSource $oSynchroDataSource
				 */
				$oSynchroDataSource = $aData['source'];
				if (str_contains($oSynchroDataSource->GetName(), 'OCSng')) {
					/**
					 * @var SynchroReplica $oReplica
					 */
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
			}
			if ($iOCSID !== null) {
				$sOcsngURL = MetaModel::GetModuleSetting('itop-ocsng', 'ocsng_url', '');
				$sHostURL = $sOcsngURL.'index.php?function=computer&head=1&systemid='.$iOCSID;
				$aExtraMenus[] = new URLButtonItem('OCS_Inventory', Dict::S('OCS Inventory'), $sHostURL, '_ocs'.get_class($param).$iOCSID);
			}
		}

		return $aExtraMenus;
	}
}

