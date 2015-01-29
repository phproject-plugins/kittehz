<?php
/**
 * @package  Kittehz
 * @author   Alan Hardman <alan@phpizza.com>
 * @version  1.0.0
 */

namespace Plugin\Kittehz;

class Controller extends \Controller {

	/**
	 * Handle Kittehz
	 * @param \Base $f3
	 * @param array $params
	 */
	public function kitteh($f3, $params) {

		// Get a kitteh
		$web = \Web::instance();
		$req = $web->request("http://thecatapi.com/api/images/get?format=xml");
		$obj = new \SimpleXMLElement($req["body"]);
		$img = $obj->data->images->image;

		// Show the kitteh
		$f3->set("UI", $f3->get("UI") . ";./app/plugin/kittehz/view/");
		$f3->set("img", $img);
		$this->_render("kitteh.html");

	}

}
