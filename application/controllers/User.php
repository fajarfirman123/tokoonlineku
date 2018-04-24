<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Dataku');
	}
	
	public function form()
	{
		$this->load->view('form_user');
	}

	public function inputan()
	{
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');

		$data = array(
			'password' => $password ,
			'username' => $username ,
			'fullname' => $fullname ,
			'level' => 1);

		$this->Dataku->submitData($data);
		$this->load->view("welcome_message");
	}
}