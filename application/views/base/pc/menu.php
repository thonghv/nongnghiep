<div class="top-menu">
    <div class="menu menu_desktop">
        <ul>
            <li class=" active"><a class="" href=""><span>Trang Chủ</span></a></li>
            <li class=""><a class="" href=""><span>Giới thiệu</span></a></li>
            <li class=" "><a class="" href=""><span>Sản phẩm</span></a>
                <ul class="dl-submenu  ">
                    <?php
                    if($this->data->getGroupsMenu() != null){
                    foreach ($this->data->getGroupsMenu() as $groups) :
                        $groups=(object)$groups;
                    ?>   
                    <li><a href="">» <?php echo $groups->name; ?></a>
                        <ul class="dl-submenu  ">
                            <?php
                            if($this->data->getSubsMenu() != null){
                            foreach ($this->data->getSubsMenu() as $sub) :
                                $sub=(object)$sub;
                                if($sub -> group_id  == $groups -> id) {
                            ?>   
                            <li><a href="">» <?php echo $sub -> name; ?></a></li>
                            <?php } endforeach; }?>
                        </ul>
                    </li>
                    <?php endforeach; }?>
                </ul>
            </li>
            <li class=""><a class="" href=""><span>Bài Viết Khoa Học</span></a></li>
            <li class=""><a class="" href="0"><span>Tuyển dụng</span></a></li>
            <li class=""><a class="" href=""><span>Liên hệ</span></a></li>
        </ul>

    </div>
    <!-- script for menu -->
    <div class="dv-mnmb mobile menu_mobile">
        <a class="a_home" href="http://demonongnghiep.web30s.vn">trang chủ</a>
        <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger cur "></button>
            <div class="clear"></div>
            <ul class="dl-menu">
                <!--  -->
                <li class=" active"><a class="" href="http://demonongnghiep.web30s.vn"><span>Trang Chủ</span></a></li>
                <li class=""><a class="" href="http://demonongnghiep.web30s.vn/Gioi-thieu-336957"><span>Giới thiệu</span></a></li>
                <li class=" "><a class="" href="http://demonongnghiep.web30s.vn/San-pham"><span>Sản phẩm</span></a>
                    <ul class="dl-submenu  ">
                        <li class="dl-back"><a href="#">Back</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Nhom-trai-cay-336912">» Nhóm trái cây</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Nhom-cu-qua-336913">» Nhóm củ, quả</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Nhom-cai-bap-rau-la-336914">» Nhóm cải bắp, rau lá</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Nhom-rau-tao-mui-336915">» Nhóm rau tạo mùi</a></li>
                    </ul>
                </li>
                <li class=" "><a class="" href="http://demonongnghiep.web30s.vn/Tin-tuc"><span>Tin tức</span></a>
                    <ul class="dl-submenu  ">
                        <li class="dl-back"><a href="#">Back</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Tin-nong-nghiep-336930">» Tin nông nghiệp</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Kien-thuc-nong-nghiep-336931">» Kiến thức nông nghiệp</a></li>
                        <li><a href="http://demonongnghiep.web30s.vn/Chuyen-nha-nong-336932">» Chuyện nhà nông</a></li>
                    </ul>
                </li>
                <li class=""><a class="" href="http://demonongnghiep.web30s.vn/Dich-vu-337151"><span>Dịch vụ</span></a></li>
                <li class=""><a class="" href="http://demonongnghiep.web30s.vn/Tuyen-dung-336960"><span>Tuyển dụng</span></a></li>
                <li class=""><a class="" href="http://demonongnghiep.web30s.vn/Lien-he-336958"><span>Liên hệ</span></a></li>
                <!--  -->
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <!--  -->
    <style type='text/css'> .menu > ul > li:last-child > a:after{display: none} </style>                    <div class="clearfix"> </div>
    <!--  -->
    <script src="<?php echo base_url()?>public/js/mobile/modernizr.custom.js"></script>
    <script src="<?php echo base_url()?>public/js/mobile/jquery.dlmenu.js"></script>
    <script>
        $(document).ready(function(){
            $( '#dl-menu' ).dlmenu();
        });
        $(document).ready(function(){
            $('body').click(function(e) {
                $('#dl-menu').dlmenu('closeMenu'); 
            });
        });
    </script>

</div>