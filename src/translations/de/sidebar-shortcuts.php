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
 * Sidebar Shortcuts German Translation
 *
 * Returns an array with the string to be translated (as passed to `Craft::t('sidebar-shortcuts', '...')`) as
 * the key, and the translation as the value.
 *
 * http://www.yiiframework.com/doc-2.0/guide-tutorial-i18n.html
 *
 * @author    Skayo
 * @package   SidebarShortcuts
 * @since     1.0.0
 */
return [
	'Whether this plugin should be enabled or not.'
	                                        => 'Ob das Plugin aktiviert ist oder nicht.',
	'This is useful for multi-environment scenarios!'
	                                        => 'Dies is nützlich wenn du mehrere Environments hast!',
	'Shortcuts'                             => 'Shortcuts',
	'Define your sidebar shortcuts here.'   => 'Definiere hier die Shortcuts für die Seitenleiste.',
	'The Label/Name to use on the sidebar.' => 'Die Bezeichnung des Shortcuts der auf der Seitenleiste angezeigt wird.',
	'The Link/URL the sidebar shortcut should lead to. Can be a CP relative (utilities/db-backup), a site relative (/about) or an external (https://example.com) link.'
	                                        => 'Der Link bzw. die URL wo der Shortcut hinführen soll. Kann ein CP-Relativer (utilities/db-backup), ein Seiten-Relativer (/about) oder ein Externer (https://example.com) Link sein.',
	'Add a Shortcut'                        => 'Füge einen Shortcut hinzu',
	'This is being overridden by the {setting} config setting in your {file} config file.'
	                                        => 'Dies wird überschrieben von {setting} in deiner {file} Konfigurationsdatei.',
];
