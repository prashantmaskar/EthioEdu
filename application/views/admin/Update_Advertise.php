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
                'm_title' => 'Admin Edit Tender',
                'title'   => 'Admin Edit Tender'
            );
    $this->load->view('admin/edit_tender',$view_params);

        if(isset($_POST['action'])){
        $this->Edit_tender();
        }
    
  }
  function Edit_tender(){
        $sessid= $this->session->userdata('suserid');
        $data = array(
                'vacancy_name' => $this->input->post('title'),
                'vacancy_school_name' => $this->input->post('sname'),
                'vacancy_count' => $this->input->post('vcount'),
                'vacancy_from_date' => $this->input->post('sdate'),
                'vacancy_to_date' => $this->input->post('edate'),
                'vacancy_desc' => $this->input->post('vdesc'),
                'vacancy_id' => $this->input->post('vacancy_id')

            );

        if ($this->init_models->edit_tender($data))
            {
              redirect('index.php/admin/listtender');
            }

}
}
