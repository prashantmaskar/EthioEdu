<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edituserschool extends CI_Controller {

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
    /* if (!($this->session->userdata('role') == 'admin')){
      redirect('index.php/home');
    } */
    }


  public function index()
  {
     $banners = $this->init_models->getadvertisebanners();
            $sch_id = $_GET['id'];
             $view_params = array(
                'm_title' => 'EditUserSchool',
                'title'   => 'EditUserSchool',
                 'banners' => $banners,

            );
   $view_params['school_details'] = $this->init_models->get_school_details($sch_id);
    $this->load->view('edituserschool',$view_params);
if(isset($_POST['action'])){
        $this->edit_school();
        }
      }
   function edit_school(){

    date_default_timezone_set('Asia/Kolkata');
            $imagePrefix = date("d-m-Y-h-i-s"); 
            $imagename = $imagePrefix;


                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name'] = $imagename; // set the name here

                 $this->load->library('upload', $config);

                
                        if ($this->upload->do_upload('fileformat')){
                        //echo "<script>alert('in do_upload');</script>";
                $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                      }else{
                       // echo "<script>alert('in  main else');</script>";
                       // echo "in else".$this->input->post('avatar');
                      if($this->input->post('fileformat') == ""){
                          //echo "<script>alert('in file name');</script>";
                          $filedata= array(
                            'file_name' => $this->input->post('imagename'),
                            );
                                  
                      }
                    if($this->input->post('fileformat') == "" && $this->input->post('imagename') == ""){
                      //echo "<script>alert('in else');</script>";
                        $filedata= array(
                            'file_name' => 'default-image.jpg',
                            );
                      }
                      }

              
                       
     $data = array( 
                'registration_type' => $this->input->post('choice'),
                'school_name' => $this->input->post('schoolname'),
                  'school_logo' => $filedata['file_name'],
                'school_category' => $this->input->post('choice1'),
                'school_university' => $this->input->post('choice2'),
                'school_institute' => $this->input->post('choice3'),
                'other_category' => $this->input->post('choice4'),
                'school_number' => $this->input->post('phone_number'),
                'school_country' => $this->input->post('choice5'),
                'school_city' => $this->input->post('choice6'),
                'school_region' => $this->input->post('choice7'),
                'school_type' => $this->input->post('choice8'),
                'school_population' => $this->input->post('student_population'),
                'teaching_staff' => $this->input->post('t_staff'),
                'non_teaching_staff' => $this->input->post('non_teach'),
                'school_awards' => $this->input->post('past_award'),
                'school_acadamic_year' => $this->input->post('year'),
                'school_acadamic_fee' => $this->input->post('fee'),
                'admission_procedure' => $this->input->post('Admissios_pro'),
                'acadamic_requirment' => $this->input->post('Description'),
                'school_scholarship' => $this->input->post('scolership'),
                'school_address' => $this->input->post('address'),
                 'school_facility' => $this->input->post('tokenfield'),
                'school_url' => $this->input->post('website'),
                'school_desc' => $this->input->post('tell_us'),
                'school_id' => $this->input->post('school_id'),
                  'school_approve'=>$this->input->post('approve_status'),
                  'school_date' => $this->input->post('date'),
                'school_time' => $this->input->post('time')
                );

     if ($this->init_models->edit_school($data))
            {
    //echo"<script>alert('Registration Success');</script>";
                $this->session->set_flashdata('message', 'Data Inserted Successfully'); 
                redirect("index.php/schools");
            }
            else{
                $this->session->set_flashdata('errormessage', 'Sorry !!! Error Occured'); 
                redirect("index.php/schools");

            }
        // }
}
  
}
