<?php
/**
 * @package  Kittehz
 * @author   Alan Hardman <alan@phpizza.com>
 * @version  1.0.0
 */

namespace Plugin\Kittehz;

class Base extends \Plugin {

	/**
	 * Initialize the plugin
	 */
	public function _load() {
		$f3 = \Base::instance();
		$f3->route("GET /kitteh", "Plugin\Kittehz\Controller->kitteh");
	}

	/**
	 * Check if plugin is installed
	 * @return bool
	 */
	public function _installed() {
		return true;
	}

}
