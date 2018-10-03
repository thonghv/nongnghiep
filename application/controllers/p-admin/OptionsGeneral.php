<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OptionsGeneral extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{	
		if($this->session->userdata('name_admin') == NULL)
		{
			redirect(base_url()."p-admin/login");
		}

		$this->load->Model('MConfig');

		$infoTitle = $this->MConfig->getDesc("web.title.desc");
		$infoAdmin = $this->MConfig->getDesc("username.admin");
		$infoDesc = $this->MConfig->getDesc("web.name.desc");
		$infoAbout = $this->MConfig->getDesc("web.about");
		$infoContact = $this->MConfig->getDesc("web.contact");

		$data=array(
			'infoTitle' => $infoTitle[0]->desc,
			'infoAdmin' => $infoAdmin[0]->desc,
			'infoDesc'  => $infoDesc[0]->desc,
			'infoAbout' => $infoAbout[0]->desc,
			'infoContact' => $infoContact[0]->desc,
		);
		
		$this->load->view('p-admin/OptionsGeneral', $data);
	}

	/**
     * On update setting
     */
	public function onSetting(){

		$this->load->model('MConfig');

		$data['desc'] = $this->input->post("web_title");
		$this->MConfig->updateData("web.title.desc", $data);

		$data['desc'] = $this->input->post("company");
		$this->MConfig->updateData("web.name.desc", $data);

		$data['desc'] = $this->input->post("contact");
		$this->MConfig->updateData("web.contact", $data);

		$data['desc'] = $this->input->post("about");
		$this->MConfig->updateData("web.about", $data);

		$data['desc'] = $this->input->post("email");
		$this->MConfig->updateData("username.admin", $data);

		$data_session = array(
			"ok" => 'ok',			
		);
		$this->session->set_userdata($data_session);

		redirect(base_url()."p-admin/OptionsGeneral");
	}
}
