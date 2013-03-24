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
      /*Se crea la variable de sesión con el nombre del establecimiento asignado al usuario logueado*/
      $this->Establecimiento_Model = $this->model("Establecimiento_Model");
      $userBranchName = $this->Establecimiento_Model->getById(SESSION("branch"));
      SESSION('branchName', $userBranchName['nombre']);

      redirect(get("webURL") .'/default/default/inicio');
    }

	}

  public function inicio() {
    isConnected(get("webURL"));
    $this->title("Inicio");

    $vars["message"] = "Estamos dentro de ". SESSION('branchName');
    $vars["view"] = $this->view("show", TRUE);
    $this->render("content", $vars);
  }

  public function logout() {
      unsetSessions();
  }
}
