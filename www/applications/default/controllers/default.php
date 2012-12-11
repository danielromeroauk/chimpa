<?php
/**
 * Access from index.php:
 */

class Default_Controller extends ZP_Controller {

	public function __construct() {
		$this->app("default");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme();
	}

	public function index() {
		self::login();
	}

	public function login() {
		$vars["login"]	 = $this->view("login", TRUE);
		$this->render("content", $vars);
	}

}
