<?php
/*
 * @copyright   Copyright (C) 2010-2024 Combodo SAS
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


class OCSngStylesheets implements iBackofficeLinkedStylesheetsExtension
{

    public function GetLinkedStylesheetsAbsUrls(): array
    {
        $sScssFile = utils::GetAbsoluteUrlModulesRoot().'itop-ocsng-extensions/asset/css/style.css';

        return [$sScssFile];
    }
}