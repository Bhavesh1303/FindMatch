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
	
	//------------------- Event Details--------------------------------------------------
	function get_booked_event($user_id){
		$sql="SELECT * FROM `event_booked`  inner join `events` on event_booked.event_id=events.id where event_booked.user_id ='".$user_id."' ";
			$query = $this->db->query($sql);
			$count=$query->num_rows();
			if($count>=1)
			{
				$data['flag']=1;
				$data['bookedEventData']=$query->result_array();
				return($data);
			}
			else
			{
				$data['flag']=0;
				return($data);
			}   
		}
		//------------------- check booking of event--------------------------------------------------
		function check_booking($event_id,$user_id){
			$sql="SELECT * FROM `event_booked` WHERE event_id='".$event_id."' and user_id='".$user_id."' and payment='No' ";
				$query = $this->db->query($sql);
				$count=$query->num_rows();
				if($count>=1)
				{
					$data['flag']=1;
					$data['checkBookData']=$query->row_array();
					return($data);
				}
				else
				{
					$data['flag']=0;
					return($data);
				}   
			}
}