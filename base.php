<?php
/**
 * @package  Kittehz
 * @author   Alan Hardman <alan@phpizza.com>
 * @version  1.1.1
 */

namespace Plugin\Kittehz;

class Base extends \Plugin {

	/**
	 * Initialize the plugin, adding the route and JS file
	 */
	public function _load() {
		$f3 = \Base::instance();
		$f3->route("GET /kitteh", "Plugin\Kittehz\Controller->kitteh");
		$this->_addJs($f3->get("BASE") . "/app/plugin/kittehz/js/knmi.min.js", "file");
	}

	/**
	 * Check if plugin is installed
	 * @return bool
	 */
	public function _installed() {
		return true;
	}

}
