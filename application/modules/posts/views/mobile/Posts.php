
<!DOCTYPE HTML>
<html>
<head>

	<title>
		<?php echo $nameType; ?> | <?php echo $this->data->getWebTitle(); ?>
        ?>
	</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="<?php echo $this->data->getWebTitle(); ?>"/>
	<meta name="robots" content="index,follow"/>
	<meta name="keywords" content="">

	<link rel="shortcut icon" type="image/x-icon" href="http://web30s.vn/images/favicon.ico"/>
	<script src="<?php echo base_url()?>public/js/pc/jquery-1.8.2.min.js"></script>
	<link href="<?php echo base_url()?>public/css/pc/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/css/pc/global.css?v=6.8.0" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/css/pc/divbox.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/css/pc/bxslider.css" rel="stylesheet" type="text/css">

	<script src="<?php echo base_url()?>public/js/pc/jquery.mCustomScrollbar.concat.min.js"></script>
	<link href="<?php echo base_url()?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/css/pc/customize.php.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url()?>public/css/pc/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript" src="<?php echo base_url()?>public/js/pc/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>public/js/pc/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){     
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/pc/swipebox.css">
	<script src="<?php echo base_url()?>public/js/pc/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<script src="<?php echo base_url()?>public/js/pc/wow.min.js"></script>
	<link href="<?php echo base_url()?>public/css/pc/animate.css" rel='stylesheet' type='text/css' />
	<script>
		new WOW().init();
	</script>
	<style type="text/css">
	.showSlide {  
		display: none  
	}
	.showSlide img {  
		width: 100%;  
	}  
	.slidercontainer {  
		position: relative;  
		margin: auto;  
	} 
	.left, .right {  
		cursor: pointer;  
		position: absolute;  
		top: 50%;  
		width: auto;  
		padding: 16px;  
		margin-top: -22px;  
		color: white;  
		font-weight: bold;  
		font-size: 18px;  
		transition: 0.6s ease;  
		border-radius: 0 3px 3px 0;
		background-color: rgba(175, 172, 175, 0.57);
	}  
	.right {  
		right: 0;  
		border-radius: 3px 0 0 3px;  
	}  
	.left:hover, .right:hover {  
		background-color: rgb(179, 173, 173) !important;
	}
	.fa-angle-double-right {
		float: right;
		line-height:20px;
	} 
</style>
</head>
<body>
	<div class="head_top header_admin">
		<div class="bg_top"><script>
			function jsupdate(k,idclass,jscolor) {
				if(k==0) 		$("."+idclass).css("background-color","#"+jscolor);
				else if (k==1)	$("."+idclass).css("color","#"+jscolor);
			}
		</script>
	</div>
</div>
<div class="dv-header">
	<?php $this->load->view("base/mobile/info.php"); ?>

</div>
<div class="header bg_header" id="home" style = "margin-top: 55px;">
	<div class="slidercontainer">  
			<?php
                if($this->data->getSlides() != null){
                foreach ($this->data->getSlides() as $rows) :
                    $rows=(object)$rows;
            ?>   
            <div class="showSlide">  
                <img height="230px" width="" src="<?php echo base_url()?>public/img-slide/<?php echo $rows->name; ?>" />  
            </div>
            <?php endforeach; }?> 
		<a class="left" onclick="nextSlide(-1)">&#10094;</a>  
		<a class="right" onclick="nextSlide(1)">&#10095;</a>  
	</div>
	<script type="text/javascript">  
		var slide_index = 1;  
		displaySlides(slide_index);  

		function nextSlide(n) {  
			displaySlides(slide_index += n);  
		}  

		function currentSlide(n) {  
			displaySlides(slide_index = n);  
		}  

		function displaySlides(n) {  
			var i;  
			var slides = document.getElementsByClassName("showSlide");  
			if (n > slides.length) { slide_index = 1 }  
				if (n < 1) { slide_index = slides.length }  
					for (i = 0; i < slides.length; i++) {  
						slides[i].style.display = "none";  
					}  
					slides[slide_index - 1].style.display = "block";  
				}  
			</script>  
			<div class="container">
				<div class="col-md-12">
					<div class="header-top" style  = "margin-top: -205px;">
						<?php $this->load->view("base/mobile/menu.php"); ?> 
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>
		</div>	
		<article>
			<section class="content gallery pad1" style='padding:0'>
				<div class="midle_main_idclass fix1200_cus1">
					<div class="product-model gioi-thieu-model">  
						<div class="container">
							<div class="col-md-12">
								<div class='global_left_panel global_left_panel_cus1' style="width: 25%; float: left;">
								<div class="global_gioithieu11 global_gioithieu11_cus1">Bảng Tin</div>
								<a href='<?php echo base_url()?>gioi-thieu.html' class='global_subnote_fa global_subnote_fa_cus1'><i class='' aria-hidden='true'></i> Giới Thiệu Về Công Ty</a>
								<a href='<?php echo base_url()?>bai-viet-khoa-hoc.html' class='global_subnote_fa global_subnote_fa_cus1'><i class='' aria-hidden='true'></i> Bài Viết Khoa Học</a>
								<a href='<?php echo base_url()?>tuyen-dung.html' class='global_subnote_fa global_subnote_fa_cus1'><i class='' aria-hidden='true'></i> Tuyển Dụng</a>
								
							</div>
								<div class="global_right_panel_info right_panel_info_cus1" style="width: 70%; float: right;">
									<div class="head_title_center title_info_cus1 title_info_cus2"<?php echo $nameType; ?></div>
									<div class="boxstyle_center text_color title_center_z_cus1 title_center_z_cus2">
										<!-- NỘI DUNG -->
										<?php echo $content[0] -> content; ?>
										<!-- END NỘI DUNG -->
										<script>
											var div_fb_like = document.getElementById('fb-like');
											if (div_fb_like) {
												div_fb_like.setAttribute('data-width', div_fb_like.parentNode.offsetWidth);
											}
										</script>
									</div>
								</div>        <div class="clearfix"></div>
							</div>
						</div>
					</div>			</div>
				</section>
			</article>

			<?php $this->load->view("base/mobile/footer.php"); ?>

		</body>
		</html>