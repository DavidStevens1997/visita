<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar extends CI_Controller {

	function __construct() {
        	parent::__construct();
    	}

	public function agregar()
	{
		$nombre=$this->input->post('nombre');
		$apellido=$this->input->post('apellido');
		$cedula=$this->input->post('cedula');
		$marca=$this->input->post('marca');
		$clase=$this->input->post('clase');
		$color=$this->input->post('color');
		$cilindraje=$this->input->post('cilindraje');
		$aseguradora=$this->input->post('aseguradora');

		$registro= array('Nombres'=>$nombres,
				'Apellidos'=>$apellidos,
				'Cedula'=>$cedula,
				'Marca'=>$marca,
				'Clase'=>$clase,
				'Color'=>$color,
				'Cilindraje'=>$cilindraje,
				'Aseguradora'=>$aseguradora);

				$this->Registro->insertar($cadena);
	}
}
