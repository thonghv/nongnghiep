<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

		$this->load->Model('MUser');
		$data=array(
			'users' => $this->MUser->getUserOrderBySignUp(),
		);
		$this->load->view('wp-admin/Users', $data);
	}

	public function onRemoveUser($uid)
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        // remove hoa don do ra.
        $this->load->model('MUser');
		$this->MUser->onRemoveUser($uid);

		redirect(base_url()."wp-admin/users");
    }

    public function onLock($uid)
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $this->load->model('MUser');
        $data['is_lock'] = 1;
		$this->MUser->onUpdateState($uid, $data);

		redirect(base_url()."wp-admin/users");
    }

    public function onUnLock($uid)
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $this->load->model('MUser');
        $data['is_lock'] = 0;
		$this->MUser->onUpdateState($uid, $data);

		redirect(base_url()."wp-admin/users");
    }

}