
   <?php    
$search_id = $_POST['search_id'];
 if(isset($search_id)){
$query = $this->db->query("select * from tbl_school_meta");


}
echo json_encode($query->result_array());
?>


   