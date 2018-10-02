<div class="categories-section">
    <div class="container">
        <div class="footer-grids">
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( document ).ready(function() {
        var w_document      = $(window).width();
        if(w_document > 479 && w_document < 992)
        {
            var height_foot     = 0;
            $(".ul_foot ul").each(function() {
               if(height_foot   < $(this).height())
               {
                height_foot = $(this).height();
            }
        });
            if(height_foot     != 0) $(".ul_foot ul").height(height_foot);
        }   
    });

</script>
<div class="footer-section">
    <div class="container">
        <div class="footer-top">
            <div class="social-icons wow bounceInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
                <a href="Mở rộng 5" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="Mở rộng 7" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="footer-middle wow fadeInDown Big animated animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
            <div class="bottom-menu">
                <ul>
                    <li><a href="<?php echo base_url();?>">trang chủ</a></li>
                    <li><a href="<?php echo base_url()?>gioi-thieu.html">giới thiệu</a></li>
                    <li><a href="">sản phẩm</a></li>
                    <li><a href="<?php echo base_url()?>bai-viet-khoa-hoc.html">bài viết khoa học</a></li>
                    <li><a href="<?php echo base_url()?>tuyen-dung.html">tuyển dụng</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom wow bounceInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInRight;">
            <p><span class="footer_copyright"><a target="_blank" href="https://web30s.vn/" title="Thiết Kế Website" class="a_copyright">Design by Pine Team Code<img src="<?php echo base_url()?>public/img/forest.png" style="margin-left: 8px;height: 20px;position: relative; vertical-align: middle;" class="img_coppy_right_footer"></a></span></p>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {                      
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
</div>
<script>
    if ($('a.lightbox').length > 0) {
        $('a.lightbox').divbox();
    }
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;//vi_VN //en_US
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=164566120964750";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<style>
#cfacebook{ position: fixed; bottom: 0px; right: 8px; z-index: 999999999999999; width: 300px; height: auto; box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2); border-top-left-radius: 5px; border-top-right-radius: 5px; overflow: hidden; }
#cfacebook .fchat{float: left; width: 100%; height: 400px; overflow: hidden; display: none; background-color: #fff;}
#cfacebook .fchat .chat-single{float: left; line-height: 25px; line-height: 25px; color: #333; width: 100%;}
#cfacebook .fchat .chat-single a{float: right; text-decoration: none; margin-right: 10px; color: #888; font-size: 12px;}
#cfacebook .fchat .chat-single a:hover{color: #222;}
#cfacebook .fchat .fb-page{margin-top:0px; float: left;}
#cfacebook a.chat_fb{ float: left; padding: 0 25px; width: 300px; color: #fff; text-decoration: none; height: 40px; line-height: 40px; text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);   background-repeat: repeat-x; background-size: auto; background-position: 0 0; background-color: #0065BF; border: 0; border-bottom: 1px solid #0065BF; z-index: 9999999; margin-right: 12px; font-size: 18px;}
#cfacebook a.chat_fb:hover{color: yellow; text-decoration: none;}
.fchat_fb_showhi_hide{display: none !important}
.fchat_fb_showhi_show{display: block !important}
.cur{cursor: pointer;}
</style>
<script>
    function fchat()
    {
        var tchat= document.getElementById("tchat").value;
        if(tchat==0 || tchat=='0')
        {                
            document.getElementById("fchat").style.display = "block";
            document.getElementById("tchat").value=1;
        }else{
            document.getElementById("fchat").style.display = "none";
            document.getElementById("tchat").value=0;
        }             
    }
    function SHOWHI_fb(argument) {
        if($(".fchat_fb_showhi_show").length > 0)
        {
            console.log('1');
            $(".fchat_fb_showhi").removeClass("fchat_fb_showhi_show");
            $(".fchat_fb_showhi").addClass("fchat_fb_showhi_hide");
        }
        else 
        {
            $(".fchat_fb_showhi").removeClass("fchat_fb_showhi_hide");
            $(".fchat_fb_showhi").addClass("fchat_fb_showhi_show");
            console.log('1')
        }
    }

</script>
