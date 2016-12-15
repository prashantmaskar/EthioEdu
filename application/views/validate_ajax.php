<?php
$uname = $_POST['value'];
 if(isset($uname)){

$query = $this->db->query("SELECT * FROM tbl_users where BINARY username ='".$uname."'"); 

if($query->result_array()){
	?>
	<span style="color:#D8000C">Username is Already Exist</span>

 <?php }else{ ?>
		<span style="color:#4CAF50">Username is Available</span>
 <?php }

}


?>