<?php

class MProduct extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

     /* function for private home */
    /*****************************/
    
    /* Get product info */
	public function getInfo($productId){
		$query=$this->db->query('SELECT *FROM p_product WHERE id = '.$productId);
		return $query->result();
    }

     /* Get product image list */
	public function getProductImg($productId){
		$query=$this->db->query('SELECT *FROM p_product_img WHERE product_id = '.$productId);
		return $query->result();
    }
    
    /* Get top products hot */
	public function getProductsTopViews($subMenuId){
		$query=$this->db->query('SELECT *FROM p_product WHERE sub_menu_id = '.$subMenuId.' ORDER BY num_view DESC LIMIT 4');
		return $query->result();
    }
    
    /* Get top products hot */
	public function getProductsTopSame($subMenuId){
		$query=$this->db->query('SELECT *FROM p_product WHERE sub_menu_id = '.$subMenuId.' LIMIT 9');
		return $query->result();
	}
}