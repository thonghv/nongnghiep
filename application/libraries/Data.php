<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data {

   	var $CI = '';
    function __construct()
    {
        $this->CI =& get_instance();
    }

    function getWebTitle()
    {
        $this->CI->load->Model('MConfig');

        $keyTitle = "web.title.desc";
		$webTitle = $this->CI->MConfig->getDesc($keyTitle);

        return $webTitle[0]->desc;
    }

    function getWebName()
    {
        $this->CI->load->Model('MConfig');

        $keyTitle = "web.name.desc";
        $webTitle = $this->CI->MConfig->getDesc($keyTitle);

        return $webTitle[0]->desc;
    }

    function getCompanyName()
    {
        $this->CI->load->Model('MConfig');

        $keyTitle = "company.name";
        $webTitle = $this->CI->MConfig->getDesc($keyTitle);

        return $webTitle[0]->desc;
    }

    function getTags()
    {
        $this->CI->load->Model("MCommon");

        return $this->CI->MCommon->getTags();
    }

    function isVotes($uid, $jsonVotes)
    {
        if($uid == 0) {
            return 0;
        }
        
        $arrayUid = json_decode($jsonVotes);
        foreach ($arrayUid as $value) {
            if($uid == (int) $value) {
                return 1;
            }
        }
        return 0;
    }
}