<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Main_model extends CI_Model{
	function __construct() {
        parent::__construct();
       
    }  
//------------------- User Name--------------------------------------------------
function get_user_name($user_id){
	$sql="SELECT * FROM `user` where id='".$user_id."'";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['userNameData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
}