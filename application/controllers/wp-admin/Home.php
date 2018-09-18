<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

        // get new users recent
        $this->load->Model("MUser");
        $users = $this->MUser->getUserRecent(15);

        $this->load->Model("MArticle");
        $questions = $this->MArticle->getArticleRecent(10);

		$data = array(
			'users' => $users, 
			'questions' => $questions,
		);
		
		$this->load->view('wp-admin/Home', $data);
	}
}
