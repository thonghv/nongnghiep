
<!DOCTYPE HTML>
<html>
<head>

	<title>Category ....</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="<?php echo $this->data->getWebTitle(); ?>"/>
	<meta name="robots" content="index,follow"/>
	<meta name="keywords" content="">

	<meta property="fb:app_id" content="485481295145208" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="">
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
	<div id="logo">
		<h1 class="logo" style = "border: none;">
			<a href="https://web30s.vn/">
				<img style = "height: 30px;" src="http://web30s.vn/images/logo.png" alt=""></a>
			</h1>
		</div>
		<div class="template_id" style = "margin-left: 5px;">
			<a target="_blank" href="http://demonongnghiep.web30s.vn/">
				<?php echo $this->data->getCompanyName(); ?>
			</a>
		</div>

	</div>

</div>
<div class="header bg_header" id="home" style = "margin-top: 55px;">
	<div class="slidercontainer">  
		<div class="showSlide">  
			<img height="230px" width="" src="<?php echo base_url()?>public/img/banner.jpg" />  
		</div>
		<div class="showSlide">  
			<img height="230px" src="http://files.vforum.vn/2015/T10/img/vforum.vn-233771-natural-landscape-16.jpg" />  
		</div>  
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
								<h2 class="type text-center bre_sptintuc" 
								style  = "margin-top: 0px; margin-bottom: 0px;">
								Nhóm trái cây</h2>
							</div>
							<div class="col-md-9 col-sm-8 col-xs-12 col-min-12 dv-ndung-sptt nobostrap" >
								<div class="service-grids">
									<div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 0>
										<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2668107 data='2668107' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
											<div class='grid-arr'>
												<div  class='grid-arrival'>
													<figure>		
														<a href='http://demonongnghiep.web30s.vn/kiwi' class='new-gri' >
															<div class='grid-img'>
																<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/trái cây/J14SZ84.jpg' class='img-responsive' alt=''>
															</div>		
														</a>		
													</figure>	
												</div>
												<div class='women'>
													<div class='gr_price'>
														<h6><a href='http://demonongnghiep.web30s.vn/kiwi'>Kiwi</a></h6>
														<span class=' gia_km'>263,000 VNĐ</span>
														<span class='item_price gia_ban'>241,000 VNĐ</span>
													</div>
												</div>
											</div>
										</div>
									</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 0>
										<div class=' arrival-grid simpleCart_shelfItem wow fadeInUpBig animated glo-trang-thai-sp glo-trang-thai-sp-2668106 data='2668106' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
											<div class='grid-arr'>
												<div  class='grid-arrival'>
													<figure>		
														<a href='http://demonongnghiep.web30s.vn/cherry-nhap-khau-my' class='new-gri' >
															<div class='grid-img'>
																<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/trái cây/cherries2.jpg' class='img-responsive' alt=''>
															</div>		
														</a>		
													</figure>	
												</div>
												<div class='women'>
													<div class='gr_price'>
														<h6><a href='http://demonongnghiep.web30s.vn/cherry-nhap-khau-my'>Cherry nhập khẩu mỹ</a></h6>
														<span class='hide gia_km'></span>
														<span class='item_price gia_ban'>990,000 VNĐ</span>
													</div>
												</div>
											</div>
										</div>
									</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 0>
										<div class=' arrival-grid simpleCart_shelfItem wow bounceInRight animated glo-trang-thai-sp glo-trang-thai-sp-2668105 data='2668105' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
											<div class='grid-arr'>
												<div  class='grid-arrival'>
													<figure>		
														<a href='http://demonongnghiep.web30s.vn/dua-hau' class='new-gri' >
															<div class='grid-img'>
																<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/trái cây/dưa hấu hắc mỹ nhân.JPG' class='img-responsive' alt=''>
															</div>		
														</a>		
													</figure>	
												</div>
												<div class='women'>
													<div class='gr_price'>
														<h6><a href='http://demonongnghiep.web30s.vn/dua-hau'>Dưa hấu</a></h6>
														<span class=' gia_km'>20,000 VNĐ</span>
														<span class='item_price gia_ban'>15,000 VNĐ</span>
													</div>
												</div>
											</div>
										</div>
									</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 4>
										<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2368961 data='2368961' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
											<div class='grid-arr'>
												<div  class='grid-arrival'>
													<figure>		
														<a href='http://demonongnghiep.web30s.vn/Chanh-giay-336920' class='new-gri' >
															<div class='grid-img'>
																<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750443998850_chanh-day.jpg' class='img-responsive' alt=''>
															</div>		
														</a>		
													</figure>	
												</div>
												<div class='women'>
													<div class='gr_price'>
														<h6><a href='http://demonongnghiep.web30s.vn/Chanh-giay-336920'>Chanh giây</a></h6>
														<span class=' gia_km'>55,000 VNĐ</span>
														<span class='item_price gia_ban'>25,000 VNĐ</span>
													</div>
												</div>
											</div>
										</div>
									</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 4>
										<div class=' arrival-grid simpleCart_shelfItem wow fadeInDownBig animated glo-trang-thai-sp glo-trang-thai-sp-2368949 data='2368949' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
											<div class='grid-arr'>
												<div  class='grid-arrival'>
													<figure>		
														<a href='http://demonongnghiep.web30s.vn/Chuoi-laba-336917' class='new-gri' >
															<div class='grid-img'>
																<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750374884347_chuoi-ngu.jpg' class='img-responsive' alt=''>
															</div>		
														</a>		
													</figure>	
												</div>
												<div class='women'>
													<div class='gr_price'>
														<h6><a href='http://demonongnghiep.web30s.vn/Chuoi-laba-336917'>Chuối laba</a></h6>
														<span class='hide gia_km'></span>
														<span class='item_price gia_ban'>16,000 VNĐ</span>
													</div>
												</div>
											</div>
										</div>
									</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 4>
										<div class=' arrival-grid simpleCart_shelfItem wow bounceInRight animated glo-trang-thai-sp glo-trang-thai-sp-2368948 data='2368948' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
											<div class='grid-arr'>
												<div  class='grid-arrival'>
													<figure>		
														<a href='http://demonongnghiep.web30s.vn/Bo-sap-336916' class='new-gri' >
															<div class='grid-img'>
																<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750374024529_bo-sap-daklak-8.jpg' class='img-responsive' alt=''>
															</div>		
														</a>		
													</figure>	
												</div>
												<div class='women'>
													<div class='gr_price'>
														<h6><a href='http://demonongnghiep.web30s.vn/Bo-sap-336916'>Bơ sáp</a></h6>
														<span class='hide gia_km'></span>
														<span class='item_price gia_ban'>26,000 VNĐ</span>
													</div>
												</div>
											</div>
										</div>
									</div><div class='page_break page_break_cus1'></div>				<div class="clear"></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-12 col-min-12 single-page-right">
								<div class="category blog-ctgry">
									<div class="list-group">
										<a href="/Nhom-trai-cay-336912" class="list-group-item">Nhóm trái cây</a>
										<a href="/Nhom-cu-qua-336913" class="list-group-item">Nhóm củ, quả</a>
										<a href="/Nhom-cai-bap-rau-la-336914" class="list-group-item">Nhóm cải bắp, rau lá</a>
										<a href="/Nhom-rau-tao-mui-336915" class="list-group-item">Nhóm rau tạo mùi</a>
									</div>
								</div>	
								<div class="recent-posts">
									<h4>SẢN PHẨM HOT</h4>
									<div class='recent-posts-info'>
										<div class='posts-left sngl-img'>
											<a href='http://demonongnghiep.web30s.vn/Chanh-giay-336920'> <img src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750443998850_chanh-day.jpg' alt='Chanh giây' style='width: 90%;' /> </a>
										</div>
										<div class='posts-right'>
											<h5><a href='http://demonongnghiep.web30s.vn/Chanh-giay-336920'>Chanh giây</a></h5>
											<span class=' right_gia_km'>55,000 VNĐ</span>
											<span class='item_price right_gia_ban'>25,000 VNĐ</span>
										</div>
										<div class='clearfix'> </div>
									</div>	<div class='recent-posts-info'>
										<div class='posts-left sngl-img'>
											<a href='http://demonongnghiep.web30s.vn/Nha-dam-336918'> <img src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750375491709_Mat-na-tu-nhien-tri-tan-nhang-4.jpg' alt='Nha đam' style='width: 90%;' /> </a>
										</div>
										<div class='posts-right'>
											<h5><a href='http://demonongnghiep.web30s.vn/Nha-dam-336918'>Nha đam</a></h5>
											<span class='hide right_gia_km'></span>
											<span class='item_price right_gia_ban'>42,000 VNĐ</span>
										</div>
										<div class='clearfix'> </div>
									</div>	<div class='recent-posts-info'>
										<div class='posts-left sngl-img'>
											<a href='http://demonongnghiep.web30s.vn/Chuoi-laba-336917'> <img src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750374884347_chuoi-ngu.jpg' alt='Chuối laba' style='width: 90%;' /> </a>
										</div>
										<div class='posts-right'>
											<h5><a href='http://demonongnghiep.web30s.vn/Chuoi-laba-336917'>Chuối laba</a></h5>
											<span class='hide right_gia_km'></span>
											<span class='item_price right_gia_ban'>16,000 VNĐ</span>
										</div>
										<div class='clearfix'> </div>
									</div>	<div class='recent-posts-info'>
										<div class='posts-left sngl-img'>
											<a href='http://demonongnghiep.web30s.vn/Bo-sap-336916'> <img src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750374024529_bo-sap-daklak-8.jpg' alt='Bơ sáp' style='width: 90%;' /> </a>
										</div>
										<div class='posts-right'>
											<h5><a href='http://demonongnghiep.web30s.vn/Bo-sap-336916'>Bơ sáp</a></h5>
											<span class='hide right_gia_km'></span>
											<span class='item_price right_gia_ban'>26,000 VNĐ</span>
										</div>
										<div class='clearfix'> </div>
									</div>			
									<div class="clearfix"> </div>
								</div>
							</div>		<div class="clearfix"> </div>
						</div>
					</div>			</div>
				</section>
			</article>


			<?php $this->load->view("base/pc/footer.php"); ?>
</body>
</html>