<?php
/*
 * @copyright   Copyright (C) 2010-2022 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


if (interface_exists('iBackofficeLinkedStylesheetsExtension')) {
	class OCSngStylesheets implements iBackofficeLinkedStylesheetsExtension
	{

		public function GetLinkedStylesheetsAbsUrls(): array
		{
			$sScssFile = utils::GetAbsoluteUrlModulesRoot().'itop-ocsng-extensions/asset/css/style.css';

			return [$sScssFile];
		}
	}
} else {
	class OCSngStylesheets implements iPageUIExtension
	{
		/**
		 * @inheritdoc
		 */
		public function GetNorthPaneHtml(\iTopWebPage $oPage)
		{
			// SCSS files can't be loaded asynchroniously before of a bug in the output() method prior to iTop 2.6
			$oPage->add_linked_stylesheet(Utils::GetAbsoluteUrlModulesRoot().'itop-ocsng-extensions/asset/css/style.css');
		}

		/**
		 * @inheritdoc
		 */
		public function GetSouthPaneHtml(\iTopWebPage $oPage)
		{
			// Do nothing.
		}

		/**
		 * @inheritdoc
		 */
		public function GetBannerHtml(\iTopWebPage $oPage)
		{
			// Do nothing.
		}
	}
}