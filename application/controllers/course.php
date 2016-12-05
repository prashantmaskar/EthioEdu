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
        $this->load->library(array('session', 'form_validation', 'pagination', 'email','MY_Input'));
        $this->load->database();
        $this->load->model('init_models');
        // $this->load->library('pagination');
    }

function display($query_id = 0, $sort_by = 'course_name',$sort_order = 'asc', $offset = 0 ){

//echo"<script>alert($this->input->get('cat'));</script>";
        $limit = 1;
        $data['fields']= array(
        'course_id'=>'course_id',
        'course_name'=>'course_name',
            );
        //print_r( $data['fields']);

        

        $banners = $this->init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'Course List',
                'title'   => 'Course List',
                'banners' => $banners
            );


       $this->input->load_query($query_id);

        $query_array =   array(

           'course_name'=> $this->input->get('course_name'),
           'course_category'=> $this->input->get('course_category'),
    );

        //print_r($query_array);
       //

   $results = $this->init_models->search_course($query_array, $limit, $offset, $sort_by, $sort_order);
   //echo $this->db->last_query();

   $data['course']= $results['rows'];
   //print_r($data['project']);
   $data['num_results'] = $results['num_rows'];
    
    $config = array();

     $config['base_url'] = base_url("index.php/course/display/$query_id/$sort_by/$sort_order");
     $config['total_rows'] = $data['num_results'];
     $config['per_page'] = $limit;
     $config["uri_segment"] = 6;

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
     $data['pagination'] = $this->pagination->create_links();
    //$data['course_name']=$this->init_models->selectcourse();
       $this->load->view('course',$data);

    }



    public function index($query_id = 0, $sort_by = 'course_name',$sort_order = 'asc', $offset = 0 ) {
    
   //echo"sdfsdf". $this->input->post('cat');
        $limit = 1;
        $data['fields']= array(
        'course_id'=>'course_id',
        'course_name'=>'course_name',


            );

        $banners = $this->init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'Course List',
                'title'   => 'Course List',
                'banners' => $banners
            );


       $this->input->load_query($query_id);

        $query_array =   array(

           'course_name'=> $this->input->get('course_name'),
           'course_category'=> $this->input->get('course_category'),

    );
       //

   $results = $this->init_models->search_course($query_array, $limit, $offset, $sort_by, $sort_order);
    $this->db->last_query();

   $data['course']= $results['rows'];

   $data['num_results'] = $results['num_rows'];
    
    $config = array();

     $config['base_url'] = base_url("index.php/course/display/$query_id/$sort_by/$sort_order");
     $config['total_rows'] = $data['num_results'];
     $config['per_page'] = $limit;
     $config["uri_segment"] = 6;

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
     $data['pagination'] = $this->pagination->create_links();
$data['project_topics']=$this->init_models->selectproject();
       $this->load->view('course',$data);
    }



    function search(){
     
       $query_array =   array(

           'course_name'=> $this->input->post('course_name'),
           'course_category'=> $this->input->get('category'),
            );


         $query_id = $this->input->save_query($query_array);

         redirect("index.php/course/display/$query_id");


    }

}
