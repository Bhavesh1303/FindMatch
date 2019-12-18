<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DirectorController extends CI_Controller 
{

	function __construct(){  
    parent::__construct();
	 $this->load->helper('url'); 
     $this->load->model('Login_model');
     $this->load->model('Admin_model');
     $this->load->model('Organization_model');
     $this->load->model('Timetable_model');
     $this->load->model('Fee_model');	 
	}
  
public function director_list()
	{
		$organization_id= $_SESSION['organization_id'];
		$data['directordata'] = $this->Organization_model->get_select_director($organization_id);
		$this->load->view('director_list',$data);
	}
	
public function add_director()
	{
		$organization_id= $_SESSION['organization_id'];
		$data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id);
		$this->load->view('add_director',$data);
	}

	public function director_add()
	{
	  $organization_id= $_SESSION['organization_id'];
			$this->form_validation->set_rules('txtFullName', 'txtFullName', 'required');
            $this->form_validation->set_rules('txtMobile', 'txtMobile', 'required');
			$this->form_validation->set_rules('txtEmail', 'txtEmail', 'required');
	   if($this->form_validation->run() == true){
		   
				 $txtFirstName = $this->input->post('txtFullName');
				 $txtMobile = $this->input->post('txtMobile');
				 $txtEmail = $this->input->post('txtEmail');
				 $txtAddress = $this->input->post('txtAddress');
				 $txtDob = $this->input->post('txtDob');
				 $txtDoj = $this->input->post('txtDoj');  
				 $txtGender = $this->input->post('txtGender');
			
					
		         	 if (!empty($_FILES['profilepic']['name'])){    
        
        $imagename=date("d-m-Y")."-".time();
       //$fileinfo = pathinfo($_FILES['file']['name']);
       //$extension = $fileinfo['extension'];
       $ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
       if($ext ==='gif' || $ext ==='jpg' || $ext ==='png' || $ext ==='PNG' ||$ext ==='jpeg')
       {
        $config = array(
        'upload_path'   => './upload/Director_images/',
        'allowed_types' => 'gif|jpg|png|jpeg',
        'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'file_name'     =>$imagename //"criminal_images!".$imagename
         );        
        $this->load->library('upload');
        $this->upload->initialize($config);
                    
        if(!$this->upload->do_upload('profilepic'))
        {
        $error = array('error' => $this->upload->display_errors());
        echo $this->upload->display_errors() ;
        die("profilepic");
        }
        else
        {
        $imageDetailArray = $this->upload->data();
        $fileName = "Director_images/".$imagename. '.' .$ext; // $imageDetailArray['file_name'];
        
        }
       }
        }else {
        $fileName='';
        }
		
		$user_name_pass = 'Drc'.'_'.mt_rand(1000,9999);
         
            $directorData = array(
			      'director_pic'=>$fileName,
	              'director_name'=>$txtFirstName,
	              'director_mobile_no'=>$txtMobile,
	              'director_email_id'=>$txtEmail,
				  'director_address'=>$txtAddress,
				  'diretor_dob'=>$txtDob,
				  'director_date_of_joining'=>$txtDoj,
				  'director_gender'=>$txtGender,
				  'user_name'=>$user_name_pass,
				  'pswd'=>$user_name_pass,
				  'director_active_status'=>'Active',
				  'account_status'=>'Active',
				  'creation_date'=>date('Y-m-d h:i:s'),
				  'organization_id'=>$organization_id,
				 
			 );
             
            $this->db->insert('director_tbl',$directorData);
			$dir_last_id =$this->db->insert_id();
			//echo  $dir_last_id;
            $allUsersData = array(
			      'user_id'=>$dir_last_id,
				  'user_type'=>'Principal',
				  'user_full_name'=>$txtFirstName,
	              'user_name'=>$user_name_pass,
				  'password'=>$user_name_pass,
				  'user_email_id'=>$txtEmail,
				  'active_status'=>'Active',
				  'account_status'=>'Active',
				  'organization_id'=>$organization_id,
			 );
            $this->db->insert('all_users_tbl',$allUsersData);
			$this->session->set_flashdata('message', 'Data Inserted Successfully');
			redirect ('DirectorController/director_list');
	 } else {
			$this->session->set_flashdata('message', 'Something went wrong..');
			redirect ('DirectorController/director_list');
        }
     }	
	 
public function edit_director($id ='')
	{	
		$organization_id= $_SESSION['organization_id'];
		$this->form_validation->set_rules('txtFullName', 'txtFullName', 'required');
        
       if($this->form_validation->run() == true){
				 
                 $txtUserName = $this->input->post('txtUserName');
                 $txtPassword = $this->input->post('txtPassword');
                 $txtFullName = $this->input->post('txtFullName');
                 $txtMobile = $this->input->post('txtMobile');
                 $txtEmail = $this->input->post('txtEmail');
                 $txtAddress = $this->input->post('txtAddress');
                 $txtDob = $this->input->post('txtDob');
                 $txtDoj = $this->input->post('txtDoj');
                $txtGender = $this->input->post('txtGender');
                 $hdnid = $this->input->post('hdnid');
				 
		         	 if (!empty($_FILES['profilepic']['name'])){    
        
        $imagename=date("d-m-Y")."-".time();
       //$fileinfo = pathinfo($_FILES['file']['name']);
       //$extension = $fileinfo['extension'];
       $ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
       if($ext ==='gif' || $ext ==='jpg' || $ext ==='png' || $ext ==='PNG' ||$ext ==='jpeg')
       {
        $config = array(
        'upload_path'   => './upload/Director_images/',
        'allowed_types' => 'gif|jpg|png|jpeg',
        'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'file_name'     =>$imagename //"criminal_images!".$imagename
         );        
        $this->load->library('upload');
        $this->upload->initialize($config);
                    
        if(!$this->upload->do_upload('profilepic'))
        {
        $error = array('error' => $this->upload->display_errors());
        echo $this->upload->display_errors() ;
        die("profilepic");
        }
        else
        {
        $imageDetailArray = $this->upload->data();
        $fileName = "Director_images/".$imagename. '.' .$ext; // $imageDetailArray['file_name'];
        
        }
				 $editdirectorData = array(
                 'user_name'=>$txtUserName,
                 'pswd'=>$txtPassword,
                 'director_name'=>$txtFullName,
                 'director_mobile_no'=>$txtMobile,
                 'director_email_id'=>$txtEmail,
                 'director_address'=>$txtAddress,
                 'director_gender'=>$txtGender,
                 'diretor_dob'=>$txtDob,
                'director_date_of_joining'=>$txtDoj,
                'director_pic'=>$fileName,
				   ); 
		
       }
        }else {
					
				 $editdirectorData = array(
                 'user_name'=>$txtUserName,
                 'pswd'=>$txtPassword,
                 'director_name'=>$txtFullName,
                 'director_mobile_no'=>$txtMobile,
                 'director_email_id'=>$txtEmail,
                 'director_address'=>$txtAddress,
                 'director_gender'=>$txtGender,
                 'diretor_dob'=>$txtDob,
                'director_date_of_joining'=>$txtDoj,
				   ); 
        }
	
	 $this->db->update('director_tbl',$editdirectorData,array('id'=>$hdnid ));
        
            $allUsersData = array(
				  'user_type'=>'Principal',
				  'user_name'=>$txtUserName,
				  'password'=>$txtPassword,
				  'user_full_name'=>$txtFullName,
				  'user_email_id'=>$txtEmail,
				  'active_status'=>'Active',
				  'account_status'=>'Active',
				  'organization_id'=>$organization_id,
			 );
            $this->db->update('all_users_tbl',$allUsersData,array('user_id'=>$hdnid, 'user_type'=>'Principal'));
          redirect ('DirectorController/director_list');	 
	 } 
	   
	   else{
           $data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id) ;
           $data['directoreditdata'] = $this->Organization_model->get_edit_director($id) ;
		   $this->load->view('edit_director',  $data);	}
	}
		
public function view_director($id ='')
	{
		 $data['directoreditdata'] = $this->Organization_model->get_edit_director($id) ;
		   $this->load->view('view_director', $data);	
		   }
		   
 public function delete_director($director_id='')
 {
             
           $data = array(
           'director_active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('director_tbl',$data,array('id'=>$director_id));
		   
           $data = array(
           'active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('all_users_tbl',$data,array('user_id'=>$director_id, 'user_type'=>'Principal'));
		   redirect ('DirectorController/director_list');

}   
 public function mark_as_active($director_id=''){
             
           $data = array(
           'director_active_status'=>'Active',
		   'account_status'=>'Active',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('director_tbl',$data,array('id'=>$director_id));
		   
           $data = array(
           'active_status'=>'Active',
		   'account_status'=>'Active',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('all_users_tbl',$data,array('user_id'=>$director_id, 'user_type'=>'Principal'));
		   redirect ('DirectorController/report_director');

}   
 public function mark_as_inactive($director_id=''){
             
           $data = array(
           'director_active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('director_tbl',$data,array('id'=>$director_id));
		   
           $data = array(
           'active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('all_users_tbl',$data,array('user_id'=>$director_id, 'user_type'=>'Principal'));
		   redirect ('DirectorController/report_director');

}

   	public function report_director()
	{
	 $organization_id= $_SESSION['organization_id'];
	 $data['directordata'] = $this->Organization_model->get_select_director($organization_id);
     $this->load->view('director_report', $data);
   }
   
   public function report_director_list()
	{
		$organization_id= $_SESSION['organization_id'];
		 $txtName = $this->input->post('txtName');
		 $txtStatus = $this->input->post('txtStatus');
		 
	 $data['directordata'] = $this->Organization_model->get_select_director($organization_id);
	 $data['directorresultData'] =  $this->Organization_model->director_result_data($txtName, $txtStatus, $organization_id);
     $this->load->view('director_report', $data); 
		
   }
  }
  ?>