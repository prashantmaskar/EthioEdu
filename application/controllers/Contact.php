<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
        $banners = $this->init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'Contact',
            'title' => 'Contact',
            'banners' => $banners
        );
           $this->load->view('contact',$view_params);
           if(isset($_POST['action']))
        {
            $this->insertcontact();
        }
    }
    function insertcontact(){
        $data=array(
            'contact_person_name' =>$this->input->post('full_name'),
            'contact_person_email' =>$this->input->post('email'),
            'contact_number' =>$this->input->post('phone_number'),
            'contact_desc' =>$this->input->post('description'),
             
            );
        if ($this->init_models->insert_contact($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
            redirect("index.php/contact");
            }
    }

}
