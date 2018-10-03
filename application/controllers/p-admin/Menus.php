<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('utils');	
    }

    public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."p-admin/login");
        }

        $this->load->Model('MAdmin');
        $groups = $this->MAdmin->getGroupsMenu();
        $subMenu = $this->MAdmin->getGroupSubMenu();

        $isOldData = false;
        $tabActive = 'MENU_ACTIVE';
        $subMenuFilter = null;

        $groupId = 0;
        if($this->session->userdata('group_menu_id') != NULL) {
            $groupId = $this->session->userdata('group_menu_id');
        }

        if($this->session->userdata('menu_tab_active') != NULL)
        {
            $isOldData = true;
            $tabActive = $this->session->userdata('menu_tab_active');
            $groupId = $this->session->userdata('group_menu_id');

            if($groupId > 0) {
                $subMenuFilter = $this->MAdmin->getGroupSubMenuById($groupId);
                $menuInfo = $this->MAdmin->getGroupsMenuById($groupId);
            }
        }

		$data=array(
            'groups' => $groups,
            'subMenu' => $subMenu,
            'tabActive' => $tabActive,

            "subMenuFilter" => $subMenuFilter,	
            'groupId' => $groupId,
        );
        
        if($isOldData == true && $groupId > 0) {
            $data['groupName'] = $menuInfo[0] -> name;
        }
		$this->load->view('p-admin/Menus', $data);
    }
    
    /**
     * On add menu
     */
    public function onAddGroup(){
        $groupName = $this->input->post("group_name");

        $is_show = 0;
        $checked = $this->input->post('show_home');
        if((int) $checked == 1){
            $is_show = 1;
        }

        $slug = url_title(strtolower(getSlug($groupName)));
		$data = array(
            "name"      =>   $groupName,	
            "slug"      =>   $slug,
            "is_show"   =>   $is_show,
        );

        $this->load->Model('MAdmin');
        $this->MAdmin->addGroupMenu($data);

        if($this->session->userdata('menu_tab_active') != NULL)
        {
            $this->session->unset_userdata('menu_tab_active');
            $this->session->unset_userdata('group_menu_id');
        }

        redirect(base_url()."p-admin/menus");
        
    }
    
    /**
     * On update sub menu
     */
    public function onUpdateGroup(){
        $groupName = $this->input->post("up_group_name");
        $id = $this->input->get('group_id', TRUE); 

        $slug = url_title(strtolower(getSlug($groupName)));
		$data = array(
            "name" => $groupName,	
            "slug" => $slug,
            "is_show" => $this->input->post("is_show"),
        );

        $this->load->Model('MAdmin');
        $this->MAdmin->updateGroupMenu($id, $data);

        if($this->session->userdata('menu_tab_active') != NULL)
        {
            $this->session->unset_userdata('menu_tab_active');
            $this->session->unset_userdata('group_menu_id');
        }

        redirect(base_url()."p-admin/menus");
    }

     /**
     * On remove group menu
     */
    public function onRemoveGroup($groupId){

        $this->load->Model('MAdmin');
        $this->MAdmin->onRemoveGroupMenu($groupId);

        redirect(base_url()."p-admin/menus");
    }
    
    /**
     * On filter menu
     */
    public function onFilterGroup(){

        $groupId = $this->input->post("lst-group-menu");
        if($groupId == null) {
             $groupId = 0;
        }

        $this->load->Model('MAdmin');
        $groups = $this->MAdmin->getGroupsMenu();
        $subMenu = $this->MAdmin->getGroupSubMenu();
        $subMenuFilter = $this->MAdmin->getGroupSubMenuById($groupId);

        $tabActive = 'SUB_MENU_ACTIVE';
		$data = array(
            'groups' => $groups,
            'subMenu' => $subMenu,
            "subMenuFilter" => $subMenuFilter,	
            'tabActive' => $tabActive,

            'groupId' => $groupId,
        );

        $menuInfo = $this->MAdmin->getGroupsMenuById($groupId);
        if(count($menuInfo) > 0) {
            $data['groupName'] = $menuInfo[0] -> name;
        }

        $this->load->view('p-admin/Menus', $data);
    }

    /**
     * On add sub menu
     */
    public function onAddSubMenu(){

        $subMenuName = $this->input->post("sub_menu_name");
        $groupId = $this->input->post("group_id");

        $slug = url_title(strtolower(getSlug($subMenuName)));
		$data = array(
            "name" => $subMenuName,	
            "group_id" => $groupId,
            "slug" => $slug,
        );

        $this->load->Model('MAdmin');
        $this->MAdmin->addSubMenu($data);

        $session_data['menu_tab_active']="SUB_MENU_ACTIVE";  
        $session_data['group_menu_id']=$groupId;             
        $this->session->set_userdata($session_data);

        redirect(base_url()."p-admin/menus");
    }

    /**
     * On update sub menu
     */
    public function onUpdateSubMenu(){
        $subMenuName = $this->input->post("up_sub_menu_name");
        $groupId = $this->input->post("group_id");
        $id = $this->input->get('subId', TRUE); 

        $slug = url_title(strtolower(getSlug($subMenuName)));
		$data = array(
            "name" => $subMenuName,	
            "slug" => $slug,
        );

        $this->load->Model('MAdmin');
        $this->MAdmin->updateSubMenu($id, $data);

        $session_data['menu_tab_active']="SUB_MENU_ACTIVE";  
        $session_data['group_menu_id']=$groupId;             
        $this->session->set_userdata($session_data);

        redirect(base_url()."p-admin/menus");
    }

     /**
     * On remove sub menu
     */
    public function onRemoveSubMenu($subId){

        $groupId = $this->input->post("group_id");

        $this->load->Model('MAdmin');
        $this->MAdmin->onRemoveSubMenu($subId);

        $session_data['menu_tab_active']="SUB_MENU_ACTIVE";  
        $session_data['group_menu_id']=$groupId;             
        $this->session->set_userdata($session_data);

        redirect(base_url()."p-admin/menus");
    }
}