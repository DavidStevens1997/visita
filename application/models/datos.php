<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function eliminar($dato) {
		$this->db->where('cedula', $dato);
		return $this->db->delete('datos');
	}
	public function insertar($dato){
		return $this->db->insert('datos',$dato);
	}

	public function actualiza($llave, $dato) {
		$this->db->where('cedula', $llave);
		return $this->db->update('datos',$dato);
		
	}


	public function buscar($llave) {
		$this->db->from('datos');
		$this->db->like('cedula', $llave);
		$query = $this->db->get();
		return $query->result_array();
	}

}
