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
		$this->title("Login");
    $this->Usuario_Model = $this->model("Usuario_Model");

    if (POST('entrar')) {
      $vars["alert"] = $this->Usuario_Model->valido(POST("user"), POST("pass"));
      if ($vars["alert"] === TRUE) {
        self::inicio();
      }
    }

    if (!POST('entrar') || $vars["alert"] !== TRUE) {
      $vars["login"] = $this->view("login", TRUE);
      $this->render("content", $vars);
    }

	}

  public function inicio() {
    $this->title("Inicio");
    $vars["message"] = "Estamos dentro";
    $vars["view"] = $this->view("show", TRUE);
    $this->render("content", $vars);
  }

  public function logout() {
      unsetSessions();
  }

}
