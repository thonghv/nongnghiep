<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->helper('pdf_helper');
    }

	function pdf()
	{
	    $data=array(
	    	'hoa' => 'huỳnh',
		);
	    /*
	        ---- ---- ---- ----
	        your code here
	        ---- ---- ---- ----
	    */
	    $this->load->view('pdfreport', $data);
	}
}