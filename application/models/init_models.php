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
          $query = $this->db->query("SELECT * FROM tbl_users where BINARY username='".$username."'  and password = '" . md5($password) . "'");
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

function get_user_id_by_uname($uname){
        $query = $this->db->query("SELECT * FROM tbl_users where BINARY username='".$uname."'");
         return $query->result_array();
}


 public function sendpmessage($data)  
      {  
            return $this->db->insert('tbl_message', $data);
      }
       

       // Privacy Table Actions

      public function insertprivacy($data)  
      {  
            return $this->db->insert('tbl_vacancy', $data);
      }
      
      public function selectnews()  
      {  
        $query = $this->db->query("select tbl_users.user_id, tbl_users.username, tbl_posts.post_id, tbl_posts.post_title, tbl_posts.post_author, tbl_posts.post_category, tbl_posts.post_time, tbl_posts.post_date from tbl_users join tbl_posts on tbl_users.user_id = tbl_posts.user_id where tbl_posts.post_type = 'news' && tbl_posts.post_approve = 1 limit 10"); 
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
        public function selectabout()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'aboutus'"); 
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
       public function selectprivacy()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'privacy'"); 
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
        $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1 " ); 
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
       public function selectcourse($limit, $start)  
      {  
        $sql = "select * from tbl_course where course_approve = 1 limit " .$start. " , " .$limit; 
        $query = $this->db->query($sql);
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
      
      public function edit_about($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
       public function edit_privacy($data){
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


      public function update_front_user($data){
        echo $id = $data['user_id'];
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_users', $data);
      }

public function edit_front_user($data){
        $id = $data['user_id'];
        $uname = $data['username'];
        $fname = $data['first_name'];
        $lname = $data['last_name'];
        $email = $data['user_email'];
        $this->db->set('username', $uname);
        $this->db->set('first_name', $fname);
        $this->db->set('last_name', $lname);
        $this->db->set('user_email', $email);
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_users', $data);

      }
      

      public function updateuserdetails($data){
        echo $id = $data['user_id'];
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_user_meta', $data);
      }

     function get_course($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_course where course_name like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
         return $query->result_array();
    }
      function get_course_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_course where course_name like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function getadvertisebanners()  
      {  
          $query = $this->db->query("SELECT * FROM tbl_advertise where isactive=true");
         return $query->result_array();
      }


public function insert_response($data)
      {
        return $this->db->insert('tbl_userresponse', $data);
      }


      public function selectresponse()
      {  
        $query = $this->db->query("select * from tbl_userresponse"); 
        return $query->result_array();
      }

      function get_school($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_school_meta where school_name like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
         return $query->result_array();
    }
    function get_school_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_school_meta where school_name like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }


    function search($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('school_name','school_type1','school_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'school_name';


      $q = $this->db->select('*')
                     ->from('tbl_school_meta')
                     ->join('tbl_users','tbl_users.user_id = tbl_school_meta.user_id')
                     ->where('school_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['school_name'])){
$q->like('school_name',$query_array['school_name']);
$q->where('school_approve = 1');
    }
       if (strlen($query_array['school_type1'])){
$q->where('school_type',$query_array['school_type1'] );
$q->where('school_approve = 1');
    }
       if (strlen($query_array['school_category'])){
$q->where('school_category',$query_array['school_category'] );
$q->where('school_approve = 1');
    }

 



    $ret['rows']= $q->get()->result();

    //count result

    $q = $this->db->select('count(*) as count', FALSE)
                  ->from('tbl_school_meta')
                  -> where('school_approve = 1') ;
                 

    if (strlen($query_array['school_name'])){
$q->like('school_name',$query_array['school_name']);

    }
       if (strlen($query_array['school_type1'])){
$q->where('school_type',$query_array['school_type1']);

    }
       if (strlen($query_array['school_category'])){
$q->where('school_category',$query_array['school_category']);

    }
  

    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;

   }




//Connect Me Result

function search_result($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('username','user_gender','user_age','user_school','user_level','user_interest');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'first_name';


      $q = $this->db->select('*')
                     ->from('tbl_user_meta')
                     ->join('tbl_users','tbl_users.user_id = tbl_user_meta.user_id')
                     //->where('school_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['username'])){

      //echo"In top username";
$q->like('username',$query_array['username']);
    }
       if (strlen($query_array['user_gender'])){
$q->where('user_gender',$query_array['user_gender'] );
    }

    if (strlen($query_array['user_age'])){

      if($query_array['user_age'] == '16-19'){
        $q->where('user_age>=','16');
        $q->where('user_age<=', '19');
      }
      if($query_array['user_age'] == '20-25'){
        $q->where('user_age>=','20' );
        $q->where('user_age<=','25' );
      }
      if($query_array['user_age'] == '26-29'){
        $q->where('user_age>=','26' );
        $q->where('user_age<=','29' );
      }
      if($query_array['user_age'] == '30+'){
        $q->where('user_age>=', '30' );
      }

    }


       if (strlen($query_array['user_school'])){
$q->where('user_school',$query_array['user_school'] );
    }

     if (strlen($query_array['user_level'])){
$q->where('user_level',$query_array['user_level'] );
    }

     if (strlen($query_array['user_interest'])){
$q->where('user_interest',$query_array['user_interest'] );
    }

 



    $ret['rows']= $q->get()->result();

    //count result
    if (strlen($query_array['username'])){

     // echo"In username count";
$q = $this->db->select('count(*) as count', FALSE)
                  ->from('tbl_users');
$q->like('username',$query_array['username']);

  

}else{

      //echo"in else count";
    $q = $this->db->select('count(*) as count', FALSE)
                  ->from('tbl_user_meta');
                 

   
       if (strlen($query_array['user_gender'])){
$q->where('user_gender',$query_array['user_gender']);

    }

     if (strlen($query_array['user_age'])){
if($query_array['user_age'] == '16-19'){
        $q->where('user_age>=','16');
        $q->where('user_age<=', '19');
      }
      if($query_array['user_age'] == '20-25'){
        $q->where('user_age>=','20' );
        $q->where('user_age<=','25' );
      }
      if($query_array['user_age'] == '26-29'){
        $q->where('user_age>=','26' );
        $q->where('user_age<=','29' );
      }
      if($query_array['user_age'] == '30+'){
        $q->where('user_age>=', '30' );
      }

    }


       if (strlen($query_array['user_school'])){
$q->where('user_school',$query_array['user_school']);

    }

    if (strlen($query_array['user_level'])){
$q->where('user_level',$query_array['user_level']);

    }

    if (strlen($query_array['user_interest'])){
$q->where('user_interest',$query_array['user_interest']);

    }
  }

    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;
 

   }




//Related Users


   function related_users(){
      
       $query = $this->db->query('select * from tbl_user_meta join tbl_users where tbl_users.user_id = tbl_user_meta.user_id ORDER BY RAND() limit 5');
          
         return $query->result_array();



   }


// Enquiry Users
   function enquiry_users($data){
              $id =$data['user_id'];
      
       $query = $this->db->query('select * from tbl_user_meta join tbl_users where tbl_users.user_id = tbl_user_meta.user_id and tbl_users.user_id = "'.$id.'"');
          
         return $query->result_array();



   }


//Project Search

      function get_project($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_projects where project_title like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
         return $query->result_array();
    }
    function get_porject_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_projects where project_title like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }


//Search Course

function search_course($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('course_name','course_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'course_name';


 /*    $q = $this->db->select('*')
                     ->from('tbl_course')
                     ->where('course_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
*/

                   $q = $this->db->select('*, AVG(`course_rating`) As avg_r',FALSE)
                     ->from('tbl_course_meta')
                     ->join('tbl_course','tbl_course_meta.course_id = tbl_course.course_id')
                     ->where('course_approve = 1')
                     ->group_by('tbl_course_meta.course_id')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order); 


    

    if(strlen($query_array['course_name'])){
$q->like('course_name',$query_array['course_name']);
$q->where('course_approve = 1');
    }
       if (strlen($query_array['course_category'])){
$q->where('course_category',$query_array['course_category'] );
$q->where('course_approve = 1');
    }

    $ret['rows']= $q->get()->result();

    //count result

   $q = $this->db->select('count(*) as count', FALSE)
                       ->from('tbl_course')
                   -> where('course_approve = 1') ;
                 

    if (strlen($query_array['course_name'])){
 $q->like('course_name',$query_array['course_name']);

     }
      if (strlen($query_array['course_category'])){
 $q->where('course_category',$query_array['course_category']);
     }

    
    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;

   }






    function search_project($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('project_title','project_course','project_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'project_title';


      $q = $this->db->select('*')
                     ->from('tbl_projects')
                     ->where('project_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['project_title'])){
$q->like('project_title',$query_array['project_title']);
$q->where('project_approve = 1');
    }
       if (strlen($query_array['project_course'])){
$q->where('project_course',$query_array['project_course'] );
$q->where('project_approve = 1');
    }


    if (strlen($query_array['project_category'])){
$q->where('project_category',$query_array['project_category'] );
$q->where('project_approve = 1');
    }
 



    $ret['rows']= $q->get()->result();

    //count result

   $q = $this->db->select('count(*) as count', FALSE)
                       ->from('tbl_projects')
                   -> where('project_approve = 1') ;
                 

    if (strlen($query_array['project_title'])){
 $q->like('project_title',$query_array['project_title']);

     }
      if (strlen($query_array['project_course'])){
 $q->where('project_course',$query_array['project_course']);
     }

     if (strlen($query_array['project_category'])){
 $q->where('project_category',$query_array['project_category']);
     }
       
  

    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;

   }



       //News Search Result Query

   function search_news($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'post_date';


      $q = $this->db->select('*')
                     ->from('tbl_posts')
                     ->where('post_type="news" and post_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }

 



    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_posts')
                   -> where('post_type="news" and post_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }


      //Event Search Result Query

   function search_event($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'post_date';


      $q = $this->db->select('*')
                     ->from('tbl_posts')
                     ->where('post_type="event" and post_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
   

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }

 



    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_posts')
                   -> where('post_type="event" and post_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }





     //Vacancy Search Result Query

   function search_vacancy($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'vacancy_date';


      $q = $this->db->select('*')
                     ->from('tbl_vacancy')
                     ->where('vacancy_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['start_date'])){

$q->where('vacancy_date >=', $query_array['start_date']);
$q->where('vacancy_date <=', $query_array['end_date']);
    }


    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_vacancy')
                   -> where('vacancy_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('vacancy_date >=', $query_array['start_date']);
$q->where('vacancy_date <=', $query_array['end_date']);
    }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }




   //Event Search Result Query

   function search_question($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date','question_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'question_date';


      $q = $this->db->select('*')
                     ->from('tbl_questions')
                     ->where('question_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
   
$sdate = $query_array['start_date'];
if(!$sdate == ""){
    if(strlen($query_array['start_date'])){

$q->where('question_date >=', $query_array['start_date']);
$q->where('question_date <=', $query_array['end_date']);
    }
  }

     if (strlen($query_array['question_category'])){
$q->where('question_category',$query_array['question_category'] );
$q->where('question_approve = 1');
    }


 



    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_questions')
                   -> where('question_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('question_date >=', $query_array['start_date']);
$q->where('question_date <=', $query_array['end_date']);
    }

    if (strlen($query_array['question_category'])){
 $q->where('question_category',$query_array['question_category']);
     }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }






   
    function get_userby_email($email)
    {
        $sql = "select * from tbl_users where user_email='".$email."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    } 

     function setverificationkeyby_email($email, $key)
    {
        $data=array();
        $data['verificationcode']=$key;
        $this->db->where('user_email', $email);
        return $this->db->update('tbl_users', $data);
    } 


     function resetpassbykey($email, $password)
    {
        $data=array();
        $data['password']=$password;
        $data['verificationcode']='';
        $this->db->where('user_email', $email);
        return $this->db->update('tbl_users', $data);
    } 

 public function insertreview($data)
      {
        $sql = "select * from tbl_course_meta where course_id='".$data['course_id']."' and user_id='".$data['user_id']."'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          $uparr = array('course_id' => $data['course_id'], 'user_id' =>$data['user_id']);
          $this->db->where($uparr);
          return $this->db->update('tbl_course_meta', $data);
        }else{
          return $this->db->insert('tbl_course_meta', $data);
        }
        
      }


   }  
?>  