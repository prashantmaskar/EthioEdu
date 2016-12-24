<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addtender extends CI_Controller {

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
                'm_title' => 'Admin Add Tender',
                'title'   => 'Admin Add Tender'
            );
		$this->load->view('admin/addtender',$view_params);

        if(isset($_POST['action'])){

        $this->insertdata();
    }
	}
	function insertdata(){
        $date = date('Y-m-d');
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s A', time());
         $formdate = $this->input->post('sdate');
        $totimedate = strtotime($formdate);
        $fdate = date("Y-m-d", $totimedate);
         $formdate1 = $this->input->post('edate');
        $totimedate1 = strtotime($formdate1);
        $f1date = date("Y-m-d", $totimedate1);
        $sessid= $this->session->userdata('suserid');
        $data = array(
                'vacancy_name' => $this->input->post('title'),
                'vacancy_school_name' => $this->input->post('sname'),
                'vacancy_count' => $this->input->post('vcount'),
                'vacancy_from_date' =>  $fdate,
                'vacancy_to_date' => $f1date,
                 'vacancy_date' => $date,
                'vacancy_time' => $time,
                'vacancy_desc' => $this->input->post('vdesc'),
                'vacancy_approve' => $this->input->post('approve_status'),
                'user_id' => $sessid

            );

        /*if ($this->Init_models->insertprivacy($data))
            {
    echo"<script>alert('Data Inserted Successfully');</script>";
            }*/
            if ($this->Init_models->insertprivacy($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'tender added Successfully'); 
            redirect("index.php/admin/addtender");
            }

}
}
