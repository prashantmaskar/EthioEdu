<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_course extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
                'm_title' => 'Edit Course',
                'title'   => 'Edit Course'
            );
    $this->load->view('admin/edit_course',$view_params);
if(isset($_POST['action'])){
        $this->edit_course();
        }
      }
    function edit_course(){
        $duration = $this->input->post('duration');
        $cduration = $this->input->post('c_duration');
        if($duration == 'year'){
           $fduration = $cduration*365;
        }
        elseif($duration == 'Month'){
$fduration = $cduration*30;
        }
        else
        {
         $fduration = $cduration;
        }
         
        $data = array(
                'course_name' => $this->input->post('Course_name'),
                'course_subject' => $this->input->post('Major_sub'),
                'course_category' => $this->input->post('course_cat'),
                'course_duration' => $fduration,
                'course_school' => $this->input->post('addschool'),
                'course_university' => $this->input->post('adduniversity'),
                'course_desc' => $this->input->post('details'),
               'course_id' => $this->input->post('course_id')

            );

        if ($this->init_models->insertcourse($data))
            {
    echo"<script>alert('Data Inserted Successfully');</script>";
            }

}
  
}
