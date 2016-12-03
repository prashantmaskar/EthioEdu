<?php 
$ques_id = $_POST['ques_id'];
$u_id = $_POST['u_id'];
$res_id = $_POST['res_id'];
if(isset($res_id)){
	//echo $ques_id = $_POST['id1'];
 //echo $u_id = $_POST['id2'];
$query = $this->db->query("UPDATE tbl_userresponse set response_like = '0' where response_id = '".$res_id."' and user_id = '".$u_id."'");
echo json_encode($query->result_array());
}

/*
$ques_id = $_POST['ques_id'];
 $u_id = $_POST['u_id'];
 $res_id = $_POST['res_id'];
if(isset($ques_id)){

$query = $this->db->query("UPDATE tbl_userresponse set response_like = '0' where question_id = '" .$ques_id. "' and user_id = '" .$u_id. "' and response_id = '" .$res_id. "' ");
}

*/
?>