<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosCarga extends CI_Controller {

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
		$html = $this->load->view("productoscarga",array(),true);
		$param["titulo"]="Cargar Productos";
		$param["contenido"]=$html;
		$this->load->view("Layout/Layout",$param);

	}

	public function save(){
		$this->form_validation->set_rules('denominacion', 'Denominacion', 'required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
		$this->form_validation->set_rules('precio', 'Precio', 'required');
		$this->form_validation->set_rules('precio_oferta', 'Precio Oferta');
		$this->form_validation->set_rules('fecha_finalizacion_oferta', 'Fecha finalizacion Oferta');
		$this->form_validation->set_rules('marca', 'Marca', 'required');
		$this->form_validation->set_rules('stock', 'Stock', 'required');
		$this->form_validation->set_rules('id_categoria', 'Categoria', 'required');
		$this->form_validation->set_rules('destacado', 'Destacado', 'required');
		$this->form_validation->set_rules('activa', 'Activa', 'required');
		$file = $this->form_validation->set_rules('imagen', 'Imagen', 'required');
		//$this->request->getFile($file)->move('./../public/assets/img/productos/');
		if (($this->form_validation->run() == FALSE)) {
			$this->formulario();
		} else {
			$this->load->model("cargaModel");
			$this->cargaModel->save($this->input->post());
			$html = $this->load->view('registroExitoso', array(
				"title" => "El producto se cargo exitosamente!",
				"mensaje" => "Podra ver el producto en el Home"), true);
			$param["titulo"] = "Carga de producto";
			$param["contenido"] = $html;
			$this->load->view("Layout/Layout", $param);
		}
	}

	private function formulario()
	{
		$html = $this->load->view('productoscarga', array("title" => "Cargar Productos"), true);
		$param["titulo"] = "ProductosCarga";
		$param["contenido"] = $html;
		$this->load->view("Layout/Layout", $param);
	}

}
