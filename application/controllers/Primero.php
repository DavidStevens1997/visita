<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Primero extends CI_Controller {

	

	function __construct() {
        	parent::__construc();
    	}

	public function index() {

		$this->load->view('menu');
	}
	public function registro()
	{
		$this->load->view('segunda');
	}
	public function login() 
	{
		$this->load->view('primera');
	}

	public function validar(){
			
		if ( ! $this->input->post('user') && ! $this->input->post('clave'))
		{
			echo '<script language="javascript">alert("Faltan campos por diligenciar, dale atras!");</script>'; 
			return $this->load->view('error');
		} else {
			$username = $this->input->post('user');
			$password = $this->input->post('clave');
			
			if (isset($_POST['radio'])) {
   			$radio = $this->input->post('radio');

   			if($this->Usuarios->existe($username, $password, $radio)) {
				
				redirect('validar/inicial');

			}else{
				
				redirect('Primero/login');

				//redirect('validar/usuarioview');
			}


			}
			
			
			if($this->Usuarios->existe($username, $password )){
				redirect('validar/usuarioview');
			}
		}
	}
}
