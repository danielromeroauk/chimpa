<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Usuario_Model extends ZP_Model {

	public function __construct() {
		$this->Db = $this->db();
		$this->table = "usuario";
		$this->fields = "nickname, password";
	}

	public function valido($nickname, $password) {
		#TODO: Cambiar la longitud del campo password en construi_inventario.usuario de 20 a 40
		$data = $this->Db->findBySQL("nickname='$nickname' AND password=SHA1('$password')", $this->table, $this->fields);
		if ($data) {
			SESSION("user", $nickname);
			return TRUE;
		} else {
			return getAlert("El usuario o password incorrecto.");
		}
	}

	public function users_list($limit = "0, 30") {
		$data = $this->Db->query("SELECT id, apellidos, nombres, nickname, direccion, telefono, estado, rol FROM usuario ORDER BY apellidos, nombres, nickname LIMIT $limit");
		return $data;
	}
}