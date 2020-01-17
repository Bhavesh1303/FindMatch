<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking extends CI_Controller {
	
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
	
	public function event_detail($id ='')
	{
		$data['specificEventData'] = $this->booking_model->get_event_by_id($id) ;
		$this->load->view('event', $data);	
	}
	
	public function add_event()
	{
		$this->load->view('add_event');
	}
	
	
	public function events_add()
	{
		
		$this->form_validation->set_rules('ename', 'ename', 'required');
		$this->form_validation->set_rules('edate', 'edate', 'required');
		$this->form_validation->set_rules('edesc', 'edesc', 'required');
		$this->form_validation->set_rules('eprice', 'eprice', 'required');
		//$this->form_validation->set_rules('userpic', 'userpic', 'required');
        if($this->form_validation->run() == true)
        {
			$ename = $this->input->post('ename');
			$edate = $this->input->post('edate');
            $edesc = $this->input->post('edesc');
            $eprice = $this->input->post('eprice');
            //$ephoto = $this->input->post('userpic');
		if (!empty($_FILES['userpic']['name'])){    
        
        $imagename=date("d-m-Y")."-".time();
       //$fileinfo = pathinfo($_FILES['file']['name']);
       //$extension = $fileinfo['extension'];
       $ext = pathinfo($_FILES['userpic']['name'], PATHINFO_EXTENSION);
       if($ext ==='gif' || $ext ==='jpg' || $ext ==='png' || $ext ==='PNG' ||$ext ==='jpeg')
       {
        $config = array(
        'upload_path'   => './upload/',
        'allowed_types' => 'gif|jpg|png|jpeg',
        'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'file_name'     =>$imagename //"criminal_images!".$imagename
         );        
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userpic')) {
            $error = array('error' => $this->upload->display_errors()); 
			echo $this->upload->display_errors() ;
        die("userpic");
         }
        else
        {
        $imageDetailArray = $this->upload->data();
        $fileName = "Users_image/".$imagename. '.' .$ext; // $imageDetailArray['file_name'];
        
        }
       }
        }else {
        $fileName='';
        }	
			 $newEventData = array(
                 'e_name'=>$ename,
                 'e_date'=>$edate,
                 'e_desc'=>$edesc,
                 'e_price'=>$eprice,
                 'e_photo'=>$fileName,
				   ); 
				   //print_r($newEventData);
				   //die();
				$this->db->insert('events',$newEventData);
				$this->session->set_flashdata('message','Successfully Added');
		    	redirect('home');
		}  
		else
		{
			$this->session->set_flashdata('message','Something Went Wrong!');
		    $this->load->view('home');	
		}
	}
	
	public function payment()
	{
		
		$this->form_validation->set_rules('event_id', 'event_id', 'required');
		$this->form_validation->set_rules('user_id', 'user_id', 'required');
		
        if($this->form_validation->run() == true)
        {
			$event_id = $this->input->post('event_id');
			$user_id = $this->input->post('user_id');
			
			 $eventBookData = array(
                 'event_id'=>$event_id,
                 'user_id'=>$user_id,
				   ); 
			
			$booking_check= $this->booking_model->check_booking($event_id,$user_id);
			if($booking_check['flag']==0)
				$this->db->insert('event_booked',$eventBookData);
				$this->session->set_flashdata('message','Event Booked Please Pay for Confirmation');
				$data['event']=$event_id;
				$this->load->view('payment',$data);
		}  
		else
		{
			$this->session->set_flashdata('message','Something Went Wrong!');
		    $this->load->view('home');	
		}
	}
	
	public function recipt()
	{
		$event_id = $this->input->post('event_id');
		$price = $this->input->post('price');

		$data['reciptData'] = array(
			'event_id'=>$event_id,
			'price'=>$price,
			  ); 
		
		$this->load->view('recipt',$data);
	}
	
	
}