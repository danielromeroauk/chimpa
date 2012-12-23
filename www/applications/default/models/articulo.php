<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
  die("Error: You don't have permission to access here...");
}

class Articulo_Model extends ZP_Model {

  public function __construct() {
    $this->Db = $this->db();
    $this->table = "articulo";
    $this->fields = "id, descripcion, precio, porciva, estado, unidad, notas, apartados";
    $this->Data = $this->core("Data");
  }

  public function getListado($fila = 0, $cant = 30) {
    return $this->Db->findAll($this->table, $this->fields, NULL, 1, "$fila, $cant");
  }

  public function save() {
    $validations = array(
      "id"          => "required",
      "descripcion" => array("required","injection?"),
      "precio"      => "required",
      "porciva"     => "required",
      "unidad"      => "required"
    );

    $data = array(
      "estado"      => 1,
      "apartados"   => 0
    );

    $this->Data->ignore("save");

    $this->data = $this->Data->proccess($data, $validations);
    #____($this->data);

    if(isset($this->data["error"])) {
          return $this->data["error"];
    } elseif($this->Db->insert($this->table, $this->data) === FALSE) {
        return getAlert("El ID del artículo ya existe.");
    } else {
       return getAlert("El artículo fue registrado exitosamente.", "success");
    }

  } #save

  public function getById($id) {
    $data = $this->Db->find($id, $this->table, $this->fields);
    //____($data);
    return $data[0];
  }

  public function edit() {
    $validations = array(
      "id"          => "required",
      "descripcion" => array("required","injection?"),
      "precio"      => "required",
      "porciva"     => "required",
      "unidad"      => "required"
    );

    $data = array(
      "apartados"   => 0
    );

    $this->Data->ignore(array("edit", "id"));

    $this->data = $this->Data->proccess($data, $validations);
    #____($this->data);

    if(isset($this->data["error"])) {
          return $this->data["error"];
    } elseif($this->Db->update($this->table, $this->data, "id='". urldecode(POST("id")) ."'") === FALSE) {
        return getAlert("No fue posible modificar el artículo.");
    } else {
       return getAlert("El artículo fue modificado con éxito.", "notice");
    }

  } #edit

} #Articulo_Model