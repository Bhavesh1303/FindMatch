<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Main_model extends CI_Model{
	function __construct() {
        parent::__construct();
		$this->load->library('email');
       
    }  
//------------------- User Name--------------------------------------------------
function get_user_name($user_id){
	$sql="SELECT * FROM `user` where id='".$user_id."'";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['userNameData']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
	}
	
	//Email Verification
 function sendVerificatinEmail($email,$verificationText){
  
	$config = Array(
	   'protocol' => 'smtp',
	   'smtp_host' => '',
	   'smtp_port' => 80,
	   'smtp_user' => 'fymie.events@gmail.com', // change it to yours
	   'smtp_pass' => 'bhaveshdarshan', // change it to yours
	   'mailtype' => 'html',
	   'charset' => 'iso-8859-1',
	   'wordwrap' => TRUE
	);
	 
	$this->load->library('email', $config);
	$this->email->set_newline("\r\n");
	$this->email->from('fymie.events@gmail.com', "Admin Team");
	$this->email->to($email);  
	$this->email->subject("Email Verification");
	$this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n ".base_url()."/Home/verify/".$verificationText."\n"."\n\nThanks\nAdmin Team");
	$this->email->send();
   }

 function verifyEmailAddress($verificationcode){  
	$sql = "update user set status='Verified' WHERE email_verification_code=?";
	$this->db->query($sql, array($verificationcode));
	return $this->db->affected_rows(); 
   }

   
//-------------------User Intrest --------------------------------------------------
function get_user_interest($user_id){
	$sql="SELECT * FROM `interest_tbl` where user_id='".$user_id."' order by id desc";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['userInterestData']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
	}
}