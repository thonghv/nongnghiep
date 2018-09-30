<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

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

		$this->load->model('MAdmin');
		$data['slides']=$this->MAdmin->getSlide();
		$this->load->view('p-admin/media', $data);
	}

	/**
	* Update slide image
	*/
	public function update(){ 

		$this->load->model('MAdmin');
		$this->MAdmin->emptySlide();   

		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		//print($cpt);
		//return;

		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

			if($files['userfile']['name'][$i] != null && !empty($files['userfile']['name'][$i])){  
				$data = array( 
					'name' => $_FILES["userfile"]["name"],
				);

				$this->MAdmin->addSlide($data);   

				/*upload hinh anh*/
				$this->MAdmin->do_upload("userfile");
			} else {
				$nameImg = $this->input->post("input_img_".$i);
					if($nameImg != null) {
					$data = array( 
						'name' => $nameImg,
					);

					$this->MAdmin->addSlide($data);
				}
			}
			
		}

		$data_session = array(
			"ok" => 'ok',			
		);
		$this->session->set_userdata($data_session);

		redirect(base_url()."p-admin/media");
	}
}