<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ansQues extends CI_Controller {

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
        // $sessname = $this->session->userdata('susername');
    }


	public function index()
	{
		  $banners = $this->init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'ansQues',
                'title'   => 'ansQues',
                'banners' => $banners
            );
                 $data['news'] = $this->init_models->get_all();
                 $this->load->view('home', $data);
       }


function show_one($ne_id) {
	$data['banners'] = $this->init_models->getadvertisebanners();
 // get a post news based on news id
	//print_r("question Id" .$ne_id);
  $data['ques'] = $this->init_models->get_one($ne_id);
 // print_r($data['ques']);
  // get a post COMMENTS based on news id and send it to view
   $data['comments'] = $this->show_tree($ne_id);
   //print_r($data);
   $this->load->view('ansQues', $data); 
} 

	function ansQues($question_id )
	 { 
	/*$question_id = $_GET['id'];*/
	$data['banners'] = $this->init_models->getadvertisebanners();
	 $data['news'] = $this->init_models->get_one($question_id); 
	 // get a post Answers based on question_id and send it to view 
	 $data['comments'] = $this->show_tree($question_id); 
	// print_r($data['news']);
	 $this->load->view('ansQues',$data); 
	} 




	/*function insertAnswer()
	{
		$date = date('Y-m-d');
		date_default_timezone_set('Asia/Kolkata');
		$time = date('h:i:s A', time());
		$sessid= $this->session->userdata('suserid');
		$data=array(
			'response_title' =>$this->input->post('caption'),
			'response_desc' =>$this->input->post('Description'),
			'response_like' =>$this->input->post('response_like'),
			'parent_id' =>$this->input->post('parent_id'),
             'response_type' =>$this->input->post('response_type'),
			'response_date' => $date,
			'response_time' => $time,
			'question_id' =>$this->input->post('question_id'),
		    'user_id' => $sessid
			);
		if ($this->init_models->insert_response($data))
            {
    //echo"<script>alert('Data Inserted Successfully');</script>";
            $this->session->set_flashdata('message', 'Answer posted Successfully'); 
            redirect("index.php/home");
            }
	}*/
function add_comment($ne_id)
    {

        // get a post id based on news id
        $data['ques'] = $this->init_models->get_one($ne_id);
        //set validation rules
        $this->form_validation->set_rules('comment_name', 'Name', 'required|trim|htmlspecialchars');
        $this->form_validation->set_rules('comment_body', 'comment_body', 'required|trim|htmlspecialchars');
        if ($this->form_validation->run() == FALSE) {
            // if not valid load comments
            $this->session->set_flashdata('error_msg', validation_errors());
            redirect("ansQues/show_one/$ne_id");
        } else {
            //if valid send comment to admin to tak approve
            $this->init_models->add_new_comment();
            $this->session->set_flashdata('error_msg', 'Your comment is awaiting moderation.');
            redirect("ansQues/show_one/$ne_id");
        }
    }
	
	function show_tree($question_id) 
	{ 
	// create array to store all comments ids 
	$store_all_id = array(); 
	// get all parent comments ids by using news id 
	$id_result = $this->init_models->tree_all($question_id ); 

	// loop through all comments to save parent ids init_models$store_all_id array 
	foreach ($id_result as $response_id) 
	{ 
	array_push($store_all_id, $response_id['parent_id']); 
	} 
	// return all hierarchical tree data from in_parent by sending 
	// initiate parameters 0 is the main parent,news id, all parent ids 
	return $this->in_parent(0,$question_id, $store_all_id); 
	} 




	
	/* recursive function to loop through all comments and retrieve it */ 
function in_parent($in_parent,$question_id,$store_all_id) 
	{ // this variable to save all concatenated html 
	$html = ""; 
	// build hierarchy html structure based on ul li (parent-child) nodes 
	if (in_array($in_parent,$store_all_id)) 
	{ 
           $result = $this->init_models->tree_by_parent($question_id,$in_parent); 
           $html .= $in_parent == 0 ? "<ul class='collection'>" : "<ul>"; 
   foreach ($result as $re) 
{ 
	              $u_id = $re['user_id'];
	              //echo "u_id".$u_id;
                  $res_id =$re['response_id'];
                  // echo "res_id".$u_id;
                  $ques_id = $re['question_id'];
                  echo "ques_id".$ques_id;
                  $sessid= $this->session->userdata('suserid');
                  $formdate = $re['response_date'];
                  $adate = strtotime(date($formdate));
                  $startdate = date('d-m-Y',$adate);

                
//QUERY FOR COUNT
                  /*$query = $this->db->query("SELECT * FROM tbl_likes
WHERE response_id = '15' AND likes_count = '1' AND questions_id = '1'");
$count = $query->num_rows(); */

                 
$html .= " <li class='collection-item'>
<div class='row'>
         <div class='col s12 m2 grid-example'>
<div class='comment-body comment-avatar '> <img class='circle responsive-img valign profile-image' src = ".'http://localhost/ETHIO/uploads/'.$re['user_avatar']."></div> </div>
<div class='col s12 m8 grid-example'>
<div class='aut'>".$re['response_title']." </div> 
<div class='comment-body'>".$re['response_desc']." </div> 
<div class='timestamp blue-text'>".$startdate."</div>
<div><a href='#comment_form' class='reply' id='" . $re['response_id'] . "'> Reply &nbsp;&nbsp;&nbsp;  </a></div>
<div> <a>       Likes &nbsp;&nbsp;</a> 
"; 
if($re['response_like']== '1' /*&& $re['user_id']== $sessid*/) {
$html .="<a href='javascript:void(0);' onclick = like(";

$html .=  $ques_id.",".$sessid.",".$res_id;

/*echo '1'; $html .=","; echo $u_id; $html .=","; echo $res_id;*/
$html .= ");>Unlike</a></div>";
          }
          else
          {
  $html .= "<a href='javascript:void(0);' onclick = like(";
$html .=  $ques_id.",".$sessid.",".$res_id;
   $html .=");>Like</a></div></div></div>";
           }

$html .=$this->in_parent($re['response_id'],$question_id, $store_all_id); 
$html .= "</li>"; } $html .= "</ul>"; 


} 
return $html;
	} 	
	
}

/*$html = "<script> 
         
         

</script>";*/
