<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListEvent extends CI_Controller {

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
			$post_type = $_GET['post_type'];
             $view_params = array(
                'm_title' => 'Admin List Event',
                'title'   => 'Admin List Event'
            );
              $view_params['posts_details'] = $this->Init_models->get_posts_details($post_type);
		$this->load->view('admin/listevent',$view_params);
	}
}
