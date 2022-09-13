<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->helper(array('array','form','url','string'));
		$this->load->model("vbokm");
	}
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
	public function index()
	{
		$this->load->view('welcome_window');
	}
	public function log_in1()
	{
		$this->load->view('login');
	}
	public function regis1()
	{
		$this->load->view('register');
	}
	public function log5()
	{
		$this->load->view('login');	
	}
	public function log6()
	{
		/*echo("I am here");
		die();*/
		$result['all_user']=$this->vbokm->log6m();
		if($result==true){
			echo("Login Successfully");
			$this->load->view('dashboard');
		}
		else{
			echo("Try again");
			$this->load->view('login');

		}
	}
	public function registerC()
	{
		$result['all_user']=$this->vbokm->registerM();
		if($result==true){
			$this->load->view('login');
			echo("Successfully Registered");
		}
		else{
			$this->load->view('register');
			echo("Try again");
		}
	}
	public function forget_userC()
	{
		$this->load->view('forget_userid');
	}
	public function forget_passC()
	{
		$this->load->view('forget_password');
	}
}
