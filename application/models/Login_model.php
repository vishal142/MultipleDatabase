<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function user_chk($data=array()){
		$this->db->select('*');
		$this->db->where($data);
		$res = $this->db->get('tbl_user_login')->result_array();
		return $res;

	}

	
	
}
