<?php
/**
 * Access from index.php:
 */

class Default_Controller extends ZP_Controller {

	public function __construct() {
		$this->app("default");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme("chimpa");
	}

	public function index() {
		self::login();
	}

	public function login() {
		$vars["view"]	 = $this->view("login", TRUE);
		$vars["algo"] = "Si se puede renderizar información en el footer siempre y cuando se renderice content con $vars";
		$this->render("content", $vars);
	}

}
