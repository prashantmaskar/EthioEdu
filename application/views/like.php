<?php 

 /*$ques_id = $_POST['ques_id'];
 $u_id = $_POST['u_id'];
$res_id = $_POST['res_id'];
  $sessid= $this->session->userdata('suserid');
if(isset($res_id)){
	$query = $this->db->query("select * FROM tbl_likes WHERE response_id ='".$res_id."' && questions_id= '".$ques_id."' && user_id = '".$u_id."'");

$result = $query->result_array();
$likec =  $result[0]["likes_count"];
 if($likec == 1)
 {
	$query = $this->db->query("UPDATE tbl_likes set likes_count = '0' WHERE response_id ='".$res_id."' && questions_id= '".$ques_id."' && user_id = '".$u_id."'");
  }
else
{
	//echo "gjhghj";
$query = $this->db->query("INSERT INTO tbl_likes (response_id , questions_id , user_id  ,likes_count ) VALUES('".$res_id."','".$ques_id."','".$u_id."','0')");
}
}*/

//code for like and unlike combine

$ques_id = $_POST['ques_id'];
 $u_id = $_POST['u_id'];
$res_id = $_POST['res_id'];
  $sessid= $this->session->userdata('suserid');
if(isset($res_id)){
	$query = $this->db->query("select * FROM tbl_likes WHERE response_id ='".$res_id."' && questions_id= '".$ques_id."' && user_id = '".$u_id."'");

$result = $query->result_array();
$likec =  $result[0]["likes_count"];
$uid =  $result[0]["user_id"];
var_dump($uid);
 if($likec == 1 or $likec == 0)
{
	echo "sdfsdfsdf";
	  if($likec == 1)
	       {
	       $query = $this->db->query("UPDATE tbl_likes set likes_count = '0' WHERE response_id ='".$res_id."' && questions_id= '".$ques_id."' && user_id = '".$u_id."'");
           }
       elseif($likec == 0)  
              {
        	$query = $this->db->query("UPDATE tbl_likes set likes_count = '1' WHERE response_id ='".$res_id."' && questions_id= '".$ques_id."' && user_id = '".$u_id."'");

              }      
}
elseif($uid != $sessid)
{
	echo "fsfsdfsdfsd";
	
/*$query = $this->db->query("INSERT INTO tbl_likes (response_id , questions_id , user_id  ,likes_count ) VALUES('".$res_id."','".$ques_id."','".$u_id."','1')");*/
}
}



/*$uques_id = $_POST['uques_id'];
 $uu_id = $_POST['uu_id'];
$ures_id = $_POST['ures_id'];
  $sessid= $this->session->userdata('suserid');
if(isset($ures_id)){
	$query = $this->db->query("select * FROM tbl_likes WHERE response_id ='".$ures_id."' && questions_id= '".$uques_id."' && user_id = '".$sessid."'");

$result = $query->result_array();
$likec =  $result[0]["likes_count"];
 if($likec == 0)
 {
	$query = $this->db->query("UPDATE tbl_likes set likes_count = '1' WHERE response_id ='".$res_id."' && questions_id= '".$ques_id."' && user_id = '".$u_id."'");
  }
else
{
echo "dsfsdfsdfsdfsdfsdf";
}
}*/
	


?>