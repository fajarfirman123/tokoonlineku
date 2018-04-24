<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Dataku extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function submitData($data){
		$this->db->insert("user", $data);
	}

}