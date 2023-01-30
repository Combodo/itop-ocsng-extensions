<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: PC
//

Dict::Add('FR FR', 'French', 'French', array(
	'Class:PC/Attribute:oslicence_id'    => 'Licence de l\'OS',
	'Class:PC/Attribute:oslicence_id+'   => '',
	'Class:PC/Attribute:oslicence_name'  => 'Licence de l\'OS',
	'Class:PC/Attribute:oslicence_name+' => '',
	'Class:PC/Attribute:ocs_oscomment'   => 'Commentaire sur l\'OS',
	'Class:PC/Attribute:ocs_oscomment+'  => '',
));

//
// Class: Server
//

Dict::Add('FR FR', 'French', 'French', array(
	'Class:Server/Attribute:ocs_oscomment'  => 'Commentaire sur l\'OS',
	'Class:Server/Attribute:ocs_oscomment+' => '',
));

//
// Class: VirtualMachine
//

Dict::Add('FR FR', 'French', 'French', array(
	'Class:VirtualMachine/Attribute:ocs_oscomment'  => 'Commentaire sur l\'OS',
	'Class:VirtualMachine/Attribute:ocs_oscomment+' => '',
));


//
// Class: MobilePhone
//

Dict::Add('FR FR', 'French', 'French', array(
	'Class:MobilePhone/Attribute:ocs_oscomment'       => 'Commentaire sur l\'OS',
	'Class:MobilePhone/Attribute:ocs_oscomment+'      => '',
	'Class:MobilePhone/Attribute:ocs_osfamily_id'     => 'Famille de l\'OS',
	'Class:MobilePhone/Attribute:ocs_osfamily_id+'    => '',
	'Class:MobilePhone/Attribute:ocs_osfamily_name'   => 'Nom de la famille de l\'OS',
	'Class:MobilePhone/Attribute:ocs_osfamily_name+'  => '',
	'Class:MobilePhone/Attribute:ocs_osversion_id'    => 'Version de l\'OS',
	'Class:MobilePhone/Attribute:ocs_osversion_id+'   => '',
	'Class:MobilePhone/Attribute:ocs_osversion_name'  => 'Nom de la version de l\'OS',
	'Class:MobilePhone/Attribute:ocs_osversion_name+' => '',
));

//
// Class: Printer
//

Dict::Add('FR FR', 'French', 'French', array(
	'Class:Printer/Attribute:ocs_driver'  => 'Driver',
	'Class:Printer/Attribute:ocs_driver+' => '',
));

//
// Class: OCSAssetCategory
//
Dict::Add('FR FR', 'French', 'French', array(
	'Class:OCSAssetCategory'                         => 'OCS: Catégorie de machine',
	'Class:OCSAssetCategory+'                        => 'Catégories de machine utilisées pour la synchronisation des données avec OCS',
	'Class:OCSAssetCategory/Attribute:description'   => 'description',
	'Class:OCSAssetCategory/Attribute:description+'  => '',
	'Class:OCSAssetCategory/Attribute:target_class'  => 'Classe associée',
	'Class:OCSAssetCategory/Attribute:target_class+' => '',
));

//
// Class: OCSSoftwareCategory
//

Dict::Add('FR FR', 'French', 'French', array(
	'Class:OCSSoftwareCategory'                 => 'OCS: Catégorie de logiciel',
	'Class:OCSSoftwareCategory+'                => 'Catégories de logiciels utilisées pour la synchronisation des données avec OCS',
	'Class:OCSSoftwareCategory/Attribute:type'  => 'Type',
	'Class:OCSSoftwareCategory/Attribute:type+' => '',
));

//
// Others
//

Dict::Add('FR FR', 'French', 'French', array(
	'UI:Menu:OCS_Inventory' => 'ouvrir dans OCS Inventory',
));
