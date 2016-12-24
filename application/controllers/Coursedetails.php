<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Coursedetails extends CI_Controller {

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


         /*if ( !$this->session->userdata('logged_in'))
    { 
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }*/

    }


    public function index() {

        if(isset($_GET['id'])){
            $this->session->set_userdata('course_id', $_GET['id']);
        }

        $cource_id = $this->session->userdata('course_id');

        if(isset($_POST['action']))
        {
        $this->insertreview();
        }
        $course_id = $_GET['id'];
        $sessid= $this->session->userdata('suserid');
        $banners = $this->init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'Course Details',
            'title' => 'Course Details',
            'banners' => $banners,
            'cource_id' => $cource_id
        );
        $view_params['course_count'] = $this->init_models->get_all_course_count($course_id, $sessid);
        $view_params['course_details'] = $this->init_models->getcoursedetails($course_id);
        $view_params['user_details'] = $this->init_models->getuserdetails($sessid);
        $view_params['more_course'] = $this->init_models->getmorecourse($course_id);
        $this->load->view('coursedetails',$view_params);
    }
       

    function insertreview()
    {
        $sessid= $this->session->userdata('suserid');
        $data=array(

            'course_rating' =>$this->input->post('star'),       
            'course_review' =>$this->input->post('Review_Contents'),
            'review_title' =>$this->input->post('Review_title'),
            'course_id' =>$this->input->post('course_id'),
            'user_id' => $sessid
             
            );
            
                $id = $_GET['id'];
       if($isinserted = $this->init_models->insertreview($data))
                        
                        {
                           $this->session->set_flashdata('message', 'Review and rating added Successfully'); 
                            redirect("index.php/course?id=$id");
                      }
             
    }

}
