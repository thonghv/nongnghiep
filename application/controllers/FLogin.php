<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FLogin extends CI_Controller {

    public function __construct(){
	    parent::__construct();
	    $this->load->library('session');
		$this->load->library('facebook');
    }

	public function index()
	{
	   	$this->data['login_url'] = $this->facebook->getLoginUrl(array('redirect_uri' => site_url('FLogin/flogin'),
		'scope' => array("email")));
		$this->load->view('lg_face/login',$this->data);
	}

	public function flogin()
	{
	    $user = "";
	    $userId = $this->facebook->getUser();
        if ($userId) {
            try {
                $user = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = "";
            }
        }
        else {
            echo 'Please try again.'; exit;
        }
        if($user!=""){
        	$uid = $user['id'];
        	// kiem tra da dang ky lan nao hay chua?
        	$dataUser = array(
        		"name"   => $user['name'],
                "password" => "",
                "email"  => $user['id'].'@facebook.com', 
        	);
        	$this->load->model("MUser");
        	$onCheck = $this->MUser->addUserFace($dataUser);

            $data = array(
                "name"   => $user['name'],
                "email"  => $user['id'].'@facebook.com', 
                "uid"    => $onCheck['id'],       
                "key"    => 2,    
                "avatar" => 'https://graph.facebook.com/'.$user['id'].'/picture?type=large',
            );

            $this->session->set_userdata($data);
            redirect(base_url());
        }else{
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('FLogin/flogin'), 
                'scope' => array("email") // permissions here
            ));
       }
        
    }

    public function faceLogin()
    {
        $id =  $this->uri->segment(3);
        $name =  $this->uri->segment(4);

        $dataUser = array(
            "name"   => urldecode($name),
            "password" => "",
            "email"  => $id.'@facebook.com',
            "avatar" => $this -> getBgAvatar(),     
        );
        $this->load->model("MUser");
        $onCheck = $this->MUser->addUserFace($dataUser);

        $data = array(
                "name"   => urldecode($name),
                "email"  => $id.'@facebook.com', 
                "uid"    => $onCheck,    
                "key"    => 2,
                "avatar" => 'https://graph.facebook.com/'.$id.'/picture?type=large',
                "id"     => $id,
        );
        $this->session->set_userdata($data);
        redirect($this->session->userdata('page_url'));
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

/* End of file fbci.php */
/* Location: ./application/controllers/fbci.php */