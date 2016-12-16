<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_event extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
        if ( !$this->session->userdata('logged_in'))
    { 
        redirect('index.php/login');
    }
    if (!($this->session->userdata('role') == 'admin')){
      redirect('index.php/home');
    }
    }


  public function index()
  {
            $event_id = $_GET['id'];
             $view_params = array(
                'm_title' => 'Edit Event',
                'title'   => 'Edit Event'
            );
      $view_params['event_details'] = $this->init_models->get_event_details($event_id);
    $this->load->view('admin/edit_event',$view_params);
if(isset($_POST['action'])){
        $this->edit_event();
        }
      }
    function edit_event()
       {
            
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

                if (!$this->upload->do_upload('avatar') == ""){
                $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                      }else{
                        $filedata= array(
                            'file_name' => 'default-image.jpg',
                            );
                      }
                $formdate = $this->input ->post('date');
                $adate = strtotime($formdate);
                $date = date('Y-m-d',$adate);

                        $data=array(
                  'post_id' => $this->input->post('post_id'),
                  'post_title' => $this->input->post('event_tital'),
                  'post_desc'  => $this->input->post('Description'),
                  'post_attachment' => $filedata['file_name'],
                  'post_author'=>  $this->input->post('eventby'),
                  'post_venue'=>  $this->input->post('event_venue'),
                  //'post_date' => $date,
                  //'post_time' => $this->input->post('time'),
                  'post_type'=>  $this->input->post('post_type'),
                   'post_approve' => $this->input->post('approve_status')
        );
                  $isinserted = $this->init_models->edit_event($data);
                        
               if(isset($isinserted)){
                redirect("index.php/admin/posts?post_type=event");
               }else{
                   echo"<script>alert('Failed');</script>";
               }

    }
  
}
