<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Common_Controller extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->Model("MCommon");
			$this->load->Model("MHome");
		}
	}