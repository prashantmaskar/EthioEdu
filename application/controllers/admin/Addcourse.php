<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addcourse extends CI_Controller {

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
                'm_title' => 'Admin Add course',
                'title'   => 'Admin Add course'
            );
             $view_params['categories'] = $this->Init_models->get_categories();
             //print_r($view_params['categories']);
		$this->load->view('admin/addcourse',$view_params);

        if(isset($_POST['action'])){
        $this->insertdata();
        }
	}
	function insertdata(){
        $duration = $this->input->post('duration');
        $cduration = $this->input->post('c_duration');
        if($duration == 'year'){
           $fduration = $cduration*365;
        }
        elseif($duration == 'Month'){
            $fduration = $cduration*30;
        }
        else
        {
         $fduration = $cduration;
        }
        $details=$this->input->post('details');
        $c_details=trim($details);

        $date = date('Y-m-d');
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s A', time());
        $sessid= $this->session->userdata('suserid');
        $data = array(
                'course_name' => $this->input->post('Course_name'),
                'course_subject' => $this->input->post('Major_sub'),
                'course_category' => $this->input->post('course_cat'),
                'course_duration' => $fduration,
                'course_school' => $this->input->post('addschool'),
                'course_university' => $this->input->post('adduniversity'),
                'course_desc' =>$c_details,
                'course_approve' => $this->input->post('approve_status'),
                'course_date' => $date,
                'course_time' => $time,
                'user_id' => $sessid

            );
/*
        if ($this->Init_models->insertcourse($data))
            {
    echo"<script>alert('Data Inserted Successfully');</script>";
            }
*/
              if ($this->Init_models->insertcourse($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'course added Successfully'); 
            redirect("index.php/admin/addcourse");
            }
  
}

}
