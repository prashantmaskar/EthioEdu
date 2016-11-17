<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addschool extends CI_Controller {

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
                'm_title' => 'Admin Addschool',
                'title'   => 'Admin Addschool'
            );
		$this->load->view('admin/Addschool',$view_params);
		 if(isset($_POST['action'])){
        $this->insertschooldata();
        } 
	}
	function insertschooldata(){
        $date = date('d F, Y');
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s A', time());
    
     $data = array( 
                'registration_type' => $this->input->post('choice'),
                'school_name' => $this->input->post('schoolname'),
                'school_category' => $this->input->post('choice1'),
                'school_university' => $this->input->post('choice2'),
                'school_institute' => $this->input->post('choice3'),
                'other_category' => $this->input->post('choice4'),
                'school_number' => $this->input->post('phone_number'),
                'school_country' => $this->input->post('choice5'),
                'school_city' => $this->input->post('choice6'),
                'school_region' => $this->input->post('choice7'),
                'school_type' => $this->input->post('choice8'),
                'school_population' => $this->input->post('student_population'),
                'teaching_staff' => $this->input->post('t_staff'),
                'non_teaching_staff' => $this->input->post('non_teach'),
                'school_awards' => $this->input->post('past_award'),
                'school_acadamic_year' => $this->input->post('year'),
                'school_acadamic_fee' => $this->input->post('fee'),
                'admission_procedure' => $this->input->post('Admissios_pro'),
                'acadamic_requirment' => $this->input->post('Description'),
                'school_date' => $date,
                'school_time' => $time,
                'school_scholarship' => $this->input->post('scolership'),
                'school_address' => $this->input->post('address'),
                'school_url' => $this->input->post('website'),
                'school_desc' => $this->input->post('tell_us'),
                'school_approve'=>$this->input->post('approve_status'),
                'user_id' => '1'
                );

     if ($this->init_models->addschooldata($data))
            {
    //echo"<script>alert('Registration Success');</script>";
                $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
                redirect("index.php/admin/AddSchool");
            }
            else{
                $this->session->set_flashdata('errormessage', 'Sorry !!! Error Occured'); 
                redirect("index.php/admin/AddSchool");

            }
}
}
