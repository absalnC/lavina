<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nosotros extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->view('header.php');
		$this->load->view('footer.php');
	}
  public function valores(){
    $this->load->helper('url');
		$this->load->view('header.php');
		$this->load->view('footer.php');
  }
  public function historia(){
    $this->load->helper('url');
		$this->load->view('header.php');
		$this->load->view('footer.php');
  }
  public function equipo(){
    $this->load->helper('url');
		$this->load->view('header.php');
		$this->load->view('footer.php');
  }
  public function ubicacion(){
		$data['head']='Ubicacion';
    $this->load->helper('url');
		$this->load->view('header.php',$data);
		$this->load->view('ubicacionCentro.php');
		$this->load->view('ubicacionCTM.php');
		$this->load->view('footer.php');
  }
}