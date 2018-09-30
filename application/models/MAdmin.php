<?php

class MAdmin extends CI_Model {

	/* variable common */
	private $_group_menu = "p_group_menu";
	private $_sub_menu = 'p_sub_menu';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /* Get menu list all */
    public function getGroupsMenu() {
        $query=$this->db->query('SELECT *FROM '.$this->_group_menu);
        return $query->result();
    }

    /* Get menu by id*/
    public function getGroupsMenuById($id) {
        $query=$this->db->query('SELECT *FROM '.$this->_group_menu.' WHERE id = '.$id);
        return $query->result();
    }

    /* Get sub menu list all */
    public function getGroupSubMenu() {
        $query=$this->db->query('SELECT *FROM '.$this->_sub_menu);
        return $query->result();
    }

    /* Get sub menu by id of menu */
    public function getGroupSubMenuById($groupId) {
        $query=$this->db->query('SELECT *FROM '.$this->_sub_menu.' WHERE group_id ='.$groupId);
        return $query->result();
    }

    /* On update menu */
    public function updateGroupMenu($id, $data){
        $this->db->where("id", $id); 
        return $this->db->update("p_group_menu", $data); 
    }

    /* Remove group menu */
    public function onRemoveGroupMenu($id){
        $this->db->where("id", $id);
        $this->db->delete($this->_group_menu);
    }

    /* On update sub menu */
    public function updateSubMenu($id, $data){
        $this->db->where("id", $id); 
        return $this->db->update($this->_sub_menu, $data); 
    }

    /* Remove sub menu */
    public function onRemoveSubMenu($id){
        $this->db->where("id", $id);
        $this->db->delete($this->_sub_menu);
    }

    /**
     * Insert data P_GROUP_MENU
     */
    public function addGroupMenu($data) {
        $this->db->insert("p_group_menu", $data);
        return $this->db->insert_id();
    }

    /**
     * Insert data P_SUB_MENU
     */
    public function addSubMenu($data) {
        $this->db->insert("p_sub_menu", $data);
        return $this->db->insert_id();
    }

    /** 
    *=====================================================
    *  Start Slide
    */

    /* Get all slide */
    public function getSlide() {
        $query=$this->db->query('SELECT *FROM p_slide');
        return $query->result();
    }

    /**
     * Insert data P_SLIDE
     */
    public function addSlide($data) {
        $this->db->insert("p_slide", $data);
        return $this->db->insert_id();
    }

    /**
     * Delete data P_SLIDE
     */
    public function emptySlide() {
        $this->db->from('p_slide');
        $this->db->truncate();
    }

    /** ENd Slide
    * =====================================================
    */

    /**
    * Update image slider
    */
    function updateSlide($data,$masp){
        $this->db->where('id', $masp); 
        $query=$this->db->get("dbola_home_slide"); 
            if($query->num_rows()<1) //Khong ton tai ma quang cao
            { 
              return FALSE;
          } 
          else { 
              $this->db->where('id', $masp); 
              $this->db->update("dbola_home_slide",$data);     
              return TRUE;
          }   
      }

    /**
    * Upload image and resize
    */
    public function do_upload($nameimg){
        $config = array('upload_path'   => './public/img-slide',
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '4000');
        $this->load->library("upload",$config);
        $this->upload->initialize($config);

        if(!$this->upload->do_upload($nameimg)){
            $error = array($this->upload->display_errors());
        }else{
            $image_data = $this->upload->data();
             //kết thúc công đoạn upload hình ảnh

            //kết thúc công đoạn resize lại hình ảnh    
        }

    }

    /** 
    *=====================================================
    *  Products
    */

    /* Get all product */
    public function getProducts() {
        $query=$this->db->query('SELECT p.id,p.name as product_name, p.slug, g.name as group_name, s.name as menu_name, p.overview, p.price, p.content FROM p_product p '.
        'JOIN p_group_menu g on p.group_menu_id = g.id JOIN p_sub_menu s on p.sub_menu_id = s.id');
        return $query->result();
    }

    /* Get product by ID */
    public function getProductById($id) {
        $query=$this->db->query('SELECT *FROM p_product WHERE id='.$id);
        return $query->result();
    }

    /**
     * Insert product
     */
    public function addProduct($data) {
        $this->db->insert("p_product", $data);
        return $this->db->insert_id();
    }

    /**
     * Update product
     */
    public function updateProduct($id, $data) {
        $this->db->where('id', $id); 
        $this->db->update("p_product", $data);  
    }

    /**
     * Delete product
     */
    public function removeProduct($id) {
        $this->db->where("id", $id);
        $this->db->delete("p_product");
    }

    /* Get all product image */
    public function getAllProductsImg() {
        $query=$this->db->query('SELECT *FROM p_product_img');
        return $query->result();
    }

    /* Get product image by ID */
    public function getProductsImgById($producId) {
        $query=$this->db->query('SELECT *FROM p_product_img WHERE product_id ='.$producId);
        return $query->result();
    }

    /**
     * Insert product image 
     */
    public function addProductImg($data) {
        $this->db->insert("p_product_img", $data);
        return $this->db->insert_id();
    }

     /**
     * Delete product image
     */
    public function removeProductImg($id) {
        $this->db->where("product_id", $id);
        $this->db->delete("p_product_img");
    }

    /** End Product
    * =====================================================
    */


    /** 
    *=====================================================
    *  Article
    */

    /* Get article by type */
    public function getArticleById($type) {
        $query=$this->db->query('SELECT *FROM p_article WHERE type='.$type);
        return $query->result();
    }

    /**
     * Update product
     */
    public function updateArticle($type, $data) {
        $this->db->where('type', $type); 
        $this->db->update("p_article", $data);  
    }

    /** 
    *=====================================================
    *  Article
    */
}