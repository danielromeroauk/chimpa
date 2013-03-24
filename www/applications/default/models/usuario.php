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
		$this->fields = "id, nickname, password, rol";
	}

	public function valido($nickname, $password) {
		#TODO: Cambiar la longitud del campo password en construi_inventario.usuario de 20 a 40
		$data = $this->Db->findBySQL("nickname='$nickname' AND password=SHA1('$password')", $this->table, $this->fields);
		if ($data) {
			SESSION("user", $data[0]['nickname']);
			SESSION("rol", $data[0]['rol']);

			$userLugar = $this->Db->query("SELECT establecimiento FROM ubicacion WHERE usuario = '". $data[0]['id'] ."' ORDER BY fecha DESC LIMIT 0, 1");
			$userLugarId = $userLugar[0]['establecimiento'];
      SESSION("branch", $userLugarId);

			return TRUE;
		} else {
			return getAlert("El usuario o password incorrecto.");
		}
	}

	public function users_list($limit = "0, 30") {
		$data = $this->Db->query("SELECT id, apellidos, nombres, nickname, direccion, telefono, estado, rol FROM usuario ORDER BY apellidos, nombres, nickname LIMIT $limit");
		return $data;
	}

	public function add() {
		$validations = array(
			"id" => "required",
			"nombres" => "required",
			"apellidos" => "required",
			"nickname" => "required",
			"rol" => "required",
		);

		$this->Data = $this->core("Data");
		$this->Data->ignore(array("add", "lugar"));
		$data = $this->Data->proccess(NULL, $validations);

		____($data);
		if (isset($data["error"])) {
			return $data["error"];
		}

		$this->Db->insert($this->table, $data);
		return getAlert("Contact has been inserted correctly", "success");
	}

	public function set_ubicacion($nick, $establec) {
		if (empty($nick) || empty($establec)){
			return "";
		}

		$data['usuario'] = $nick;
		$data['establecimiento'] = $establec;
		$data['fecha'] = date("d M Y H:i:s");
		$data['responsable'] = "19470973";
		$this->Db->insert('ubicacion', $data);
		return TRUE;
	}
}