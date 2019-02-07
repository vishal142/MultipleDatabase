<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	

    function GetAllUser(){
    	$this->db->select('*');
    	$res = $this->db->get('tbl_user')->result_array();
    	return $res;
    }

	
	
}
