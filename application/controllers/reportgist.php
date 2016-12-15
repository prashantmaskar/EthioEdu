<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class reportgist extends CI_Controller {

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
       if (!$this->session->userdata('logged_in'))
    { 
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }
    }


    public function index() {
        $banners = $this->init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'Report Gist',
            'title' => 'Report Gist',
            'banners' => $banners
        );
          $view_params['gist'] = $this->init_models->selectgist();
        $this->load->view('reportgist',$view_params);


    if(isset($_POST['action'])){
        $this->add();
        }
    }

 public function add()
       {
       // if(!($this->input->post('fileformat')) == "" ){
        date_default_timezone_set('Asia/Kolkata');
            $imagePrefix = date("d-m-Y-h-i-s"); 
            $imagename = $imagePrefix.$value['name'];
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name'] = $imagename; // set the name here

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileformat') == ""){
                
                        $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                      }else{
                        
                        $filedata= array(
                            'file_name' => 'default-image.jpg',
                            );

                      }
                        

                        $date = date('d F, Y');
                        date_default_timezone_set('Asia/Kolkata');
                        $time = date('h:i:s A', time());
                        $sessid= $this->session->userdata('suserid');
                     
                        $data=array(
                        'post_title' => $this->input->post('caption'),
                        'post_desc'  => $this->input->post('Description'),
                        'post_category'=>$this->input->post('catagory'),
                        'post_attachment' => $filedata['file_name'],
                        'post_author'=>  $this->input->post('auther'),
                        'post_date' => $this->input->post('date'),
                        'post_date' => $date,
                        'post_time' => $time,
                        'post_source' => $this->input->post('source_link'),
                        'post_type'=>  $this->input->post('post_type'),
                        'post_approve' => $this->input->post('approve_status'),
                        'user_id'=>  $sessid
        );
                      
                      if($this->init_models->add_anews($data));
                      {
            $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
            redirect("index.php/reportgist");
            }
                        
 

    }

                
}





























