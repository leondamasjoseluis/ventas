<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('log_in');
	}

	public function loginError()
	{
		$data = array(
				'err' => '1'
				'error' => 'Usuario Incorrecto'
			);
		$this->load->view('log_in', $data);
	}
	public function validarUsuario()
	{
		$Usuario->$this->input->post('usuario');
		$contrasena->$this->input->post('pass');
		$this->load->model('user_model', 'usuarios'); /*de donde salio usuario*/
		$datos = $this->usuarios->consulLogin($usuario, $contrasena);

		if(count($datos) > 0)
		{
			$row = $datos[0]; /*para que este arreglo?*/

			$datosUsuario = array(
						'id' => $row["id"],
						'nombre' => $row["nombre"],
						'apellido' => $row["apellido"];
						'usuario' => $row["usuario"]
				);
			$this->session->set_userdata($datosUsuario);/*de donde viene session y set_user*/

			redirect();
		}
	}

}