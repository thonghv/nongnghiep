<?php

class MCommon extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

   /* Lấy danh sách menu */
	public function getMenu(){
			$query=$this->db->query('SELECT *FROM ex_menu');
			return $query->result();
	}

	/* Lấy thong tin menu by ID  */
	public function getMenuById($id){
			$query=$this->db->query('SELECT *FROM ex_menu WHERE id ='.$id);
			return $query->result();
	}

	/* Lấy danh sách menu sub  */
	public function getMenuSub(){
			$query=$this->db->query('SELECT *FROM ex_menu_sub order by sort');
			return $query->result();
	}

	/* Lấy danh sách menu subject  */
	public function getMenuSubject(){
			$query=$this->db->query('SELECT *FROM ex_menu_subject');
			return $query->result();
	}

	/* Lấy danh sách menu subject  */
	public function getMenuSubjectById($id){
			$query=$this->db->query('SELECT *FROM ex_menu_subject WHERE id ='.$id);
			return $query->result();
	}

	/* Lấy danh sách menu subject  */
	public function getMenuSubjectBySlug($slug){
			$query=$this->db->query("SELECT *FROM ex_menu_subject WHERE slug = '".$slug."'");
			return $query->result();
	}

	/* Lấy thong tin menu sub by ID  */
	public function getMenuSubById($subslug, $menuSlug){
			$query=$this->db->query("SELECT *FROM ex_menu_sub WHERE slug = '".$subslug."' AND menu_type_id = '".$menuSlug."'");
			return $query->result();
	}

	/* Lấy thong tin menu sub by ID  */
	public function getMenuSubId($id){
			$query=$this->db->query("SELECT *FROM ex_menu_sub WHERE id = '".$id."'");
			return $query->result();
	}

	/* Lấy thong tin menu sub by menu type id  */
	public function getMenuSubByMenuTypeId($menu_type_id){
			$query=$this->db->query("SELECT *FROM ex_menu_sub WHERE menu_type_id = '".$menu_type_id."' order by sort");
			return $query->result();
	}

	/* Lấy danh sách menu sub detail */
	public function getMenuSubDetail($subType){
			$query=$this->db->query('SELECT *FROM ex_menu_sub_detail WHERE sub_type = '.$subType);
			return $query->result();
	}

	/* Lấy danh sách menu sub detail */
	public function getMenuSubDetailBySub($subSlug, $menuSlug){
			$query=$this->db->query("SELECT *FROM ex_menu_sub_detail WHERE sub_type_id = '".$subSlug."' AND menu_type_id = '".$menuSlug."'");
			return $query->result();
	}


	/* Lấy thong tin menu sub detail */
	public function getSubDetailById($id){
			$query=$this->db->query('SELECT *FROM ex_menu_sub_detail WHERE id = '.$id);
			return $query->result();
	}


	/* Lấy thong tin menu sub detail */
	public function getMenuSubDetailById($id){
			$query=$this->db->query('SELECT *FROM ex_menu_detail WHERE id ='.$id);
			return $query->result();
	}


	/* Lay danh sach tags */
	public function getTags(){
			$query=$this->db->query('SELECT *FROM ex_tags');
			return $query->result();
	}

	/* FOR TOP */

	/* Get list questions tallest votes */
    public function getQuestionHomeVotes($offset, $limit){
        $query=$this->db->query('SELECT a.id, a.id_type, a.content, a.date, a.uid, a.answers, a.votes, a.views, b.name, b.article, b.avatar, b.favorite, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND a.uid = b.id ORDER BY a.votes DESC LIMIT '. $offset.','.$limit);
        return $query->result();
    }
	
	/* Get list questions tallest */
	public function getQuestionHomeHot($limit){
        $query=$this->db->query('SELECT a.id, a.id_type, a.content, a.date, a.uid, a.answers, a.votes, a.views, b.name, b.article, b.avatar, b.favorite, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND a.uid = b.id ORDER BY a.views DESC LIMIT '.$limit);
        return $query->result();
    }

    /* Get number question in day */
    public function getNumberQuesInDay(){
        $query=$this->db->query('SELECT COUNT(*) as num FROM ex_question WHERE DATE(date) = CURDATE()');
        return $query->result();
    }


    /*  */
    public function onUpdateMenuSubject($id, $data){
        $this->db->where("id", $id); 
        return $this->db->update("ex_menu_subject", $data); 
    }
}