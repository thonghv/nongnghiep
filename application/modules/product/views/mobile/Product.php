
<!DOCTYPE HTML>
<html>
<head>

	<title>Product ....</title>
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
					<div class="prdt">
						<div class="container">
							<div class="prdt-top" style = "margin-top: 0px; margin-bottom: 0px;">
								<div class="col-md-9 col-sm-8 col-xs-12 col-min-12 blog-left">
									<div class="product-model">
										<div class="items-sec bre_viewpro view_product_sp" style="float: left;">

											<div class="breadcrumb"><a href='http://demonongnghiep.web30s.vn/San-pham' class='linky'><span>Sản phẩm</span></a><span class=''>&raquo;</span><a href='http://demonongnghiep.web30s.vn/Nhom-cu-qua-336913' class='linky'><span>Nhóm củ, quả</span></a></div>

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
															<a class="simpleLens-lens-image" data-lens-image="http://cdn.web30s.vn/datafiles/4252/upload/images/14750449112698_3-1.jpg">
																<img alt='Dưa leo' class="simpleLens-big-image" src="http://cdn.web30s.vn/datafiles/4252/upload/images/14750449112698_3-1.jpg"/>
															</a>
														</div>
													</div>

													<div class="simpleLens-thumbnails-container body_thumb_content body_thumb_content_cus1">
														<a href='JavaScript:void(0);' class='simpleLens-thumbnail-wrapper'
														data-lens-image='http://cdn.web30s.vn/datafiles/4252/upload/images/14750449112698_3-1.jpg'
														data-big-image='http://cdn.web30s.vn/datafiles/4252/upload/images/14750449112698_3-1.jpg'>
														<img class='border_images' src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750449112698_3-1.jpg' width='50'>
													</a>
													<a href='JavaScript:void(0);' class='simpleLens-thumbnail-wrapper'
													data-lens-image='https://hatgiongf1.com/wp-content/uploads/2015/07/ca-chua-bi-lun-do21-550x550.jpg'
													data-big-image='https://hatgiongf1.com/wp-content/uploads/2015/07/ca-chua-bi-lun-do21-550x550.jpg'>
													<img class='border_images' src='https://hatgiongf1.com/wp-content/uploads/2015/07/ca-chua-bi-lun-do21-550x550.jpg' width='50'>
												</a>

											</div>

										</div>

										<div class="main_col_right main_col_right_cus1">
											<div style='padding:8px;' class='text_color'><div class='comment_nho'><span id='love_2368969'>0</span> Yêu thích</div> <div class='comment_nho'><span id='want_2368969'>0</span> Muốn mua</div></div>        <div class="clear"></div>
											<h1 class="main_right_title">Dưa leo</h1>

											<div class="clear"></div>
											<div class="line_top_1 line_top_cus1"></div>
											<div class="global_ghichu_1 global_ghichu_2"><p>Chuy&ecirc;n cung cấp n&ocirc;ng sản khu vực trong v&agrave; ngo&agrave;i nước</p></div>
											<div class="clear"></div>
											<div class='gia_thanhtien gia_thanhtien_cus1'><span class='glo-tgiagoc' style='display:none'>Giá bán</span>16,000 VND </div>        <div class="product_details_cart">

												<!-- update by 1k 24-3-2017 v1-->
												<div class="product-quantity">
													<div class="numbers-row">
														<div class="buttontext left" onclick="ADD_num_quantity('-')">-</div>
														<input class="intext left" type="text" name="quantity" value="1" id="input-quantity">
														<div class="buttontext left" onclick="ADD_num_quantity('+')">+</div>
														<!--update by 5k 26-7-2016-->
														<div class="left icon_body icon_body_sosanh_cus1"><a href='JavaScript:ajax_action(2368969,2);'><i class="fa fa-retweet"></i></a></div>
														<div class="left icon_body icon_body_love_cus1"><a href='JavaScript:ajax_action(2368969,1);'><i class="fa fa-heart-o"></i></a></div>
														<!--end update by 5k 26-7-2016--> <div class="left icon_body icon_body_love_cus1"><a href='http://demonongnghiep.web30s.vn/datafiles/4252/upload/images/14750449112698_3-1.jpg' class='lightbox'><i class="fa fa-search-plus"></i></a></div>
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
															<div class="zalo-share-button" data-href="http://demonongnghiep.web30s.vn/Dua-leo-336928" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div>
															<script src="https://sp.zalo.me/plugins/sdk.js"></script>
														</li><li class="twitter">
															<script>window.twttr = (function(d, s, id) {
																var js, fjs = d.getElementsByTagName(s)[0],
																t = window.twttr || {};
																if (d.getElementById(id)) return t;
																js = d.createElement(s);
																js.id = id;
																js.src = "//platform.twitter.com/widgets.js";
																fjs.parentNode.insertBefore(js, fjs);
																t._e = [];
																t.ready = function(f) {
																	t._e.push(f);
																};
																return t;
															}(document, "script", "twitter-wjs"));</script>
															<a class="twitter-share-button" href="https://twitter.com/intent/tweet?url=http://demonongnghiep.web30s.vn/Dua-leo-336928"></a>
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
															</script><div class="fb-share-button" data-layout="button" data-href="http://demonongnghiep.web30s.vn/Dua-leo-336928"></div>
														</li></ul>                </div>
													</div>
												</div>
												<div class='clear'></div>
											</div>

											<div class="main_content_body main_content_body_cus1">
												<div class='microformat' style="text-align: justify;">
													<p>C&aacute;c giống đu đủ của Việt Nam hay của Th&aacute;i Lan, Đ&agrave;i Loan, Trung Quốc, ấn Độ... đều để giống được, với điều kiện kh&ocirc;ng phải l&agrave; giống lai F1. C&aacute;c giống của Đ&agrave;i Loan c&oacute; tỷ lệ c&acirc;y c&aacute;i cao v&agrave; thường thuộc loại c&acirc;y lai nh&acirc;n tạo.</p>
													<p>C&acirc;y đu đủ vốn c&oacute; t&iacute;nh di truyền phức tạp, phấn của hoa đực v&agrave; hoa lưỡng t&iacute;nh lại rất kh&aacute;c nhau, t&iacute;nh mẫn cảm của phấn hoa đực cao gấp nhiều lần của hạt phấn hoa lưỡng t&iacute;nh, do đ&oacute; đu đủ rất dễ bị lai tạp, kh&oacute; giữ được giống tốt thuần chủng nếu kh&ocirc;ng thụ phấn bắt buộc.</p>
													<p>Việc thụ phấn bắt buộc trước hết phải chọn c&acirc;y giống khoẻ, &iacute;t s&acirc;u bệnh, cần phải chọn đ&uacute;ng giống, chọn những nụ hoa ra ở lứa quả đầu ti&ecirc;n, khi c&acirc;y c&ograve;n đang rất sung sức, nếu v&agrave;o đ&uacute;ng l&uacute;c thời tiết đầu m&ugrave;a h&egrave; th&igrave; c&agrave;ng tốt, sau n&agrave;y số hạt sẽ cho nhiều hơn. D&ugrave;ng kim ch&acirc;m cho c&aacute;c nụ hoa nhỏ ở trong ch&ugrave;m hoa nhiều vết, mấy h&ocirc;m sau hoa tự rụng đi, chỉ để lại một nụ hoa ở giữa to nhất, khi đầu c&aacute;nh của nụ hoa bắt đầu c&oacute; m&agrave;u trắng th&igrave; d&ugrave;ng t&uacute;i nilon trong, ch&acirc;m thật nhiều lỗ cho dễ tho&aacute;t hơi nước v&agrave; kh&ocirc;ng kh&iacute;, sau đ&oacute; bao nụ hoa lại theo d&otilde;i tới khi hoa nở. C&aacute;c buổi s&aacute;ng th&aacute;o t&uacute;i nilon ra, ngắt bao phấn thoa l&ecirc;n đầu nhụy hoa c&aacute;i. Nếu c&acirc;y giống l&agrave; c&acirc;y lưỡng t&iacute;nh, c&oacute; hoa lưỡng t&iacute;nh th&igrave; lấy bao phấn của hạt hoa lưỡng t&iacute;nh. Nếu l&agrave; giống chỉ c&oacute; hoa c&aacute;i v&agrave; hoa đực ri&ecirc;ng rẽ tr&ecirc;n từng c&acirc;y th&igrave; lấy phấn hoa đực v&agrave; sau đ&oacute; sẽ c&oacute; 50% l&agrave; hạt sẽ cho c&acirc;y đực. Thụ phấn xong, bao hoa lại để tr&aacute;nh hoa bị thụ phấn của giống kh&aacute;c ngo&agrave;i &yacute; muốn. Chờ 2-3 ng&agrave;y sau hoa rụng đi th&igrave; th&aacute;o t&uacute;i nilon ra cho quả ph&aacute;t triển tự nhi&ecirc;n.</p>
													<p>Muốn đu đủ cho sai quả v&agrave; c&oacute; quả to cần chọn ch&acirc;n đất tốt, ẩm v&agrave; tho&aacute;t nước tốt, &aacute;nh s&aacute;ng đầy đủ, kh&ocirc;ng bị c&acirc;y kh&aacute;c che khuất. Chăm s&oacute;c thật tốt cho c&acirc;y lu&ocirc;n c&oacute; 50-60 l&aacute; xanh tốt tr&ecirc;n c&acirc;y.</p>
													<p>Khi mới trồng n&ecirc;n đ&agrave;o hố s&acirc;u, rộng, b&oacute;n l&oacute;t từ 20-30kg ph&acirc;n hữu cơ mục v&agrave; th&ecirc;m 0,1-0,2kg l&acirc;n, sang th&aacute;ng thứ 2-3 th&igrave; b&oacute;n th&uacute;c mỗi gốc khoảng 25-30 gam đạm v&agrave; 40 gam DAP ho&agrave; tan trong nước, tưới v&agrave;o dưới t&aacute;n c&acirc;y, c&aacute;ch xa gốc 20-30cm. C&aacute;c th&aacute;ng sau, c&acirc;y to ra, hoa quả nhiều, cần tăng dần lượng ph&acirc;n cho tới l&uacute;c quả ch&iacute;n, hạn chế ở mức độ 120-150 gam ur&ecirc; v&agrave; 140-160 gam DAP cho tới khi c&acirc;y hết khả năng cho quả thương phẩm. Ch&uacute; &yacute; v&agrave;o m&ugrave;a lạnh cần tưới ẩm thường xuy&ecirc;n, kết hợp phun oxyclorua đồng. ở ấn Độ người ta c&ograve;n tưới cả dung dịch n&agrave;y v&agrave;o gốc c&acirc;y, gi&uacute;p c&acirc;y c&oacute; th&ecirc;m vi lượng đồng, chống r&eacute;t v&agrave; bạc l&aacute;. Ch&uacute; &yacute; ph&ograve;ng trừ rệp hại c&acirc;y.</p>
													<div class='clear'></div>

													<div class='clear cao20'></div>
													<div class='dv-fbbox-like'>
														<div class='fb-like' id='fb-like' data-href='http://demonongnghiep.web30s.vn/Dua-leo-336928' data-layout='standard' data-action='like' data-size='small' data-show-faces='true' data-share='true'></div>
														<div class='fb-comments' data-width='100%' data-href='http://demonongnghiep.web30s.vn/Dua-leo-336928' data-numposts='5'></div>
													</div>
												</div>    <script>
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
												<div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2368962 data='2368962' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Bau-336921' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750444935208_bau-xanh-500x500.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Bau-336921'>Bầu</a></h6>
																	<span class=' gia_km'>55,000 VNĐ</span>
																	<span class='item_price gia_ban'>25,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow fadeInUpBig animated glo-trang-thai-sp glo-trang-thai-sp-2368963 data='2368963' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Khoai-lang-Nhat-tim-336922' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750445532231_khoai-lang-nhat-tim-1438790262.png' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Khoai-lang-Nhat-tim-336922'>Khoai lang Nhật tím</a></h6>
																	<span class=' gia_km'>42,000 VNĐ</span>
																	<span class='item_price gia_ban'>33,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow bounceInRight animated glo-trang-thai-sp glo-trang-thai-sp-2368964 data='2368964' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Ca-tim-336923' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750445985689_ca-tim-1024x768-500x500.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Ca-tim-336923'>Cà tím</a></h6>
																	<span class='hide gia_km'></span>
																	<span class='item_price gia_ban'>22,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2368965 data='2368965' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Bong-cai-xanh-336924' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750446805944_bong-cai-cung-la-lieu-thuoc-trang-da-huu-dung-thuoc-trang-da2.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Bong-cai-xanh-336924'>Bông cải xanh</a></h6>
																	<span class='hide gia_km'></span>
																	<span class='item_price gia_ban'>31,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow fadeInDownBig animated glo-trang-thai-sp glo-trang-thai-sp-2368966 data='2368966' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Khoai-tay-Da-Lat-336925' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750447614212_3-cach-tri-mun-dau-den-bang-khoai-tay-khong-ton-kem.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Khoai-tay-Da-Lat-336925'>Khoai tây Đà Lạt</a></h6>
																	<span class='hide gia_km'></span>
																	<span class='item_price gia_ban'>15,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow bounceInRight animated glo-trang-thai-sp glo-trang-thai-sp-2368967 data='2368967' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Ca-rot-Da-Lat-336926' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750448136825_ca-rot.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Ca-rot-Da-Lat-336926'>Cà rốt Đà Lạt</a></h6>
																	<span class='hide gia_km'></span>
																	<span class='item_price gia_ban'>20,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow bounceInLeft animated glo-trang-thai-sp glo-trang-thai-sp-2368968 data='2368968' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Bi-do-tron-Da-Lat-336927' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750449887927_bi-do-ho-lo-loai-1kg.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Bi-do-tron-Da-Lat-336927'>Bí đỏ tròn Đà Lạt</a></h6>
																	<span class='hide gia_km'></span>
																	<span class='item_price gia_ban'>12,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div><div class='col-md-4 col-sm-6 col-xs-6 col-min-12' 2>
													<div class=' arrival-grid simpleCart_shelfItem wow fadeInUpBig animated glo-trang-thai-sp glo-trang-thai-sp-2368969 data='2368969' data-wow-delay='0.4s' style='visibility: visible; -webkit-animation-delay: 0.4s;'>
														<div class='grid-arr'>
															<div  class='grid-arrival'>
																<figure>		
																	<a href='http://demonongnghiep.web30s.vn/Dua-leo-336928' class='new-gri' >
																		<div class='grid-img'>
																			<img  src='http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750449112698_3-1.jpg' class='img-responsive' alt=''>
																		</div>		
																	</a>		
																</figure>	
															</div>
															<div class='women'>
																<div class='gr_price'>
																	<h6><a href='http://demonongnghiep.web30s.vn/Dua-leo-336928'>Dưa leo</a></h6>
																	<span class='hide gia_km'></span>
																	<span class='item_price gia_ban'>16,000 VNĐ</span>
																</div>
															</div>
														</div>
													</div>
												</div>                        </div>
											</div>
										</div>
										<div class="clearfix"></div>
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