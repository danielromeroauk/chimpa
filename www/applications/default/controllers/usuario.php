<?php
/**
 * Access from index.php:
 */

class Usuario_Controller extends ZP_Controller {

    public function __construct() {
        $this->app("default");

        $this->Templates = $this->core("Templates");

        $this->Templates->theme();

        $this->Usuario_Model = $this->model("Usuario_Model");
    }

  public function usuariosListado(){
    $this->title("Listado de usuarios");
    $data = $this->Usuario_Model->users_list();
    //____($data);

    $vars["title"] = "Listado de Usuarios";
    $vars["headers"] = array("Id", "Apellidos", "Nombres", "Nickname", "Direccion", "Telefono", "Estado", "Rol");
    $vars["data"] = $data;
    $vars["view"] = $this->view("table", TRUE);
    $this->render("content", $vars);
  }

  public function agregar() {
    $this->title("Agregar usuario");
    if (POST('add')) {
      $vars["alert"] = $this->Usuario_Model->add();
    }

    $vars["view"] = $this->view("add_user", TRUE);

    $this->render("content", $vars);
  }
}