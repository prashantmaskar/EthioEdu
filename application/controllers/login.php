<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
       $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('init_models');
           $this->load->model('init_models');
       if ($this->session->userdata('logged_in'))
    { 
       $this->session->sess_destroy();
    }
    }

	public function index()
	{
             $view_params = array(
                'm_title' => 'Login Page',
                'title'   => 'Login Page',
            );
		$this->load->view('login',$view_params);


 if(isset($_POST['action'])){
   // echo"<script>alert('1');</script>";
          $username = $this->input->post("username");
          $password = $this->input->post('password');

          $this->form_validation->set_rules("username", "Username", "trim|required");
          $this->form_validation->set_rules("password", "Password", "trim|required");
//echo"<script>alert('2');</script>";
          if ($this->form_validation->run() == FALSE)
          {//echo"<script>alert('3');</script>";

              $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');

          }
      else{

       $usr_result = $this->init_models->selectprivacy($username, $password);
     

      if ($usr_result){ 
                    foreach ( $usr_result as $row)
                      {
                              $suname = $row['username'];
                              $suserid =  $row['user_id'];
                              $userrole =  $row['user_role'];
                      }
                    $sessiondata = array(
                              'susername' => $suname,
                              'suserid' => $suserid,
                              'role' => $userrole,
                              'logged_in' => TRUE
                         );

                        $this->session->set_userdata($sessiondata);
                        if($this->session->userdata('role') == 'admin'){
                        redirect("index.php/admin/dashboard");
                      }
                      else{
                        redirect("index.php/home");
                      }
                    }
                    
                    
        
     	}  
      }
	}


}
