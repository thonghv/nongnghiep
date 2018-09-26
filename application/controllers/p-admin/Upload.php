<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('utils');	
    }

    public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
		{
			redirect(base_url()."p-admin/login");
		}

		$data=array(
		);
		$this->load->view('p-admin/upload', $data);
	}

	public function update($id){ 
		$this->load->model('MAdmin');              
        
        $slideImg = $_FILES["userfile"]["name"];

        /*upload hinh anh*/
				$check = true;
				$this->MAdmin->do_upload("userfile");
		}
}