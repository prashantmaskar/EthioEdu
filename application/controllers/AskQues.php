<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AskQues extends CI_Controller {

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
        if (!$this->session->userdata('logged_in'))
    {  
         $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    } 
    }


	public function index()
	{
		  $banners = $this->Init_models->getadvertisebanners();
                $view_params = array(
                'm_title' => 'askQues',
                'title'   => 'askQues',
                'banners' => $banners
            );
                 $view_params['categories'] = $this->Init_models->get_Que_categories();
		$this->load->view('askQues', $view_params);
		
		if(isset($_POST['action'])){
			$this->insertquestion();
		}
	}
	function insertquestion(){
		$que_desc=$this->input->post('question');
		$q_desc=trim($que_desc);
		$date = date('Y-m-d');
		date_default_timezone_set('Asia/Kolkata');
		$time = date('h:i:s A', time());
		$sessid= $this->session->userdata('suserid');
		$data=array(
			'question_type' =>$this->input->post('quetype'),
			'question_category' =>$this->input->post('subject'),
			'question_desc' =>$q_desc,
			'question_date' => $date,
			'question_time' => $time,
			'question_approve' => $this->input->post('approve_status'),
		     'user_id' => $sessid
			);
		if ($this->Init_models->insert_question($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Question asked Successfully'); 
            redirect("index.php/QuesAns");
            }
	}
}
