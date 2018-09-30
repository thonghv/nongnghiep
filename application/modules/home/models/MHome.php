<?php

class MHome extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /* function for private home */
    /*****************************/
    
    /* Get product top */
	public function getTopProduct(){
		$query=$this->db->query('SELECT *FROM p_product WHERE is_show = 1 limit 4');
		return $query->result();
	}

    /* Get product top image*/
    public function getTopProductImage(){
        $query=$this->db->query('SELECT *FROM p_product_img WHERE is_avatar = 1 and
        product_id IN (SELECT id FROM p_product WHERE is_show = 1) limit 4');
        return $query->result();
    }

    /* Get product top */
    public function getProductsByGroupMenuId($groupId, $limit){
        $query=$this->db->query('SELECT *FROM p_product WHERE group_menu_id = '.$groupId.' limit '.$limit);
        return $query->result();
    }

    /* Get group menu id show home*/
    public function getGroupShow(){
        $query=$this->db->query('SELECT id, name FROM p_group_menu WHERE is_show = 1');
        return $query->result();
    }
}