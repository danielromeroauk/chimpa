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
    if(!in_array(SESSION("rol"), array(0)) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Agregar establecimiento");
    $this->Establecimiento_Model = $this->model("Establecimiento_Model");

    if (POST('save')) {
      $vars["alert"] = $this->Establecimiento_Model->save();
    }

    $vars["view"] = $this->view("establecimiento", TRUE);
    $this->render("content", $vars);
  }

  public function edit() {

  }

  public function listado() {
    if(!in_array(SESSION("rol"), array(0)) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->Establecimiento_Model = $this->model("Establecimiento_Model");
    $data = $this->Establecimiento_Model->getListado();
    ____($data);
  }

}