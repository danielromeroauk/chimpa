<<<<<<< HEAD
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
		$vars["message"] = __("Hello World");
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
	}

	public function test($param1 = "Hola", $param2 = "Adios") {
		print "New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = __("Hello World");
		$vars["view"] = $this->view("show", TRUE);

		$this->render("content", $vars);		
	}

}
=======
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
>>>>>>> 34ecd9d6a1b62d26de8547b3449888ef1c3185f7
