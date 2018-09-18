<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

	public function index(){
		if($this->session->userdata('name_admin')==NULL)
		{
			$this->load->Model('MConfig');
			$key_title = "web.title.desc";
			$web_title = $this->MConfig->getDesc($key_title);
			$data=array(
				'title_config'=> $web_title[0]->desc,
			);
			$this->load->view("wp-admin/Login", $data);
		}
		else redirect(base_url()."wp-admin/home");
	}

	public function onCheckLogin(){
        $username = $this->input->post("Username");
		$password = $this->input->post("Password");

		$this->load->Model('MConfig');
		$userNameAdmin = "username.admin";
		$dataNameAdmin = $this->MConfig->getDesc($userNameAdmin);

		$userPasswordAdmin = "password.admin";
		$dataPassWordAdmin = $this->MConfig->getDesc($userPasswordAdmin);

		if($username != $dataNameAdmin[0]->desc || md5($password) != $dataPassWordAdmin[0]->desc){
			$data['error']="Đăng nhập không thành công. Vui lòng đăng nhập lại !";
		}
		else{
			$data = array(
				"name_admin" => 'admin',			
			);
			$this->session->set_userdata($data);
			redirect(base_url()."wp-admin/home");
		}
		$this->load->view("wp-admin/Login",$data);
	}
	
	public function logout(){
		$this->session->unset_userdata('name_admin');
		redirect(base_url()."wp-admin/login");
	}


}
