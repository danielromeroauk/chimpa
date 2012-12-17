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
		$this->fields = "nickname, password, rol";
	}

	public function valido($nickname, $password) {
		#TODO: Cambiar la longitud del campo password en construi_inventario.usuario de 20 a 40
		$data = $this->Db->findBySQL("nickname='$nickname' AND password=SHA1('$password')", $this->table, $this->fields);
		if ($data) {
			SESSION("user", $data[0]['nickname']);
			SESSION("rol", $data[0]['rol']);
			return TRUE;
		} else {
			return getAlert("El usuario o password incorrecto.");
		}
	}

}