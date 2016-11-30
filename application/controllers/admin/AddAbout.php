<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddAbout extends CI_Controller {

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
             $view_params = array(
                'm_title' => 'Admin AddAbout',
                'title'   => 'Admin AddAbout'
            );
		$this->load->view('admin/AddAbout',$view_params);

    if(isset($_POST['addaction'])){
        $this->add();
        }

        if(isset($_POST['editaction'])){
        $this->edit();
        }
	}

    public function add()
       {     date_default_timezone_set('Asia/Kolkata');
            $imagePrefix = date("d-m-Y-h-i"); 
            $imagename = $imagePrefix.$value['name'];


                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name'] = $imagename; // set the name here

                $this->load->library('upload', $config);
              

                if ( ! $this->upload->do_upload('avatar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error);

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                         $date = date('Y-m-d');
                        date_default_timezone_set('Asia/Kolkata');
                        $time = date('h:i:s A', time());
                        $sessid= $this->session->userdata('suserid');
                     
                        $data=array(
                'post_title' => $this->input->post('caption'),
                'post_desc'  => $this->input->post('Description'),
                 'post_attachment' => $filedata['file_name'],
               'post_date' => $date,
                'post_time' => $time,
                'post_type'=>  $this->input->post('post_type'), 
                'user_id'=> $sessid

        );
                        
              if ($this->init_models->add_anews($data))
            {
            $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
            redirect("index.php/admin/AddAbout");
            }

               

    }
}
 public function edit()
      {
             date_default_timezone_set('Asia/Kolkata');
             $imagePrefix = date("d-m-Y-h-i"); 
             $imagename = $imagePrefix.$value['name'];

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                 $config['file_name'] = $imagename; // set the name here

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('avatar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error);

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                          $date = date('Y-m-d');
                        date_default_timezone_set('Asia/Kolkata');
                        $time = date('h:i:s A', time());

        $data=array(
                  'post_id' => $this->input->post('post_id'),
                  'post_title' => $this->input->post('caption'),
                  'post_desc'  => $this->input->post('Description'),
                   'post_attachment' => $filedata['file_name'],
                  'post_type'=>  $this->input->post('post_type'),
                  'post_date' => $date,
                  'post_time' => $time
             );
       /* var_dump($data);
        exit();*/
                  $isinserted = $this->init_models->edit_about($data);
                        
 /*var_dump($data);
        exit();*/
                        
                }

               if(isset($isinserted)){
            echo"<script>alert('Data Edited Successfully');</script>";
                redirect("index.php/admin/AddAbout");
               }else{
                   echo"<script>alert('Failed');</script>";
               }

    }
  
                
}


