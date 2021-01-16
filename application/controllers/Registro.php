<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registro extends CI_Controller
{

	public function index()
	{
		$this->formulario();
	}

	public function save()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]',
			array('required' => 'El campo %s es obligatorio', 'min_length' => 'El campo %s debe tener al menos 3 caracteres'));
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('clave', 'Contraseña', 'required');
		if (($this->form_validation->run() == FALSE)) {
			$this->formulario();
		} else {
			$this->load->model("usersModel");
			$this->usersModel->save($this->input->post());
			$html = $this->load->view('registroExitoso', array(
				"title" => "Gracias por registrarse",
				"mensaje" => "En poco tiempo podra ingresar con su usario."), true);
			$param["titulo"] = "Registro";
			$param["contenido"] = $html;
			$this->load->view("Layout/Layout", $param);
		}
	}

	private function formulario()
	{
		$html = $this->load->view('registro', array("title" => "Registro"), true);
		$param["titulo"] = "Registro";
		$param["contenido"] = $html;
		$this->load->view("Layout/Layout", $param);
	}
}
