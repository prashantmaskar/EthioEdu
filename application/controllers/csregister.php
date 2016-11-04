<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class csregister extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
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


    public function index() {
        $view_params = array(
            'm_title' => 'Registration',
            'title' => 'Registration'
        );
        $this->load->view('csregister',$view_params);
        if(isset($_POST['laction'])){

        $this->addfrontuser();

        
        $sdata['schooltype'] = $_SESSION['schooltype'];
        $sdata['school']  = $_SESSION['school'];
        $sdata['level']  = $_SESSION['level'];
        $sdata['department']  = $_SESSION['department'];
        echo $sdata['username']  = $_SESSION['username'];
        $sdata['password']  = $_SESSION['password'];
     }
 

    }



   /* public function getsessiondata(){
echo"<script>alert('1');</script>";
        $sdata['schooltype'] = $_SESSION['schooltype'];
        $sdata['school']  = $_SESSION['school'];
        $sdata['level']  = $_SESSION['level'];
        $sdata['department']  = $_SESSION['department'];
       echo $sdata['username']  = $_SESSION['username'];
        $sdata['password']  = $_SESSION['password'];

        $this -> addfrontuser($sdata);

    }
*/
     
      
	
 public function addfrontuser(){

        $data = array( 
                'username' => $sdata['username'],
                'password' => $_SESSION['password'],
                'user_email' => $this->input->post('email'),
                'user_role' => 'schooluser',

            );

if ($this->init_models->add_front_user($data))
            {
    echo"<script>alert('Registration Success');</script>";
            }
        //echo "sdfdsfsdfsdfsdfsd". $_SESSION['schooltype'];
}

}
