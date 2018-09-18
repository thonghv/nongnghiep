<?php

class MHome extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /* function for private home */
    /*****************************/
    
    /* Get list questions recent */
	public function getQuestionHomeActive($offset, $limit){
		$query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND a.uid = b.id ORDER BY a.date DESC LIMIT '.$offset.','.$limit);
		return $query->result();
	}

    /* Get list questions tallest */
    public function getQuestionHomeHot($offset, $limit){
        $query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND a.uid = b.id ORDER BY a.views DESC LIMIT '.$offset.','.$limit);
        return $query->result();
    }

     /* Get list questions votes */
    public function getQuestionHomeVotes($offset, $limit){
        $query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND a.uid = b.id ORDER BY a.votes DESC LIMIT '.$offset.','.$limit);
        return $query->result();
    }

    /* Get list questions by admin */
    public function getQuestionHomeRecommend($offset, $limit){
        $query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND b.role in (101,2) AND a.uid = b.id ORDER BY a.date DESC LIMIT '.$offset.','.$limit);
        return $query->result();
    }


    /* Get list questions in month*/
    public function getQuestionHomeInMonth($month, $offset, $limit){
        $query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND MONTH(a.date) = '.$month.' AND a.uid = b.id LIMIT '.$offset.','.$limit);
        return $query->result();
    }

    /* Get list questions in week*/
    public function getQuestionHomeInWeek($offset, $limit){
        $query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.type in (4) AND a.date >= DATE(NOW()) - INTERVAL 7 DAY AND a.uid = b.id LIMIT '.$offset.','.$limit);
        return $query->result();
    }

    /* Get list questions not answers */
    public function getQuestionHomeNotAnswers($offset, $limit){
        $query=$this->db->query('SELECT a.id, a.content, a.id_type, a.id_sub_type, a.date, a.uid, a.answers, a.useful_state, a.votes, a.views, b.name, b.article, a.slug, a.tags FROM ex_question a, ex_user b WHERE a.answers = 0 AND a.type in (4) AND a.uid = b.id ORDER BY a.date DESC LIMIT '.$offset.','.$limit);
        return $query->result();
    }

	
}