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
                        <div class="logo wow bounceIn animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">

                        </div>
                    </div>
                </div>
                <article>
            <section class="content gallery pad1" style="padding:0">
                <div class="midle_main_idclass fix1200_cus1">
                    <div class="dv-metroid">
                        <div class="container">
                            <div class="header-bottom">
                                <div class="header-grids">
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                        <div class="header-img1 header-img wow bounceInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[0] -> slug; ?>-<?php echo $topInfo[0] ->id;?>.html"><img src="<?php if(isset($topInfoImg[0])) { echo base_url(); ?>public/img-slide/<?php echo $topInfoImg[0] -> img_name; }?>" class="img-responsive" alt=""></a>
                                            <a href=""><h4><?php if(isset($topInfo[0])) { echo $topInfo[0] -> name;} ?></h4></a>
                                            <p><?php if(isset($topInfo[0])) { echo $topInfo[0] -> overview;} ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                        <div class="header-img1 header-img wow fadeInDownBig animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDownBig;">
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[1] -> slug; ?>-<?php echo $topInfo[1] ->id;?>.html"><img src="<?php if(isset($topInfoImg[1])) { echo base_url(); ?>public/img-slide/<?php echo $topInfoImg[1] -> img_name; }?>" class="img-responsive" alt=""></a>
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[1] -> slug; ?>-<?php echo $topInfo[1] ->id;?>.html"><h4><?php if(isset($topInfo[1])) { echo $topInfo[1] -> name;} ?></h4></a>
                                            <p><?php if(isset($topInfo[1])) { echo $topInfo[1] -> name;} ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                        <div class="header-img1 header-img wow fadeInUpBig animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[2] -> slug; ?>-<?php echo $topInfo[2] ->id;?>.html"><img src="<?php if(isset($topInfoImg[2])) { echo base_url(); ?>public/img-slide/<?php echo $topInfoImg[2] -> img_name; }?>" class="img-responsive" alt=""></a>
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[2] -> slug; ?>-<?php echo $topInfo[2] ->id;?>.html"><h4><?php if(isset($topInfo[2])) { echo $topInfo[2] -> name;} ?></h4></a>
                                            <p><?php if(isset($topInfo[2])) { echo $topInfo[2] -> overview;} ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-min-12 header-grid">
                                        <div class="header-img1 header-img wow bounceInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[3] -> slug; ?>-<?php echo $topInfo[3] ->id;?>.html"><img src="<?php if(isset($topInfoImg[3])) { echo base_url(); ?>public/img-slide/<?php echo $topInfoImg[3] -> img_name; }?>" class="img-responsive" alt=""></a>
                                            <a href="<?php echo base_url()?>san-pham/<?php echo $topInfo[3] -> slug; ?>-<?php echo $topInfo[3] ->id;?>.html"><h4><?php if(isset($topInfo[3])) { echo $topInfo[3] -> name;} ?></h4></a>
                                            <p><?php if(isset($topInfo[3])) { echo $topInfo[3] -> overview;} ?></p>
                                        </div>
                                    </div>         
                                    <div class="clearfix"></div>
                                </div>
                            </div>  
                        </div>  
                    </div>

                    <div class="content">
                        <div class="about-section">
                            <div class="container">
                                <h3>Về chúng tôi</h3>
                                <div class="about-grids">
                                    
                                </div>
                                <div class="col-md-12 col-sm-7 col-xs-12 col-min-12">
                                    <div class="about-grid wow bounceInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                                        <?php echo $about; ?>
                                    </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="service-section">
                            <?php
                                if(isset($groupMenuShow)){
                                foreach ($groupMenuShow as $groupMenuInfo) :
                                    $groupMenuInfo=(object)$groupMenuInfo;
                            ?> 
                            <div class="container">
                                <h3 style="margin-bottom: 30px"><?php echo $groupMenuInfo -> name; ?></h3>
                                <div class="service-grids">
                                    <?php
                                        if($lstProduct != null){
                                        foreach ($lstProduct as $rows) :
                                            $rows=(object)$rows;
                                            if($rows -> group_menu_id == $groupMenuInfo -> id) {
                                    ?> 
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-min-12">
                                        <div class="arrival-grid simpleCart_shelfItem  wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                            <div class="grid-arr">
                                                <div class="grid-arrival">
                                                    <figure>        
                                                        <a href="<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html" class="new-gri">
                                                            <div class="grid-img">
                                                                <img src="<?php echo base_url()?>public/img-slide/<?php echo $rows -> img_name; ?>" class="img-responsive" alt="">
                                                            </div>      
                                                        </a>        
                                                    </figure>   
                                                </div>
                                                <div class="women">
                                                    <div class="gr_price">
                                                        <h6><a href="<?php echo base_url()?>san-pham/<?php echo $rows -> slug; ?>-<?php echo $rows ->id;?>.html"><?php echo $rows -> name; ?></a></h6>
                                                    </div>
                                                    <!-- <a href='/cart-add/2368969/' class='my-cart-b item_add'>MUA SP</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } endforeach; }?>
                                         
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php endforeach; }?>

                        </div>
                        
                    </div>
  

                </div>
            </div>
        </section>
    </article>

            <?php $this->load->view("base/pc/footer.php"); ?>

</body>

</html>