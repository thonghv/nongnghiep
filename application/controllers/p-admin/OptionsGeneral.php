<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OptionsGeneral extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."p-admin/login");
        }
        
		$data = array(
		);
		
		$this->load->view('p-admin/OptionsGeneral', $data);
	}
}
