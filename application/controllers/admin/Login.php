 <?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        class Login extends CI_Controller {
           public function index($msg="none"){      
            $this->load->helper('url'); 
            $this->load->library('session');
            $data['head']= "Please login";
            #no me gusta nada
            $data['msg']=($msg=="none")?"":($msg=="fail")?"Usuario o contrasena invalidos":"";
            $sess_id = $this->session->userdata('user_id');            
             if(!empty($sess_id)){//session already exists
              redirect('admin/admin');
              }
            $this->load->view('header.php',$data); 
            $this->load->view('admin/login.php');
            $this->load->view('footer.php');             
           }
           public function attempt(){
           	$this->load->database();
           	$this->load->library('util');
           	
           	if($this->util->areSetPost(array('user','password'))){
           		#$this->load->helper('url'); 
           		$user=$_POST['user'];
           		$pass=$_POST['password'];
           		$seek="SELECT * FROM usuario WHERE nombre='$user'
           			AND clave = '$pass'";
           			$query = $this->db->query($seek);
           			if($query->num_rows()==0){
           				redirect("admin/login/index/fail");
           			}           			
           			else{
           				$res=$query->row_array();                    			
           				//crear variables de sesion
           				$this->load->library('session');
           				$this->session->set_userdata($res);
           				#print_r ($this->session->userdata());
           				redirect("admin/admin");
           			}
           	}           	
           }
        }