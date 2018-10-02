<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Product extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->Model("MCommon");
			$this->load->Model("MProduct");
		}
		
		public function index(){
				
			$data=array(
			);

			$this->onLoadView('Product', $data);	
		}

		public function detail($productId) {

			$productInfo = $this->MProduct->getInfo($productId);
			$imgInfo = $this->MProduct->getProductImg($productId);

			$this->load->Model("MAdmin");
			$subMenuInfo = $this->MAdmin->getGroupSubMenuInfo($productInfo[0] -> sub_menu_id);
			$lstSubMenu = $this->MAdmin->getGroupSubMenuById($subMenuInfo[0]->group_id);
	
			$productsTop = $this->MProduct->getProductsTopViews($productInfo[0] -> sub_menu_id);
			$productsSame = $this->MProduct->getProductsTopSame($productInfo[0] -> sub_menu_id);
			$data=array(
				"info" => $productInfo,
				"imgInfo" => $imgInfo,
				
				'lstSubMenu' => $lstSubMenu,
				'productsTop' => $productsTop,
				'productsSame' => $productsSame,

				'categoryInfo' => $subMenuInfo,
			);
	
			$this->onLoadView('Product', $data);
	
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
