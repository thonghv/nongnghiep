<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->Model("MCommon");
			$this->load->Model("MHome");
		}
		
		public function index(){
			
			$this->load->Model("MAdmin");

			$topInfo = $this->MHome->getTopProduct();
			$topInfoImg = $this->MHome->getTopProductImage();

			$ARTICLE_ABOUT_TYPE = 1;
			$articleAbout = $this->MAdmin->getArticleById($ARTICLE_ABOUT_TYPE);

			$products = $this->MHome->getProductsByGroupMenuId(1, 8);

			// Get group menu id show home.
			$lstProduct = array();
			$groupMenuShow = $this->MHome->getGroupShow();
			foreach ($groupMenuShow as $info) {
				$products = $this->MHome->getProductsByGroupMenuId($info -> id, 8);
				foreach ($products as $p) {
					array_push($lstProduct, $p);
				}
			}

			$data=array(
				"topInfo"    	=> $topInfo,
				"topInfoImg" 	=> $topInfoImg,

				"about"		 	=> $articleAbout[0] -> content,
				"lstProduct"	=> $lstProduct,
				'groupMenuShow'		=> $groupMenuShow,
			);

			$this->onLoadView('Home', $data);	
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
