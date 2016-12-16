<?php
if(isset($_POST['value'])){
$uname = $_POST['value'];
}
 if(isset($uname)){

$query = $this->db->query("SELECT * FROM tbl_users where BINARY username ='".$uname."'"); 

if($query->result_array()){
	?>
	<span style="color:#D8000C">Username is Already Exist</span>

 <?php }else{ ?>
		<span style="color:#4CAF50">Username is Available</span>
 <?php }

}


if(isset($_POST['emailid'])){
$emailid = $_POST['emailid'];
}
 if(isset($emailid)){

$query = $this->db->query("SELECT * FROM tbl_users where user_email ='".$emailid."'"); 

if($query->result_array()){
	?>
	<span style="color:#D8000C">Email ID Already Registered</span>

 <?php }else{ ?>
		<span style="color:#4CAF50">Email ID is Available</span>
 <?php }

}


?>