<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Posts extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->Model("MCommon");
		}
		
		public function index(){
				
			$data=array(
			);

			$this->onLoadView('Introduce', $data);	
		}

		/**
		Bài viết giới thiệu
		*/
		public function introduce() {
			$data=array(
			);

			$this->onLoadView('Introduce', $data);	
		}

		/**
		Bài viết tuyển dụng
		*/
		public function recruiment() {
			$data=array(
			);

			$this->onLoadView('Recruiment', $data);	
		}

		/**
		Bài viết khoa học
		*/
		public function article() {
			$data=array(
			);

			$this->onLoadView('Article', $data);	
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
