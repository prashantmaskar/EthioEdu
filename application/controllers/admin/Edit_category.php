<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_category extends CI_Controller {

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
                'm_title' => 'Edit Category',
                'title'   => 'Edit Category'
            );
             //$view_params['getcategory_details'] = $this->Init_models->get_category_details();
		$this->load->view('admin/edit_category',$view_params);

        if(isset($_POST['action'])){
        $this->edit_category();
        }
	}


	function edit_category(){

        $data = array(
                'vacancy_id' => $this->input->post('vacancy_id'),
                'vacancy_approve' => $this->input->post('approve_status'),
                'vacancy_date' => $this->input->post('date'),
                'vacancy_time' => $this->input->post('time')

            );

        if ($this->Init_models->edit_tender($data))
            {
              redirect('index.php/admin/listtender');
            }

}


}
