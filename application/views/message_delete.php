<?php

 $delete_id = $_POST['deleteuserimg_id'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_user_meta set user_avatar = null where user_id = '" .$delete_id. "'");
}

$msg_id = $_POST['ids'];
print_r($msg_id);
foreach ($msg_id as $msgid) {
	echo $msgid;
 if(isset($msgid)){

$query = $this->db->query("delete from tbl_message where pm_id = '" .$msgid. "'");

} 


}


$sentid = $_POST['sids'];
foreach ($sentid as $sent_id) {
 if(isset($sent_id)){

$query = $this->db->query("delete from tbl_message where pm_id = '" .$sent_id. "'");

} 


}




?>
