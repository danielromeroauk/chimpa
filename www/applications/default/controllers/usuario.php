<?php
/**
 * Access from index.php:
 */

class Usuario_Controller extends ZP_Controller {

    public function __construct() {
        $this->app("default");

        $this->Templates = $this->core("Templates");

        $this->Templates->theme();
    }

  public function usuariosListado(){
    $this->title("Listado de usuarios");
    $this->Usuario_Model = $this->model("Usuario_Model");
    $data = $this->Usuario_Model->users_list();
    //____($data);

    $vars["title"] = "Listado de Usuarios";
    $vars["headers"] = array("Id", "Apellidos", "Nombres", "Nickname", "Direccion", "Telefono", "Estado", "Rol");
    $vars["data"] = $data;
    $vars["view"] = $this->view("table", TRUE);
    $this->render("content", $vars);
  }
}