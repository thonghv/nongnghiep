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

    function getWebAbout()
    {
        $this->CI->load->Model('MConfig');

        $keyTitle = "web.about";
        $webTitle = $this->CI->MConfig->getDesc($keyTitle);

        return $webTitle[0]->desc;
    }

    function getWebContact()
    {
        $this->CI->load->Model('MConfig');

        $keyTitle = "web.contact";
        $webTitle = $this->CI->MConfig->getDesc($keyTitle);

        return $webTitle[0]->desc;
    }

    function getTags()
    {
        $this->CI->load->Model("MCommon");

        return $this->CI->MCommon->getTags();
    }

    /* Get groups menu */
    function getGroupsMenu()
    {
        $this->CI->load->Model('MAdmin');
        return $this->CI->MAdmin->getGroupsMenu();
    }

    /* Get subs menu */
    function getSubsMenu()
    {
        $this->CI->load->Model('MAdmin');
        return $this->CI->MAdmin->getGroupSubMenu();
    }

    /* Get slide list */
    function getSlides()
    {
        $this->CI->load->Model('MAdmin');
        return $this->CI->MAdmin->getSlide();
    }
    

}