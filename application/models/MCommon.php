<?php

class MCommon extends CI_Model {
	protected $_group_menu = "p_group_menu";
	protected $_sub_menu = "p_sub_menu";

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	** FOR GET
	/*
	/* Lấy danh sách menu */
	public function getMenu(){
		$query=$this->db->query('SELECT *FROM '.$_group_menu);
		return $query->result();
	}

	/* Lấy thong tin menu by ID  */
	public function getMenuById($id){
		$query=$this->db->query('SELECT *FROM ex_menu WHERE id ='.$id);
		return $query->result();
	}


	/*
	** FOR UPDATE
	*/
	public function onUpdateMenuSubject($id, $data){
		$this->db->where("id", $id); 
		return $this->db->update("ex_menu_subject", $data); 
	}
}