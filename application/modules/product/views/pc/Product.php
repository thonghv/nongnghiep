
<!DOCTYPE HTML>
<html>
<head>

	<title>
		<?php echo $info[0] -> name; ?> | <?php echo $this->data->getWebTitle(); ?>
        ?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="<?php echo $this->data->getWebTitle(); ?>"/>
	<meta name="robots" content="index,follow"/>
	<meta name="keywords" content="">

	<meta property="fb:app_id" content="485481295145208" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $info[0] -> name; ?>" />
	<meta property="og:description" content="<?php echo $info[0] -> overview; ?>" />
	<meta property="og:url" content="<?php echo base_url()?>san-pham/<?php echo $info[0] -> slug; ?>-<?php echo $info[0] ->id;?>.html" />
	<meta property="og:image" content="<?php echo base_url()?>public/img-slide/<?php echo $info[0]-> img_name; ?>">
	<meta property="og:image:width" content="200" />
	<meta property="og:image:height" content="200" />

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
		background-color: rgb(0, 0, 0) !important;
	}  
	.right {  
		right: 0;  
		border-radius: 3px 0 0 3px;  
	}  
	.left:hover, .right:hover {  
		background-color: rgb(179, 173, 173) !important;
	}
	.img-responsive {
	    width: 223px;
	    height: 223px;
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
	<div id="logo">
		<h1 class="logo">
			<a href="<?php echo base_url()?>"><img src="http://web30s.vn/images/logo.png" alt=""></a>
		</h1>
	</div>
	<div class="template_id">
		<a href="">
		<?php echo $this->data->getWebName(); ?>
		</a>
	</div>

</div>
<div class="header bg_header" id="home" style = "margin-top: 55px; min-height: 380px;">
	<div class="slidercontainer">  
			<?php
                if($this->data->getSlides() != null){
                foreach ($this->data->getSlides() as $rows) :
                    $rows=(object)$rows;
            ?>   
            <div class="showSlide">  
                <img height="390px" width="" src="<?php echo base_url()?>public/img-slide/<?php echo $rows->name; ?>" />  
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
					<div class="header-top" style = "margin-top: -358px;
					text-align: center;">
					<?php $this->load->view("base/pc/menu.php"); ?> 
					<div class="clearfix"></div>
				</div>
			</div>	
		</div>
	</div>

	<article>
		<section class="content gallery pad1" style='padding:0'>
			<div class="midle_main_idclass fix1200_cus1">
				<div class="prdt">
					<div class="container">
						<div class="prdt-top">
							<div class="col-md-9 col-sm-8 col-xs-12 col-min-12 blog-left">
								<div class="product-model">
									<div class="items-sec bre_viewpro view_product_sp" style="float: left;">

										<div class="breadcrumb"><a href='' class='linky'><span>Sản phẩm</span></a><span class=''>&raquo;</span><a href='<?php echo base_url()?><?php echo $categoryInfo[0] -> slug;?>-<?php echo $categoryInfo[0] -> id;?>.html' class='linky'><span><?php echo $categoryInfo[0] -> name; ?></span></a></div>

										<a href='JavaScript:ajax_action(2368969,1);' class='butthree' style='margin-left:10px;'><img src='/images/love_icon.png' align='absmiddle' width='15' height='15'>Thích</a>
										<a href='JavaScript:ajax_action(2368969,2);' class='butthree' style='margin-left:70px;'><img src='/images/needle_icon.png' align='absmiddle' width='15' height='15'> Muốn</a>
										<div class="main_content_top main_content_top_cus1">
											<script type="text/javascript" src="<?php echo base_url()?>public/js/pc/jquery.simple-gallery.min.js"></script>
											<script type="text/javascript" src="<?php echo base_url()?>public/js/pc/jquery.simple-lens.min.js"></script>
											<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/pc/jquery.simple-lens.css">
											<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/pc/jquery.simple-gallery.css">
											<script>
												$(document).ready(function(){
													$('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
														loading_image: 'demo/images/loading.gif',
														show_event: 'click'
													});

													$('#demo-1 .simpleLens-big-image').simpleLens({
														loading_image: 'demo/images/loading.gif'
													});
												});
											</script>
											<div class="simpleLens-gallery-container main_col_left main_col_left_cus1" id="demo-1">
												<div class="simpleLens-container">
													<div class="simpleLens-big-image-container">
														<a class="simpleLens-lens-image" data-lens-image="<?php echo base_url()?>public/img-slide/<?php echo $info[0]->img_name; ?>">
															<img alt='Dưa leo' class="simpleLens-big-image" src="<?php echo base_url()?>public/img-slide/<?php echo $info[0]->img_name; ?>"/>
														</a>
													</div>
												</div>

												<div class="simpleLens-thumbnails-container body_thumb_content body_thumb_content_cus1">
													<?php
														if(isset($imgInfo)){
														foreach ($imgInfo as $rows) :
															$rows=(object)$rows;
													?>  
													<a href='JavaScript:void(0);' class='simpleLens-thumbnail-wrapper'
													data-lens-image='<?php echo base_url()?>public/img-slide/<?php echo $rows -> img_name; ?>'
													data-big-image='<?php echo base_url()?>public/img-slide/<?php echo $rows -> img_name; ?>'>
													<img class='border_images' src='<?php echo base_url()?>public/img-slide/<?php echo $rows -> img_name; ?>' width='50'>
													</a>
													<?php endforeach; }?>
													
										</div>

									</div>

									<div class="main_col_right main_col_right_cus1">
										<div style='padding:8px;' class='text_color'><div class='comment_nho'><span id='love_2368969'>0</span> Yêu thích</div> <div class='comment_nho'><span id='want_2368969'>0</span> Muốn mua</div></div>        <div class="clear"></div>
										<h1 class="main_right_title"><?php echo $info[0] -> name; ?></h1>

										<div class="clear"></div>
										<div class="line_top_1 line_top_cus1"></div>
										<div class="global_ghichu_1 global_ghichu_2">
										<?php echo $info[0] -> overview; ?>
										</div>
										<div class="clear"></div>
										<div class='gia_thanhtien gia_thanhtien_cus1'><span class='glo-tgiagoc' style='display:none'></div>        
										<div class="product_details_cart">

											<!-- update by 1k 24-3-2017 v1-->
											<div class="product-quantity">
												<div class="numbers-row">
													<div class="buttontext left" onclick="ADD_num_quantity('-')">-</div>
													<input class="intext left" type="text" name="quantity" value="1" id="input-quantity">
													<div class="buttontext left" onclick="ADD_num_quantity('+')">+</div>
													<!--update by 5k 26-7-2016-->
													<div class="left icon_body icon_body_sosanh_cus1"><a href='JavaScript:ajax_action(2368969,2);'><i class="fa fa-retweet"></i></a></div>
													<div class="left icon_body icon_body_love_cus1"><a href='JavaScript:ajax_action(2368969,1);'><i class="fa fa-heart-o"></i></a></div>
													<!--end update by 5k 26-7-2016--> <div class="left icon_body icon_body_love_cus1"><a href='' class='lightbox'><i class="fa fa-search-plus"></i></a></div>
												</div>
											</div>
											<div class="product-bottom">
												<button onclick="location.href='/cart-add/2368969/'+$('#input-quantity').val();" type="button" id="button-cart" class="button btn-cart shopng-btn">Thêm vào giỏ hàng</button>                </div>
												<script type="text/javascript">
													function ADD_num_quantity(loai)
													{
														var num = $("#input-quantity").val();
														if(isNaN(num))
														{
															num = 1;
														}
														if(loai 		== '-' && num > 1) num--;
														else if(loai 	== '+' && num < 100000) num++;
														$("#input-quantity").val(num);
													}
												</script>
												<!-- end update by 1k 24-3-2017 v1-->

												<div class="social_network_right">
													<ul class="social_links"><li class="zalo">
														<div class="zalo-share-button" data-href="<?php echo base_url()?>san-pham/<?php echo $info[0] -> slug; ?>-<?php echo $info[0] ->id;?>.html" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div>
														<script src="https://sp.zalo.me/plugins/sdk.js"></script>
													</li><li class="facebook">
														<script>
															if (!document.getElementById('fb-root')) {
																document.writeln('<div id="fb-root" style="display: inline-block;"></div>');
																(function(d, s, id) {
																	var js, fjs = d.getElementsByTagName(s)[0];
																	if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;//vi_VN //en_US
                          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=164566120964750";
                          fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));
															}
														</script><div class="fb-share-button" data-layout="button" data-href="<?php echo base_url()?>san-pham/<?php echo $info[0] -> slug; ?>-<?php echo $info[0] ->id;?>.html"></div>
													</li></ul>                </div>
												</div>
											</div>
											<div class='clear'></div>
										</div>

										<div class="main_content_body main_content_body_cus1">
											<div class='microformat'>
											<?php echo $info[0] -> content; ?>
											</div>    
											<script>
												var div_fb_like = document.getElementById('fb-like');
												if (div_fb_like) {
													div_fb_like.setAttribute('data-width', div_fb_like.parentNode.offsetWidth);
												}
											</script>
											<div class="clear"></div>
										</div>
										<div class="clearfix"></div>
									</div>

								</div>
								<div class="clearfix"></div>
								<div class="product-tab">
									<div class="service-sec dv-splienquan">
										<div class="border-top-splq"></div>
										<div class="service-grids dv-ndung-sptt">
											<?php
												if(isset($productsSame)){
												foreach ($productsSame as $rows) :
													$rows=(object)$rows;
											?>  
											<div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
												<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2368962 data='2368962' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
													<div class='grid-arr'>
														<div  class='grid-arrival'>
															<figure>		
																<a href='<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html' class='new-gri' >
																	<div class='grid-img'>
																		<img  src='<?php echo base_url()?>public/img-slide/<?php echo $rows -> img_name; ?>' class='img-responsive' alt=''>
																	</div>		
																</a>		
															</figure>	
														</div>
														<div class='women'>
															<div class='gr_price'>
																<h6><a href='<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html'><?php echo $rows -> name; ?></a></h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<?php endforeach; }?>
											
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12 col-min-12 single-page-right">
									<div class="category blog-ctgry">
										<div class="list-group">
										<?php
											if(isset($lstSubMenu)){
											foreach ($lstSubMenu as $rows) :
												$rows=(object)$rows;
										?>  
										<a href="/Nhom-trai-cay-336912" class="list-group-item"><?php echo $rows -> name; ?></a>
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
								</div>            <div class="clearfix"></div>
							</div>
						</div>
					</div>
					<style>
					.product_details_cart .product-quantity, .product_details_cart .product-bottom {
						display: none
					}
				</style>			</div>
			</section>
		</article>


		<?php $this->load->view("base/pc/footer.php"); ?>
	</body>
	</html>