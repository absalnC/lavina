<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

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
		$data=array('head'=>"La Vina Zacatecas, Bienvenido");
		$this->load->helper('url');
		$this->load->view('header.php',$data);
		//si hay secion ir a index
		//de lo contrario ir a login
		$this->load->view('welcome_message');
		$this->load->view('semana.php');
		$this->load->view('footer.php');
	}
}
