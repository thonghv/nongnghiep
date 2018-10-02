<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

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
		
		// ARTICLE_ABOUT_TYPE
		$ARTICLE_ABOUT_TYPE = 1;

		$data = array(
			'editor'  => $this->tinymce(),
		);

		$this->load->Model('MAdmin');
		$content = $this->MAdmin->getArticleById($ARTICLE_ABOUT_TYPE);
		if(count($content) > 0) {
			$data['content'] = $content[0] -> content;
		}
		
		$this->load->view('p-admin/Article', $data);
	}

    public function introduce()
    {   
        if($this->session->userdata('name_admin') == NULL)
        {
            redirect(base_url()."p-admin/login");
        }
        
        // ARTICLE_ABOUT_TYPE
        $ARTICLE_ABOUT_TYPE = 1;

        $data = array(
            'editor'  => $this->tinymce(),

            'post_name' => 'Giới Thiệu',
            'post_type' => 1,
        );

        $this->load->Model('MAdmin');
        $content = $this->MAdmin->getArticleById($ARTICLE_ABOUT_TYPE);
        if(count($content) > 0) {
            $data['content'] = $content[0] -> content;
        }
        
        $this->load->view('p-admin/Article', $data);
    }

    public function recruiment()
    {   
        if($this->session->userdata('name_admin') == NULL)
        {
            redirect(base_url()."p-admin/login");
        }
        
        // ARTICLE_ABOUT_TYPE
        $ARTICLE_ABOUT_TYPE = 2;

        $data = array(
            'editor'  => $this->tinymce(),
            'post_name' => 'Tuyển Dụng',
            'post_type' => 2,
        );

        $this->load->Model('MAdmin');
        $content = $this->MAdmin->getArticleById($ARTICLE_ABOUT_TYPE);
        if(count($content) > 0) {
            $data['content'] = $content[0] -> content;
        }
        
        $this->load->view('p-admin/Article', $data);
    }

    public function article()
    {   
        if($this->session->userdata('name_admin') == NULL)
        {
            redirect(base_url()."p-admin/login");
        }
        
        // ARTICLE_ABOUT_TYPE
        $ARTICLE_ABOUT_TYPE = 3;

        $data = array(
            'editor'  => $this->tinymce(),
            'post_name' => 'Bài Viết Khoa Học',
            'post_type' => 3,
        );

        $this->load->Model('MAdmin');
        $content = $this->MAdmin->getArticleById($ARTICLE_ABOUT_TYPE);
        if(count($content) > 0) {
            $data['content'] = $content[0] -> content;
        }
        
        $this->load->view('p-admin/Article', $data);
    }


	/**
     * On update 
     */
    public function onUpdate($type){

		$data = array(
            "content" => $this->input->post("content"),
        );

        $this->load->Model('MAdmin');
        $productId = $this->MAdmin->updateArticle($type, $data);

        $data_session = array(
            "ok" => 'ok',           
        );
        $this->session->set_userdata($data_session);

        if($type  == 1) {
            redirect(base_url()."p-admin/posts/introduce");
        } else if($type == 2) {
            redirect(base_url()."p-admin/posts/recruiment");
        } else {
            redirect(base_url()."p-admin/posts/article");
        }
        
        
    }

	/**
	* CK Editor
	*/
	public function tinymce()
    {
        $this->load->helper('url');
        $editor = '<!-- place in header of your html document -->
            <script type="text/javascript" src="'.  base_url().'tinymce/tinymce.min.js"></script>
            <script>
            tinymce.init({
                selector: "#content" ,
                theme: "modern",
                height: 500,
                relative_urls : false,
                remove_script_host: false,
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                     "save table contextmenu directionality emoticons template paste textcolor "
               ],
               content_css: "css/content.css",
               toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",
               style_formats: [
                    {title: "Bold text", inline: "b"},
                    {title: "Red text", inline: "span", styles: {color: "#ff0000"}},
                    {title: "Red header", block: "h1", styles: {color: "#ff0000"}},
                    {title: "Example 1", inline: "span", classes: "example1"},
                    {title: "Example 2", inline: "span", classes: "example2"},
                    {title: "Table styles"},
                    {title: "Table row 1", selector: "tr", classes: "tablerow1"}
                ],
                external_filemanager_path:"'.  base_url().'filemanager/",
                filemanager_title:"Responsive Filemanager" ,
                external_plugins: { "filemanager" : "'.  base_url().'filemanager/plugin.min.js"}
             }); 
            </script>'
             ;
        return $editor;
    }
}