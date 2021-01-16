<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$html = $this->load->view("contacto",array(),true);
		$param["titulo"]="Contacto";
		$param["contenido"]=$html;
		$this->load->view("Layout/Layout",$param);

	}

	public function save(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('consulta', 'Consulta', 'required');
		if (($this->form_validation->run() == FALSE)) {
			$this->formulario();
		} else {
			$this->load->model("contactoModel");
			$this->contactoModel->save($this->input->post());
			$html = $this->load->view('registroExitoso', array(
				"title"	  => "Gracias por la consulta",
				"mensaje" => "Lo contactaremos a la brevedad por su consulta."), true);
			$param["titulo"] = "Contacto";
			$param["contenido"] = $html;
			$this->load->view("Layout/Layout", $param);
		}
	}

	public function stock(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('consulta', 'Consulta', 'required');
		$this->form_validation->set_rules('producto', 'Producto', 'required');
		if (($this->form_validation->run() == FALSE)) {
			$this->formulario();
		} else {
			$this->load->model("contactoModel");
			$this->contactoModel->stock($this->input->post());
			$html = $this->load->view('registroExitoso', array(
				"title"   => "Gracias por su consulta",
				"mensaje" => "Lo contactaremos para avisarle si hay stock."), true);
			$param["titulo"] = "Consulta de Stock";
			$param["contenido"] = $html;
			$this->load->view("Layout/Layout", $param);
		}
	}

	private function formulario()
	{
		$html = $this->load->view('registroExitoso', array(
			"title" => "Error en el envio",
			"mensaje" => "Vuelva a intentarlo mas tarde."), true);
		$param["titulo"] = "Contacto";
		$param["contenido"] = $html;
		$this->load->view("Layout/Layout", $param);
	}

}
