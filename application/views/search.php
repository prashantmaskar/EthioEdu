
   <?php    
$search_id = $_POST['choice'];
$school_nm = isset($_POST['school_nm'])?$_POST['school_nm']:"";
 if(isset($search_id))
 {
 	$querystr="";
 	if($search_id=="1")
 	{
 		if($school_nm=="")
 			$querystr="and school_type = 'private'";
 		else
 			$querystr="and school_type = 'private' and school_name like '".$school_nm."'";
 	}
 	elseif ($search_id=="2")
 	{
 		if($school_nm=="")
 			$querystr="and school_type = 'public'";
 		else
 			$querystr="and school_type = 'public' and school_name like '".$school_nm."'";
 	}
 	elseif ($search_id=="3")
 	{
 		if($school_nm=="")
 			$querystr="";
 		else
 			$querystr="and school_name like '".$school_nm."'";
 	}
 	else
 	{
 		$querystr=" and school_name like '".$search_id."'";
 	}


$query = $this->db->query("select tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id where school_approve = 1 ".$querystr);


}
echo json_encode($query->result_array());

?>


   