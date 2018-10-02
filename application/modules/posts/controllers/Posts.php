<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Posts extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->Model("MCommon");
		}
		
		public function index(){

			$this->load->Model("MAdmin");
			$posts = $this->MAdmin->getArticleById(1);
			$data=array(
				'content'  => $posts,
				'nameType' => 'Giới Thiệu',
			);

			$this->onLoadView('Posts', $data);	
		}

		/**
		Bài viết giới thiệu
		*/
		public function introduce() {
			$this->load->Model("MAdmin");
			$posts = $this->MAdmin->getArticleById(1);

			$data=array(
				'content'  => $posts,
				'nameType' => 'Giới Thiệu',
			);

			$this->onLoadView('Posts', $data);	
		}

		/**
		Bài viết tuyển dụng
		*/
		public function recruiment() {
			$this->load->Model("MAdmin");
			$posts = $this->MAdmin->getArticleById(2);

			$data=array(
				'content'  => $posts,
				'nameType' => 'Tuyển Dụng',
			);

			$this->onLoadView('Posts', $data);	
		}

		/**
		Bài viết khoa học
		*/
		public function article() {
			$this->load->Model("MAdmin");
			$posts = $this->MAdmin->getArticleById(3);

			$data=array(
				'content'  => $posts,
				'nameType' => 'Bài Viết Khoa Học',
			);

			$this->onLoadView('Posts', $data);		
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
