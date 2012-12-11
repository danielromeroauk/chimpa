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
    $vars["izq"] = "Mensaje desde el controlador";
		$vars["message"] = __("Hello World");
		$vars["view"]	 = $this->view("show", TRUE);
		$this->render("content", $vars);
	}

	public function test($param1 = "Hola", $param2 = "Adios") {
		print "Hola Jairo. New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = __("Hello World");
		$vars["view"] = $this->view("show", TRUE);

		$this->render("content", $vars);		
	}

}
