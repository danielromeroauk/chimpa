<?php
/**
 * Access from index.php:
 */

class Establecimiento_Controller extends ZP_Controller {

  public function __construct() {
    $this->app("default");

    $this->Templates = $this->core("Templates");

    $this->Templates->theme();
  }

  public function index() {

  }

  public function add() {
    isConnected(get("webURL"));
    if(!in_array(SESSION("rol"), array(0))) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Agregar establecimiento");
    $this->Establecimiento_Model = $this->model("Establecimiento_Model");

    if (POST('save')) {
      $vars["alert"] = $this->Establecimiento_Model->save();
    }

    $vars["view"] = $this->view("establecimiento", TRUE);
    $this->render("content", $vars);
  }

  public function edit($id) {
    isConnected(get("webURL"));
    if(!in_array(SESSION("rol"), array(0))) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Editar establecimiento");
    $this->Establecimiento_Model = $this->model("Establecimiento_Model");

    if (POST('edit')) {
      $vars["alert"] = $this->Establecimiento_Model->edit();
    }

    $vars["edit"] = 1;
    $vars["data"] = $this->Establecimiento_Model->getById(urldecode($id));
    $vars["view"] = $this->view("establecimiento", TRUE);
    $this->render("content", $vars);
  }

  public function listado($editar = NULL) {
    isConnected(get("webURL"));
    if(!in_array(SESSION("rol"), array(0))) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Establecimientos");

    $this->Establecimiento_Model = $this->model("Establecimiento_Model");

    $vars["editar"] = $editar;
    $vars["data"]   = $this->Establecimiento_Model->getListado();
    $vars["view"]   = $this->view("establecimientos", TRUE);

    $this->render("content", $vars);
  }

}