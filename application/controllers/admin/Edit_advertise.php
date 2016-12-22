<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_advertise extends CI_Controller {

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
        $this->load->model('Init_models');
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
            $add_id = $_GET['id'];
             $view_params = array(
                'm_title' => 'Edit Advertising',
                'title'   => 'Edit Advertising'
            );
    $view_params['advertise_details'] = $this->Init_models->get_adevertise_details($add_id);
    $this->load->view('admin/edit_advertise',$view_params);
if(isset($_POST['action'])){
        $this->edit_advertise();
        }
      }
    function edit_advertise()
       {
        date_default_timezone_set('Asia/Kolkata');
            $imagePrefix = date("d-m-Y-h-i-s"); 
            $imagename = $imagePrefix.$value['name'];
            

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
                         $formdate =  $this->input->post('date');
                          $temp = strtotime( $formdate);
                          $date = date('Y-m-d',$temp);

                        $data=array(
                  'advertise_id' => $this->input->post('advertise_id'),
                  ' advertise_name' => $this->input->post('name'),
                  ' advertise_email'  => $this->input->post('email'),
                  'advertise_number'=>$this->input->post('contact'),
                  'advertise_category'=>  $this->input->post('catagory'),
                  'advertise_position' => $this->input ->post('addposition'),
                  'advertise_subject' => $this->input->post('subject'),
                  'advertise_attachment' => $filedata['file_name'],
                  'advertise_desc' => $this->input->post('message'),
                  // 'advertise_date' => $date,
                //'advertise_time' => $this->input->post('time')
                  
                  
                  
                
                  
                 
        );
                  $isinserted = $this->Init_models->edit_advertise($data);
                        

                        
                

               if(isset($isinserted)){
               // echo"<script>alert('Data Inserted Successfully');</script>";
                redirect("index.php/admin/advertise");
               }else{
                   echo"<script>alert('Failed');</script>";
               }

    }
  
}
