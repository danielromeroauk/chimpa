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
	}

	public function getListado() {
		return $this->Db->findAll($this->table, $this->fields);
	}

}