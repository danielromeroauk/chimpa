<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
  die("Error: You don't have permission to access here...");
}

class Establecimiento_Model extends ZP_Model {

  public function __construct() {
    $this->Db = $this->db();
    $this->table = "establecimiento";
    $this->fields = "id, nombre, direccion, telefono";
    $this->Data = $this->core("Data");
  }

  public function getListado() {
    return $this->Db->findAll($this->table, $this->fields);
  }

  public function save() {
    $validations = array(
      "id" => "required",
      "nombre" => "required",
      "direccion" => "required",
      "telefono" => "required"
    );

      $this->Data->ignore("save");

      $data = $this->Data->proccess(NULL, $validations);

    if(isset($data["error"])) {
          return $data["error"];
    } elseif($this->Db->insert($this->table, $data) === FALSE) {
        return getAlert("El ID del establecimiento ya existe.");
    } else {
       return getAlert("El establecimiento fue registrado exitosamente.", "success");
    }

  } #save

  public function getById($id) {
    $data = $this->Db->find($id, $this->table, $this->fields);
    return $data[0];
  }

  public function edit() {
    $validations = array(
      "id" => "required",
      "nombre" => "required",
      "direccion" => "required",
      "telefono" => "required",
    );

      $this->Data->ignore("edit");

      $data = $this->Data->proccess(NULL, $validations);

    if(isset($data["error"])) {
          return $data["error"];
    } elseif($this->Db->update($this->table, $data, "id='". urldecode(POST("id")) ."'") === FALSE) {
        return getAlert("No fue posible modificar el establecimiento.");
    } else {
       return getAlert("El establecimiento fue modificado con éxito.", "notice");
    }

  } #edit

} #Establecimiento_Model