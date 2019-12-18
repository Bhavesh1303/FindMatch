<?php defined('BASEPATH') OR exit('No direct script access allowed');
class booking_model extends CI_Model{
	function __construct() {
        parent::__construct();
       
    }  
//------------------- Event Name--------------------------------------------------
function get_event_name(){
	$sql="SELECT * FROM `events` ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['eventData']=$query->result_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
	
//------------------- Event Details--------------------------------------------------
function get_event_by_id($event_id){
	$sql="SELECT * FROM `events` WHERE id='".$event_id."' ";
        $query = $this->db->query($sql);
		$count=$query->num_rows();
		if($count>=1)
		{
			$data['flag']=1;
			$data['specificEventData']=$query->row_array();
			return($data);
		}
		else
		{
			$data['flag']=0;
			return($data);
		}   
    }
}