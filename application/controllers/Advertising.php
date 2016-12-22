<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertising extends CI_Controller {

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
        $this->load->model('init_models');
    }


	public function index()
	{


		if(isset($_POST['action'])){



      $captcha_info = $this->session->userdata('captcha_info');

      if ($captcha_info['code'] != $this->input->post('captcha'))
      {
        //don't process the form
        echo "Invalid Captcha ...!";
        exit();
      }else{

        $this->addvertise();
      }

    }



      $banners = $this->init_models->getadvertisebanners();
      $this->load->library('captcha');
       $view_params = array(
          'm_title' => ' Advertising',
          'title'   => ' Advertising',
          'banners' => $banners,
          'captcha' => $this->captcha->main()
      );
        $view_params['userdetails'] = $this->init_models->getadvertisingdetails($sessid);
      $this->session->set_userdata('captcha_info', $view_params['captcha']);
      $this->load->view('Advertising',$view_params);


	}
    


    public function addvertise()
       {
            

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

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
                       //save in currentdate and time format
                      
                        $filedata= array(
                            'file_name' => $data1['upload_data']['file_name'],
                            );


                         $date = date('d F, Y');
                    date_default_timezone_set('Asia/Kolkata');
                    $time = date('h:i:s A', time());
                            $sessid= $this->session->userdata('suserid');



                  
                        $data=array(
                'advertise_name' => $this->input->post('Caption'),
                'advertise_email'  => $this->input->post('email'),
                'advertise_number'=>$this->input->post('contact'),
                 'advertise_category' => $this->input->post('catagory'),
                 'advertise_position'=>  $this->input->post('addposition'),
                'advertise_subject' => $this->input->post('subject'),
                  'advertise_attachment' => $filedata['file_name'],
                 'advertise_desc'=>  $this->input->post('message'),
                 'advertise_date' => $date,
                 'advertise_time' => $time,
                 'user_id'=> $sessid
        );



}
  
                        if($isinserted = $this->init_models->add_advertise($data));
                        
                        {
                           $this->session->set_flashdata('message', 'Advertise added Successfully'); 
                            redirect("index.php/Advertising");
                      }
                        //
                

               
    }




}




