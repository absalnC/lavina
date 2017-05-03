<?php
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
	 * @see https://codeigniter.com/user_guide/general/urls.html`
	 */
	public function index()
	{
		$data['head']='Contacto';
		$this->load->helper('url');
		$this->load->view('header.php',$data);
		$this->load->view('infoContacto.php');
		$this->load->view('sociales.php');
		$this->load->view('formularioContacto.php');
		$this->load->view('footer.php');
	}
	public  function procesar(){
		$this->load->helper('url');
		$this->load->library('util');		
			if($this->util->areSetPost(array("nombre","email","phone","mensaje"))){
				$nombre=$_POST['nombre'];
				$this->load->database();
				$data=array('mensaje'=>$_POST['mensaje'],'nombre'=>$_POST['nombre'],
				'email'=>$_POST['email'],'telefono'=>$_POST['phone']);
				$this->db->insert('mensaje',$data);
				$this->db->close();
				$data['head']="Mensaje enviado exitosamente";
				$data['msj']=
					"Su mensaje fue enviado exitosamente, pronto estaremos en contacto";
			}
			else {
				$data['head']="Ha ocurrido un error";
				$data['msj']="No se pudo enviar el mensaje";
				echo "var not set";
			}
			$this->load->view("header",$data);
			$this->load->view('infoContacto.php');
			$this->load->view('sociales.php');			
			$this->load->view("success",$data);
			$this->load->view("footer");

	}
	
}
