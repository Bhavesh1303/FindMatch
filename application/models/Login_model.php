<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
	function __construct() {
		
	}
	function login($username,$password){
		$sql="SELECT * FROM `user` WHERE email_id ='".$username."' AND password ='".$password."'  ";//AND status='Verified' 
		$query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1){
			$data['flag']=1;
			$data['resultData']=$query->row_array();
		    return($data);
		} else {   
		 	$data['flag']=0;
		    return($data);
		}
	}
	
    function ForgotPassword($email)
    {
        $sql="SELECT * FROM `all_users_tbl` Where  user_email_id = '".$email."'  ORDER BY id ASC";
        $query = $this->db->query($sql);
        $count=$query->num_rows();
        if($count>=1)
        {
            $data['flag']=1;
            $data['emaildata']=$query->result_array();
            return($data);
        }
        else
        {
            $data['flag']=0;
            return($data);
        }   
    }
}