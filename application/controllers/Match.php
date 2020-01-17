<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Match extends CI_Controller {
	
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
$this->load->model('matchmaking_model');
}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	public function show_match()
	{
		$data['matchdata'] = $this->matchmaking_model->get_matches();
		$this->load->view('show_match.php',$data);
	}

}