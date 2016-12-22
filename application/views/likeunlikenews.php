<?php 


$qustion_id = trim($_POST['ques_id']);
$user_id = trim($_POST['u_id']);
$response_id = trim($_POST['res_id']);
$parent_id = trim($_POST['parent_id']);
$like_status = trim($_POST['like_stat']);


if($like_status == 1){


$query = $this->db->query("select plike_id FROM tbl_postlikes WHERE presponse_id ='".$response_id."' && post_id= '".$qustion_id."' && user_id = '".$user_id."'");

$rowcount = $query->num_rows();

if ($rowcount == 0){
$query = $this->db->query("INSERT INTO tbl_postlikes (presponse_id ,post_id , user_id  ,plikes_count) VALUES ('".$response_id."','".$qustion_id."','".$user_id."','".$like_status."')");

$query = $this->db->query("UPDATE tbl_postresponse SET presponse_like = presponse_like+1 WHERE  presponse_id ='".$response_id."' && post_id= '".$qustion_id."' && pparent_id = '".$parent_id."'");

}
}
else{

$query = $this->db->query("select plike_id FROM tbl_postlikes WHERE presponse_id ='".$response_id."' && post_id= '".$qustion_id."' && user_id = '".$user_id."'");

$rowcount = $query->num_rows();
echo $rowcount;
if ($rowcount > 0){
$query = $this->db->query("DELETE FROM tbl_postlikes WHERE presponse_id ='".$response_id."' && post_id= '".$qustion_id."' && user_id = '".$user_id."'");

$query = $this->db->query(" UPDATE tbl_postresponse SET presponse_like = presponse_like-1 WHERE  presponse_id ='".$response_id."' && post_id= '".$qustion_id."' && pparent_id = '".$parent_id."'");

}

}


































?>