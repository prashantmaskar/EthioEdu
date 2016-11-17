<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_question extends CI_Controller {

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
                'm_title' => 'Edit Question',
                'title'   => 'Edit Question'
            );
    $this->load->view('admin/edit_question',$view_params);
if(isset($_POST['action'])){
        $this->edit_question();
        }
      }
  function edit_question(){
   
    $data=array(
      'question_type' =>$this->input->post('quetype'),
      'question_category' =>$this->input->post('subcat'),
      'question_desc' =>$this->input->post('question'),
       'question_id' => $this->input->post('question_id'),
        'question_approve'=>$this->input->post('approve_status')
       );
    if ($this->init_models->edit_question($data))
            {
    redirect('index.php/admin/quesanswer');
            }
  }
  
}
