<?php
if(isset($_POST['ques_id'])){
$ques_id = $_POST['ques_id'];
}
if(isset($_POST['u_id'])){
$u_id = $_POST['u_id'];
}
if(isset($_POST['res_id'])){
$res_id = $_POST['res_id'];
}
if(isset($res_id)){
	$query = $this->db->query("UPDATE tbl_userresponse set response_like = '0' where response_id = '".$res_id."' and user_id = '".$u_id."'");

}

if(isset($_POST['deleteuserimg_id'])){
 $delete_id = $_POST['deleteuserimg_id'];
}
 if(isset($delete_id)){
$query = $this->db->query("update tbl_user_meta set user_avatar = null where user_id = '" .$delete_id. "'");
}
if(isset($_POST['ids'])){
$msg_id = $_POST['ids'];

foreach ($msg_id as $msgid) {
 if(isset($msgid)){

$query = $this->db->query("delete from tbl_message where pm_id = '" .$msgid. "'");

} 
}

}

if(isset($_POST['sids'])){
$sentid = $_POST['sids'];

foreach ($sentid as $sent_id) {
 if(isset($sent_id)){

$query = $this->db->query("delete from tbl_message where pm_id = '" .$sent_id. "'");

}
}
}

if(isset($_POST['deleteuserimg_id'])){
$delete_id = $_POST['deleteuserimg_id'];
}
 if(isset($delete_id)){
$query = $this->db->query("update tbl_school_meta set school_logo = null where 	school_id = '" .$delete_id. "'");
}

?> 

