<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quesanswer extends CI_Controller {

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
                'm_title' => 'Admin Question-Answer',
                'title'   => 'Admin Question-Answer'
            );
             $view_params['question'] = $this->init_models->selectquestion();
		$this->load->view('admin/Question-Answer',$view_params);
		if(isset($_POST['action'])){
			$this->insertquestion();
		}
	}
	function insertquestion(){
		$sessid= $this->session->userdata('suserid');
		$data=array(
			'question_type' =>$this->input->post('quetype'),
			'question_category' =>$this->input->post('subcat'),
			'question_desc' =>$this->input->post('question'),
			 'user_id' => $sessid
			);
		if ($this->init_models->insert_question($data))
            {
    echo"<script>alert('Data Inserted Successfully');</script>";
            }
	}
}
