<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class schooldetails extends CI_Controller {

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
        $this->load->model('init_models');
    }

    public function index() {
        $sch_id = $_GET['id'];
        $banners = $this->init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'School Details',
            'title' => 'School Details',
            'banners' => $banners
        );
        $view_params['news'] = $this->init_models->selectnews();
        $view_params['sch_details'] = $this->init_models->getsch_details($sch_id);
        $this->load->view('schooldetails',$view_params);
    }

}
