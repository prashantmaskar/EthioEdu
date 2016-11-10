<?php  
   class init_models extends CI_Model  
   {  
      function __construct()  
      {  
          // Call the Model constructor  
          parent::__construct();  
          
          $this->load->database(); 
      }  
     
      //Select User tables data    
      public function get_user_credentials($username, $password)  
      {  
          $query = $this->db->query("SELECT * FROM tbl_users where username='".$username."'  and password = '" . md5($password) . "'");
         return $query->result_array();
      }
      // Insert vacancy data
      public function insertprivacy($data)  
      {  
            return $this->db->insert('tbl_vacancy', $data);
      }

      //Insert course data
      public function insertcourse($data)  
      {  
            return $this->db->insert('tbl_course', $data);
      }
       
      //Insert School Information data
      public function addschooluser($data)  
      {  
            return $this->db->insert('tbl_users', $data);
      }
      //Select User tables data    
      public function getueserid()  
      {  
            $query = $this->db->query("SELECT user_id FROM tbl_users ORDER BY user_id DESC LIMIT 1");
            return $query->row_array();
      }
       //Insert School Information data
      public function addschooldata($data)  
      {  
            return $this->db->insert('tbl_school_meta', $data);
      }
       //Insert User registration data
      public function add_front_user($data)  
      {  
            return $this->db->insert('tbl_users', $data);
      }
       //Select User tables data    
      public function getfrontueserid()  
      {  
            $query = $this->db->query("SELECT user_id FROM tbl_users ORDER BY user_id DESC LIMIT 1");
            return $query->row_array();
      }
        //Insert School Information data
      public function adduserdetails($data)  
      {  
            return $this->db->insert('tbl_user_meta', $data);
      }
//Insert Post Project
      public function insert_project($data)
      {
        return $this->db->insert('tbl_projects', $data);
      }
/*
       public function add_attachment($data){
         $file_data = $this->db->escape_str(file_get_contents($data['blob']));
         $data['blob']=$file_data;
         $this->db->insert('tbl_attachments', $data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
      }*/

      public function add_anews($data){
         $this->db->insert('tbl_posts', $data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
      }

      
     
   }  
?>  