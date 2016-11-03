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
    }

	public function index()
	{
             $view_params = array(
                'm_title' => 'Login Page',
                'title'   => 'Login Page',
            );
		$this->load->view('login',$view_params);

     if(isset($_POST['action'])){
        $this->get_db_credentils();
     	} 


     if(isset($_POST['action'])){
        $this->checkcredentials();
     	}
			
	}



	public function get_db_credentils(){

		$row = $this->init_models->get_user_credentials();
        $result = array( 

           'uname'  => $row['username'],
           'pass'  => $row['password'],
           'email'  => $row['user_email'],

            );
        //echo $row['username'];
       // echo $row['password'];
        return $result;

	}

	public function checkcredentials(){

    $dbdata = $this->get_db_credentils();
    	$username = $this->input->post("username");
		 $pass = $this->input->post("password");
    	//echo $dbdata['uname']."<br/>".$dbdata['pass'];

    	if($username == $dbdata['uname'] && $pass == $dbdata['pass'] ){
    		echo"<script>alert('Logged IN');</script>";

    		$sessdata = array(
    		   'username'  => $dbdata['uname'],
               'email'     => $dbdata['email'],
               'logged_in' => TRUE
           );

			$this->session->set_userdata($sessdata);

			//$name = $this->session->userdata('username');
			redirect('index.php/home');

    	}
	}

}
