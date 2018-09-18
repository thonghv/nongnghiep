<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answers extends CI_Controller {

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

		$this->load->Model('MArticle');
		$data=array(
			'answers' => $this->MArticle->getAnsByLast(),
		);
		$this->load->view('wp-admin/Answers', $data);
	}

	public function onRemove($id)
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        // remove hoa don do ra.
        $this->load->model('MArticle');
		$this->MArticle->onRemoveAns($id);

		redirect(base_url()."wp-admin/questions");
    }
}