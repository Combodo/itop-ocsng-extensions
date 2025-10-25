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

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:PC/Attribute:oslicence_id'    => 'Licenza SO',
    'Class:PC/Attribute:oslicence_id+'   => '',
    'Class:PC/Attribute:oslicence_name'  => 'Nome licenza SO',
    'Class:PC/Attribute:oslicence_name+' => '',
    'Class:PC/Attribute:ocs_oscomment'   => 'Commento SO',
    'Class:PC/Attribute:ocs_oscomment+'  => '',
    'Class:PC/Attribute:cvss'            => 'Cvss Massimo',
    'Class:PC/Attribute:cvss+'           => 'Punteggio massimo di vulnerabilità (Cvss) del software installato',
));

//
// Class: Server
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:Server/Attribute:ocs_oscomment'  => 'Commento SO',
    'Class:Server/Attribute:ocs_oscomment+' => '',
    'Class:Server/Attribute:cvss'           => 'Cvss Massimo',
    'Class:Server/Attribute:cvss+'          => 'Punteggio massimo di vulnerabilità (Cvss) del software installato',
));

//
// Class: VirtualMachine
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:VirtualMachine/Attribute:ocs_oscomment'  => 'Commento SO',
    'Class:VirtualMachine/Attribute:ocs_oscomment+' => '',
    'Class:VirtualMachine/Attribute:cvss'           => 'Cvss Massimo',
    'Class:VirtualMachine/Attribute:cvss+'          => 'Punteggio massimo di vulnerabilità (Cvss) del software installato',
));

//
// Class: MobilePhone
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:MobilePhone/Attribute:ocs_oscomment'       => 'Commento SO',
    'Class:MobilePhone/Attribute:ocs_oscomment+'      => '',
    'Class:MobilePhone/Attribute:ocs_osfamily_id'     => 'Famiglia SO',
    'Class:MobilePhone/Attribute:ocs_osfamily_id+'    => '',
    'Class:MobilePhone/Attribute:ocs_osfamily_name'   => 'Nome famiglia SO',
    'Class:MobilePhone/Attribute:ocs_osfamily_name+'  => '',
    'Class:MobilePhone/Attribute:ocs_osversion_id'    => 'Versione SO',
    'Class:MobilePhone/Attribute:ocs_osversion_id+'   => '',
    'Class:MobilePhone/Attribute:ocs_osversion_name'  => 'Nome versione SO',
    'Class:MobilePhone/Attribute:ocs_osversion_name+' => '',
    'Class:MobilePhone/Attribute:cvss'                => 'Cvss Massimo',
    'Class:MobilePhone/Attribute:cvss+'               => 'Punteggio massimo di vulnerabilità (Cvss) del software cve',
));

//
// Class: Software version
//
Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:Software/Attribute:cvss'  => 'Cvss Massimo',
    'Class:Software/Attribute:cvss+' => 'Punteggio massimo di vulnerabilità (Cvss) del software cve',
));

//
// Class: Printer
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:Printer/Attribute:ocs_driver'  => 'Driver',
    'Class:Printer/Attribute:ocs_driver+' => '',
));

//
// Class: OCSAssetCategory
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:OCSAssetCategory'                         => 'OCS: Categoria Asset',
    'Class:OCSAssetCategory+'                        => 'Categoria Asset usata per la sincronizzazione dati con OCS',
    'Class:OCSAssetCategory/Attribute:description'   => 'descrizione',
    'Class:OCSAssetCategory/Attribute:description+'  => '',
    'Class:OCSAssetCategory/Attribute:target_class'  => 'Classe di destinazione',
    'Class:OCSAssetCategory/Attribute:target_class+' => '',
));

//
// Class: OCSSoftwareCategory
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:OCSSoftwareCategory'                 => 'OCS: Categoria Software',
    'Class:OCSSoftwareCategory+'                => 'Categoria Software usata per la sincronizzazione dati con OCS',
    'Class:OCSSoftwareCategory/Attribute:type'  => 'Tipo',
    'Class:OCSSoftwareCategory/Attribute:type+' => '',
));

//
// Others
//
Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'UI:Menu:OCS_Inventory' => 'Apri in OCS Inventory',
));
