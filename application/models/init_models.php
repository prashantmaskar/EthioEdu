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
        $query = $this->db->query("select * from tbl_posts where post_type = 'news' && post_approve = 1"); 
        return $query->result_array();
      }
       public function selectallnews()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'news'"); 
        return $query->result_array();
      }
       public function selectalltips()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'tips'"); 
        return $query->result_array();
      }
       public function selectgist()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'gist'  && post_approve = 1"); 
        return $query->result_array();
      }
       public function selecttips()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'tips'"); 
        return $query->result_array();
      }
       public function selectallgist()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'gist'"); 
        return $query->result_array();
      }
       public function selectevent()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'event' && post_approve = 1"); 
        return $query->result_array();
      }
      public function selectallevent()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'event'"); 
        return $query->result_array();
      }
     
       public function selectproject()  
      {  
        $query = $this->db->query("select * from  tbl_projects where project_approve = 1"); 
        return $query->result_array();
      }
       public function selectallproject()  
      {  
        $query = $this->db->query("select * from  tbl_projects"); 
        return $query->result_array();
      }
       public function selecttender()  
      {  
        $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1"); 
        return $query->result_array();
      }
      public function selectalltender()
      {  
        $query = $this->db->query("select * from tbl_vacancy"); 
        return $query->result_array();
      }
      public function selectalluser()
      {  
        $query = $this->db->query("select * from tbl_users"); 
        return $query->result_array();
      }

      public function selectschool()  
      {  
        $query = $this->db->query("select tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id where school_approve = 1"); 
        return $query->result_array();
      }
      public function selectallschool()  
      {  
        $query = $this->db->query("select tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id"); 
        return $query->result_array();

      }
       public function selectcourse()  
      {  
        $query = $this->db->query("select * from tbl_course where course_approve = 1"); 
        return $query->result_array();
      }
       public function selectallcourse()  
      {  
        $query = $this->db->query("select * from tbl_course"); 
        return $query->result_array();
      }
      public function selectquestion()  
      {  
        $query = $this->db->query("select * from tbl_questions where question_approve = 1"); 
        return $query->result_array();
      }
       public function selectallquestion()  
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
      public function edit_tips($data){
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

       public function edit_project_topic($data){
        echo $id = $data['project_id'];
        $this->db->where('project_id', $id);
        return $this->db->update('tbl_projects', $data);
      }
     

       public function edit_school($data){
        echo $id = $data['school_id'];
        $this->db->where('school_id', $id);
        return $this->db->update('tbl_school_meta', $data);
      }
      public function edit_question($data){
        echo $id = $data['question_id'];
        $this->db->where('question_id', $id);
        return $this->db->update('tbl_questions', $data);
      }


   }  
?>  