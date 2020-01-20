<?php
/**
 * Sidebar Shortcuts plugin for Craft CMS 3.x
 *
 * Add customisable Shortcut-Links to the Control Panel Sidebar
 *
 * @link      https://skayocrafts/sidebar-shortcuts
 * @copyright Copyright (c) 2020 Skayo
 */

namespace skayocrafts\sidebarshortcuts\models;

use craft\base\Model;

/**
 * SidebarShortcuts Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * @author    Skayo
 * @package   SidebarShortcuts
 * @since     1.0.0
 */
class Settings extends Model {
	// Public Properties
	// =========================================================================

	/**
	 * Whether this plugin should be enabled or not
	 *
	 * @var bool True or False
	 */
	public $enabled = true;

	/**
	 * Sidebar Shortcuts
	 *
	 * @var array An array structured like this: [['label' => '...', 'link' => '...'], ['label' => '...', 'link' => '...']]
	 */
	public $shortcuts = [];

	// Public Methods
	// =========================================================================

	/**
	 * Returns the validation rules for attributes.
	 *
	 * Validation rules are used by [[validate()]] to check if attribute values are valid.
	 * Child classes may override this method to declare different validation rules.
	 *
	 * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
	 *
	 * @return array
	 */
	public function rules () {
		return [
			['enabled', 'boolean'],
			['shortcuts', 'each', 'rule' => ['each', 'rule' => ['string']]],
			['shortcuts', 'default', 'value' => []]
		];
	}
}
