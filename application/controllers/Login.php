<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$html = $this->load->view('login', array("title" => "Login"), true);
		$param["titulo"] = "Login";
		$param["contenido"] = $html;
		$this->load->view("Layout/Layout", $param);
	}

	public function save()
	{
		$this->load->model("usuarioModel");
		$usuario = $this->usuarioModel->login($_POST["email"], $_POST["password"]);

		if (!$usuario) {
			$html = $this->load->view('login', array("title" => "Login", "error" => "Usuario y/o clave incorrectos"), true);
			$param["titulo"] = "Login";
			$param["contenido"] = $html;
			$this->load->view("Layout/Layout", $param);
		} else {
			header("Location: /UTN-ProgramacionWeb/kurc_modulo2/index.php/home");
		}
	}
}
