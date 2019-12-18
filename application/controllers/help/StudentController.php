<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller 
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


public function student_dashboard()
	{
		$user_id=  $_SESSION['user_id']; 
	    $user_type =  $_SESSION['user_type']; 
		$organization_id= $_SESSION['organization_id'];
		$data['showEventData'] = $this->Organization_model->show_event_data($organization_id, $user_id, $user_type);
		
		
		$data['latestNoticeData'] = $this->Notice_model->get_latest_notice($organization_id);
		$this->load->view('student_dashboard', $data);
	}



public function student_list()
	{
		$organization_id= $_SESSION['organization_id'];
	$data['studentdata'] = $this->Organization_model->get_student($organization_id);
	$this->load->view('student_list',$data);
	}

public function add_student()
	{
		$organization_id= $_SESSION['organization_id'];
	 $data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id);
	 $data['statedata'] = $this->Organization_model->get_select_state();
	  $data['citydata'] = $this->Organization_model->get_select_city();
	 $data['section'] = $this->Organization_model->get_section($organization_id);
	 $this->load->view('add_student',$data);
	}
public function student_add()
	{
            $organization_id= $_SESSION['organization_id'];
			
            $this->form_validation->set_rules('txtFirstName', 'txtFirstName', 'required');
            $this->form_validation->set_rules('txtLastName', 'txtLastName', 'required');
            $this->form_validation->set_rules('txtFatherName', 'txtFatherName', 'required');
            $this->form_validation->set_rules('txtMotherName', 'txtMotherName', 'required');
            $this->form_validation->set_rules('txtDob', 'txtDob', 'required');
            $this->form_validation->set_rules('txtGender', 'txtGender', 'required');
            $this->form_validation->set_rules('txtEmail', 'txtEmail', 'required');
            $this->form_validation->set_rules('txtPermanentAddress', 'txtPermanentAddress', 'required');
            $this->form_validation->set_rules('txtMobileNo', 'txtMobileNo', 'required|min_length[10]');
            $this->form_validation->set_rules('txtAdmissionDate', 'txtAdmissionDate', 'required');
            $this->form_validation->set_rules('txtEnrollmentNo', 'txtEnrollmentNo', 'required');
			
	   if($this->form_validation->run() == true)
	   {
		        $txtTitle = $this->input->post('txtTitle');
                $txtFirstName = $this->input->post('txtFirstName');
                $txtMiddleName = $this->input->post('txtMiddleName');
                $txtLastName = $this->input->post('txtLastName');
                $txtFatherName = $this->input->post('txtFatherName');
                $txtMotherName = $this->input->post('txtMotherName');
                $txtDob = $this->input->post('txtDob');
                $txtGender = $this->input->post('txtGender');
                $txtEmail = $this->input->post('txtEmail');
                $txtPermanentAddress = $this->input->post('txtPermanentAddress');
                $txtTemporaryAddress = $this->input->post('txtTemporaryAddress');
                $txtState = $this->input->post('txtState');
                $txtCity = $this->input->post('txtCity');
                $txtPin = $this->input->post('txtPin');
                $txtMobileNo = $this->input->post('txtMobileNo');
                $txtSecondMobileNo = $this->input->post('txtSecondMobileNo');
                $txtBloodGroup = $this->input->post('txtBloodGroup');
                $txtEmergencyContactNo = $this->input->post('txtEmergencyContactNo');
                $txtCaste = $this->input->post('txtCaste');
                $txtAdmissionDate = $this->input->post('txtAdmissionDate');
                $txtEnrollmentNo = $this->input->post('txtEnrollmentNo');
                $txtSessionStart = $this->input->post('txtSessionStart');
                $txtSessionEnd = $this->input->post('txtSessionEnd');
                $txtScholarship = $this->input->post('txtScholarship');
                $txtSsc = $this->input->post('txtSsc');
                $txtHsc = $this->input->post('txtHsc');
                $txtDiploma = $this->input->post('txtDiploma');
                $txtLastClass = $this->input->post('txtLastClass');
                $txtLastClassYear = $this->input->post('txtLastClassYear');
                $txtLastClasschoolName = $this->input->post('txtLastClasschoolName');
                $txtReasonforleaving = $this->input->post('txtReasonforleaving');
                $txtSubCaste = $this->input->post('txtSubCaste');
                $txtReligion = $this->input->post('txtReligion');
                $txtStudentAadharNumber = $this->input->post('txtStudentAadharNumber');
                $txtFatherAadharNumber = $this->input->post('txtFatherAadharNumber');
                $txtMotherAadharNumber = $this->input->post('txtMotherAadharNumber');
                $txtSSSMID = $this->input->post('txtSSSMID');
                $txtFatherOccupation = $this->input->post('txtFatherOccupation');
                $txtBankAccNo = $this->input->post('txtBankAccNo');
                $txtIFSCCode = $this->input->post('txtIFSCCode');
                $txtAccHolderName = $this->input->post('txtAccHolderName');
                $txtGuardianName = $this->input->post('txtGuardianName');
                $txtMotherOccupation = $this->input->post('txtMotherOccupation');
                $txtFatherIncome = $this->input->post('txtFatherIncome');
                $txtMotherIncome = $this->input->post('txtMotherIncome');
                $txtMotherTongue = $this->input->post('txtMotherTongue');
                $txtNoBrothers = $this->input->post('txtNoBrothers');
                $txtNoSisters = $this->input->post('txtNoSisters');
                $txtFatherEducation = $this->input->post('txtFatherEducation');
                $txtMotherEducation = $this->input->post('txtMotherEducation');
                $txtHobbies = $this->input->post('txtHobbies');
                $txtBirthCertificate = $this->input->post('txtBirthCertificate');
                $txtBCIssueDate = $this->input->post('txtBCIssueDate');
                $txtRationCard = $this->input->post('txtRationCard');
                $txtRCIssueDate = $this->input->post('txtRCIssueDate');
                $txtWorkerDiaryNumber = $this->input->post('txtWorkerDiaryNumber');
                $txtWDIssueDate = $this->input->post('txtWDIssueDate');
                $txtDiplomaMarksheets = $this->input->post('txtDiplomaMarksheets');
                $txtDiplomaTC = $this->input->post('txtDiplomaTC');
                $txtMedium = $this->input->post('txtMedium');
                $txtCasteCertificateNumber = $this->input->post('txtCasteCertificateNumber');
                $txtCasteCertificateDate = $this->input->post('txtCasteCertificateDate');
                $txtDomicileCertificate = $this->input->post('txtDomicileCertificate');
                $txtIncomeCertificate = $this->input->post('txtIncomeCertificate');
                $txtBusFacility = $this->input->post('txtBusFacility');
                $txtRTE = $this->input->post('txtRTE');
                $txtCourse = $this->input->post('txtCourse');
                $txtSection = $this->input->post('txtSection');
                //$txtOrganization = $organization_id;
                
                if($txtMiddleName !='')
                {
                $txtFullName = $txtTitle . " " .$txtFirstName . " " . $txtMiddleName . " " . $txtLastName ;
                }
                else
                {
                $txtFullName = $txtTitle . " " .$txtFirstName . " " . $txtLastName ; 
                }
                
		$txtSession = $txtSessionStart . "-" . $txtSessionEnd;		
		//$password=MD5($this->input->post('password'));
			
			
         	 if (!empty($_FILES['student_pic']['name'])){    
        
        $imagename=date("d-m-Y")."-".time();
       //$fileinfo = pathinfo($_FILES['file']['name']);
       //$extension = $fileinfo['extension'];
       $ext = pathinfo($_FILES['student_pic']['name'], PATHINFO_EXTENSION);
       if($ext ==='gif' || $ext ==='jpg' || $ext ==='png' || $ext ==='PNG' ||$ext ==='jpeg')
       {
        $config = array(
        'upload_path'   => './upload/Student_images/',
        'allowed_types' => 'gif|jpg|png|jpeg',
        'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'file_name'     =>$imagename //"criminal_images!".$imagename
         );        
        $this->load->library('upload');
        $this->upload->initialize($config);
                    
        if(!$this->upload->do_upload('student_pic'))
        {
        $error = array('error' => $this->upload->display_errors());
        echo $this->upload->display_errors() ;
        die("student_pic");
        }
        else
        {
        $imageDetailArray = $this->upload->data();
        $fileName = "Student_images/".$imagename. '.' .$ext; // $imageDetailArray['file_name'];
        
        }
       }
        }else {
        $fileName='';
        }
             
			/*
			$d= date('d', strtotime($txtDob));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$day= $f->format($d);
			
			$month = date(' F ', strtotime($txtDob));
			
			$yr= date('Y', strtotime($txtDob));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$year= $f->format($yr);
			
		  $inWord= strtoupper($day.$month.$year);
		  */
			$txtAdmissionYear = date('Y', strtotime($txtAdmissionDate));
			   
			   $user_name_pass = 'Std'.'_'.mt_rand(1000,9999);
            $studentData = array(

                            'student_pic'=>$fileName,
                            's_prefix'=>$txtTitle,
							'first_name'=>$txtFirstName,
                            'middle_name'=>$txtMiddleName,
                            'last_name'=>$txtLastName,
                            'full_name'=>$txtFullName,
                            'fathers_name'=>$txtFatherName,
                            'mothers_name'=>$txtMotherName,
                            's_dob'=>$txtDob,
                            //'s_dob_words'=>$inWord,
                            's_gender'=>$txtGender,
                            'second_mob_no'=>$txtSecondMobileNo,
                            's_mobile_no'=>$txtMobileNo,
                            's_email_id'=>$txtEmail,
                            'permanent_address'=>$txtPermanentAddress,
                            'temporary_address'=>$txtTemporaryAddress, 
                            's_city'=>$txtCity,
                            's_state'=>$txtState,
                            's_pin_code'=>$txtPin,
                            's_blood_group'=>$txtBloodGroup,
                            's_emergency_contact_no'=>$txtEmergencyContactNo,
                            'sub_caste'=>$txtSubCaste,
                            's_caste'=>$txtCaste,
                            'admission_date'=>$txtAdmissionDate,
                            'admission_year'=>$txtAdmissionYear,
                            'enrollment_no'=>$txtEnrollmentNo,
                            'session_start'=>$txtSessionStart,
                            'session_end'=>$txtSessionEnd,
                            'session'=>$txtSession,
                            'scholarship'=>$txtScholarship,
                            'ssc_result'=>$txtSsc,
                            'hsc_result'=>$txtHsc,
                            'diploma'=>$txtDiploma,
				            'Last_Class' => $txtLastClass,
				            'last_class_year' => $txtLastClassYear,
                            'Last_Class_school_Name' =>$txtLastClasschoolName,
                            'Reason_for_leaving' =>$txtReasonforleaving,
                            'Religion' =>$txtReligion,
                            'student_aadhar_number' => $txtStudentAadharNumber,
                            'father_aadhar_number' => $txtFatherAadharNumber,
                            'mother_aadhar_number' => $txtMotherAadharNumber,
                            'SSSMID' => $txtSSSMID,
                            'Father_Occupation' => $txtFatherOccupation,
                            'Bank_Acc_No' => $txtBankAccNo,
                            'IFSC_Code' => $txtIFSCCode,
                            'Acc_Holder_Name' => $txtAccHolderName,
                            'Guardian_Name' => $txtGuardianName,
                            'Mother_Occupation' => $txtMotherOccupation,
                            'Father_Income' => $txtFatherIncome,
                            'Mother_Income' => $txtMotherIncome,
                            'Mother_Tongue' => $txtMotherTongue,
                            'No_Brothers' => $txtNoBrothers,
                            'No_Sisters' => $txtNoSisters,
                            'Father_Education' => $txtFatherEducation,
                            'Mother_Education' => $txtMotherEducation,
                            'Hobbies' => $txtHobbies,
                            'Birth_Certificate' => $txtBirthCertificate,
                            'BC_Issue_Date' => $txtBCIssueDate,
                            'Ration_Card' => $txtRationCard,
                            'RC_Issue_Date' => $txtRCIssueDate,
                            'Worker_Diary_Number' => $txtWorkerDiaryNumber,
                            'WD_Issue_Date' => $txtWDIssueDate,
                            'Diploma_Marksheets' => $txtDiplomaMarksheets,
                            'Diploma_TC' =>$txtDiplomaTC,
                            'Medium' => $txtMedium,
                            'Caste_Certificate_Number' => $txtCasteCertificateNumber,
                            'Caste_Certificate_Date' => $txtCasteCertificateDate,
                            'Domicile_Certificate' => $txtDomicileCertificate,
                            'Income_Certificate' => $txtIncomeCertificate,
                            'Bus_Facility' => $txtBusFacility,
                            'RTE' => $txtRTE,
                            'section_id'=>$txtSection,
                            'course_id'=>$txtCourse,
					        's_active_status'=>'Active',
				            'account_status'=>'Active',
                            'organization_id'=>$organization_id,
                            'user_name'=>$user_name_pass,
                            'pswd'=>$user_name_pass,   
                            //'creation_date'=>date('Y-m-d h:i:s'),
				 
			 );
				$this->session->set_flashdata('message', 'Data Inserted Successfully');
            $this->db->insert('student_tbl',$studentData);
			$stud_last_id =$this->db->insert_id();
			//echo  $dir_last_id;
            $allUsersData = array(
			      'user_id'=>$stud_last_id,
				  'user_type'=>'Student',
				  'user_full_name'=>$txtFullName,
                  'user_name'=>$user_name_pass,
                   'password'=>$user_name_pass,   
				  'user_email_id'=>$txtEmail,
                   'organization_id'=>$organization_id,
				  'active_status'=>'Active',
				  'account_status'=>'Active',
			 );
            $this->db->insert('all_users_tbl',$allUsersData);
		redirect('StudentController/student_list');
            } else {
				$this->session->set_flashdata('message', 'Something went wrong..');
		redirect('StudentController/add_student');
            }
        }
 
public function edit_student($id ='')
	{
		
		 $organization_id= $_SESSION['organization_id'];
		 
		$this->form_validation->set_rules('txtFirstName', 'txtFirstName', 'required');
        
       if($this->form_validation->run() == true){
		   $txtTitle = $this->input->post('txtTitle');
                $txtUserName = $this->input->post('txtUserName');
                $txtPassword = $this->input->post('txtPassword');
                $txtFirstName = $this->input->post('txtFirstName');
                $txtMiddleName = $this->input->post('txtMiddleName');
                $txtLastName = $this->input->post('txtLastName');
                $txtFatherName = $this->input->post('txtFatherName');
                $txtMotherName = $this->input->post('txtMotherName');
                $txtDob = $this->input->post('txtDob');
                $txtGender = $this->input->post('txtGender');
                $txtEmail = $this->input->post('txtEmail');
                $txtPermanentAddress = $this->input->post('txtPermanentAddress');
                $txtTemporaryAddress = $this->input->post('txtTemporaryAddress');
                $txtState = $this->input->post('txtState');
                $txtCity = $this->input->post('txtCity');
                $txtPin = $this->input->post('txtPin');
                $txtMobileNo = $this->input->post('txtMobileNo');
                $txtSecondMobileNo = $this->input->post('txtSecondMobileNo');
                $txtBloodGroup = $this->input->post('txtBloodGroup');
                $txtEmergencyContactNo = $this->input->post('txtEmergencyContactNo');
                $txtCaste = $this->input->post('txtCaste');
                $txtAdmissionDate = $this->input->post('txtAdmissionDate');
                $txtEnrollmentNo = $this->input->post('txtEnrollmentNo');
                $txtSessionStart = $this->input->post('txtSessionStart');
                $txtSessionEnd = $this->input->post('txtSessionEnd');
                $txtScholarship = $this->input->post('txtScholarship');
                $txtSsc = $this->input->post('txtSsc');
                $txtHsc = $this->input->post('txtHsc');
                $txtDiploma = $this->input->post('txtDiploma');
                $txtCourse = $this->input->post('txtCourse');
                $txtLastClass = $this->input->post('txtLastClass');
                $txtLastClassYear = $this->input->post('txtLastClassYear');
                $txtLastClasschoolName = $this->input->post('txtLastClasschoolName');
                $txtReasonforleaving = $this->input->post('txtReasonforleaving');
                $txtSubCaste = $this->input->post('txtSubCaste');
                $txtReligion = $this->input->post('txtReligion');
                $txtStudentAadharNumber = $this->input->post('txtStudentAadharNumber');
                $txtFatherAadharNumber = $this->input->post('txtFatherAadharNumber');
                $txtMotherAadharNumber = $this->input->post('txtMotherAadharNumber');
                $txtSSSMID = $this->input->post('txtSSSMID');
                $txtFatherOccupation = $this->input->post('txtFatherOccupation');
                $txtBankAccNo = $this->input->post('txtBankAccNo');
                $txtIFSCCode = $this->input->post('txtIFSCCode');
                $txtAccHolderName = $this->input->post('txtAccHolderName');
                $txtGuardianName = $this->input->post('txtGuardianName');
                $txtMotherOccupation = $this->input->post('txtMotherOccupation');
                $txtFatherIncome = $this->input->post('txtFatherIncome');
                $txtMotherIncome = $this->input->post('txtMotherIncome');
                $txtMotherTongue = $this->input->post('txtMotherTongue');
                $txtNoBrothers = $this->input->post('txtNoBrothers');
                $txtNoSisters = $this->input->post('txtNoSisters');
                $txtFatherEducation = $this->input->post('txtFatherEducation');
                $txtMotherEducation = $this->input->post('txtMotherEducation');
                $txtHobbies = $this->input->post('txtHobbies');
                $txtBirthCertificate = $this->input->post('txtBirthCertificate');
                $txtBCIssueDate = $this->input->post('txtBCIssueDate');
                $txtRationCard = $this->input->post('txtRationCard');
                $txtRCIssueDate = $this->input->post('txtRCIssueDate');
                $txtWorkerDiaryNumber = $this->input->post('txtWorkerDiaryNumber');
                $txtWDIssueDate = $this->input->post('txtWDIssueDate');
                $txtDiplomaMarksheets = $this->input->post('txtDiplomaMarksheets');
                $txtDiplomaTC = $this->input->post('txtDiplomaTC');
                $txtMedium = $this->input->post('txtMedium');
                $txtCasteCertificateNumber = $this->input->post('txtCasteCertificateNumber');
                $txtCasteCertificateDate = $this->input->post('txtCasteCertificateDate');
                $txtDomicileCertificate = $this->input->post('txtDomicileCertificate');
                $txtIncomeCertificate = $this->input->post('txtIncomeCertificate');
                $txtBusFacility = $this->input->post('txtBusFacility');
                $txtRTE = $this->input->post('txtRTE');
                $txtSection = $this->input->post('txtSection');
                 $hdnid = $this->input->post('hdnid');
				
		/*	$d= date('d', strtotime($txtDob));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$day= $f->format($d);
			
			$month = date(' F ', strtotime($txtDob));
			
			$yr= date('Y', strtotime($txtDob));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$year= $f->format($yr);
			
		  $inWord= strtoupper($day.$month.$year);
		  */
                if($txtMiddleName !='')
                {
                $txtFullName = $txtTitle . " " .$txtFirstName . " " . $txtMiddleName . " " . $txtLastName ;
                }
                else
                {
                $txtFullName = $txtTitle . " " .$txtFirstName . " " . $txtLastName ; 
                }
							
				 if($this->input->post('student_pic')=='')
				 {
                $imagename=date("d-m-Y")."-".time();
				   
				   
                if (!empty($_FILES['student_pic']['name'])){			
                    $config = array(
                    'upload_path'   => './upload/',
                    'allowed_types' => 'gif|jpg|png|jpeg',
                    'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)    
                    'file_name'     =>"Student_images/".$imagename
                    );


                $this->load->library('upload');
                $this->upload->initialize($config);

                if(!$this->upload->do_upload('student_pic')) 
                { 
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors() ;
                die("student_pic");
                }
                else
                {
                $imageDetailArray = $this->upload->data();
                $fileName =  $imageDetailArray['file_name'];
                }
				
		$txtSession = $txtSessionStart . "-" . $txtSessionEnd;		
			$txtAdmissionYear = date('Y', strtotime($txtAdmissionDate));
				
				$editstudentData = array(
                            
                            'user_name'=>$txtUserName,
                            'pswd'=>$txtPassword,
                            'student_pic'=>$fileName,
                            's_prefix'=>$txtTitle,
							'first_name'=>$txtFirstName,
                            'middle_name'=>$txtMiddleName,
                            'last_name'=>$txtLastName,
                            'full_name'=>$txtFullName,
                            'fathers_name'=>$txtFatherName,
                            'mothers_name'=>$txtMotherName,
                            's_dob'=>$txtDob,
                            //'s_dob_words'=>$inWord,
                            's_gender'=>$txtGender,
                            'second_mob_no'=>$txtSecondMobileNo,
                            's_mobile_no'=>$txtMobileNo,
                            's_email_id'=>$txtEmail,
                            'permanent_address'=>$txtPermanentAddress,
                            'temporary_address'=>$txtTemporaryAddress, 
                            's_city'=>$txtCity,
                            's_state'=>$txtState,
                            's_pin_code'=>$txtPin,
                            's_blood_group'=>$txtBloodGroup,
                            's_emergency_contact_no'=>$txtEmergencyContactNo,
                            'sub_caste'=>$txtSubCaste,
                            's_caste'=>$txtCaste,
                            'admission_date'=>$txtAdmissionDate,
                            'admission_year'=>$txtAdmissionYear,
                            'enrollment_no'=>$txtEnrollmentNo,
                            'session_start'=>$txtSessionStart,
                            'session_end'=>$txtSessionEnd,
                            'session'=>$txtSession,
                            'scholarship'=>$txtScholarship,
                            'ssc_result'=>$txtSsc,
                            'hsc_result'=>$txtHsc,
                            'diploma'=>$txtDiploma,
				            'Last_Class' => $txtLastClass,
				            'last_class_year' => $txtLastClassYear,
                            'Last_Class_school_Name' =>$txtLastClasschoolName,
                            'Reason_for_leaving' =>$txtReasonforleaving,
                            'Religion' =>$txtReligion,
                            'student_aadhar_number' => $txtStudentAadharNumber,
                            'father_aadhar_number' => $txtFatherAadharNumber,
                            'mother_aadhar_number' => $txtMotherAadharNumber,
                            'SSSMID' => $txtSSSMID,
                            'Father_Occupation' => $txtFatherOccupation,
                            'Bank_Acc_No' => $txtBankAccNo,
                            'IFSC_Code' => $txtIFSCCode,
                            'Acc_Holder_Name' => $txtAccHolderName,
                            'Guardian_Name' => $txtGuardianName,
                            'Mother_Occupation' => $txtMotherOccupation,
                            'Father_Income' => $txtFatherIncome,
                            'Mother_Income' => $txtMotherIncome,
                            'Mother_Tongue' => $txtMotherTongue,
                            'No_Brothers' => $txtNoBrothers,
                            'No_Sisters' => $txtNoSisters,
                            'Father_Education' => $txtFatherEducation,
                            'Mother_Education' => $txtMotherEducation,
                            'Hobbies' => $txtHobbies,
                            'Birth_Certificate' => $txtBirthCertificate,
                            'BC_Issue_Date' => $txtBCIssueDate,
                            'Ration_Card' => $txtRationCard,
                            'RC_Issue_Date' => $txtRCIssueDate,
                            'Worker_Diary_Number' => $txtWorkerDiaryNumber,
                            'WD_Issue_Date' => $txtWDIssueDate,
                            'Diploma_Marksheets' => $txtDiplomaMarksheets,
                            'Diploma_TC' =>$txtDiplomaTC,
                            'Medium' => $txtMedium,
                            'Caste_Certificate_Number' => $txtCasteCertificateNumber,
                            'Caste_Certificate_Date' => $txtCasteCertificateDate,
                            'Domicile_Certificate' => $txtDomicileCertificate,
                            'Income_Certificate' => $txtIncomeCertificate,
                            'Bus_Facility' => $txtBusFacility,
                            'RTE' => $txtRTE,
                            'section_id'=>$txtSection,
                            'course_id'=>$txtCourse,
                            'organization_id'=>$organization_id,
				   ); 
                }else {
		$txtSession = $txtSessionStart . "-" . $txtSessionEnd;		
			$txtAdmissionYear = date('Y', strtotime($txtAdmissionDate));
			
					$editstudentData = array(
                            'user_name'=>$txtUserName,
                            'pswd'=>$txtPassword,
                            's_prefix'=>$txtTitle,
							'first_name'=>$txtFirstName,
                            'middle_name'=>$txtMiddleName,
                            'last_name'=>$txtLastName,
                            'full_name'=>$txtFullName,
                            'fathers_name'=>$txtFatherName,
                            'mothers_name'=>$txtMotherName,
                            's_dob'=>$txtDob,
                            //'s_dob_words'=>$inWord,
                            's_gender'=>$txtGender,
                            'second_mob_no'=>$txtSecondMobileNo,
                            's_mobile_no'=>$txtMobileNo,
                            's_email_id'=>$txtEmail,
                            'permanent_address'=>$txtPermanentAddress,
                            'temporary_address'=>$txtTemporaryAddress, 
                            's_city'=>$txtCity,
                            's_state'=>$txtState,
                            's_pin_code'=>$txtPin,
                            's_blood_group'=>$txtBloodGroup,
                            's_emergency_contact_no'=>$txtEmergencyContactNo,
                            'sub_caste'=>$txtSubCaste,
                            's_caste'=>$txtCaste,
                            'admission_date'=>$txtAdmissionDate,
                            'admission_year'=>$txtAdmissionYear,
                            'enrollment_no'=>$txtEnrollmentNo,
                            'session_start'=>$txtSessionStart,
                            'session_end'=>$txtSessionEnd,
                            'session'=>$txtSession,
                            'scholarship'=>$txtScholarship,
                            'ssc_result'=>$txtSsc,
                            'hsc_result'=>$txtHsc,
                            'diploma'=>$txtDiploma,
				            'Last_Class' => $txtLastClass,
				            'last_class_year' => $txtLastClassYear,
                            'Last_Class_school_Name' =>$txtLastClasschoolName,
                            'Reason_for_leaving' =>$txtReasonforleaving,
                            'Religion' =>$txtReligion,
                            'student_aadhar_number' => $txtStudentAadharNumber,
                            'father_aadhar_number' => $txtFatherAadharNumber,
                            'mother_aadhar_number' => $txtMotherAadharNumber,
                            'SSSMID' => $txtSSSMID,
                            'Father_Occupation' => $txtFatherOccupation,
                            'Bank_Acc_No' => $txtBankAccNo,
                            'IFSC_Code' => $txtIFSCCode,
                            'Acc_Holder_Name' => $txtAccHolderName,
                            'Guardian_Name' => $txtGuardianName,
                            'Mother_Occupation' => $txtMotherOccupation,
                            'Father_Income' => $txtFatherIncome,
                            'Mother_Income' => $txtMotherIncome,
                            'Mother_Tongue' => $txtMotherTongue,
                            'No_Brothers' => $txtNoBrothers,
                            'No_Sisters' => $txtNoSisters,
                            'Father_Education' => $txtFatherEducation,
                            'Mother_Education' => $txtMotherEducation,
                            'Hobbies' => $txtHobbies,
                            'Birth_Certificate' => $txtBirthCertificate,
                            'BC_Issue_Date' => $txtBCIssueDate,
                            'Ration_Card' => $txtRationCard,
                            'RC_Issue_Date' => $txtRCIssueDate,
                            'Worker_Diary_Number' => $txtWorkerDiaryNumber,
                            'WD_Issue_Date' => $txtWDIssueDate,
                            'Diploma_Marksheets' => $txtDiplomaMarksheets,
                            'Diploma_TC' =>$txtDiplomaTC,
                            'Medium' => $txtMedium,
                            'Caste_Certificate_Number' => $txtCasteCertificateNumber,
                            'Caste_Certificate_Date' => $txtCasteCertificateDate,
                            'Domicile_Certificate' => $txtDomicileCertificate,
                            'Income_Certificate' => $txtIncomeCertificate,
                            'Bus_Facility' => $txtBusFacility,
                            'RTE' => $txtRTE,
                            'section_id'=>$txtSection,
                            'course_id'=>$txtCourse,
                            'organization_id'=>$organization_id,
				   ); 
                }
				 }
				 
	
	 $this->db->update('student_tbl',$editstudentData,array('id'=>$hdnid ));

            $allUsersData = array(
				  'user_type'=>'Student',
				  'user_name'=>$txtUserName,
				  'password'=>$txtPassword,
				  'user_full_name'=>$txtFullName,
				  'user_email_id'=>$txtEmail,
				  'active_status'=>'Active',
				  'account_status'=>'Active',
				  'organization_id'=>$organization_id,
			 );
            $this->db->update('all_users_tbl',$allUsersData,array('user_id'=>$hdnid, 'user_type'=>'Student'));
          redirect ('StudentController/student_list');	 
	 } 
	   
	   else{
		$organization_id= $_SESSION['organization_id'];
	 $data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id);
	 $data['statedata'] = $this->Organization_model->get_select_state();
	  $data['citydata'] = $this->Organization_model->get_select_city();
	 $data['section'] = $this->Organization_model->get_section($organization_id);
           $data['studenteditdata'] = $this->Organization_model->get_edit_student($id) ;
		   $this->load->view('edit_student', $data);	}
	}		   
		 
public function view_student($id ='')
	{
		 $data['studenteditdata'] = $this->Organization_model->get_edit_student($id) ;
		   $this->load->view('view_student', $data);	
		   }
		     
 public function delete_student($student_id='')
{
      $student_id ;
			 // echo $this->db->update('student_tbl',$data,array('id'=>$student_id));
			// die();
	       $data = array(
           's_active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
			
           $this->db->update('student_tbl',$data,array('id'=>$student_id));
		   
		    $data = array(
           'active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('all_users_tbl',$data,array('user_id'=>$student_id, 'user_type'=>'Student'));
		   redirect ('StudentController/student_list');
		   
		   

}

public function mark_as_active($student_id='')
{
             
           $data = array(
           's_active_status'=>'Active',
           'account_status'=>'Active',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('student_tbl',$data,array('id'=>$student_id));
		   
           $data = array(
           'active_status'=>'Active',
		   'account_status'=>'Active',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('all_users_tbl',$data,array('user_id'=>$student_id, 'user_type'=>'Student'));
		   redirect ('StudentController/report_student');

}   

public function mark_as_inactive($student_id='')
{
             
           $data = array(
           's_active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('student_tbl',$data,array('id'=>$student_id));
		   
           $data = array(
           'active_status'=>'Inactive',
		   'account_status'=>'Inactive',
           'creation_date'=>date('Y-m-d H:i:s')
            );
           $this->db->update('all_users_tbl',$data,array('user_id'=>$student_id, 'user_type'=>'Student'));
		   redirect ('StudentController/report_student');

}

public function add_csvimport()
	{
	 $organization_id= $_SESSION['organization_id'];
	 $data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id);
	 $data['section'] = $this->Organization_model->get_section($organization_id);
     $this->load->view('excelimport', $data);
	}
	
public function import()
        {
            $organization_id= $_SESSION['organization_id'];	
			$this->form_validation->set_rules('txtCourse', 'txtCourse', 'required');
			
	   if($this->form_validation->run() == true)
	   {
  if(isset($_POST["import"]))
    {
		
                $txtCourse = $this->input->post('txtCourse');
                $txtDepartment = $this->input->post('txtDepartment');
                $txtSection = $this->input->post('txtSection');
                $txtSemester = $this->input->post('txtSemester');
				
        $filename=$_FILES["file"]["tmp_name"];
        if($_FILES["file"]["size"] > 0)
          {
            $file = fopen($filename, "r");
			fgetcsv($file);
             while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
             {
			   $user_name_pass = 'Std'.'_'.mt_rand(1000,9999);
			
			/*$d= date('d', strtotime($importdata[6]));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$day= $f->format($d);
			
			$month = date(' F ', strtotime($importdata[6]));
			
			$yr= date('Y', strtotime($importdata[6]));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$year= $f->format($yr);
			
		  $inWord= strtoupper($day.$month.$year);
			   */
if($importdata[7]=='M'||$importdata[7]=='Male'){
$gender= 'Male';
}
elseif($importdata[7]=='F'||$importdata[7]=='Female'){
$gender= 'Female';
}
else{
$gender= 'Others';
}
                    $data = array(
					
					
's_prefix' => $importdata[0],
'first_name' => $importdata[1],
'middle_name' => $importdata[2],
'last_name' => $importdata[3],
'full_name' => $importdata[0]." ".$importdata[1]." ".$importdata[2]." ".$importdata[3],
'fathers_name' => $importdata[4],
'mothers_name' => $importdata[5],
's_dob' => date('Y-m-d', strtotime($importdata[6])),
//'s_dob_words' => $inWord,
's_gender' => $gender,
's_mobile_no' => $importdata[8],
's_email_id' => $importdata[9],
'permanent_address' => $importdata[10],
'temporary_address' => $importdata[11],
's_city' => $importdata[12],
's_state' => $importdata[13],
's_pin_code' => $importdata[14],
's_blood_group' => $importdata[15],
's_emergency_contact_no' => $importdata[16],
's_caste' => $importdata[17],
'admission_date' => date('Y-m-d', strtotime($importdata[18])),
'enrollment_no' => $importdata[19],
'session_start' => $importdata[20],
'session_end' => $importdata[21],
'session' => $importdata[20]."-".$importdata[21],
'scholarship' => $importdata[22],
'ssc_result' => $importdata[23],
'hsc_result' => $importdata[24],
'diploma' => $importdata[25],
'Last_Class' => $importdata[26],
'Last_Class_school_Name' => $importdata[27],
'Reason_for_leaving' => $importdata[28],
'Religion' => $importdata[29],
'Student_Aadhar_Number' => $importdata[30],
'Father_Aadhar_Number' => $importdata[31],
'Mother_Aadhar_Number' => $importdata[32],
'SSSMID' => $importdata[33],
'Father_Occupation' => $importdata[34],
'Bank_Acc_No' => $importdata[35],
'IFSC_Code' => $importdata[36],
'Acc_Holder_Name' => $importdata[37],
'Guardian_Name' => $importdata[38],
'Mother_Occupation' => $importdata[39],
'Father_Income' => $importdata[40],
'Mother_Income' => $importdata[41],
'Mother_Tongue' => $importdata[42],
'No_Brothers' => $importdata[43],
'No_Sisters' => $importdata[44],
'Father_Education' => $importdata[45],
'Mother_Education' => $importdata[46],
'Hobbies' => $importdata[47],
'Birth_Certificate' => $importdata[48],
'BC_Issue_Date' =>date('Y-m-d', strtotime($importdata[49])),
'Ration_Card' => $importdata[50],
'RC_Issue_Date' => date('Y-m-d', strtotime($importdata[51])),
'Worker_Diary_Number' => $importdata[52],
'WD_Issue_Date' => date('Y-m-d', strtotime($importdata[53])),
'Diploma_Marksheets' => $importdata[54],
'Diploma_TC' => $importdata[55],
'Medium' => $importdata[56],
'Caste_Certificate_Number' => $importdata[57],
'Caste_Certificate_Date' => date('Y-m-d', strtotime($importdata[58])),
'Domicile_Certificate' => $importdata[59],
'Income_Certificate' => $importdata[60],
'section_id'=>$txtSection,
'sem_id'=>$txtSemester,
'course_id'=>$txtCourse,
'department_id'=>$txtDepartment,
's_active_status'=>'Active',
'account_status'=>'Active',
//'hod_id'=>$txtHod,
//'director_id'=>$txtDirector,
'organization_id'=>$organization_id,
'user_name'=>$user_name_pass,
'pswd'=>$user_name_pass,   
                        );
				//print_r($data);die();		
          //   $insert = $this->Welcome_model->insertCSV($data);
             // $this->db->customer_register('import',$data);
             $this->db->insert('student_tbl',$data);
			$stud_last_id =$this->db->insert_id();
			//echo  $dir_last_id;
            $allUsersData = array(
			      'user_id'=>$stud_last_id,
				  'user_type'=>'Student',
				  'user_full_name'=>$importdata[0]+" "+$importdata[1]+" "+$importdata[2]+" "+$importdata[3],
                  'user_name'=>$user_name_pass,
                   'password'=>$user_name_pass,   
				  'user_email_id'=>$importdata[9],
                   'organization_id'=>$organization_id,
				  'active_status'=>'Active',
				  'account_status'=>'Active',
			 );
            $this->db->insert('all_users_tbl',$allUsersData);
             }                    
            fclose($file);
			$this->session->set_flashdata('message', 'Data are imported successfully..');
				redirect('StudentController/student_list');
          }else{
			$this->session->set_flashdata('message', 'Something went wrong..');
			redirect('StudentController/add_csvimport');
		}
	   }
	   }else{
			$this->session->set_flashdata('message', 'Something went wrong..');
			redirect('StudentController/add_csvimport');
		}
}

public function report_student()
	{
		 $organization_id= $_SESSION['organization_id'];
	 $data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id);
	 $data['section'] = $this->Organization_model->get_section($organization_id);
	     $data['studentdata'] = $this->Organization_model->get_student($organization_id);
         $this->load->view('student_report', $data);
	}	  
	
public function report_student_list()
	{
		 $organization_id= $_SESSION['organization_id'];
		 $txtCourse = $this->input->post('txtCourse');
		 $txtSection = $this->input->post('txtSection');
		 echo $txtName = $this->input->post('txtName');
		 $txtStatus = $this->input->post('txtStatus');

	       $data['activeticketproprity'] = $this->Organization_model->get_select_course($organization_id);
	       $data['studentdata'] = $this->Organization_model->get_student($organization_id);
	       $data['studentresultData'] =  $this->Organization_model->student_result_data($txtCourse, $txtSection, $txtName, $txtStatus, $organization_id);
           $this->load->view('student_report', $data);
	}	   
}
?>