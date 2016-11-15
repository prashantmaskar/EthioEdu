<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class askQues extends CI_Controller {

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
    }


	public function index()
	{
                $view_params = array(
                'm_title' => 'askQues',
                'title'   => 'askQues'
            );
		$this->load->view('askQues', $view_params);
		if(isset($_POST['action'])){
			$this->insertquestion();
		}
	}
	function insertquestion(){
		$sessid= $this->session->userdata('suserid');
		$data=array(
			'question_type' =>$this->input->post('quetype'),
			'question_category' =>$this->input->post('subject'),
			'question_desc' =>$this->input->post('question'),
			//'question_date' =>date("d/m/Y");
		     'user_id' => $sessid
			);
		if ($this->init_models->insert_question($data))
            {
    echo"<script>alert('Data Inserted Successfully');</script>";
            }
	}
}
