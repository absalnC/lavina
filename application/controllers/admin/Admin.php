 <?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        class Admin extends CI_Controller {
           public function index(){    
            $this->load->helper('url'); 
            $this->load->library('session');            
            $sess_id = $this->session->userdata("id_usuario");            
             if(empty($sess_id)){//not authenticated user:       
              redirect('admin/login');
              }
            $data['head']="Admin";
            $data['user']= $this->session->userdata();
            $this->load->view('header.php',$data);            
            $this->load->view('admin/admin.php');
            $this->load->view('footer.php');       
           }
           public function test(){
            $this->load->helper('url'); 
            $data['head']="Admin";
            $this->load->view('header.php',$data); 
            $this->load->view('admin/admin.php');
            $this->load->view('footer.php');       
           }
        }