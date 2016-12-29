<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy_details extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
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
        /* $sessname = $this->session->userdata('susername');
   if ( !$this->session->userdata('logged_in'))

    { 
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }*/
    }



    public function index() {
        $vac_id = $_GET['id'];
        $banners = $this->Init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'Vacancy Details',
            'title' => 'Vacancy Details',
            'banners' => $banners,
        );
        $view_params['previous_vacancy'] = $this->Init_models->get_previous_vacancy();
        $view_params['news'] = $this->Init_models->selectnews();
        $view_params['vacanyid'] = $this->Init_models->getvacanydetails($vac_id);
        $this->load->view('vacancy_details',$view_params);
    }

}
