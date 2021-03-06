<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edituser extends CI_Controller {

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
        $this->load->model('Init_models');
        if ( !$this->session->userdata('logged_in'))
    { 
        redirect('index.php/login');
    }
    }


	public function index()
	{
        $sessid= $this->session->userdata('suserid');
        $related_res = $this->Init_models->related_users($sessid);
        $banners = $this->Init_models->getadvertisebanners();
             $view_params = array(
                'm_title' => 'Edit UserProfile',
                'title'   => 'Edit UserProfile',
                'banners' => $banners,
                'related_res' => $related_res,
            );
        $view_params['user_details'] = $this->Init_models->get_currentuser_details($sessid);
		$this->load->view('edituser',$view_params);


 if(isset($_POST['uaction'])){
   $epass =  $this->input->post('password');
    if(!$epass == ""){
        $this->addfrontuser();
    }else{
        $this->editfrontuser();
    }
 
} 

		if(isset($_POST['uaction'])){
        $this->update_user();
        } 
	}

	public function addfrontuser(){
        	$sessid= $this->session->userdata('suserid');
            $password = $this->input->post('password', true);
            $pass = md5($password);
	        $data = array( 
	        		'user_id' => $sessid,
	               	'username' => $this->input->post('username'),
	               'first_name' => $this->input->post('first_name'),
	                'last_name' => $this->input->post('last_name'),
	                'password' => $pass,
	                'user_email' => $this->input->post('email'),
	                'user_role' => $this->input->post('role'),


	            );

        $this->Init_models->update_front_user($data);
}


public function editfrontuser(){
            $sessid= $this->session->userdata('suserid');
            $data = array( 
                    'user_id' => $sessid,
                    'username' => $this->input->post('username'),
                   'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'user_email' => $this->input->post('email'),


                );

        $this->Init_models->edit_front_user($data);
}





	public function update_user(){


         $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

              if ($this->upload->do_upload('attach')){
                        //echo "<script>alert('in do_upload');</script>";
                $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                      }else{
                       // echo "<script>alert('in  main else');</script>";
                       // echo "in else".$this->input->post('avatar');
                      if($this->input->post('avatar') == ""){
                          //echo "<script>alert('in file name');</script>";
                          $filedata= array(
                            'file_name' => $this->input->post('imagename'),
                            );
                                  
                      }
                    if($this->input->post('avatar') == "" && $this->input->post('imagename') == ""){
                      //echo "<script>alert('in else');</script>";
                        $filedata= array(
                            'file_name' => 'default-avatar.png',
                            );
                      }
                      }
            $date = date('d F, Y');
        date_default_timezone_set('Asia/Kolkata');
        $sessid= $this->session->userdata('suserid');
        $time = date('h:i:s A', time());
            $data = array( 

                'school_type' => $this->input->post('schooltype'),
                'user_school' => $this->input->post('school'),
                'user_level' => $this->input->post('level'),
                'user_dept' => $this->input->post('department'),
                'user_gender' => $this->input->post('gender'),
                'mobile_no' => $this->input->post('phone_number'),
                'user_avatar' => $filedata['file_name'],
                'marital_status' => $this->input->post('status'),
                'interested_in' => $this->input->post('interestedIn'),
                'about_user' => $this->input->post('aboutme'),
                'user_interest' => $this->input->post('myinterest'),
                'user_hobby' => $this->input->post('myhobby'),
                'user_date' => $date,
                'user_time' => $time,
                'user_id' => $sessid,
                );
        


             if ($this->Init_models->updateuserdetails($data))
            {
    $this->session->set_flashdata('message', 'User Updated Successfully'); 
            redirect("index.php/edituser");            }



          }
}
