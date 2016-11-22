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
 
} 

if(isset($_POST['laction'])){
        $this->get_frontuser_id();
 
} 

if(isset($_POST['laction'])){
        $this->user_details();
        }  


        $this->form_validation->set_rules('username', 'Username', 'required');

    }



 public function addfrontuser(){

            $password = $this->input->post('password', true);
            $pass = md5($password);
        $data = array( 
               'username' => $this->input->post('username'),
                'password' => $pass,
                'user_email' => $this->input->post('email'),
                'user_role' => 'schooluser',

            );

        $this->init_models->add_front_user($data);
}


       public function get_frontuser_id(){
           $result_id = $this->init_models->getfrontueserid();
        $data = array( 

           'uid'  => $result_id['user_id'],

            );
        return $data;

          }

         public function user_details(){
$getid = $this->get_frontuser_id();
            $data = array( 

                'school_type' => $this->input->post('schooltype'),
                'user_school' => $this->input->post('school'),
                'user_level' => $this->input->post('level'),
                'user_dept' => $this->input->post('department'),
                'user_first_name' => $this->input->post('first_name'),
                'user_last_name' => $this->input->post('last_name'),
                'user_gender' => $this->input->post('gender'),
                'mobile_no' => $this->input->post('phone_number'),
                'user_avatar' => $this->input->post('attach'),
                'marital_status' => $this->input->post('status'),
                'interested_in' => $this->input->post('interestedIn'),
                'about_user' => $this->input->post('aboutme'),
                'user_interest' => $this->input->post('myinterest'),
                'user_hobby' => $this->input->post('myhobby'),
                'user_id' => $getid['uid'],
                );


             if ($this->init_models->adduserdetails($data))
            {
    echo"<script>alert('Registration Success');</script>";
            }



          }

}
