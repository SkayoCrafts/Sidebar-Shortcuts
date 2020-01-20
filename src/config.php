<?php
/**
 * Sidebar Shortcuts plugin for Craft CMS 3.x
 *
 * Add customisable Shortcut-Links to the Control Panel Sidebar
 *
 * @link      https://skayocrafts/sidebar-shortcuts
 * @copyright Copyright (c) 2020 Skayo
 */

/**
 * Sidebar Shortcuts config.php
 *
 * This file exists only as a template for the Sidebar Shortcuts settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'sidebar-shortcuts.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

	/**
	 * Whether this plugin should be enabled or not
	 *
	 * @var bool True or False
	 */
	'enabled' => true,

	/**
	 * Sidebar Shortcuts
	 *
	 * @var array An array structured like this: [['label' => '...', 'link' => '...'], ['label' => '...', 'link' => '...']]
	 */
    "shortcuts" => [],

];
