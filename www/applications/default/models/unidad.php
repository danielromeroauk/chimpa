<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
  die("Error: You don't have permission to access here...");
}

class Unidad_Model extends ZP_Model {

  public function __construct() {
    $this->Db = $this->db();
    $this->table = "unidad";
    $this->fields = "id, nombre";
  }

  public function getListado() {
    return $this->Db->findAll($this->table, $this->fields);
  }

} #Unidad_Model