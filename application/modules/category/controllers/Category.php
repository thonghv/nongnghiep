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

	public function getProducts($subMenuId) {

		$this->load->Model("MAdmin");
		$subMenuInfo = $this->MAdmin->getGroupSubMenuInfo($subMenuId);

		/* Start pagination */
		/**/

		$limit = 6;
		$this->load->library('pagination'); 
		$infoNum = $this->MCategory->getCountProducts($subMenuId);

		$offset = $this->input->get('per_page', TRUE);
		if($offset == null){
			$offset = 0;
		}

		$config['base_url'] = site_url() . $subMenuInfo[0] -> slug.'-'.$subMenuId.'.html?';
		$config['total_rows'] = $infoNum[0] -> num;
		$config['per_page'] = $limit;
		$config['prev_link'] 	= '‹';
		$config['next_link'] 	= '›';
		$config['last_link'] 	= '»';
		$config['first_link']	= '«';
		$config['page_query_string'] = TRUE;
		$this->pagination->initialize($config);
		$paginator = $this->pagination->create_links(); 

		/**/
		/*  End pagination */

		$lstSubMenu = $this->MAdmin->getGroupSubMenuById($subMenuInfo[0]->group_id);

		$products = $this->MCategory->getProducts($subMenuId, $offset, $limit);
		$productsTop = $this->MCategory->getProducts($subMenuId, $offset, $limit);
		$data=array(
			"products" => $products,
			'paginator' => $paginator,

			'lstSubMenu' => $lstSubMenu,
			'productsTop' => $productsTop,

			'categoryName' => $subMenuInfo[0]->name,
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
