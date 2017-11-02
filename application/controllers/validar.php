<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validar extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
	public function inicial() 
	{
		$this->load->view('DB/tabla_view');
	}
public function usuarioview() 
	{
		$this->load->view('usuario_view/index');
	}

	public function guardar(){
		$cedula= $this->input->post('llave');
		$nombres= $this->input->post('nom');
		$apellidos= $this->input->post('ape');
		$marca= $this->input->post('mar');
		$clase= $this->input->post('cla');
		$color= $this->input->post('col');
		$cilindraje= $this->input->post('cil');
		$placa= $this->input->post('pla');
		$aseguradora= $this->input->post('ase');
		$nivel= $this->input->post('niv');


		$combo= array('cedula'=>$cedula, 'nombres'=>$nombres, 'apellidos'=>$apellidos, 'marca'=>$marca, 'clase'=>$clase, 'color'=>$color, 'cilindraje'=>$cilindraje, 'placa'=>$placa, 'aseguradora'=>$aseguradora, 'nivel'=>$nivel);

		if($this->datos->insertar($combo)){
			echo '<script language="javascript">alert("Se guardo con exito");</script>';
			$this->load->view('DB/tabla_view');

		}else {
			$this->load->view('error');
		}

	}

	public function elim(){
		$cedula= $this->input->post('llave');
		if($this->datos->eliminar($cedula)){
			echo '<script language="javascript">alert("Se elimino el registro);</script>'; 
			$this->load->view('DB/tabla_view');
		}
	}


		public function update(){
			$cedula= $this->input->post('llave');
			$nombres= $this->input->post('nom');
			$apellidos= $this->input->post('ape');

			$dato= array('nombres'=>$nombres, 'apellidos'=>$apellidos);
			if($this->datos->actualiza($cedula,$dato)){
				echo '<script language="javascript">alert("Se actualizó el registro);</script>';
				$this->load->view('DB/tabla_view'); 
			}
		}

		public function consulta(){
			$cedula= $this->input->post('llave');
			$data['completo']= $this->datos->buscar($cedula);
			$this->load->view('DB/consulta',$data);


		}

	}
