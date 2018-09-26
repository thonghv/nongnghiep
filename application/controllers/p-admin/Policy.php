<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends CI_Controller {

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

        $keyPolicy = "policy.desc";
		$webPolicy = $this->MConfig->getDesc($keyPolicy);

		$data=array(
			'policy' => $webPolicy[0]->desc,

			'editor' => tinymce(220),
		);
		$this->load->view('wp-admin/Policy', $data);
	}

	public function onUpdate(){

		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $this->load->model('MConfig');
		$key ="policy.desc";
        $data['desc'] = $_POST['desc'];
        $check = $this->MConfig->updateData($key, $data);
        
        redirect(base_url()."wp-admin");	
    }
}