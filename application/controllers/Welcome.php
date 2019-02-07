<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Dashboard_model');
        
    }

	public function index()
	{
		$this->load->view('login');
	}

	function do_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_chk = $this->Login_model->user_chk(array('username'=>$username,'password'=>md5($password)));

		$sessionData = array(
			'username'=> $user_chk[0]['username'],
			'name'=>$user_chk[0]['name'],
			'db_host'=> $user_chk[0]['db_host'],
			'db_name'=>$user_chk[0]['db_name'],
			'db_username'=>$user_chk[0]['db_username'],
			'db_password'=>$user_chk[0]['db_password'],
		);
		$this->session->set_userdata($sessionData);

		//$this->db->close();

		//print_r($this->session->userdata());
		redirect(base_url('/index.php/Welcome/dashboard'));
		


	}

	function logout(){

		$newdata  = array(
			'username'=>'',
			'name'=>'',
			'db_host'=> '',
			'db_name'=>'',
			'db_username'=>'',
			'db_password'=>'',
		);

     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();
     redirect(base_url('/index.php/Welcome/'));

	}

	function dashboard(){
		 $data['getAlluser'] = $this->Dashboard_model->GetAllUser();
		$this->load->view('user/userdetail',$data);
	}


  
}
