<?php

class MConfig extends CI_Model {
	protected $_table="ex_config";
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDesc($key){
        $this->db->where("key",$key);
        $query = $this->db->get($this->_table);
        if($query->num_rows()==0){
            return -1;
        }
        else{
             return $query->result();
        }
    }

    public function updateData($key, $data){
        $this->db->where("key", $key); 
        return $this->db->update($this->_table, $data); 
    }

    public function getGroups() {
        $query=$this->db->query('SELECT *FROM ex_menu');
        return $query->result();
    }

    public function getCategoryByGroup($group) {
        $query=$this->db->query('SELECT *FROM ex_menu_sub WHERE menu_type = '.$group);
        return $query->result();
    }

    public function getCategoryById($id) {
        $query=$this->db->query('SELECT *FROM ex_menu_sub WHERE id = '.$id);
        return $query->result();
    }

    /* Create category */
    public function onAddCategory($data){
        $this->db->insert("ex_menu_sub",$data);
        return $this->db->insert_id();
    }

    /* On update category */
    public function onUpdateCategory($id, $data){
        $this->db->where("id", $id); 
        return $this->db->update("ex_menu_sub", $data); 
    }

    public function onRemove($id){
        $this->db->where("id", $id);
        $this->db->delete("ex_menu_sub");
    }

    public function getGroupById($id) {
        $query=$this->db->query('SELECT *FROM ex_menu WHERE id = '.$id);
        return $query->result();
    }

    public function getSubDetailBySub($subType) {
        $query=$this->db->query('SELECT *FROM ex_menu_sub_detail WHERE sub_type = '.$subType);
        return $query->result();
    }

    /* Create category detail */
    public function onAddCategoryDetail($data){
        $this->db->insert("ex_menu_sub_detail",$data);
        return $this->db->insert_id();
    }

    /* Get all menu sub */
    public function getAllMenuSub() {
        $query=$this->db->query('SELECT *FROM ex_menu_detail');
        return $query->result();
    }

    /* Get all menu sub */
    public function getAllMenuSubDetail() {
        $query=$this->db->query('SELECT *FROM ex_menu_sub_detail');
        return $query->result();
    }


    /* On update category menu sub detail */
    public function onUpdateMenuSubDetail($subType, $data){
        $this->db->where("sub_type", $subType); 
        return $this->db->update("ex_menu_sub_detail", $data); 
    }

    /* On update category question*/
    public function onUpdateMenuQues($subType, $data){
        $this->db->where("menu_sub_type", $subType); 
        return $this->db->update("ex_question", $data); 
    }

     /* On update category theory */
    public function onUpdateMenuTheory($subType, $data){
        $this->db->where("menu_sub_type", $subType); 
        return $this->db->update("ex_theory", $data); 
    }
}
