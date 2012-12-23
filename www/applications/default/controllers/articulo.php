<?php
/**
 * Access from index.php:
 */

class Articulo_Controller extends ZP_Controller {

  public function __construct() {
    $this->app("default");

    $this->Templates = $this->core("Templates");

    $this->Templates->theme();

    $this->Articulo_Model = $this->model("Articulo_Model");
    $this->Unidad_Model   = $this->model("Unidad_Model");

  }

  public function index() {

  }

  public function add() {
    isConnected(get("webURL"));
    if(!in_array(SESSION("rol"), array(0,4))) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Agregar artículo");

    if (POST('save')) {
      $vars["alert"] = $this->Articulo_Model->save();
    }

    $vars["unidades"] = $this->Unidad_Model->getListado();
    $vars["view"]     = $this->view("articulo", TRUE);

    $this->render("content", $vars);
  }

  public function edit($id) {
    isConnected(get("webURL"));
    if(!in_array(SESSION("rol"), array(0,4))) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Editar artículo");

    if (POST('edit')) {
      $vars["alert"] = $this->Articulo_Model->edit();
    }

    $vars["edit"]     = TRUE;
    $vars["data"]     = $this->Articulo_Model->getById(urldecode($id));
    $vars["unidades"] = $this->Unidad_Model->getListado();
    $vars["view"]     = $this->view("articulo", TRUE);

    $this->render("content", $vars);
  }

  /**
   * @param integer $fila desde que fila empezar.
   * @param integer $cant cantidad de registros a mostrar.
   * @param boolean $editar muestra el botón editar junto a cada registro.
   */
  public function listado($editar = FALSE, $fila = 0, $cant = 20) {
    isConnected(get("webURL"));
    if(!in_array(SESSION("rol"), array(0))) { redirect(get("webURL") .'/default/default/inicio'); }

    $this->title("Artículos");

    $vars["editar"] = ($editar === "TRUE") ? $editar : FALSE;
    $vars["data"]   = $this->Articulo_Model->getListado($fila, $cant);
    $vars["view"]   = $this->view("articulos", TRUE);

    $this->render("content", $vars);
  }

}