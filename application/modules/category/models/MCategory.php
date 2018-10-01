<?php

class MCategory extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

     /* function for private home */
    /*****************************/
    
    /* Get product category */
	public function getProducts($subMenuId, $offset, $limit){
		$query=$this->db->query('SELECT *FROM p_product WHERE sub_menu_id = '.$subMenuId.' ORDER BY created_at DESC LIMIT '.$offset.','.$limit);
		return $query->result();
	}

    /* Lấy count rows products */
    public function getCountProducts($subMenuId){
        $query=$this->db->query('SELECT COUNT(*) as num FROM p_product WHERE sub_menu_id = '.$subMenuId);
        return $query->result();
    }

    /* Get top products hot */
	public function getProductsTopViews($subMenuId){
		$query=$this->db->query('SELECT *FROM p_product WHERE sub_menu_id = '.$subMenuId.' ORDER BY num_view DESC LIMIT 4');
		return $query->result();
	}
}