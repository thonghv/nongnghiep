<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');

        $this->load->helper('utils');	
    }

    public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $group = $this->input->get('group', TRUE);

        $this->load->Model('MConfig');
        $categorys = $this->MConfig->getCategoryByGroup($group);

        $groups = $this->MConfig->getGroupById($group);

        $menuSubDetailAll = $this->MConfig->getAllMenuSubDetail();

		$data=array(
			'categorys' => $categorys,
			'group' => $group,
			'group_name' => $groups[0]->name,

			'menu_sub_detail_all' => $menuSubDetailAll,
		);
		$this->load->view('wp-admin/Category', $data);
	}


	public function add()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."login");
        }

		$name = $this->input->post("name");
		$group = $this->input->get('group', TRUE);
		$slug = url_title(strtolower(getSlug($name)));

        $data = array(
			'name' => $name,
			'slug' => $slug,
			'menu_type' => $group,
	    );

	    $this->load->Model('MConfig');
		$this->MConfig->onAddCategory($data);

		$dataa['success']="OK";             
        $this->session->set_userdata($dataa);

		redirect(base_url()."wp-admin/category?group=".$group);
	}

	public function onUpdate()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $group = $this->input->get('group', TRUE);
        $category = $this->input->get('category', TRUE);

        $this->load->Model('MConfig');
        $info = $this->MConfig->getCategoryById($category);

		$data=array(
			'info' => $info,
			'group' => $group,
			'category' => $category,
		);
		$this->load->view('wp-admin/GroupUpdate', $data);
	}

	public function submitChange()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."login");
        }

		$group = $this->input->get('group', TRUE);
        $category = $this->input->get('category', TRUE);

        $name = $this->input->post("name");
        $slug = url_title(strtolower(getSlug($name)));

        $data = array(
			'name' => $name,
			'slug' => $slug,
	    );

	    $this->load->Model('MConfig');
		$this->MConfig->onUpdateCategory($category, $data);

		// update all data
		$dataMenuDetail = array(
			'sub_type_id' => $slug,
	    );
		$this->MConfig->onUpdateMenuSubDetail($category, $dataMenuDetail);

		$dataMenuQues = array(
			'id_sub_type' => $slug,
	    );
		$this->MConfig->onUpdateMenuQues($category, $dataMenuQues);
		$this->MConfig->onUpdateMenuTheory($category, $dataMenuQues);

		$dataa['success']="OK";             
        $this->session->set_userdata($dataa);

		redirect(base_url()."wp-admin/category?group=".$group);
	}


	public function onRemove($id)
	{	if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."login");
        }

		$group = $this->input->get('group', TRUE);
        $category = $this->input->get('category', TRUE);

        $this->load->model('MConfig');
		$this->MConfig->onRemove($category);

		redirect(base_url()."wp-admin/category?group=".$group);
    }


    public function detail()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."wp-admin/login");
        }

        $subType = $this->input->get('sub', TRUE);
        $group = $this->input->get('group', TRUE);

        $this->load->Model('MConfig');
        $detailInfos = $this->MConfig->getSubDetailBySub($subType);

        $subInfo = $this->MConfig->getCategoryById($subType);

        $subAllData = $this->MConfig->getAllMenuSub();

		$data=array(
			'sub_detail' => $detailInfos,
			'group' => $group,
			'sub_type' => $subType,
			'sub_name' => $subInfo[0]->name,

			'sub_all' => $subAllData,
		);
		$this->load->view('wp-admin/SubDetail', $data);
	}

	public function addDetail()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."login");
        }

		$subTypeDetail = $this->input->post("sub_type_detail");
		$group = $this->input->get('group', TRUE);
		$subType = $this->input->get('sub_type', TRUE);

		$this->load->Model('MCommon');
		$subInfo = $this->MCommon->getMenuSubId($subType);
		$detailInfo = $this->MCommon->getMenuSubDetailById($subTypeDetail);

        $data = array(
			'sub_type' => $subType,
			'sub_type_id' => $subInfo[0] -> slug,
			'menu_type' => $group,
			'menu_type_id' => $subInfo[0] -> menu_type_id,
			'detail_type' => $subTypeDetail,
			'detail_type_name' => $detailInfo[0] -> name,
			'detail_type_slug' => $detailInfo[0] -> slug,
			'is_theory' => $detailInfo[0] -> is_theory,
			'is_pub' => $detailInfo[0] -> is_pub,
	    );

	    $this->load->Model('MConfig');
		$this->MConfig->onAddCategoryDetail($data);

		$dataa['success']="OK";             
        $this->session->set_userdata($dataa);

		redirect(base_url()."wp-admin/category/detail?sub=".$subType."&group=".$group);
	}

}