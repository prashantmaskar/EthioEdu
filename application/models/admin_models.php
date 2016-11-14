<?php  
   class init_models extends CI_Model  
   {  
      function __construct()  
      {  
          // Call the Model constructor  
          parent::__construct();  
          
          $this->load->database(); 
      }  
     
    
      
      public function insert_project($data)
      {
        return $this->db->insert('tbl_projects', $data);
      }
      
     
   }  
?>  