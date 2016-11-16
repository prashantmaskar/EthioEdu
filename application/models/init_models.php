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
      public function insert_question($data)
      {
        return $this->db->insert('tbl_questions', $data);
      }
       public function insert_contact($data)
      {
        return $this->db->insert('tbl_contact', $data);
      }
      public function insert_enquiry($data)
      {
        return $this->db->insert('tbl_enquiry', $data);
      }

      public function add_anews($data){
         $this->db->insert('tbl_posts', $data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
      }
          

      public function add_advertise($data){
         $this->db->insert('tbl_advertise', $data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
      }



       // Privacy Table Actions

      public function insertprivacy($data)  
      {  
            return $this->db->insert('tbl_vacancy', $data);
      }
      
      public function selectnews()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'news'"); 
        return $query->result_array();
      }
       public function selectgist()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'gist'"); 
        return $query->result_array();
      }
       public function selectevent()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'event'"); 
        return $query->result_array();
      }
     
       public function selectproject()  
      {  
        $query = $this->db->query("select * from  tbl_projects"); 
        return $query->result_array();
      }
       public function selecttender()  
      {  
        $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1"); 
        return $query->result_array();
      }
      public function selectschool()  
      {  
        $query = $this->db->query("select * from  tbl_school_meta"); 
        return $query->result_array();
      }
       public function selectcourse()  
      {  
        $query = $this->db->query("select * from tbl_course"); 
        return $query->result_array();
      }
      public function selectquestion()  
      {  
        $query = $this->db->query("select * from tbl_questions"); 
        return $query->result_array();
      }
       public function selectadvertise()  
      {  
        $query = $this->db->query("select * from tbl_advertise"); 
        return $query->result_array();
      }

      public function edit_news($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }

      public function edit_event($data){
         $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
       public function edit_gist($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
       public function edit_course($data){
        echo $id = $data['course_id'];
        $this->db->where('course_id', $id);
        return $this->db->update('tbl_course', $data);
      }

      public function edit_tender($data){
        echo $id = $data['vacancy_id'];
        $this->db->where('vacancy_id', $id);
        return $this->db->update(' tbl_vacancy', $data);
      }
        public function edit_advertise($data){
        echo $id = $data['advertise_id'];
        $this->db->where('advertise_id', $id);
        return $this->db->update('tbl_advertise', $data);
      }

   }  
?>  