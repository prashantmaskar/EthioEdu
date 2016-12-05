<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ansQues extends CI_Controller {

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
         $sessname = $this->session->userdata('susername');
    }


	public function index()
	{
		  $banners = $this->init_models->getadvertisebanners();
                $view_params = array(
                'm_title' => 'ansQues',
                'title'   => 'ansQues',
                'banners' => $banners
            );
                 $view_params['response'] = $this->init_models->selectresponse();
		$this->load->view('ansQues', $view_params);
		
		if(isset($_POST['action'])){
			$this->insertAnswer();
		}
	}
	function insertAnswer(){
		$date = date('Y-m-d');
		date_default_timezone_set('Asia/Kolkata');
		$time = date('h:i:s A', time());
		$sessid= $this->session->userdata('suserid');
		$data=array(
			/*'response_title' =>$this->input->post('caption'),*/
			'response_desc' =>$this->input->post('Description'),
			'response_like' =>$this->input->post('response_like'),
             'response_type' =>$this->input->post('response_type'),
			'response_date' => $date,
			'response_time' => $time,
			'question_id' =>$this->input->post('question_id'),
		    'user_id' => $sessid
			);
		if ($this->init_models->insert_response($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Answer posted Successfully'); 
            redirect("index.php/home");
            }
	}
}
