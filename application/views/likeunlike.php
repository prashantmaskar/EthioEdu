<?php 


$qustion_id = trim($_POST['ques_id']);
$user_id = trim($_POST['u_id']);
$response_id = trim($_POST['res_id']);
$parent_id = trim($_POST['parent_id']);
$like_status = trim($_POST['like_stat']);


if($like_status == 1){


$query = $this->db->query("select like_id FROM tbl_likes WHERE response_id ='".$response_id."' && questions_id= '".$qustion_id."' && user_id = '".$user_id."'");

$rowcount = $query->num_rows();

if ($rowcount == 0){
$query = $this->db->query("INSERT INTO tbl_likes (response_id , questions_id , user_id  ,likes_count) VALUES ('".$response_id."','".$qustion_id."','".$user_id."','".$like_status."')");

$query = $this->db->query("UPDATE tbl_userresponse SET response_like = response_like+1 WHERE  response_id ='".$response_id."' && question_id= '".$qustion_id."' && parent_id = '".$parent_id."'");

}
}
else{

$query = $this->db->query("select like_id FROM tbl_likes WHERE response_id ='".$response_id."' && questions_id= '".$qustion_id."' && user_id = '".$user_id."'");

$rowcount = $query->num_rows();
//echo $rowcount;
if ($rowcount > 0){
$query = $this->db->query("DELETE FROM tbl_likes WHERE response_id ='".$response_id."' && questions_id= '".$qustion_id."' && user_id = '".$user_id."'");

$query = $this->db->query(" UPDATE tbl_userresponse SET response_like = response_like-1 WHERE  response_id ='".$response_id."' && question_id= '".$qustion_id."' && parent_id = '".$parent_id."'");

}

}


































?>