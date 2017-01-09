<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class QuesAns extends CI_Controller {

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
        $this->load->library(array('session', 'form_validation', 'pagination', 'email','MY_Input'));
        $this->load->database();
        $this->load->model('Init_models');
    }

 function display($query_id = 0, $sort_by = 'post_date',$sort_order = 'asc', $offset = 0 ){


        $limit = 5;
        $data['fields']= array(
        'question_id'=>'question_id',
        'question_desc'=>'question_desc',
        'question_date'=>'question_date',
        'question_category'=>'question_category',
            );

        $banners = $this->Init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'Question Search',
                'title'   => 'Question Search',
                'banners' => $banners
            );


       $this->input->load_query($query_id);

        $query_array =   array(

           'start_date'=> $this->input->get('start_date'),
           'end_date'=> $this->input->get('end_date'),
           'question_category'=> $this->input->get('question_category'),
           
    );
       //
        //print_r($query_array);

   $results = $this->Init_models->search_question($query_array, $limit, $offset, $sort_by, $sort_order);
   //echo $this->db->last_query();

   $data['question']= $results['rows'];

   $data['num_results'] = $results['num_rows'];
    
    $config = array();

     $config['base_url'] = base_url("index.php/QuesAns/display/$query_id/$sort_by/$sort_order");
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
     $data['categories'] = $this->Init_models->get_ques_cat();
     $data['pagination'] = $this->pagination->create_links();
//print_r($data);
       $this->load->view('QuesAns',$data);

    }



    public function index($query_id = 0, $sort_by = 'post_date',$sort_order = 'asc', $offset = 0 )
    {
 

        $limit = 5;
        
        $data['fields']= array(
        'question_id'=>'question_id',
        'question_desc'=>'question_desc',
        'question_date'=>'question_date',
        'question_category'=>'question_category',
        
            );

        $banners = $this->Init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'Questions',
                'title'   => 'Questions',
                'banners' => $banners
            );


       $this->input->load_query($query_id);

        $query_array =   array(

           'start_date'=> $this->input->get('start_date'),
           'end_date'=> $this->input->get('end_date'),
           'question_category'=> $this->input->get('question_category'),
           
    );
       //
        //print_r($query_array);

   $results = $this->Init_models->search_question($query_array, $limit, $offset, $sort_by, $sort_order);
   $this->db->last_query();

   $data['question']= $results['rows'];

   $data['num_results'] = $results['num_rows'];
    
    $config = array();

     $config['base_url'] = base_url("index.php/QuesAns/display/$query_id/$sort_by/$sort_order");
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
      $data['categories'] = $this->Init_models->get_ques_cat();
     $data['pagination'] = $this->pagination->create_links();
//print_r($data);
       $this->load->view('QuesAns',$data);

       // if(isset($_POST['action'])){

       //  $this->search();
       // }
    }

    function search(){

    $sdate = $this->input->post('sdate');
    if(!$sdate == ""){
    $isstrtime = strtotime( $sdate);
    $startdate = date('Y-m-d',$isstrtime);
}
    
    $edate = $this->input->post('edate');
    if(!$edate == ""){
    $isstrtime = strtotime( $edate);
    $enddate = date('Y-m-d',$isstrtime);
}
     
       $query_array =   array(
           
           'start_date'=> $startdate,
           'end_date'=> $enddate,
           'question_category'=> $this->input->get('category'),
            );


//print_r($query_array);
        $query_id = $this->input->save_query($query_array);

         redirect("index.php/QuesAns/display/$query_id");


    }



    // public function index() {
    //     $banners = $this->Init_models->getadvertisebanners();
    //     $view_params = array(
    //         'm_title' => 'QuesAns',
    //         'title' => 'QuesAns',
    //         'banners' => $banners
    //     );
    //         $view_params['question'] = $this->Init_models->selectquestion();
    //     $this->load->view('QuesAns',$view_params);
    // }

}
