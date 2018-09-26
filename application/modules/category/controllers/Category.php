<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Category extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->Model("MCommon");
			$this->load->Model("MCategory");
		}
		
		public function index(){
				
			$data=array(
			);

			$this->onLoadView('Category', $data);	
		}

		public function onLoadView($name, $data) {
			// check on device window or mobile
	        $this->load->library('user_agent'); 
		    if (!$this->agent->is_mobile()) {

		    	// giao dien windown
		        $this->load->view('pc/'.$name, $data);
		        return;
		    }

		    // giao dien mobile
		    $this->load->view('mobile/'.$name, $data);
		}
	}
