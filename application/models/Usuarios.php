<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function __construct() {

	}

	public function existe($username, $password, $radio) {
		$this->db->from('datos');
		$this->db->where('cedula',$username);
		$this->db->where('placa',$password);
		$this->db->where('nivel',$radio);

		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
	
}
