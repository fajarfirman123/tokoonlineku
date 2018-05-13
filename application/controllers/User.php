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
		redirect('user');
	}
	public function index(){
		// $this->load->model('Dataku');

		$dt['tbuser']=$this->Dataku->gets();

		$this->load->view('table' , $dt);
	}
	public function add(){}
	public function del($id){
		$this->Dataku->del($id);
		redirect('user');
	}
	public function edit($id){}
	public function detail($id){}
}