<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_topics extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }
    }

	public function index()
	{
        $banners = $this->Init_models->getadvertisebanners();

             $view_params = array(
                'm_title' => ' Project Topic',
                'title'   => ' Project Topic',
                'banners' => $banners
            );
             $view_params['categories'] = $this->Init_models->get_project_categories();
		$this->load->view('project_topics',$view_params);
		if (isset($_POST['action'])){
			$this->insertproject();
		}
	}
	function insertproject(){
        /*date_default_timezone_set('Asia/Kolkata');
            $docPrefix = date("d-m-Y-h-i"); 
            $docname = $docPrefix.$value['name'];*/

		 $config['upload_path']          = './uploads/Documents';
                $config['allowed_types']        = 'pdf|docx|doc|rtf';
                $config['max_size']             = 9995555;
                /*$config['file_name'] = $docname; // set the name here
*/
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileformat'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error);

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data1 = array('upload_data' => $this->upload->data());

                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );


                    $date = date('d F, Y');
                    date_default_timezone_set('Asia/Kolkata');
                    $time = date('h:i:s A', time());

$sessid= $this->session->userdata('suserid');
		$data = array(
			'project_title' =>$this->input->post('Project_name'),
			'project_course' =>$this->input->post('course_name'),
            'project_category' =>$this->input->post('project_category'),
			'project_year' =>$this->input->post('Year'),
			'project_format' =>$this->input->post('format_type'),
			'project_upload' =>$filedata['file_name'],
            'project_date' => $date,
            'project_time' => $time,
            'project_approve' => $this->input->post('approve_status'),
            'user_id' => $sessid
			);

 if ($this->Init_models->insert_project($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Topic added Successfully'); 
            redirect("index.php/project_topics");
            }


                        //
                }

              /* if(isset($isinserted)){
                    echo"<script>alert('Success');</script>";
               }else{
                    echo"<script>alert('Failed');</script>";
               }*/

    }




}








