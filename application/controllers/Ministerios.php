<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ministerios extends CI_Controller {

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
    $data['head']="Ministerios";
		$this->load->helper('url');
		$this->load->view('header.php',$data);
   $this->load->view('/ministerios/centro');
    $this->load->view('/ministerios/ctm');
    $this->load->view('/ministerios/estudiantes');
    $this->load->view('/ministerios/comedores');
    $this->load->view('/ministerios/comunidades');
		$this->load->view('footer.php');
	}

}
