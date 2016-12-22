<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schooldetails extends CI_Controller {

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
        $this->load->database();
        $this->load->model('init_models');
    }

    public function index() {
         $sch_id = $this->uri->segment('3');
        //$sch_id = $_GET['id'];
        echo "sadfsd".$sch_id;
        $banners = $this->init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'School Details',
            'title' => 'School Details',
            'banners' => $banners
        );
        $view_params['news'] = $this->init_models->selectnews();
        $view_params['sch_details'] = $this->init_models->getsch_details($sch_id);

        $this->load->view('schooldetails',$view_params);

         //$data['news'] = $this->init_models->get_all_sch();
                // $this->load->view('schooldetails', $data);
    }

    function show_one($ne_id) {
    $data['banners'] = $this->init_models->getadvertisebanners();
 // get a post news based on news id
    //print_r("question Id" .$ne_id);
  $data['ques'] = $this->init_models->get_one_sch($ne_id);
  //print_r($data['ques']);
  // get a post COMMENTS based on news id and send it to view
   $data['comments'] = $this->show_tree_sch($ne_id);
   //print_r($data);
$data['news'] = $this->init_models->selectnews();
$sch_id = $this->uri->segment('3');
 $data['sch_details'] = $this->init_models->getsch_details($sch_id);
  /* $sch_id = $this->uri->segment('3');
        //$sch_id = $_GET['id'];
        echo "sadfsd".$sch_id;
        $banners = $this->init_models->getadvertisebanners();
        $data = array(
            'm_title' => 'School Details',
            'title' => 'School Details',
            'banners' => $banners
        );
        $data['news'] = $this->init_models->selectnews();
        $data['sch_details'] = $this->init_models->getsch_details($sch_id);
*/

   $this->load->view('schooldetails', $data); 
} 
function schooldetails($school_id)
     { 
    /*$question_id = $_GET['id'];*/
    $data['banners'] = $this->init_models->getadvertisebanners();
     $data['news'] = $this->init_models->get_one_sch($school_id); 
     // get a post Answers based on question_id and send it to view 
     $data['comments'] = $this->show_tree_sch($school_id); 
     //print_r($data['comments']);
     $this->load->view('schooldetails',$data); 
    } 
 function add_sch_comment($ne_id)
    {

        // get a post id based on news id
        $data['ques'] = $this->init_models->get_one_sch($ne_id);
        //set validation rules
        $this->form_validation->set_rules('comment_name', 'Name', 'required|trim|htmlspecialchars');
        $this->form_validation->set_rules('comment_body', 'comment_body', 'required|trim|htmlspecialchars');
        if ($this->form_validation->run() == FALSE) {
            // if not valid load comments
            $this->session->set_flashdata('error_msg', validation_errors());
            redirect("schooldetails/show_one/$ne_id");
        } else {
            //if valid send comment to admin to tak approve
            $this->init_models->add_new_sch_comment();
            $this->session->set_flashdata('error_msg', 'Your comment is awaiting moderation.');
            redirect("schooldetails/show_one/$ne_id");
        }
    }

   function show_tree_sch($school_id) 
    { 
    // create array to store all comments ids 
    $store_all_id = array(); 
    // get all parent comments ids by using news id 
    $id_result = $this->init_models->tree_all_sch($school_id); 
    if($id_result == null)
    {
        $html = ""; 
        $html .= "<ul class='collection'>"; 
        $html .= " <li class='collection-item'>
<div class='row'>
         <div class='col s12 m2 grid-example'>
<div class='comment-body comment-avatar '> </div> </div>
<div class='col s12 m8 grid-example'>
<div class='aut'></div> 
<div class='comment-body'></div> 
<div class='timestamp blue-text'></div> 
<div><a href='#comment_form' class='reply' id=''></a></div>
<div></div></li></ul>"; 
return $html;

    }
else{

    // loop through all comments to save parent ids init_models$store_all_id array 
    foreach ($id_result as $sresponse_id) 
    { 
    array_push($store_all_id, $sresponse_id['sparent_id']); 
    } 
    // return all hierarchical tree data from in_parent by sending 
    // initiate parameters 0 is the main parent,news id, all parent ids 
    return $this->in_parent(0,$school_id, $store_all_id); 
}
    } 


        /* recursive function to loop through all comments and retrieve it */ 
function in_parent($in_parent,$school_id,$store_all_id) 
    { // this variable to save all concatenated html 
    $html = ""; 
    // build hierarchy html structure based on ul li (parent-child) nodes 
    if (in_array($in_parent,$store_all_id)) 
    { 
           $result = $this->init_models->tree_by_parent_sch($school_id,$in_parent); 
           $html .= $in_parent == 0 ? "<ul class='collection'>" : "<ul>"; 
   foreach ($result as $re) 
{ 
                  $u_id = $re['user_id'];
                  //echo "u_id".$u_id;
                  $res_id =$re['sresponse_id'];
                  $par_id =$re['sparent_id'];
                  $ques_id = $re['school_id'];
                  $sessid= $this->session->userdata('suserid');
                  $formdate = $re['sresponse_date'];
                  $adate = strtotime(date($formdate));
                  $startdate = date('d-m-Y',$adate);


$html .= " <li class='collection-item'>
<div class='row'>
         <div class='col s12 m2 grid-example'>
<div class='comment-body comment-avatar '> <img class='circle responsive-img valign profile-image' src = ".'http://localhost/ETHIO/uploads/'.$re['user_avatar']."></div> </div>
<div class='col s12 m8 grid-example'>
<div class='aut'>".$re['sresponse_title']." </div> 
<div class='comment-body'>".$re['sresponse_desc']." </div> 
<div class='timestamp blue-text'>".$startdate."</div> 
<div><a href='#comment_form' class='reply' id='" . $re['sresponse_id'] . "'>&nbsp;Reply &nbsp;&nbsp;&nbsp;</a></div>
<div>Likes(<a><span> ".$re['sresponse_like']. "</span>)</a></div>"; 
if( $sessid == '' ){
    $html .="<p class='red-text'>For Like Or UnLike Please Login First</p>" ;
}

else{ 
 
$html .="<div><a href='javascript:void(0);' class='green-text like' onclick = like(";

$html .=  $ques_id.",".$sessid.",".$res_id .",". $par_id .",". 1 ;

$html .= ");><span class='fa fa-thumbs-up green-text like'></span> Like</a>";
$html .= "&nbsp &nbsp";        
        
  $html .= "<a href='javascript:void(0);' class='red-text unlike' onclick = unlike(";
$html .=  $ques_id.",".$sessid.",".$res_id .",". $par_id .",". 0;
   $html .=");><span class='fa fa-thumbs-down red-text'></span> Unlike</a></div></div></div>";
 }         

$html .=$this->in_parent($re['sresponse_id'],$school_id, $store_all_id); 
$html .= "</li>"; } $html .= "</ul>"; 


} 
return $html;
    }   
 

 function likeunlike(){

$school_id = $this->input->post('ques_id');
// 'user_id' => $this->input->post('u_id'),
// 'res_id' => $this->input->post('res_id'),
// 'like_stat' => $this->input->post('like_stat')
// );
return $school_id;
 $checklike = $this->db->query('SELECT slike_id from tbl_schoollikes where school_id = "'.$data_array['school_id'].'"');
 $resultcheck = $checklike->num_rows();

if($resultcheck == '0'){
$query = $this->db->query('UPDATE tbl_schoolresponse SET sresponse_like = sresponse_like+1 where sresponse_id = "'.$data_array['res_id'].'"' );
 $result=$query->result();
}
    
   }

}
