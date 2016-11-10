<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addnews extends CI_Controller {

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
    

	function __construct() {
	parent::__construct();
	$this->load->model('init_models');
	}
	public function index()
	{
             $view_params = array(
                'm_title' => 'Admin AddNews',
                'title'   => 'Admin AddNews'
            );
		$this->load->view('admin/Addnews',$view_params);
	}

    public function add()
    {
    	$data = array(
		'post_title' => $this->input->post('caption'),
		'post_desc' => $this->input->post('Description'),
		'post_attachment'=> '',
		'post_author' => $this->input->post('author'),
		'post_date' => $this->input->post('date'),
		'post_source' => $this->input->post('source_link'),
		'post_category'=>'',
		'post_type'=>'',
		'user_id'=>''
		);

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

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data1 = array('upload_data' => $this->upload->data());

                        //$db = $this->db->conn_id;

                        

                    	$filedata= array(
                    		'file_name' => $data1['upload_data']['file_name'],
                    		'mime_type' => $data1['upload_data']['file_type'],
                    		'blob' => $data1['upload_data']['full_path']
                    	);

                    	$data['post_attachment']=$this->init_models->add_attachment($filedata);
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
