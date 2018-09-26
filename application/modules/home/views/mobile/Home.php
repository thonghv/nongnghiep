<?php
if(!isset($_SERVER['HTTP_USER_AGENT']))
{
    header("HTTP/1.0 404 Not Found");
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>

    <title>
        <?php
        echo $this->data->getWebTitle();
        ?>
    </title>

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
                        <div class="logo wow bounceIn animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">

                        </div>
                    </div>
                </div>
                <article>
                    <section class="content gallery pad1" style="padding:0">
                        <div class="midle_main_idclass fix1200_cus1">
                            <div class="dv-metroid" style = "padding-top: 0px;">
                                <div class="container">
                                    <div class="header-bottom">
                                        <div class="header-grids">
                                            <div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                                <div class="header-img1 header-img wow bounceInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-trai-cay-336912"><img src="http://demonongnghiep.web30s.vn/datafiles/4252/upload/thumb_images/14750369071798_1384489545_8.jpg" class="img-responsive" alt="Nhóm trái cây"></a>
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-trai-cay-336912"><h4>Nhóm trái cây</h4></a>
                                                    <p>Là một trong những ngành kinh tế chủ lực, nông nghiệp Việt Nam đang có bước chuyển mình phát triển mạnh mẽ. Các hộ gia đình đã mạnh dạn đầu tư vào sản xuất nông nghiệp nay càng có thêm</p>
                                                </div>
                                            </div><div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                                <div class="header-img1 header-img wow fadeInDownBig animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDownBig;">
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-cu-qua-336913"><img src="http://demonongnghiep.web30s.vn/datafiles/4252/upload/thumb_images/14750370207534_bo-do-choi-rau-cu-qua-trang-tiki-500x500.jpg" class="img-responsive" alt="Nhóm củ, quả"></a>
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-cu-qua-336913"><h4>Nhóm củ, quả</h4></a>
                                                    <p>Các giống đu đủ của Việt Nam hay của Thái Lan, Đài Loan, Trung Quốc, ấn Độ... đều để giống được, với điều kiện không phải là giống lai F1</p>
                                                </div>
                                            </div><div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                                <div class="header-img1 header-img wow fadeInUpBig animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-cai-bap-rau-la-336914"><img src="http://demonongnghiep.web30s.vn/datafiles/4252/upload/thumb_images/14750371694137_GAP2009-500x500.jpg" class="img-responsive" alt="Nhóm cải bắp, rau lá"></a>
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-cai-bap-rau-la-336914"><h4>Nhóm cải bắp, rau lá</h4></a>
                                                    <p>Có rất nhiều cây xoài mọc từ hạt mà không hề thoái hoá mà chất lượng trái xoài vẫn được đảm bảo. Nhiều giống xoài của ta trong hạt có nhiều phôi</p>
                                                </div>
                                            </div><div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                                <div class="header-img1 header-img wow bounceInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-rau-tao-mui-336915"><img src="http://demonongnghiep.web30s.vn/datafiles/4252/upload/thumb_images/14750372251130_20160516152120-trong-rau11.jpg" class="img-responsive" alt="Nhóm rau tạo mùi"></a>
                                                    <a href="http://demonongnghiep.web30s.vn/Nhom-rau-tao-mui-336915"><h4>Nhóm rau tạo mùi</h4></a>
                                                    <p>Trong hoạt động sản xuất nông nghiệp, ngoài giống cây trồng, vật nuôi thì phân bón, thức ăn chăn nuôi và thuốc bảo vệ thực vật cũng đóng vai trò quan trọng không kém.</p>
                                                </div>
                                            </div>              <div class="clearfix"></div>
                                        </div>
                                    </div>  
                                </div>  
                            </div>

                            <div class="content">
                                <div class="about-section">
                                    <div class="container">
                                        <h3>Về chúng tôi</h3>
                                        <div class="about-grids">
                                            <div class="col-md-4 col-sm-5 col-xs-12 col-min-12">
                                                <div class="about-img wow bounceInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;" "="">
                                                <a href="http://demonongnghiep.web30s.vn/Ve-chung-toi-336910 ">
                                                    <img src="http://cdn.web30s.vn/datafiles/4252/upload/images/14750364573432_201602190923553325660.jpg" class="img-responsive" alt="Về chúng tôi">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-7 col-xs-12 col-min-12">
                                            <div class="about-grid wow bounceInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;"><p>Cùng với sự phát triển của nền kinh tế, nhu cầu thực phẩm an toàn, bảo vệ sức khỏe đang được người tiêu dùng Việt Nam ngày càng quan tâm nhiều hơn. Bên cạnh đó, những sự kiện như rau “bẩn”, thực phẩm kém chất lượng, trái cây nhiễm độc, sự gia tăng của bệnh ung thư, v.v… đã đặt ra vấn đề cấp thiết về chất lượng và an toàn vệ sinh thực phẩm của người tiêu dùng.</p>
                                                <p>Đáp ứng nhu cầu ngày càng tăng của người tiêu dùng Việt Nam về nông sản an toàn. Tạo kênh phân phối trực tiếp từ nhà sản xuất đến người tiêu dùng cuối cùng. Quảng bá sản phẩm nông sản an toàn Việt Nam.Liên kết dài hạn và đảm bảo đầu ra ổn định cho nhà sản xuất nông sản an toàn, góp phần vào sự nghiệp phát triển ngành nông nghiệp Việt Nam.</p>
                                                <p>HTX Nông nghiệp chọn con đường gắn bó với rau sạch Đà Lạt, bởi đây chính là thế mạnh, là hướng đi thuận lợi với những xã viên vốn là nông dân chuyên trồng rau. Hơn 70 ha đất của xã viên tham gia hợp tác xã được xác định trồng và cung cấp cho thị trường rau VietGAP mang thương hiệu Nông nghiệp.</p>
                                                <p>Chủ trương khép kín quy trình sản xuất để rau đạt chuẩn VietGAP, HTX Nông nghiệp sản xuất giống rau trong vỉ xốp cung cấp cho xã viên đồng thời cung cấp những loại thuốc bảo vệ thực vật nằm trong danh mục. Sản phẩm sau thu hoạch, HTX sơ chế và bao tiêu toàn bộ cho xã viên. Bởi vậy, rau của Nông nghiệp là rau an toàn, HTX tự công bố chất lượng và được cơ quan kiểm dịch chứng nhận.&nbsp;</p>                 </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-section">
                                    <div class="container">
                                        <h3 style="margin-bottom: 30px">Sản phẩm</h3>
                                        <div class="service-grids">
                                            <div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Dua-leo-336928" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750449112698_3-1.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Dua-leo-336928">Dưa leo</a></h6>
                                                                <span class="hide gia_km"></span>
                                                                <p class="item_price gia_ban">16,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368969/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow fadeInUpBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Bi-do-tron-Da-Lat-336927" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750449887927_bi-do-ho-lo-loai-1kg.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Bi-do-tron-Da-Lat-336927">Bí đỏ tròn Đà Lạt</a></h6>
                                                                <span class="hide gia_km"></span>
                                                                <p class="item_price gia_ban">12,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368968/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow fadeInDownBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Ca-rot-Da-Lat-336926" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750448136825_ca-rot.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Ca-rot-Da-Lat-336926">Cà rốt Đà Lạt</a></h6>
                                                                <span class="hide gia_km"></span>
                                                                <p class="item_price gia_ban">20,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368967/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Khoai-tay-Da-Lat-336925" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750447614212_3-cach-tri-mun-dau-den-bang-khoai-tay-khong-ton-kem.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Khoai-tay-Da-Lat-336925">Khoai tây Đà Lạt</a></h6>
                                                                <span class="hide gia_km"></span>
                                                                <p class="item_price gia_ban">15,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368966/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Bong-cai-xanh-336924" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750446805944_bong-cai-cung-la-lieu-thuoc-trang-da-huu-dung-thuoc-trang-da2.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Bong-cai-xanh-336924">Bông cải xanh</a></h6>
                                                                <span class="hide gia_km"></span>
                                                                <p class="item_price gia_ban">31,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368965/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow fadeInDownBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Ca-tim-336923" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750445985689_ca-tim-1024x768-500x500.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Ca-tim-336923">Cà tím</a></h6>
                                                                <span class="hide gia_km"></span>
                                                                <p class="item_price gia_ban">22,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368964/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow fadeInUpBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Khoai-lang-Nhat-tim-336922" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750445532231_khoai-lang-nhat-tim-1438790262.png" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Khoai-lang-Nhat-tim-336922">Khoai lang Nhật tím</a></h6>
                                                                <span class="right_5 gia_km">42,000 VNĐ</span>
                                                                <p class="item_price gia_ban">33,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368963/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                                <div class="arrival-grid simpleCart_shelfItem  wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                    <div class="grid-arr">
                                                        <div class="grid-arrival">
                                                            <figure>        
                                                                <a href="http://demonongnghiep.web30s.vn/Bau-336921" class="new-gri">
                                                                    <div class="grid-img">
                                                                        <img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750444935208_bau-xanh-500x500.jpg" class="img-responsive" alt="">
                                                                    </div>      
                                                                </a>        
                                                            </figure>   
                                                        </div>
                                                        <div class="women">
                                                            <div class="gr_price">
                                                                <h6><a href="http://demonongnghiep.web30s.vn/Bau-336921">Bầu</a></h6>
                                                                <span class="right_5 gia_km">55,000 VNĐ</span>
                                                                <p class="item_price gia_ban">25,000 VNĐ</p>
                                                            </div>
                                                            <!-- <a href='/cart-add/2368962/' class='my-cart-b item_add'>MUA SP</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                      <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                   <div class="container">
                                       <h3>Hình Ảnh</h3>
                                       <div class="latest-grids">
                                        <div class="latest-grid1">
                                            <div class="col-md-12">

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750351352074_1.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750351352074_1.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750351658952_2.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750351658952_2.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750351838055_3.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750351838055_3.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750351982732_4.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750351982732_4.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750352086956_5.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750352086956_5.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750352206878_6.png" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750352206878_6.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750353608097_7.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750353608097_7.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-4 col-xs-6 col-min-12 nobostrap">
                                                    <div class="latest-grid work">
                                                        <a href="http://cdn.web30s.vn/datafiles/4252/upload/images/14750353729660_8.jpg" class="swipebox">
                                                            <img src="http://cdn.web30s.vn/datafiles/4252/upload/_thumbs/images/14750353729660_8.jpg" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            <div class="textbox">
                                                                <img src="/templates/300-up-222/images/magnify.png" class="img-responsive" alt="mở rộng 1 - không xài">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-section">
                                <div class="container">
                                    <h3>Tin tức</h3>
                                    <div class="news-grids">
                                        <div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                            <a href="http://demonongnghiep.web30s.vn/trong-rau-mam-thu-100-trieu-dong-thang..."><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14780790383562_thung-xop-chuyen-dung-trong-rau-sach-9361_700x700.jpg" alt="Trồng rau mầm thu 100 triệu đồng/tháng..." class="img-responsive"></a>
                                            <h4><a href="http://demonongnghiep.web30s.vn/trong-rau-mam-thu-100-trieu-dong-thang...">Trồng rau mầm thu 100 triệu đồng/tháng...</a></h4>
                                            <p>Trồng rau mầm theo phương pháp này đơn giản hơn nhiều, người trồng rau không phải lo tốn tiền mua khay nhựa, hộp xốp, cây sắt làm kệ...</p>
                                            <a href="http://demonongnghiep.web30s.vn/trong-rau-mam-thu-100-trieu-dong-thang..." class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow fadeInUpBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                                <a href="http://demonongnghiep.web30s.vn/-phan-bon-khong-chi-la-chuyen-cua-nha-nong"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750457542181_9-Sieu-Kali-copy.jpg" alt=" Phân bón, không chỉ là chuyện của nhà nông" class="img-responsive"></a>
                                                <h4><a href="http://demonongnghiep.web30s.vn/-phan-bon-khong-chi-la-chuyen-cua-nha-nong"> Phân bón, không chỉ là chuyện của nhà nông</a></h4>
                                                <p>Trong khi các nước phát triển có chiều hướng giảm việc sử dụng phân bón thì tại các nước đang</p>
                                                <a href="http://demonongnghiep.web30s.vn/-phan-bon-khong-chi-la-chuyen-cua-nha-nong" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow fadeInDownBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                            <a href="http://demonongnghiep.web30s.vn/-lang-tom...-ty-phu"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750457084279_tom_cang_xanh_1.jpg" alt=" Làng tôm... tỷ phú" class="img-responsive"></a>
                                            <h4><a href="http://demonongnghiep.web30s.vn/-lang-tom...-ty-phu"> Làng tôm... tỷ phú</a></h4>
                                            <p>Về xã Hòa Mỹ, huyện Cái Nước, tỉnh Cà Mau, đụng đâu chúng tôi cũng gặp những lão nông mà người</p>
                                            <a href="http://demonongnghiep.web30s.vn/-lang-tom...-ty-phu" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                                <a href="http://demonongnghiep.web30s.vn/-htx-dich-vu-nong-nghiep-can-mo-rong-san-xuat-kinh-doanh"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750455014013_zze1430966369.jpg" alt=" HTX dịch vụ nông nghiệp cần mở rộng sản xuất, kinh doanh" class="img-responsive"></a>
                                                <h4><a href="http://demonongnghiep.web30s.vn/-htx-dich-vu-nong-nghiep-can-mo-rong-san-xuat-kinh-doanh"> HTX dịch vụ nông nghiệp cần mở rộng sản xuất, kinh doanh</a></h4>
                                                <p>Ngày 22-12, Liên minh Hợp tác xã thành phố Hà Nội đã tổ chức buổi tọa đàm “Nâng cao hiệu quả</p>
                                                <a href="http://demonongnghiep.web30s.vn/-htx-dich-vu-nong-nghiep-can-mo-rong-san-xuat-kinh-doanh" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                            <a href="http://demonongnghiep.web30s.vn/-phat-trien-dich-vu-nong-nghiep-niem-vui-cho-nha-nong"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14779082017502_tt6.png" alt=" Phát triển dịch vụ nông nghiệp: Niềm vui cho nhà nông" class="img-responsive"></a>
                                            <h4><a href="http://demonongnghiep.web30s.vn/-phat-trien-dich-vu-nong-nghiep-niem-vui-cho-nha-nong"> Phát triển dịch vụ nông nghiệp: Niềm vui cho nhà nông</a></h4>
                                            <p>Ra ngõ gặp dịch vụ, đó là mơ ước của bất cứ người nông dân nào và trong những năm qua, việc phát</p>
                                            <a href="http://demonongnghiep.web30s.vn/-phat-trien-dich-vu-nong-nghiep-niem-vui-cho-nha-nong" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow fadeInUpBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                                <a href="http://demonongnghiep.web30s.vn/-tao-viec-lam-tu-dich-vu-nong-nghiep"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750454231894_artworks-000139171563-t9ajyn-t500x500.jpg" alt=" Tạo việc làm từ dịch vụ nông nghiệp" class="img-responsive"></a>
                                                <h4><a href="http://demonongnghiep.web30s.vn/-tao-viec-lam-tu-dich-vu-nong-nghiep"> Tạo việc làm từ dịch vụ nông nghiệp</a></h4>
                                                <p>Đây là hình thức tạo việc làm do nông dân tự liên kết lại; vừa tạo việc làm cho LĐ nông thôn, vừa</p>
                                                <a href="http://demonongnghiep.web30s.vn/-tao-viec-lam-tu-dich-vu-nong-nghiep" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow fadeInDownBig animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                            <a href="http://demonongnghiep.web30s.vn/suc-hut-dau-tu-may-nong-nghiep-rat-lon"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750453388438_tr7ta.JPG" alt="Sức hút đầu tư máy nông nghiệp rất lớn" class="img-responsive"></a>
                                            <h4><a href="http://demonongnghiep.web30s.vn/suc-hut-dau-tu-may-nong-nghiep-rat-lon">Sức hút đầu tư máy nông nghiệp rất lớn</a></h4>
                                            <p>Cho đến tháng cuối năm 2011, ở ĐBSCL hoạt động đầu tư cơ giới hóa nông nghiệp, thiết bị máy móc</p>
                                            <a href="http://demonongnghiep.web30s.vn/suc-hut-dau-tu-may-nong-nghiep-rat-lon" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                            </div><div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                            <div class=" news-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" '="">
                                                <a href="http://demonongnghiep.web30s.vn/-lao-dong-nong-nghiep-so-luong-lon-chat-luong-thap"><img src="http://cdn.web30s.vn/datafiles/4252/upload/thumb_images/14750452342439_raised-beds.jpg" alt=" Lao động nông nghiệp: Số lượng lớn, chất lượng thấp" class="img-responsive"></a>
                                                <h4><a href="http://demonongnghiep.web30s.vn/-lao-dong-nong-nghiep-so-luong-lon-chat-luong-thap"> Lao động nông nghiệp: Số lượng lớn, chất lượng thấp</a></h4>
                                                <p>Trong 10 năm qua, đã có 15 triệu lao động có việc làm, trong đó, khoảng 50% làm trong lĩnh vực nông nghiệp</p>
                                                <a href="http://demonongnghiep.web30s.vn/-lao-dong-nong-nghiep-so-luong-lon-chat-luong-thap" class="button2 hvr-shutter-in-vertical">XEM TIẾP</a>
                                            </div>
                                        </div>              <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>

            <?php $this->load->view("base/pc/footer.php"); ?>

</body>

</html>