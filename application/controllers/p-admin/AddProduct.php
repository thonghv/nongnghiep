<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddProduct extends CI_Controller {

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

		$data = array(
			'groups' => $groups,
			'editor' => $this->tinymce(),
		);

		$this->load->view('p-admin/AddProduct', $data);
	}

    /**
     * On add product
     */
    public function onAddProduct(){

        $nameProduct = $this->input->post("name_product");
        $slug = url_title(strtolower(getSlug($nameProduct)));

		$data = array(
            "name" => $nameProduct,	
            "slug" => $slug,
            "group_menu_id" => $this->input->post("group_menu"),
            "sub_menu_id" => $this->input->post("sub_menu"),
            "price" => $this->input->post("price"),
            "overview" => $this->input->post("overview"),
            "content" => $this->input->post("content"),
        );

        $this->load->Model('MAdmin');
        $productId = $this->MAdmin->addProduct($data);

        // updload product image
        $this->onAddImage($productId);

        $this->session->unset_userdata('ok');

        redirect(base_url()."p-admin/product");
        
    }

    public function onAddImage($productId){ 

        $this->load->model('MAdmin');
        
		$dataInfo = array();
		$files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);

		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

			$data = array( 
                'product_id' => $productId,
				'img_name' => $_FILES["userfile"]["name"],
			);

			$this->MAdmin->addProductImg($data);   

			/*upload hinh anh*/
			$this->MAdmin->do_upload("userfile");
		}
	}

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
