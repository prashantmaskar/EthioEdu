<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Userdashboard extends CI_Controller {

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
        if ( !$this->session->userdata('logged_in'))
    { 
        redirect('index.php/login');
    } 
    }


    public function index() {
        $uid = $_GET['uid'];
        $sessid= $this->session->userdata('suserid');
        $related_res = $this->Init_models->related_users($sessid);
        $banners = $this->Init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'userdashboard',
            'title' => 'Connect2Me',
            'banners' => $banners,
            'related_res' => $related_res,
        );
        $view_params['user_info'] = $this->Init_models->getuserinfo($uid);
        $view_params['user_activity'] = $this->Init_models->getuseractivity($uid);
        $this->load->view('userdashboard',$view_params);
    }

}
