<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class addschool extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    //public $uname;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('init_models');
    }


    public function index() {

        if (!$this->session->userdata('logged_in'))
        { 
            if(isset($_POST['action'])){
                $this->insertuserdata();
            } 
        }
        if(isset($_POST['action'])){
            $this->get_user_id();
        }  

        if(isset($_POST['action'])){
            $captcha_info = $this->session->userdata('captcha_info');

            if ($captcha_info['code'] != $this->input->post('captcha'))
            {
                //don't process the form
              echo "Invalid Captcha ...!";
              exit();

            }else{
                
                $this->insertschooldata();
            }
        } 


        $this->load->library('captcha');

        $banners = $this->init_models->getadvertisebanners();

        $view_params = array(
            'm_title' => 'Add School',
            'title' => 'Add School',
            'banners' => $banners,
            'captcha' => $this->captcha->main()
        );
        $sessid= $this->session->userdata('suserid');
        $this->session->set_userdata('captcha_info', $view_params['captcha']);
        $view_params['user_details'] = $this->init_models->getuserdetails($sessid);
        $this->load->view('addschool',$view_params);
    } 


        

     function insertuserdata(){
         $password = $this->input->post('password', true);
          $pass = md5($password);
        $data = array( 
                   'username' => $this->input->post('user_name'),
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'password' => $pass,
                'user_email' => $this->input->post('email'),
                'user_role' => 'schooluser',

            );
        $this->init_models->addschooluser($data);
}


 function get_session_id(){
   // $ress = $this->init_models->getueserid();
        $data = array( 

           'uid'  => $this->session->userdata('suserid'),

            );
        return $data;
          
}
 function get_user_id(){
    $ress = $this->init_models->getueserid();
        $data = array( 

           'uid'  => $ress['user_id'],

            );
        return $data;
          
}



function insertschooldata(){
           date_default_timezone_set('Asia/Kolkata');
            $imagePrefix = date("d-m-Y-h-i-s"); 
            $imagename = $imagePrefix.$value['name'];


                $config['upload_path']= './uploads/';
                $config['allowed_types']= 'gif|jpg|png';
                $config['max_size']= 100000;
                $config['max_width']= 1024;
                $config['max_height'] = 768;
                 $config['file_name'] = $imagename; // set the name here

                $this->load->library('upload', $config);
              if (!$this->upload->do_upload('fileformat') == ""){
                $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                      }else{
                        $filedata= array(
                            'file_name' => 'default-image.jpg',
                            );
                      }
/*
        $date = date('d F, Y');
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s A', time());*/
         $sessid= $this->session->userdata('suserid');
          if ($this->session->userdata('logged_in'))
    {
      $getid = $this->get_session_id();
    }else{
    $getid = $this->get_user_id();
  }

  
        $date = date('Y-m-d');
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s A', time());
     $data = array( 
                'registration_type' => $this->input->post('choice'),
                'school_name' => $this->input->post('schoolname'),
                'school_logo' => $filedata['file_name'],
                'school_category' => $this->input->post('cat'),
                'school_university' => $this->input->post('choice2'),
                'school_institute' => $this->input->post('choice3'),
                'other_category' => $this->input->post('choice4'),
                'school_number' => $this->input->post('phone_number'),
                'school_country' => $this->input->post('choice5'),
                'school_city' => $this->input->post('choice6'),
                'school_region' => $this->input->post('choice7'),
                'school_type' => $this->input->post('choice8'),
                'school_population' => $this->input->post('student_population'),
                'school_facility' => $this->input->post('tokenfield'),
                'teaching_staff' => $this->input->post('t_staff'),
                'non_teaching_staff' => $this->input->post('non_teach'),
                'school_awards' => $this->input->post('past_award'),
                'school_acadamic_year' => $this->input->post('year'),
                'school_acadamic_fee' => $this->input->post('fee'),
                'admission_procedure' => $this->input->post('Admissios_pro'),
                'acadamic_requirment' => $this->input->post('Description'),
                'school_date' => $date,
                'school_time' => $time,
                'school_scholarship' => $this->input->post('scolership'),
                'school_address' => $this->input->post('address'),
                'school_url' => $this->input->post('website'),
                'school_desc' => $this->input->post('tell_us'),
                  'school_approve' => $this->input->post('approve_status'),
                  'user_id' => $getid['uid'],
                      
                    
);
     if ($this->init_models->addschooldata($data))
            {
    //echo"<script>alert('Registration Success');</script>";
                $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
                redirect("index.php/addSchool");
            }
            else{
                $this->session->set_flashdata('errormessage', 'Sorry !!! Error Occured'); 
                redirect("index.php/addSchool");

            }
        
}




}

