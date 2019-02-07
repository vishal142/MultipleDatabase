<?php defined('BASEPATH') OR exit('No direct script access allowed');


	function ChkDB(){
		$ci =& get_instance();
		$ci->load->library('session');
		$userDB = $ci->session->userdata();
		return $userDB;
	}



?>