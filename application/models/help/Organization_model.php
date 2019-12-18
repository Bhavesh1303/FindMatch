<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Organization_model extends CI_Model{

	function __construct() {
        parent::__construct();
       
    }  




 function get_select_department(){
    }
 function get_sem(){
    }


//--------------------------------------------------DASHBOARD------------------------------------------
function get_count_student($organization_id){
	 $sql="SELECT COUNT(id) as sid FROM `student_tbl` where organization_id='".$organization_id."' and s_active_status ='Active' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['countstudent']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }


function get_count_faculty($organization_id){
	 $sql="SELECT COUNT(id) as fid FROM `faculty_tbl` where organization_id='".$organization_id."' and f_active_status ='Active' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['countfaculty']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
function get_count_feeDue($organization_id){
	 $sql="SELECT COUNT(id) as fdid FROM `fee_assign_tbl` where organization_id='".$organization_id."' and payment_status ='Due' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['countfeedue']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }	
	
function get_count_feeRec($organization_id){
	 $sql="SELECT COUNT(id) as fRid FROM `fee_assign_tbl` where organization_id='".$organization_id."' and payment_status ='Paid' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['countfeerec']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
//--------------------------------------------------college namelogo--------------------------------------------------
function get_college_namelogo($organization_id){
	$sql="SELECT * FROM `organization_tbl` where id='".$organization_id."'";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['collegenamelogo']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	/*
	function get_select_organization()
 {
	    $sql="SELECT * FROM `organization_tbl` Where organization_tbl.active_status = 'Active' ORDER BY organization_tbl.id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['organizationdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }*/
	
//--------------------------------------------------DIRECTOR DATA--------------------------------------------------
	
	function get_director_name($user_id){
	    $sql="SELECT director_tbl.*, courses_tbl.course_name , organization_tbl.organization_name FROM `director_tbl`  LEFT JOIN courses_tbl ON director_tbl.course_id = courses_tbl.id LEFT JOIN organization_tbl ON director_tbl.organization_id = organization_tbl.id Where director_active_status = 'Active' and director_tbl.id = '".$user_id."' ";
      	$query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['directorname']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_select_director($organization_id)
 {
	    $sql="SELECT director_tbl.*, courses_tbl.course_name FROM `director_tbl` LEFT JOIN courses_tbl ON director_tbl.course_id = courses_tbl.id Where director_tbl.director_active_status = 'Active' and director_tbl.organization_id = '".$organization_id."'  ORDER BY director_tbl.id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['directordata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	
//--------------------------------------------------ACCOUNTANT DATA--------------------------------------------------
	
 function get_accountant()
 {
	    $sql="SELECT * FROM `accoutnat_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['accountantdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }	
	
//--------------------------------------------------FACULTY DATA--------------------------------------------------
	function get_faculty_name($user_id){
		$sql="SELECT faculty_tbl.*, department_tbl.department_name, organization_tbl.organization_name FROM `faculty_tbl` LEFT JOIN department_tbl ON faculty_tbl.department_id = department_tbl.id LEFT JOIN organization_tbl ON faculty_tbl.organization_id = organization_tbl.id Where f_active_status = 'Active' and faculty_tbl.id = '".$user_id."' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['facultynamedata']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
//--------------------------------------------------STUDENT DATA--------------------------------------------------
	function get_student_name($user_id){
	    $sql="SELECT student_tbl.*, department_tbl.department_name, organization_tbl.organization_name FROM `student_tbl` LEFT JOIN department_tbl ON student_tbl.department_id = department_tbl.id LEFT JOIN organization_tbl ON student_tbl.organization_id = organization_tbl.id Where s_active_status = 'Active' and student_tbl.id = '".$user_id."' ";
      	//$sql="SELECT * FROM `student_tbl` Where s_active_status = 'Active' and id = '".$user_id."' ";
      	$query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['studentnamedata']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
//--------------------------------------------------ACCOUNTANT DATA--------------------------------------------------
	function get_accountant_name($user_id){
	    $sql="SELECT accoutnat_tbl.*, organization_tbl.organization_name FROM `accoutnat_tbl` LEFT JOIN organization_tbl ON accoutnat_tbl.organization_id = organization_tbl.id Where accoutnat_tbl.id = '".$user_id."' ";
     
      	$query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['accountantnamedata']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }

//--------------------------------------------------Course--------------------------------------------------
		
 function get_select_course($organization_id)
 {
	    $sql="SELECT * FROM `courses_tbl` Where course_active_status = 'Active' and organization_id = '".$organization_id."'  ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['activeticketproprity']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
function get_section($organization_id)
	{
	   $sql=" SELECT * FROM section_tbl Where section_active_status = 'Active' AND organization_id = '".$organization_id."' ORDER BY section_tbl.id ASC";
	    // $sql="SELECT * FROM `section_tbl` Where section_active_status = 'Active' ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['section']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_student($organization_id)
	{
		$usertype =  $_SESSION['user_type'];
		$user_id =  $_SESSION['user_id'];
        if($usertype === 'HOD')
            { 
	         $sql="SELECT student_tbl.*, courses_tbl.course_name,  department_tbl.department_name, sem_tbl.sem, section_tbl.section FROM `student_tbl` LEFT JOIN courses_tbl ON student_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON student_tbl.department_id = department_tbl.id LEFT JOIN sem_tbl ON student_tbl.sem_id = sem_tbl.id LEFT JOIN section_tbl ON student_tbl.section_id = section_tbl.id Where student_tbl.s_active_status = 'Active' and student_tbl.hod_id = '".$user_id."' and student_tbl.organization_id = '".$organization_id."' ORDER BY student_tbl.id ASC";
			}
			else if($usertype === 'Faculty')
			{
	    $sql="SELECT student_tbl.*, courses_tbl.course_name,  department_tbl.department_name, sem_tbl.sem, section_tbl.section FROM `student_tbl` LEFT JOIN courses_tbl ON student_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON student_tbl.department_id = department_tbl.id LEFT JOIN sem_tbl ON student_tbl.sem_id = sem_tbl.id LEFT JOIN section_tbl ON student_tbl.section_id = section_tbl.id Where student_tbl.s_active_status = 'Active' and student_tbl.faculty_id = '".$user_id."' and student_tbl.organization_id = '".$organization_id."' ORDER BY student_tbl.id ASC";
			}
			else 
			{
			 $sql="SELECT student_tbl.*, courses_tbl.course_name,  department_tbl.department_name, sem_tbl.sem, section_tbl.section FROM `student_tbl` LEFT JOIN courses_tbl ON student_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON student_tbl.department_id = department_tbl.id LEFT JOIN sem_tbl ON student_tbl.sem_id = sem_tbl.id LEFT JOIN section_tbl ON student_tbl.section_id = section_tbl.id Where student_tbl.s_active_status = 'Active' and student_tbl.organization_id = '".$organization_id."' ORDER BY student_tbl.id ASC";
			}	
			$query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['studentdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_faculty($organization_id)
	{
		$usertype =  $_SESSION['user_type'];
		$user_id =  $_SESSION['user_id'];
        if($usertype === 'HOD')
            { 
	         $sql="SELECT faculty_tbl.*, courses_tbl.course_name,  department_tbl.department_name FROM `faculty_tbl` LEFT JOIN courses_tbl ON faculty_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON faculty_tbl.department_id = department_tbl.id  Where faculty_tbl.f_active_status = 'Active' and faculty_tbl.hod_id = '".$user_id."' and faculty_tbl.organization_id = '".$organization_id."' ORDER BY faculty_tbl.id ASC";
			}
			else
			{
			 $sql="SELECT faculty_tbl.*, courses_tbl.course_name,  department_tbl.department_name FROM `faculty_tbl` LEFT JOIN courses_tbl ON faculty_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON faculty_tbl.department_id = department_tbl.id  Where faculty_tbl.f_active_status = 'Active' and faculty_tbl.organization_id = '".$organization_id."' ORDER BY faculty_tbl.id ASC";
			}
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['facultydata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_subject($organization_id)
	{
	    $sql=" SELECT subjects_tbl.*, courses_tbl.course_name FROM subjects_tbl LEFT JOIN courses_tbl ON subjects_tbl.course_id = courses_tbl.id Where subject_active_status = 'Active'  AND subjects_tbl.organization_id = '".$organization_id."'  ORDER BY subjects_tbl.id ASC";
	    //$sql="SELECT * FROM `subjects_tbl`  Where subject_active_status = 'Active' ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['subjectdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_timetable($organization_id){
	  $sql=" SELECT time_table.*, courses_tbl.course_name, department_tbl.department_name, subjects_tbl.subject_name FROM time_table LEFT JOIN courses_tbl ON time_table.course_id = courses_tbl.id LEFT JOIN department_tbl ON time_table.department_id = department_tbl.id LEFT JOIN subjects_tbl ON time_table.subject_id = subjects_tbl.id Where time_table.organization_id = '".$organization_id."' ORDER BY subjects_tbl.id ASC";
	   //$sql="SELECT * FROM `assignment_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['timetabledata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }

	function get_assignment($organization_id){
	  $sql=" SELECT assignment_tbl.*, courses_tbl.course_name, department_tbl.department_name, subjects_tbl.subject_name FROM assignment_tbl LEFT JOIN courses_tbl ON assignment_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON assignment_tbl.department_id = department_tbl.id LEFT JOIN subjects_tbl ON assignment_tbl.subject_id = subjects_tbl.id Where assign_active_status = 'Active' AND  assignment_tbl.organization_id = '".$organization_id."' ORDER BY subjects_tbl.id ASC";
	   //$sql="SELECT * FROM `assignment_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['assignmentdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_event($organization_id, $user_id, $user_type){
	    $sql="SELECT * FROM `event_tbl`  Where event_tbl.event_active_status='Active' and event_tbl.organization_id = '".$organization_id."' and event_tbl.event_by_id = '".$user_id."' and event_tbl.event_by_user = '".$user_type."' ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows(); 
		if($count>=1)
		{
			$data['flag']=1;
			$data['eventdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function show_event_data($organization_id, $user_id, $user_type){
		
	$condition="event_tbl.id!='0' ";
		 
	if($user_type == 'Admin')
    {
		$condition .=" and event_tbl.event_by_id = '".$user_id."' and event_tbl.event_by_user = '".$user_type."' ";
    }
	elseif($user_type == 'Director')
    {
		$condition .=" and event_tbl.director_id = '".$user_id."' ";
    }
	elseif($user_type == 'HOD')
    {
		$condition .=" and event_tbl.hod_id = '".$user_id."' ";
    }
	elseif($user_type == 'Faculty')
    {
		$condition .=" and event_tbl.faculty_id = '".$user_id."' ";
    }
	elseif($user_type == 'Student')
    {
		$condition .=" and event_tbl.student_id = '".$user_id."' ";
    }
	else
    {
		$condition .=" ";
    }
	
	    $sql="SELECT * FROM `event_tbl`  Where event_tbl.event_active_status='Active' and event_tbl.organization_id = '".$organization_id."' and ".$condition." ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows(); 
		if($count>=1)
		{
			$data['flag']=1;
			$data['showEventData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
   public function get_edit_event($id){
        $sql="SELECT event_tbl.*, courses_tbl.course_name, department_tbl.department_name, director_tbl.director_name,  hod_tbl.hod_name, faculty_tbl.faculty_name AS faculty_name, student_tbl.full_name AS student_name FROM event_tbl LEFT JOIN courses_tbl ON event_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON event_tbl.department_id = department_tbl.id   LEFT JOIN director_tbl ON event_tbl.director_id = director_tbl.id  LEFT JOIN hod_tbl ON event_tbl.hod_id = hod_tbl.id LEFT JOIN faculty_tbl ON event_tbl.faculty_id = faculty_tbl.id  LEFT JOIN student_tbl ON event_tbl.student_id = student_tbl.id  WHERE event_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['eventeditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
	
	function show_notification($organization_id, $user_id, $user_type){
		
		 $condition="notifications_tbl.id!='0' ";
		 
	 if($user_type == 'Admin')
    {
    $condition .=" and notifications_tbl.notification_by_id = '".$user_id."' ";
    }
	elseif($user_type == 'Director')
    {
    $condition .=" and notifications_tbl.director_id = '".$user_id."' ";
    }
	elseif($user_type == 'HOD')
    {
    $condition .=" and notifications_tbl.hod_id = '".$user_id."' ";
    }
	elseif($user_type == 'Faculty')
    {
    $condition .=" and notifications_tbl.faculty_id = '".$user_id."' ";
    }
	elseif($user_type == 'Student')
    {
    $condition .=" and notifications_tbl.student_id = '".$user_id."' ";
    }
	else
    {
    $condition .=" ";
    }
	
	    $sql="SELECT notifications_tbl.*, courses_tbl.course_name, department_tbl.department_name  FROM `notifications_tbl` LEFT JOIN courses_tbl ON notifications_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON notifications_tbl.department_id = department_tbl.id  WHERE notifications_tbl.notifications_active_status='Active' AND notifications_tbl.organization_id = '".$organization_id."' and ".$condition." GROUP BY notice_id DESC LIMIT 5";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['shownotificationdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_notification($organization_id, $user_id, $user_type){
		
	/*	 $condition="notifications_tbl.id!='0' ";
		 
	 if($user_type == 'Admin')
    {
    $condition .=" and notifications_tbl.notification_by = '".$user_id."' ";
    }
	elseif($user_type == 'Director')
    {
    $condition .=" and notifications_tbl.director_id = '".$user_id."' ";
    }
	elseif($user_type == 'HOD')
    {
    $condition .=" and notifications_tbl.hod_id = '".$user_id."' ";
    }
	elseif($user_type == 'Faculty')
    {
    $condition .=" and notifications_tbl.faculty_id = '".$user_id."' ";
    }
	elseif($user_type == 'Student')
    {
    $condition .=" and notifications_tbl.student_id = '".$user_id."' ";
    }
	else
    {
    $condition .=" ";
    }*/
	
	    $sql="SELECT notifications_tbl.*, COUNT(director_id) AS count_dir, COUNT(hod_id) AS count_hod, COUNT(faculty_id) AS count_fac, COUNT(student_id) AS count_stu, courses_tbl.course_name, department_tbl.department_name  FROM `notifications_tbl` LEFT JOIN courses_tbl ON notifications_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON notifications_tbl.department_id = department_tbl.id  WHERE notifications_tbl.notifications_active_status='Active' AND notifications_tbl.organization_id = '".$organization_id."' and notifications_tbl.notification_by_id = '".$user_id."' and notifications_tbl.notification_by_user = '".$user_type."' GROUP BY notice_id DESC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['notificationdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
//------------------------------Get all Members of organization-----------------------------------	

function get_all_members($organization_id)
 {
	    $sql="SELECT all_users_tbl.*, director_tbl.*, accoutnat_tbl.*, hod_tbl.*, faculty_tbl.*, student_tbl.* from all_users_tbl LEFT JOIN director_tbl ON all_users_tbl.organization_id = director_tbl.organization_id LEFT JOIN accoutnat_tbl ON director_tbl.organization_id = accoutnat_tbl.organization_id LEFT JOIN hod_tbl ON director_tbl.organization_id = hod_tbl.organization_id LEFT JOIN faculty_tbl ON hod_tbl.organization_id = faculty_tbl.organization_id LEFT JOIN student_tbl ON faculty_tbl.organization_id = student_tbl.organization_id  where all_users_tbl.organization_id = '".$organization_id."' group by user_email_id ORDER BY user_type ASC ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['allMemberData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
}	

	function get_study_material($organization_id){
	    $sql="SELECT studymaterial_tbl.*, courses_tbl.course_name, subjects_tbl.subject_name FROM studymaterial_tbl LEFT JOIN courses_tbl ON studymaterial_tbl.course_id = courses_tbl.id LEFT JOIN subjects_tbl ON studymaterial_tbl.subject_id = subjects_tbl.id Where studymaterial_tbl.studymaterial_active_status='Active' and studymaterial_tbl.organization_id = '".$organization_id."' ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['studymateriallist']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
   public function get_edit_study_material($id){
        $sql="SELECT studymaterial_tbl.*, courses_tbl.course_name, subjects_tbl.subject_name FROM studymaterial_tbl LEFT JOIN courses_tbl ON studymaterial_tbl.course_id = courses_tbl.id LEFT JOIN subjects_tbl ON studymaterial_tbl.subject_id = subjects_tbl.id Where studymaterial_tbl.studymaterial_active_status='Active' AND studymaterial_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['studymaterialeditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
   
   public function get_edit_hod($id){
        $sql="SELECT hod_tbl.* , courses_tbl.course_name, department_tbl.department_name FROM hod_tbl  LEFT JOIN courses_tbl ON hod_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON hod_tbl.department_id = department_tbl.id WHERE hod_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['hodeditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
	 public function get_edit_assignment($id){
		  $sql="SELECT assignment_tbl.*, courses_tbl.course_name,  section_tbl.section, subjects_tbl.subject_name, organization_tbl.organization_name FROM assignment_tbl  LEFT JOIN courses_tbl ON assignment_tbl.course_id = courses_tbl.id LEFT JOIN section_tbl ON assignment_tbl.section_id = section_tbl.id LEFT JOIN subjects_tbl ON assignment_tbl.subject_id = subjects_tbl.id LEFT JOIN organization_tbl ON assignment_tbl.organization_id = organization_tbl.id  WHERE assignment_tbl.id='".$id."' ";
       
       // $sql= "SELECT * from assignment_tbl" ;
		 $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['assgineditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
	
	public function get_edit_organization($id){
        $sql="SELECT * FROM organization_tbl  WHERE organization_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['organizationeditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
	public function get_edit_director($id){
        $sql="SELECT director_tbl.*, courses_tbl.course_name, organization_tbl.organization_name FROM director_tbl  LEFT JOIN courses_tbl ON director_tbl.course_id = courses_tbl.id LEFT JOIN organization_tbl ON director_tbl.organization_id = organization_tbl.id  WHERE director_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['directoreditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
	
	public function get_edit_faculty($id){
        $sql="SELECT faculty_tbl.*, courses_tbl.course_name, subjects_tbl.subject_name FROM faculty_tbl  LEFT JOIN courses_tbl ON faculty_tbl.course_id = courses_tbl.id LEFT JOIN subjects_tbl ON faculty_tbl.subject_id = subjects_tbl.id WHERE faculty_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['facultyeditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
	
	public function get_edit_student($id){
         $sql="SELECT student_tbl.*, courses_tbl.course_name, department_tbl.department_name, sem_tbl.sem, section_tbl.section, hod_tbl.hod_name, city_tbl.city_name, state_tbl.state_name FROM student_tbl  LEFT JOIN courses_tbl ON student_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON student_tbl.department_id = department_tbl.id LEFT JOIN sem_tbl ON student_tbl.sem_id = sem_tbl.id LEFT JOIN section_tbl ON student_tbl.section_id = section_tbl.id LEFT JOIN hod_tbl ON student_tbl.hod_id = hod_tbl.id LEFT JOIN city_tbl ON student_tbl.s_city = city_tbl.id LEFT JOIN state_tbl ON student_tbl.s_state = state_tbl.id WHERE student_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['studenteditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 

    
	public function get_edit_course($id){
        $sql="SELECT * FROM `courses_tbl` WHERE id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['courseeditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
    
    
	public function get_edit_section($id){
        $sql="SELECT section_tbl.*, courses_tbl.course_name, department_tbl.department_name, sem_tbl.sem FROM `section_tbl` LEFT JOIN courses_tbl ON section_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON section_tbl.department_id = department_tbl.id LEFT JOIN sem_tbl ON section_tbl.sem_id = sem_tbl.id  WHERE section_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['sectioneditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 
    
    
	public function get_edit_subject($id){
        $sql="SELECT subjects_tbl.*, courses_tbl.course_name  FROM `subjects_tbl` LEFT JOIN courses_tbl ON subjects_tbl.course_id = courses_tbl.id WHERE subjects_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['subjecteditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    }  
	
function get_select_hod(){
	    $sql="SELECT * FROM `hod_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['hoddata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
function get_hod_data(){
	    $sql="SELECT * FROM `hod_tbl`  ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['sem']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
}

function director_result_data($txtName, $txtStatus, $organization_id)
    {
		 $condition="director_tbl.id!=0";
  

   if($txtName != '')
    {
    $condition .=" and director_tbl.id = '".$txtName."' ";
    }
	
	 if($txtStatus == 'Inactive')
    {
    $condition .=" and director_tbl.director_active_status = 'Inactive' ";
    }
	elseif($txtStatus == 'Active')
    {
    $condition .=" and director_tbl.director_active_status = 'Active' ";
    }
	else
	{
    $condition .=" ";
    }

	 $sql="SELECT director_tbl.*, courses_tbl.course_name FROM `director_tbl` LEFT JOIN courses_tbl ON  director_tbl.course_id = courses_tbl.id where ".$condition." and director_tbl.organization_id = '".$organization_id."' ";
	
	
       $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1){
			$data['flag']=1;
			$data['directorresultData']=$query->result_array();
		    return($data);
		} else {   

		 	$data['flag']=0;
		    return($data);
			  
		}
	} 
	
 function hod_result_data($txtCourse, $txtDepartment, $txtHod, $txtStatus, $organization_id)
 {
  $condition="hod_tbl.id!=0";
  
   if($txtCourse != '')
    {
    $condition .=" and hod_tbl.course_id = '".$txtCourse."' ";
    }

   if($txtDepartment != '')
    {        
    $condition .=" and hod_tbl.department_id = '".$txtDepartment."' ";
    }

   if($txtHod != '')
    {
    $condition .=" and hod_tbl.id = '".$txtHod."' ";
    }
	
	if($txtStatus == 'Inactive')
    {
    $condition .=" and hod_tbl.hod_active_status = 'Inactive' ";
    }
	elseif($txtStatus == 'Active')
    {
    $condition .=" and hod_tbl.hod_active_status = 'Active' ";
    }
	else
	{
    $condition .=" ";
    }

	 $sql="SELECT hod_tbl.*, courses_tbl.course_name, department_tbl.department_name FROM `hod_tbl` LEFT JOIN courses_tbl ON hod_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON hod_tbl.department_id = department_tbl.id where ".$condition." and hod_tbl.organization_id = '".$organization_id."' ";
	
       $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1){
			$data['flag']=1;
			$data['hodresultData']=$query->result_array();
		    return($data);
		} else {   

		 	$data['flag']=0;
		    return($data);
			  
		}
	} 
	
	
	function faculty_result_data($txtCourse, $txtName, $txtStatus, $organization_id)
    {
		 $condition="faculty_tbl.id!=0";
  
   if($txtCourse != '')
    {
    $condition .=" and faculty_tbl.course_id = '".$txtCourse."' ";
    }
	
    if($txtName != '')
    {
    $condition .=" and faculty_tbl.id = '".$txtName."' ";
    }
	
	if($txtStatus == 'Inactive')
    {
    $condition .=" and faculty_tbl.f_active_status = 'Inactive' ";
    }
	elseif($txtStatus == 'Active')
    {
    $condition .=" and faculty_tbl.f_active_status = 'Active' ";
    }
	else
	{
    $condition .=" ";
    }

	 $sql="SELECT faculty_tbl.*, courses_tbl.course_name, department_tbl.department_name FROM `faculty_tbl` LEFT JOIN courses_tbl ON faculty_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON faculty_tbl.department_id = department_tbl.id where ".$condition." and faculty_tbl.organization_id = '".$organization_id."' ";

	
       $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1){
			$data['flag']=1;
			$data['facultyresultData']=$query->result_array();
		    return($data);
		} else {   

		 	$data['flag']=0;
		    return($data);
			  
		}
	} 
	
	function student_result_data($txtCourse, $txtSection, $txtName, $txtStatus, $organization_id)
    {
		 $condition="student_tbl.id!=0";
  
   if($txtCourse != '')
    {
    $condition .=" and student_tbl.course_id = '".$txtCourse."' ";
    }

   if($txtSection != '')
    {
    $condition .=" and student_tbl.section_id = '".$txtSection."' ";
    }
	
   if($txtName != '')
    {
    $condition .=" and student_tbl.id = '".$txtName."' ";
    }
	
   if($txtStatus == 'Inactive')
    {
    $condition .=" and student_tbl.s_active_status = 'Inactive' ";
    }
	elseif($txtStatus == 'Active')
    {
    $condition .=" and student_tbl.s_active_status = 'Active' ";
    }
	else
	{
    $condition .=" ";
    }	
	
	 $sql="SELECT student_tbl.*, courses_tbl.course_name,  section_tbl.section as section_name, city_tbl.city_name, state_tbl.state_name FROM `student_tbl` LEFT JOIN courses_tbl ON student_tbl.course_id = courses_tbl.id LEFT JOIN section_tbl ON student_tbl.section_id = section_tbl.id LEFT JOIN city_tbl ON student_tbl.s_city = city_tbl.id LEFT JOIN state_tbl ON student_tbl.s_state = state_tbl.id where ".$condition." and student_tbl.organization_id = '".$organization_id."' ";

	
       $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1){
			$data['flag']=1;
			$data['studentresultData']=$query->result_array();
		    return($data);
		} else {   

		 	$data['flag']=0;
		    return($data);
			  
		}
	} 

	
 function get_select_college(){
	$sql="SELECT * FROM `organization_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['collegedata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	
function get_subject_by_class($Course_id)
 {
  $sql="SELECT * FROM `subjects_tbl` WHERE course_id='".$Course_id."' AND subject_active_status= 'Active'  ORDER BY subject_name ASC";
  $query = $this->db->query($sql);
  
  $output = '<option value="">Select Subject</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->subject_name.'</option>';
  }
  return $output;
 }
 
function get_teach_by_class($Course_id)
 {
  $sql="SELECT * FROM `faculty_tbl` WHERE course_id='".$Course_id."' AND f_active_status= 'Active'  ORDER BY faculty_name ASC";
  $query = $this->db->query($sql);
  
  $output = '<option value="">Select Teacher</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->faculty_name.'</option>';
  }
  return $output;
 }
 
function get_stud_by_class($Course_id)
 {
  $sql="SELECT * FROM `student_tbl` WHERE course_id='".$Course_id."' AND s_active_status= 'Active'  ORDER BY full_name ASC";
  $query = $this->db->query($sql);
  
  $output = '<option value="">Select Student</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->full_name.'</option>';
  }
  return $output;
 }
 
 function get_director_name_by_course($Course_id)
 {
  $sql="SELECT * FROM `director_tbl`  WHERE course_id='".$Course_id."' AND director_active_status= 'Active'  ORDER BY id";
  $query = $this->db->query($sql);
  $output = '<option value="">Select Director Name</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->director_name.'</option>';
  }
  return $output;
 }



function get_city_by_state($State_id)
 {
  $this->db->where('state_id', $State_id);
  $this->db->order_by('city_name', 'ASC');
  $query = $this->db->get('city_tbl');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->city_name.'</option>';
  }
  return $output;
 }
 //------------- get director by course ----------------
  function get_director_by_course($organization_id)
 {
 $sql="SELECT * FROM `director_tbl` WHERE organization_id ='".$organization_id."' AND director_active_status= 'Active'  ORDER BY director_name ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Principal</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->director_name.'</option>';
  }
  return $output;
 }
  function get_director_by_course_data($organization_id)
 {
	$sql="SELECT * FROM `director_tbl` WHERE organization_id ='".$organization_id."' AND director_active_status= 'Active'  ORDER BY director_name ASC";
	$query = $this->db->query($sql);
	$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['directorCourseData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
 }
 //------------------- get hod by department--------------
 function get_hod_by_department($DepartmentID)
 {
 $sql="SELECT * FROM `hod_tbl` WHERE department_id ='".$DepartmentID."' AND hod_active_status= 'Active'  ORDER BY hod_name ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Hod</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->hod_name.'</option>';
  }
  return $output;
 }
 
 function get_hod_by_department_data($DepartmentID)
 {
 $sql="SELECT * FROM `hod_tbl` WHERE department_id ='".$DepartmentID."' AND hod_active_status= 'Active'  ORDER BY hod_name ASC";
 $query = $this->db->query($sql);
	$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['hodDepartmentData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
 }
 
 //-----------------------get faculty by department ----------------------
  function get_faculty_by_department($DepartmentID)
 {
 $sql="SELECT * FROM `faculty_tbl` WHERE department_id ='".$DepartmentID."' AND f_active_status= 'Active'  ORDER BY faculty_name ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Faculty</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->faculty_name.'</option>';
  }
  return $output;
 }
 
 function get_faculty_by_course_data($CourseID)
 {
 $sql="SELECT * FROM `faculty_tbl` WHERE course_id ='".$CourseID."' AND f_active_status= 'Active'  ORDER BY faculty_name ASC";
 $query = $this->db->query($sql);
	$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['facultyDepartmentData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
 }
 
 //-----------------------get student by department ----------------------
 function get_student_by_department($DepartmentID)
 {
 $sql="SELECT * FROM `student_tbl` WHERE department_id ='".$DepartmentID."' AND s_active_status= 'Active'  ORDER BY full_name ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Student</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->full_name.'</option>';
  }
  return $output;
 }
 
 function get_student_by_course_data($CourseID,$SessionYear_Id,$Section_Id)
 {
	 
		 $condition="student_tbl.id!=0";
  
   if($CourseID != '')
    {
    $condition .=" and student_tbl.course_id = '".$CourseID."' ";
    }
	
   if($SessionYear_Id != '')
    {
    $condition .=" and '".$SessionYear_Id."' BETWEEN session_start AND session_end ";
    }
	
   if($Section_Id != '')
    {
    $condition .=" and student_tbl.section_id = '".$Section_Id."' ";
    }
	
	
 $sql="SELECT * FROM `student_tbl` WHERE ".$condition." AND s_active_status= 'Active'  ORDER BY full_name ASC";
 $query = $this->db->query($sql);
	$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['studentDepartmentData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
 }
 
 //-----------------------get Subject by department ----------------------
 function get_subject_by_department($DepartmentID)
 {
 $sql="SELECT * FROM `subjects_tbl` WHERE department_id ='".$DepartmentID."' AND subject_active_status= 'Active'  ORDER BY subject_name ASC";
 $query = $this->db->query($sql);
 //$output = '<select class="form-control selectpicker" name="txtSubject[]" id="txtSubject" style="width: 100%" data-allow-clear="true" multiple data-live-search="true">';
 $output = '<option value="">Select Subject</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->subject_name.'</option>';
  }
  //$output .= '</select>';
  return $output;
 }
 
 function get_section_by_semester($Semester_id)
 {
 $sql="SELECT * FROM `section_tbl` WHERE sem_id ='".$Semester_id."' AND section_active_status= 'Active'  ORDER BY section ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Section</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->section.'</option>';
  }
  return $output;
 }
 
  function get_section_by_session($session_id)
 {
 $sql="SELECT * FROM `section_tbl` WHERE session_year ='".$session_id."' AND section_active_status= 'Active' ORDER BY section ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Section</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->section.'</option>';
  }
  return $output;
 }
 
 function get_sem_by_course($Course_id)
 {
 $sql="SELECT * FROM `sem_tbl` WHERE course_id ='".$Course_id."' AND sem_active_status= 'Active'  ORDER BY sem ASC";
 $query = $this->db->query($sql);
 $output = '<option value="">Select Semester</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->sem.'</option>';
  }
  return $output;
 }
 
function get_select_state(){
	    $sql="SELECT * FROM `state_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['statedata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
	function get_select_city(){
	    $sql="SELECT * FROM `city_tbl` ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['citydata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
function get_admin_name($admin_user_name){
	$sql="SELECT * FROM `admin_tbl` where user_name ='".$admin_user_name."' ORDER BY id ASC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['adminname']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	

function get_project_list($organization_id){
	 $sql="SELECT assignment_tbl.*, courses_tbl.course_name, department_tbl.department_name, subjects_tbl.subject_name FROM `assignment_tbl` LEFT JOIN courses_tbl ON assignment_tbl.course_id = courses_tbl.id LEFT JOIN department_tbl ON assignment_tbl.department_id = department_tbl.id LEFT JOIN subjects_tbl ON assignment_tbl.subject_id = subjects_tbl.id where assignment_tbl.organization_id='".$organization_id."' and assign_active_status = 'Active' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['projectdata']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
}
	
//---------------------------------------------------------- Resume ---------------------------------------------
function get_resume_list($user_id, $organization_id){
	 $sql="SELECT * FROM `resume_tbl`  where student_id='".$user_id."' and organization_id='".$organization_id."' and resume_active_status = 'Active' ORDER BY id DESC";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['resumeData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
}


   public function get_edit_accountant($id){
        $sql="SELECT accoutnat_tbl.* , courses_tbl.course_name FROM accoutnat_tbl  LEFT JOIN courses_tbl ON accoutnat_tbl.course_id = courses_tbl.id WHERE accoutnat_tbl.id='".$id."' ";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']= 1 ;
            $data['acceditdata']= $query->row_array();
            return($data);
        }
        else
        {
            $data['flag']= 0;
            return($data);
        }
    } 	
}