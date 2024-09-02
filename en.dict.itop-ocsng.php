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

Dict::Add('EN US', 'English', 'English', array(
	'Class:PC/Attribute:oslicence_id'    => 'OS license',
	'Class:PC/Attribute:oslicence_id+'   => '',
	'Class:PC/Attribute:oslicence_name'  => 'OS license name',
	'Class:PC/Attribute:oslicence_name+' => '',
	'Class:PC/Attribute:ocs_oscomment'   => 'OS comment',
	'Class:PC/Attribute:ocs_oscomment+'  => '',
	'Class:PC/Attribute:cvss'            => 'Max Cvss',
	'Class:PC/Attribute:cvss+'           => 'Maximum vulnerability score (Cvss) of installed software',

));

//
// Class: Server
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Server/Attribute:ocs_oscomment'  => 'OS comment',
	'Class:Server/Attribute:ocs_oscomment+' => '',
	'Class:Server/Attribute:cvss'           => 'Max Cvss',
	'Class:Server/Attribute:cvss+'          => 'Maximum vulnerability score (Cvss) of installed software',
));

//
// Class: VirtualMachine
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VirtualMachine/Attribute:ocs_oscomment'  => 'OS comment',
	'Class:VirtualMachine/Attribute:ocs_oscomment+' => '',
	'Class:VirtualMachine/Attribute:cvss'           => 'Max Cvss',
	'Class:VirtualMachine/Attribute:cvss+'          => 'Maximum vulnerability score (Cvss) of installed software',
));


//
// Class: MobilePhone
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:MobilePhone/Attribute:ocs_oscomment'       => 'OS comment',
	'Class:MobilePhone/Attribute:ocs_oscomment+'      => '',
	'Class:MobilePhone/Attribute:ocs_osfamily_id'     => 'OS family',
	'Class:MobilePhone/Attribute:ocs_osfamily_id+'    => '',
	'Class:MobilePhone/Attribute:ocs_osfamily_name'   => 'OS family name',
	'Class:MobilePhone/Attribute:ocs_osfamily_name+'  => '',
	'Class:MobilePhone/Attribute:ocs_osversion_id'    => 'OS version',
	'Class:MobilePhone/Attribute:ocs_osversion_id+'   => '',
	'Class:MobilePhone/Attribute:ocs_osversion_name'  => 'OS version name',
	'Class:MobilePhone/Attribute:ocs_osversion_name+' => '',
	'Class:MobilePhone/Attribute:cvss'                => 'Max Cvss',
	'Class:MobilePhone/Attribute:cvss+'               => 'Maximum vulnerability score (Cvss) of software cve',
));

//
// Class: Software version
//
Dict::Add('EN US', 'English', 'English', array(
	'Class:Software/Attribute:cvss'  => 'Max Cvss',
	'Class:Software/Attribute:cvss+' => 'Maximum vulnerability score (Cvss) of software cve',
));

//
// Class: Printer
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Printer/Attribute:ocs_driver'  => 'Driver',
	'Class:Printer/Attribute:ocs_driver+' => '',
));

//
// Class: OCSAssetCategory
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OCSAssetCategory'                         => 'OCS: Asset Category',
	'Class:OCSAssetCategory+'                        => 'Asset Category used for the data synchronization with OCS',
	'Class:OCSAssetCategory/Attribute:description'   => 'description',
	'Class:OCSAssetCategory/Attribute:description+'  => '',
	'Class:OCSAssetCategory/Attribute:target_class'  => 'Target class',
	'Class:OCSAssetCategory/Attribute:target_class+' => '',
));

//
// Class: OCSSoftwareCategory
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OCSSoftwareCategory'                 => 'OCS: Software Category',
	'Class:OCSSoftwareCategory+'                => 'Software Category used for the data synchronization with OCS',
	'Class:OCSSoftwareCategory/Attribute:type'  => 'Type',
	'Class:OCSSoftwareCategory/Attribute:type+' => '',
));

//
// Others
//
Dict::Add('EN US', 'English', 'English', array(
	'UI:Menu:OCS_Inventory' => 'Open in OCS Inventory',
));
