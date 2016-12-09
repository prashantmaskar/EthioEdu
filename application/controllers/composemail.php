<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class composemail extends CI_Controller {

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
		$related_res = $this->init_models->related_users();
		$banners = $this->init_models->getadvertisebanners();
            $view_params = array(
                'm_title' => 'Studenet inbox',
                'title'   => 'Studenet inbox',
                'banners' => $banners,
                'related_res' => $related_res,
            );
		$this->load->view('composemail', $view_params);

		if(isset($_POST['action'])){
		$this->sendmessage();
	}
}

	function sendmessage(){

				$uname = $this->input->post('username');
				$get_id = $this->init_models->get_user_id_by_uname($uname);

				if ($get_id){ 
                    foreach ( $get_id as $row)
                      {
                              $suname = $row['user_id'];
                      }
                  }

				$formdata =  date('d F, Y');
        		$adate = strtotime($formdata);
        		$date = date('Y-m-d', $adate);
        		date_default_timezone_set('Asia/Kolkata');
       		    $time = date('h:i:s A', time());
				$sessid= $this->session->userdata('suserid');

				$data = array(
				'pm_subject' => $this->input->post('subject'),
				'pm_message' => $this->input->post('Message'),
				'pm_send_to' => $suname,
				'pm_date' => $date,
				'pm_time' => $time,
				'user_id' => $sessid,
				);
				 if ($this->init_models->sendpmessage($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
            redirect("index.php/composemail");
            }

	}
	


}
