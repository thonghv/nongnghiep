<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GLogin extends CI_Controller {

    public function __construct(){
	    parent::__construct();
	    $this->load->library('session');
		$this->load->library('google');
    }

    public function index()
	{
		if($this->session->userdata('name') != NULL)
        {
			redirect(base_url()."users/login");
        }

        if(isset($_GET['code'])){
            //authenticate user
            $this->google->getAuthenticate();
            
            //get user info from google
            $gpInfo = $this->google->getUserInfo();
            
            $dataUser = array(
        		"name"   => $gpInfo['given_name'],
                "password" => "",
                "email"  => $gpInfo['email'],
                "avatar" => $this -> getBgAvatar(),    
        	);
        	$this->load->model("MUser");
        	$onCheck = $this->MUser->addUserFace($dataUser);

            //preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid']      = $gpInfo['id'];
            $userData['first_name']     = $gpInfo['given_name'];
            $userData['last_name']      = $gpInfo['family_name'];
            $userData['email']          = $gpInfo['email'];
            $userData['gender']         = !empty($gpInfo['gender'])?$gpInfo['gender']:'';
            $userData['locale']         = !empty($gpInfo['locale'])?$gpInfo['locale']:'';
            $userData['profile_url']    = !empty($gpInfo['link'])?$gpInfo['link']:'';
            $userData['picture_url']    = !empty($gpInfo['picture'])?$gpInfo['picture']:'';
            
            $data = array(
                "name"   => $gpInfo['given_name'].' '.$gpInfo['family_name'] ,
                "email"  => $gpInfo['email'],
                "uid"    => $onCheck,       
                "key"    => 3,
                "avatar" => $gpInfo['picture'],
            );

            $this->session->set_userdata($data);
            
            redirect($this->session->userdata('page_url'));
        } 
        
        //google login url
        $data['loginURL'] = $this->google->loginURL();

        $this->load->view('GLogin', $data);
        
	}

    /* Create background for avatar */
    public function getBgAvatar()
    {
        $color = array("#688A08", "#efabab", "#72d4de", "#088A68", "#deae72", "#B45F04", "#de72bd", "#de72a4", "#8372de", "#72b1de", "#68926d", "#8090ad", "#5dbd83", "#e26154", "#9d4dc5", "#FE642E", "#8d88ab", "#40bdb7", "#72bb6d", "#ce5858", "#ce5884", "#a84abf", "#cbdc3e");
        shuffle($color);
        shuffle($color);
        return $color[0];
    }
}