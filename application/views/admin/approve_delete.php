<?php 
//list tender
 $delete_id = $_POST['delete_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_vacancy where vacancy_id = '" .$delete_id. "'");
}

  $status_id = $_POST['status_id'];
if(isset($status_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_vacancy set vacancy_approve = '1' where vacancy_id = '" .$status_id. "'");
}


$ustatus_id = $_POST['ustatus_id'];
if(isset($ustatus_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_vacancy set vacancy_approve = '0' where vacancy_id = '" .$ustatus_id. "'");
}



//list school
$delete_id = $_POST['deleteschool_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_school_meta where school_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statusschool_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_school_meta set school_approve = '1' where school_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatusschool_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_school_meta set school_approve = '0' where school_id = '" .$ustatus_id. "'");
}


//listcouese
$delete_id = $_POST['deletecourse_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_course where course_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statuscourse_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_course set course_approve = '1' where course_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatuscourse_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_course set course_approve = '0' where course_id = '" .$ustatus_id. "'");
}

//listnews listevent listgist
$delete_id = $_POST['deletepost_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_posts where post_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statuspost_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_posts set post_approve = '1' where post_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatuspost_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_posts set post_approve = '0' where post_id = '" .$ustatus_id. "'");
}


$delete_id = $_POST['deleteproject_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_projects where project_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statusproject_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_projects set project_approve = '1' where project_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatusproject_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_projects set project_approve = '0' where project_id = '" .$ustatus_id. "'");
}

?>
