<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$products = $this->MAdmin->getProducts();
		$imgs = $this->MAdmin->getAllProductsImg();

		$data = array(
			'products' => $products,
			'imgs' => $imgs,
		);
		
		$this->load->view('p-admin/product', $data);
	}

	public function update($productId)
	{	
		if($this->session->userdata('name_admin') == NULL)
        {
			redirect(base_url()."p-admin/login");
        }
		
		$this->load->Model('MAdmin');
		$info = $this->MAdmin->getProductById($productId);
		$imgs = $this->MAdmin->getProductsImgById($productId);

		$groups = $this->MAdmin->getGroupsMenu();
		$subMenu = $this->MAdmin->getGroupSubMenuById($info[0] -> group_menu_id);
		
		$data = array(
			'info' => $info,
			'imgs' => $imgs,
			'editor' => $this->tinymce(),

			'groups' => $groups,
            'subMenu' => $subMenu,
		);
		
		$this->load->view('p-admin/UpdateProduct', $data);
	}

	/**
     * On add product
     */
    public function onUpdate($productId){

        $nameProduct = $this->input->post("name_product");
        $slug = url_title(strtolower(getSlug($nameProduct)));

		$data = array(
            "name" => $nameProduct,	
            "slug" => $slug,
            "group_menu_id" => $this->input->post("group_menu"),
            "sub_menu_id" => $this->input->post("sub_menu"),
            "is_show" => $this->input->post("is_show"),
            "overview" => $this->input->post("overview"),
            "content" => $this->input->post("content"),
        );

        $this->load->Model('MAdmin');
        $this->MAdmin->updateProduct($productId, $data);

        // updload product image
        $this->onAddImage($productId);

        $this->session->unset_userdata('ok');

        redirect(base_url()."p-admin/product");
        
    }

	/**
	 * On upload image
	 */
    public function onAddImage($productId){ 

        $this->load->model('MAdmin');
        $this->MAdmin->removeProductImg($productId);

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

            if($_FILES['userfile']['name'] != Null && !empty($_FILES['userfile']['name'])){   
                
                $isAvatar = 0;
                if($i == 0) {
                    $isAvatar = 1;
                }

                $data = array( 
                    'product_id' => $productId,
                    'img_name' => $_FILES["userfile"]["name"],
                    'is_avatar' => $isAvatar,
                );

                $this->MAdmin->addProductImg($data);   

                /*upload hinh anh*/
                $this->MAdmin->do_upload("userfile");
            } else {
                $nameImg = $this->input->post("input_img_".$i);
                    if($nameImg != null) {

                    $isAvatar = 0;
                    if($i == 0) {
                        $isAvatar = 1;
                    }
                    $data = array( 
                        'product_id' => $productId,
                        'img_name' => $nameImg,
                        'is_avatar' => $isAvatar,
                    );

                    $this->MAdmin->addProductImg($data);
                }
            }
		}

        if($cpt > 0) {
            if($files['userfile']['name'][0] != Null && !empty($files['userfile']['name'][0])){   
                $dataImg = array(
                    "img_name" => $files['userfile']['name'][0], 
                );
                $this->MAdmin->updateProduct($productId, $dataImg);
            } else {
                $nameImg = $this->input->post("input_img_0");
                if($nameImg != null) {
                    $dataImg = array(
                        "img_name" => $nameImg, 
                    );
                    $this->MAdmin->updateProduct($productId, $dataImg);
                }
            }
        }
	}

	/**
	* On remove product
    */
    public function onRemove($productId){

        $this->load->Model('MAdmin');
		$this->MAdmin->removeProduct($productId);
		$this->MAdmin->removeProductImg($productId);

        redirect(base_url()."p-admin/product");
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
