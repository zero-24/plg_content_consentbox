<?php
/**
 * ConsentBox Plugin
 *
 * @copyright  Copyright (C) 2018 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  1.0
 */
class PlgContentConsentBoxScript extends JInstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @since   1.0
	 */
	public function __construct()
	{
		// Define the minumum versions to be supported.
		$this->minimumJoomla = '3.8';
		$this->minimumPhp    = '7.0';
	}
}