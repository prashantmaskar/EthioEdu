<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {

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
        $this->load->library(array('session', 'form_validation', 'email','pagination'));
        $this->load->database();
        $this->load->model('init_models');
        // $this->load->library('pagination');
    }


    public function index() {
        $view_params = array(
            'm_title' => 'Course',
            'title' => 'Course'
        );

 //pagination settings
        $config['base_url'] = base_url('index.php/course/index');
        $config['total_rows'] = $this->db->count_all('tbl_course');
        $config['per_page'] = "1";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the schools data
        $view_params['course'] = $this->init_models->selectcourse($config["per_page"], $data['page']);           

        $view_params['pagination'] = $this->pagination->create_links();
//          $view_params['schools'] = $this->init_models->selectschool();
         

           // $view_params['course'] = $this->init_models->selectcourse();
        $this->load->view('course',$view_params);
    }

     function search(){
          $view_params = array(
            'm_title' => 'Course',
            'title' => 'Course'
        );
        $course_name = $this->input->post('course_name');
        $course_name = ($this->uri->segment(3)) ? $this->uri->segment(3) : $course_name;


        $config = array();
        $config['base_url'] = site_url("index.php/course/search/$course_name");
        $config['total_rows'] = $this->init_models->get_course_count($course_name);
        $config['per_page'] = "1";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$c
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

         $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // get school list
        $view_params['course'] = $this->init_models->get_course($config['per_page'], $data['page'], $course_name);

        $view_params['pagination']= $this->pagination->create_links();

        //load view
        $this->load->view('course',$view_params);
    }

}
