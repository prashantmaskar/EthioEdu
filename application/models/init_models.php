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
      public function get_user_credentials()  
      {  
				$query = $this->db->query("SELECT username, password, user_email FROM tbl_users");
				return $query->row_array();
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

	  
   }  
?>  