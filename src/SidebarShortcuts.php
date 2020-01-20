<?php
/**
 * Sidebar Shortcuts plugin for Craft CMS 3.x
 *
 * Add customisable Shortcut-Links to the Control Panel Sidebar
 *
 * @link      https://skayocrafts/sidebar-shortcuts
 * @copyright Copyright (c) 2020 Skayo
 */

namespace skayocrafts\sidebarshortcuts;

use Craft;
use craft\base\Plugin;
use craft\events\RegisterCpNavItemsEvent;
use craft\web\twig\variables\Cp;
use skayocrafts\sidebarshortcuts\models\Settings;
use yii\base\Event;

/**
 * Craft plugins are very much like little applications in and of themselves. We’ve made
 * it as simple as we can, but the training wheels are off. A little prior knowledge is
 * going to be required to write a plugin.
 *
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL,
 * as well as some semi-advanced concepts like object-oriented programming and PHP namespaces.
 *
 * https://craftcms.com/docs/plugins/introduction
 *
 * @author    Skayo
 * @package   SidebarShortcuts
 * @since     1.0.0
 *
 * @property  Settings $settings
 * @method    Settings getSettings()
 */
class SidebarShortcuts extends Plugin {
	// Static Properties
	// =========================================================================

	/**
	 * Static property that is an instance of this plugin class so that it can be accessed via
	 * SidebarShortcuts::$plugin
	 *
	 * @var SidebarShortcuts
	 */
	public static $plugin;

	// Public Methods
	// =========================================================================

	/**
	 * @inheritDoc
	 */
	public function init () {
		parent::init();

		self::$plugin = $this;

		if ($this->getSettings()->enabled) {
			Event::on(
				Cp::class,
				Cp::EVENT_REGISTER_CP_NAV_ITEMS,
				function (RegisterCpNavItemsEvent $event) {
					foreach ($this->getSettings()->shortcuts as $shortcut) {
						$event->navItems[] = [
							'url'   => $shortcut['link'],
							'label' => $shortcut['label'],
							// 'icon' => '@ns/prefix/path/to/icon.svg'
						];
					}
				}
			);
		}
	}

	// Public Methods
	// =========================================================================

	/**
	 * @inheritDoc
	 */
	public function getCpNavItem () {
		return null;
	}

	// Protected Methods
	// =========================================================================

	/**
	 * Creates and returns the model used to store the plugin’s settings.
	 *
	 * @return Settings
	 */
	protected function createSettingsModel () {
		return new Settings();
	}

	/**
	 * Returns the rendered settings HTML, which will be inserted into the content
	 * block on the settings page.
	 *
	 * @return string The rendered settings HTML
	 * @throws \Twig\Error\LoaderError
	 * @throws \Twig\Error\RuntimeError
	 * @throws \Twig\Error\SyntaxError
	 * @throws \yii\base\Exception
	 */
	protected function settingsHtml () : string {
		$overrides = Craft::$app->getConfig()
		                        ->getConfigFromFile(strtolower(self::$plugin->handle));

		return Craft::$app->view->renderTemplate(
			'sidebar-shortcuts/_settings',
			[
				'settings'  => $this->getSettings(),
				'overrides' => array_keys($overrides),
			]
		);
	}
}
