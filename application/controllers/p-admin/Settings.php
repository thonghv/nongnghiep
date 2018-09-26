<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');

        $this->load->helper('utils');	
    }

    public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $this->load->Model('MConfig');

        $keyTitle = "web.title.desc";
        $webTitle = $this->MConfig->getDesc($keyTitle);

        $keyAdmin = "username.admin";
        $webAdmin = $this->MConfig->getDesc($keyAdmin);

		$data=array(
			'title' => $webTitle[0]->desc,
            'admin' => $webAdmin[0]->desc,
		);
		$this->load->view('wp-admin/Setting', $data);
	}

	public function onUpdateTitle(){

		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $this->load->model('MConfig');
		$key = "web.title.desc";
        $data['desc'] = $_POST['desc'];
        $check = $this->MConfig->updateData($key, $data);
        
        redirect(base_url()."wp-admin");	
    }

    public function onUpdateAdmin(){

        if($this->session->userdata('name_admin') == NULL)
        {
            redirect(base_url()."wp-admin/login");
        }

        $this->load->model('MConfig');
        $key = "username.admin";
        $data['desc'] = $_POST['desc'];
        $check = $this->MConfig->updateData($key, $data);
        
        redirect(base_url()."wp-admin");    
    }
}