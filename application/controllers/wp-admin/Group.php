<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {

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
        $groups = $this->MConfig->getGroups();

		$data=array(
			'groups' => $groups,
		);
		$this->load->view('wp-admin/Group', $data);
	}
}