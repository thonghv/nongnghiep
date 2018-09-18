<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function tinymce($height)
    {
        $editor = '<!-- place in header of your html document -->
            <script type="text/javascript" src="'.  base_url().'tinymce/tinymce.min.js"></script>
            <script>
            tinymce.init({
                selector: "#desc" ,
                theme: "modern",
                height: '.$height.',
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

    function tinymce_w($height)
    {
        $editor = '<!-- place in header of your html document -->
            <script type="text/javascript" src="'.  base_url().'tinymce/tinymce.min.js"></script>
            <script>
            tinymce.init({
                selector: "#desc" ,
                theme: "modern",
                height: '.$height.',
                relative_urls : false,
                remove_script_host: false,
                plugins: [
                    
               ],
               content_css: "content.css",
               toolbar: "",
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


    /*
	* Ham tao slug cho san pham 
	*/
	function getSlug($str)
	{
			$coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
			,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
				"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
			,"ờ","ớ","ợ","ở","ỡ",
				"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
				"ỳ","ý","ỵ","ỷ","ỹ",
				"đ",
				"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
			,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
				"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
				"Ì","Í","Ị","Ỉ","Ĩ",
				"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
			,"Ờ","Ớ","Ợ","Ở","Ỡ",
				"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
				"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
				"Đ","ê","ù","à");
			$khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
			,"a","a","a","a","a","a",
				"e","e","e","e","e","e","e","e","e","e","e",
				"i","i","i","i","i",
				"o","o","o","o","o","o","o","o","o","o","o","o"
			,"o","o","o","o","o",
				"u","u","u","u","u","u","u","u","u","u","u",
				"y","y","y","y","y",
				"d",
				"A","A","A","A","A","A","A","A","A","A","A","A"
			,"A","A","A","A","A",
				"E","E","E","E","E","E","E","E","E","E","E",
				"I","I","I","I","I",
				"O","O","O","O","O","O","O","O","O","O","O","O"
			,"O","O","O","O","O",
				"U","U","U","U","U","U","U","U","U","U","U",
				"Y","Y","Y","Y","Y",
				"D","e","u","a");
		return str_replace($coDau,$khongDau,$str);
	} 
}