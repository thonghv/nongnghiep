
<!DOCTYPE HTML>
<html>
<head>

	<title>
		<?php echo $categoryName ?> | <?php echo $this->data->getWebTitle(); ?>
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
			<div class="dv-dssp">
				<div class="container">	
					<div class="col-md-12">
						<h2 class="type text-center bre_sptintuc" style="margin-bottom: 0; margin-top: 0">
							<?php echo $categoryName; ?></h2>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12 col-min-12 dv-ndung-sptt nobostrap" >
						<div class="service-grids">
							<?php
				                if(isset($products)){
				                foreach ($products as $rows) :
				                    $rows=(object)$rows;
				            ?>   
							<div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 0>
								<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2668107 data='2668107' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
									<div class='grid-arr'>
										<div  class='grid-arrival'>
											<figure>		
												<a href='<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html' class='new-gri' >
													<div class='grid-img'>
														<img  src='<?php echo base_url()?>public/img-slide/<?php echo($rows -> img_name); ?>' class='img-responsive' alt=''>
													</div>		
												</a>		
											</figure>	
										</div>
										<div class='women'>
											<div class='gr_price'>
												<h6 style = "margin-bottom: 0px"><a href='<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html'><?php echo $rows -> name; ?></a></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <?php endforeach; }?>
							<div class='page_break page_break_cus1'>
								<div class="paging"><?php echo $paginator; ?></div>  
							</div>	
							<br>			
							<div class="clear"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 col-min-12 single-page-right">
						<div class="category blog-ctgry">
							<div class="list-group">
								<?php
									if(isset($lstSubMenu)){
									foreach ($lstSubMenu as $rows) :
										$rows=(object)$rows;
								?>  
								<a href="<?php echo base_url()?><?php echo $rows->slug ?>-<?php echo $rows->id ?>.html" class="list-group-item"><?php echo $rows -> name; ?></a>
								<?php endforeach; }?>
							</div>
						</div>	
						<div class="recent-posts">
							<h4>SẢN PHẨM HOT</h4>
							<?php
									if(isset($productsTop)){
									foreach ($productsTop as $rows) :
										$rows=(object)$rows;
								?>  
							<div class='recent-posts-info'>
								<div class='posts-left sngl-img'>
									<a href='<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html'> <img src='<?php echo base_url()?>public/img-slide/<?php echo $rows -> img_name; ?>' alt='Chanh giây' style='width: 90%;' /> </a>
								</div>
								<div class='posts-right'>
									<h5><a href='<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html'><?php echo $rows -> name; ?></a></h5>
								</div>
								<div class='clearfix'> </div>
							</div>
							<?php endforeach; }?>

							<div class="clearfix"> </div>
						</div>
					</div>		
					<div class="clearfix"> </div>
				</div>
			</div>			
			</div>
		</section>
	</article>



			<?php $this->load->view("base/pc/footer.php"); ?>
</body>
</html>