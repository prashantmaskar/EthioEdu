<?php 
echo $ques_id = $_POST['ques_id'];
echo $u_id = $_POST['u_id'];
echo $res_id = $_POST['res_id'];
if(isset($res_id)){
	$query = $this->db->query("UPDATE tbl_userresponse set response_like = '0' where response_id = '".$res_id."' and user_id = '".$u_id."'");

//echo json_encode($query->result_array());
}


echo $uques_id = $_POST['uques_id'];
echo $uu_id = $_POST['uu_id'];
echo $ures_id = $_POST['ures_id'];
if(isset($ures_id)){
	$query = $this->db->query("UPDATE tbl_userresponse set response_like = '1' where response_id = '".$ures_id."' and user_id = '".$uu_id."'");

//echo json_encode($query->result_array());
}


?>