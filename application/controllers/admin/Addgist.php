<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addgist extends CI_Controller {

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
                'm_title' => 'Admin AddGist',
                'title'   => 'Admin AddGist'
            );
		$this->load->view('admin/AddGist',$view_params);
		if(isset($_POST['action'])){
        $this->add();
        }
    }
	
	 public function add()
       {
            

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('avatar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error);

                       //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );

                             $sessid= $this->session->userdata('suserid');
                     
                        $data=array(
                'post_title' => $this->input->post('caption'),
                'post_desc'  => $this->input->post('Description'),
                'post_category'=>$this->input->post('catagory'),
                 'post_attachment' => $filedata['file_name'],
                 'post_author'=>  $this->input->post('author'),
                   'post_date' => $this->input->post('date'),
                  'post_source' => $this->input->post('source_link'),
                 'post_type'=>  $this->input->post('post_type'),
                 'user_id'=>  $sessid
        );
                        
                        $isinserted = $this->init_models->add_anews($data);
                        

                        //
                }

               if(isset($isinserted)){
                    $res=array('success'=>true,"msg"=>'data added successfully');
                    //$this->load->view('upload_success', $res);
               }else{
                    $res=array('success'=>false,"msg"=>'data add failed');
                    //$this->load->view('upload_success', $res);
               }
               var_dump($res);

    }
}
