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
    if(isConnected(get("webURL") .'/default/default/login')) {
      redirect(get("webURL") .'/default/default/inicio');
    }
  }

  public function login() {
    $this->title("Login");
    $this->Usuario_Model = $this->model("Usuario_Model");

    if (POST('entrar')) {
      $vars["alert"] = $this->Usuario_Model->valido(POST("user"), POST("pass"));
    }

    if (!SESSION("user")) {
      $vars["view"] = $this->view("login", TRUE);
      $this->render("content", $vars);
    } else {
      redirect(get("webURL") .'/default/default/inicio');
    }

	}

  public function inicio() {
    isConnected(get("webURL"));
    $this->title("Inicio");
    $vars["message"] = "Estamos dentro";
    $vars["view"] = $this->view("show", TRUE);
    $this->render("content", $vars);
  }

  public function logout() {
      unsetSessions();
  }

  public function usuariosListado(){
    $this->title("Listado de usuarios");
    $vars["title"] = "Estamos dentro";
    $vars["headers"] = array("Col 1", "Col 2", "Col 3");
    $vars["data"] = array(array(1, 2, 3), array(4, 5, 6), array(10, 20, 30));
    $vars["view"] = $this->view("table", TRUE);
    $this->render("content", $vars);
  }
}
