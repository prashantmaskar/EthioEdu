<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enquiry extends CI_Controller {

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
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }
    }


	public function index()
	{
        $sessid= $this->session->userdata('suserid');
        $data = array(

            'user_id'=> $sessid,
            );
        $related_res = $this->init_models->enquiry_users($data);
        $banners = $this->init_models->getadvertisebanners();
             $view_params = array(
                'm_title' => 'enquiry',
                'title'   => 'enquiry',
                'banners' =>$banners,
                'related_res' => $related_res
            );
		$this->load->view('enquiry',$view_params);
		
		if(isset($_POST['action'])){

        $this->insertenquiry();
    }

	}
	 function insertenquiry(){
        $date = date('d F, Y');
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s A', time());
        $sessid= $this->session->userdata('suserid');
        $data = array(
                'enquiry_school_name' => $this->input->post('school'),
                'enquiry_person_name' => $this->input->post('fullname'),
                'enquiry_person_email' => $this->input->post('email'),
                'enquiry_person_location' => $this->input->post('address'),
                'enquiry_person_number' => $this->input->post('phone_number'),
                'enquiry_subject' => $this->input->post('subject'),
                'enquiry_message' => $this->input->post('enquirybox'),
                'enquiry_date' => $date,
                'enquiry_time' => $time,
                'school_id' => $this->input->post('sid'),
                'user_id' => $sessid

            );

        if ($this->init_models->insert_enquiry($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
                    $sid = $this->input->post('sid');
                       $name = $this->input->post('school');
            redirect("index.php/enquiry?id=$sid&name=$name");
            }

}
}
