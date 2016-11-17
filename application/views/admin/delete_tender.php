<?php 

 $delete_id = $_POST['delete_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_vacancy where vacancy_id = '" .$delete_id. "'");
}

  $status_id = $_POST['status_id'];
if(isset($status_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_vacancy set vacancy_approve = '1' where vacancy_id = '" .$status_id. "'");
}

?>
