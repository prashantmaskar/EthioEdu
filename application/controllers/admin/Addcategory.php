<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addcategory extends CI_Controller {

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
                'm_title' => 'Add Category',
                'title'   => 'Add Category'
            );
		$this->load->view('admin/addcategory',$view_params);

        if(isset($_POST['action'])){
        $this->insertcategory();
        }
	}
	function insertcategory(){

        $data = array(
                'category_name' => $this->input->post('category_name'),
                'category_type' => $this->input->post('category_type'),

            );
     
              if ($this->Init_models->insert_category($data))
            {

            $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
        
            redirect("index.php/admin/addcategory");
            }
  
}

}
