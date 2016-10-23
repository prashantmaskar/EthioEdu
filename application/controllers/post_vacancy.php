<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class post_vacancy extends CI_Controller {

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
    public function index() {
        $view_params = array(
            'm_title' => 'Post Vacancy',
            'title' => 'Post Vacancy'
        );
        $this->load->view('post_vacancy',$view_params);
    }

}
