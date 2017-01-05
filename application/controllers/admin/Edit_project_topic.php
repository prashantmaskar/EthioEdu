<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_project_topic extends CI_Controller {

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
            $topic_id = $_GET['id'];
             $view_params = array(
                'm_title' => 'Edit _project_topic',
                'title'   => 'Edit_project_topic'
            );
    $view_params['project_details'] = $this->Init_models->get_project_details($topic_id);
    $this->load->view('admin/edit_project_topic',$view_params);
if(isset($_POST['action'])){
        $this->edit_project_topic();
        }
      }
    function edit_project_topic()
       {
            
                $config['upload_path']          = './uploads/Documents';
                $config['allowed_types']        = 'pdf|docx|doc|rtf';
                $config['max_size']             = 100000;
               

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('fileformat'))
                {
                      $data1 = array('upload_data' => $this->upload->data());
                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );
                }
                else
                {
                        if($this->input->post('fileformat') == ""){
                          echo "<script>alert('in file name');</script>";
                          $filedata= array(
                            'file_name' => $this->input->post('filename'),
                            );
                                  
                      }
                    if($this->input->post('fileformat') == "" && $this->input->post('filename') == ""){
                      echo "<script>alert('in else');</script>";
                        $filedata= array(
                            'file_name' => 'default_news.jpg',
                            );
                      }
                    }
           $formdate = $this->input ->post('date');
                $adate = strtotime($formdate);
                $date = date('Y-m-d',$adate);
                        $data=array(
                'project_id' => $this->input->post('project_id'),
                  'project_title' => $this->input->post('Project_name'),
                  'project_course' => $this->input->post('course_name'),
                   'project_category' => $this->input->post('project_category'),
                  'project_year'  => $this->input->post('Year'),
                  'project_format'=>$this->input->post('format_type'),
                  
                  'project_upload' => $filedata['file_name'],
                  
                  'project_date' => $date,
                'project_time' => $this->input->post('time')
                  
                  
                
                  
                 
        );
                 if ($this->Init_models->edit_project_topic($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'project_topic updated successfully'); 
            redirect("index.php/admin/project_topic");
            }


                        

              /* if(isset($isinserted)){
                    echo"<script>alert('Success');</script>";
               }else{
                    echo"<script>alert('Failed');</script>";
               }*/

    }
}
