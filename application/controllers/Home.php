<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	
		//$this->load->model('Login_model');
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
public function __construct() {
parent::__construct();
// Load form helper library
$this->load->helper('form');
// Load form validation library
$this->load->library('form_validation');
// Load session library
$this->load->library('session');
// Load database
$this->load->model('Login_model');
$this->load->model('Main_model');
$this->load->model('booking_model');
}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	public function Login()
	{
	$this->form_validation->set_rules('username', 'username', 'required');
	$this->form_validation->set_rules('password', 'password', 'required');
        
	 if ($this->form_validation->run() == true){	
	         $username=$this->input->post('username');
             $password = $this->input->post('password');
                
		 	//$password = md5(trim($this->input->post('txtPassword')));
		
			$return=$this->Login_model->login($username,$password);
			
            if($return['flag']==1){
		
	                   $data = array(
						'user_id'=>$return['resultData']['id'],
						'name'=>$return['resultData']['name'],
						'email_id'=>$return['resultData']['email_id'],
                        'mobile_no'=> $return['resultData']['mobile_no']
                 );
				 $this->session->set_userdata($data);
				 $this->session->set_flashdata('message','Loggedin successfully');
		  } else {
				$this->session->set_flashdata('message','Wrong Username Or Password');
			 }
				redirect('home','return');
          }
       }
	
 public function ForgotPassword()
   {
	  
           $email = $this->input->post('email');
	 	$data['emaildata'] = $this->Login_model->ForgotPassword($email);
	    if($data['emaildata']['flag'])
	    {
			$this->load->view('reset_forgotpassword', $data);
		}
		else
		{  
			$this->session->set_flashdata('flash_message','Email not Exist!');
          	redirect('Welcome');
		}
    }
		
		public function forgotpassword_reset()
   {
		$this->form_validation->set_rules('newpassword', 'newpassword', 'required');
		$this->form_validation->set_rules('conformPassword', 'conformPassword', 'required');
        if($this->form_validation->run() == true)
        {
			$newpassword = $this->input->post('newpassword');
			$conformPassword = $this->input->post('conformPassword');
            $hdnid = $this->input->post('hdnid');
            $hdnemail = $this->input->post('hdnemail');
				 
			 $editData = array(
                 'password'=>$newpassword,
				   ); 
			if($newpassword==$conformPassword) 	
			{
	 			$this->db->update('all_users_tbl',$editData,array('id'=>$hdnid ));
				$this->session->set_flashdata('flash_message','Password Changed Successfully! Please login to continue.');
         		redirect ('Welcome');
			}
			else
			{
				$data['emaildata'] = $this->Login_model->ForgotPassword($hdnemail);
				$this->session->set_flashdata('flash_message','Please check password! Try Again');
				$this->load->view('reset_forgotpassword', $data);
		    	//redirect ('reset_forgotpassword');
			}
		}  
		else
		{
			$this->session->set_flashdata('flash_message','Something Went Wrong!');
		    $this->load->view('Welcome');	
		}
    }
	
	
	public function Register()
	{
		$this->load->view('register');
	}
	
	public function Registeration()
	{
		
		$this->form_validation->set_rules('usname', 'usname', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
        if($this->form_validation->run() == true)
        {
			$usname = $this->input->post('usname');
			$email = $this->input->post('email');
            $Mobile = $this->input->post('Mobile');
            $Gender = $this->input->post('Gender');
            $password = $this->input->post('password');
				 
			 $newUserData = array(
                 'name'=>$usname,
                 'email_id'=>$email,
                 'mobile_no'=>$Mobile,
                 'gender'=>$Gender,
                 'password'=>$password,
                 'status'=>'Unverified',
				   ); 
				$this->db->insert('user',$newUserData);
				
         $to = $email;
         $subject = "Email Verification by FYMIE";
         
         $message = "<b>Thankyou for registering with FYMIE.</b>";
         $message .= "<h1></h1>";
         
         $header = "From:bhavesh@fymie.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
				$this->session->set_flashdata('message','Registered Successfully you can verify and Login');
		    	redirect ('home');
		}  
		else
		{
			$this->session->set_flashdata('message','Something Went Wrong!');
		    $this->load->view('home');	
		}
	}
	public function Subscribe()
	{
		
		$this->form_validation->set_rules('email_id', 'email_id', 'required');
        if($this->form_validation->run() == true)
        {
			$email_id = $this->input->post('email_id');
			$lname = $this->input->post('lname');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
				
			 $newSubscribe = array(
                 'email'=>$email_id,
				   ); 
				$this->db->insert('new_subscribe',$newSubscribe);
				
				$this->session->set_flashdata('message','Subscribe Successfully');
		    	redirect('home');
		}  
		else
		{
			$this->session->set_flashdata('message','Something Went Wrong!');
		    $this->load->view('home');	
		}
	}
	public function Contact()
	{
		
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('lname', 'lname', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
        if($this->form_validation->run() == true)
        {
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
				
			 $newContact = array(
                 'first_name'=>$fname,
                 'last_name'=>$lname,
                 'mobile_no'=>$phone,
                 'email_id'=>$email,
                 'message'=>$message,
				   ); 
				$this->db->insert('new_contact',$newContact);
				
				$this->session->set_flashdata('message','Message Sent Successfully');
		    	redirect ('home');
		}  
		else
		{
			$this->session->set_flashdata('message','Something Went Wrong!');
		    $this->load->view('home');	
		}
	}
	
	
	
}