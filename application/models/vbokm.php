<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vbokm extends CI_model {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->helper(array('array','form','url','string'));
	}
	public function log6m()
	{
		/*echo("I am here");
		die();*/
		$userid=$this->input->post('user');
		$password=$this->input->post('pass');
		$array=array('Userid'=>$userid,
			'Password'=>$password);
		$this->db->insert("logind",$array);
		return true;
	}
	public function registerM()
	{
		/*echo("I am here");
		die();*/
		$Name=$this->input->post('nam');
		$PhoneNo=$this->input->post('phone');
		$Userid=$this->input->post('user');
		$Password=$this->input->post('pass');
		$array=array('Name'=>$Name,
			'PhoneNo'=>$PhoneNo,
			'Userid'=>$Userid,
			'Password'=>$Password);
		$this->db->insert("registerd",$array);
		return true;
	}
}