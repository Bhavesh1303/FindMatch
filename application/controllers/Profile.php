<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
	
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
	public function show_profile()
	{
		$this->load->view('profile.php');
	}

	public function interest_form()
	{
		$user_id=$_SESSION['user_id'];
		if($this->input->post('Reading')=='1')
		$Reading = $this->input->post('Reading');
		else
		$Reading = '0';
		if($this->input->post('Movies')=='1')
		$Movies = $this->input->post('Movies');
		else
		$Movies = '0';
		if($this->input->post('Outing')=='1')
		$Outing = $this->input->post('Outing');
		else
		$Outing = '0';
		if($this->input->post('Clubing')=='1')
		$Clubing = $this->input->post('Clubing');
		else
		$Clubing = '0';
		if($this->input->post('Painting')=='1')
		$Painting = $this->input->post('Painting');
		else
		$Painting = '0';
		if($this->input->post('Music')=='1')
		$Music = $this->input->post('Music');
		else
		$Music = '0';
		if($this->input->post('Adventure')=='1')
		$Adventure = $this->input->post('Adventure');
		else
		$Adventure = '0';
		if($this->input->post('Gaming')=='1')
		$Gaming = $this->input->post('Gaming');
		else
		$Gaming = '0';
		if($this->input->post('Sports')=='1')
		$Sports = $this->input->post('Sports');
		else
		$Sports = '0';
		if($this->input->post('DIYs')=='1')
		$DIYs = $this->input->post('DIYs');
		else
		$DIYs = '0';
		if($this->input->post('Studying')=='1')
		$Studying = $this->input->post('Studying');
		else
		$Studying = '0';
		if($this->input->post('Cooking')=='1')
		$Cooking = $this->input->post('Cooking');
		else
		$Cooking = '0';
		$total_count=$Reading+$Movies+$Outing+$Clubing+$Painting+$Music+$Adventure+$Gaming+$Sports+$DIYs+$Studying+$Cooking;
		$interestData = array(
			'user_id'=>$user_id,
			'reading'=>$Reading,
			'movies'=>$Movies,
			'outing'=>$Outing,
			'clubing'=>$Clubing,
			'painting'=>$Painting,
			'music'=>$Music,
			'adventure'=>$Adventure,
			'gaming'=>$Gaming,
			'sports'=>$Sports,
			'DIYs'=>$DIYs,
			'studying'=>$Studying,
			'cooking'=>$Cooking,
			'total'=>$total_count,
			  ); 
		   $this->db->insert('interest_tbl',$interestData);
		  
		   $this->session->set_flashdata('message','Interest Added Successfully');
		   redirect ('Profile/show_profile'); 
	}
	
	public function update_interest()
	{

		if($this->input->post('Reading')=='1')
		$Reading = $this->input->post('Reading');
		else
		$Reading = '0';
		if($this->input->post('Movies')=='1')
		$Movies = $this->input->post('Movies');
		else
		$Movies = '0';
		if($this->input->post('Outing')=='1')
		$Outing = $this->input->post('Outing');
		else
		$Outing = '0';
		if($this->input->post('Clubing')=='1')
		$Clubing = $this->input->post('Clubing');
		else
		$Clubing = '0';
		if($this->input->post('Painting')=='1')
		$Painting = $this->input->post('Painting');
		else
		$Painting = '0';
		if($this->input->post('Music')=='1')
		$Music = $this->input->post('Music');
		else
		$Music = '0';
		if($this->input->post('Adventure')=='1')
		$Adventure = $this->input->post('Adventure');
		else
		$Adventure = '0';
		if($this->input->post('Gaming')=='1')
		$Gaming = $this->input->post('Gaming');
		else
		$Gaming = '0';
		if($this->input->post('Sports')=='1')
		$Sports = $this->input->post('Sports');
		else
		$Sports = '0';
		if($this->input->post('DIYs')=='1')
		$DIYs = $this->input->post('DIYs');
		else
		$DIYs = '0';
		if($this->input->post('Studying')=='1')
		$Studying = $this->input->post('Studying');
		else
		$Studying = '0';
		if($this->input->post('Cooking')=='1')
		$Cooking = $this->input->post('Cooking');
		else
		$Cooking = '0';
		$total_count=$Reading+$Movies+$Outing+$Clubing+$Painting+$Music+$Adventure+$Gaming+$Sports+$DIYs+$Studying+$Cooking;
		$hdnid = $this->input->post('hdnid');

		$editInterestData = array(
			'reading'=>$Reading,
			'movies'=>$Movies,
			'outing'=>$Outing,
			'clubing'=>$Clubing,
			'painting'=>$Painting,
			'music'=>$Music,
			'adventure'=>$Adventure,
			'gaming'=>$Gaming,
			'sports'=>$Sports,
			'DIYs'=>$DIYs,
			'studying'=>$Studying,
			'cooking'=>$Cooking,
			'total'=>$total_count,
			  ); 
		   $this->db->update('interest_tbl',$editInterestData,array('user_id'=>$hdnid ));
		  
		   $this->session->set_flashdata('message','Interest Updated Successfully');
		   redirect ('Profile/show_profile'); 
	}
}