<div class="top-menu">
	<div class="menu menu_desktop">
		<ul>
			<li class=" active"><a class="" href=""><span>Trang Chủ</span></a></li>
			<li class=""><a class="" href=""><span>Giới thiệu</span></a></li>
			<li class=" "><a class="" href=""><span>Sản phẩm</span></a>
				<ul class="dl-submenu  ">
					<li><a href="">» Nhóm trái cây</a>
						<ul class="dl-submenu  ">
							<li><a href="">» Nhóm trái cây</a></li>
							<li><a href="">» Nhóm củ, quả</a></li>
							<li><a href="">» Nhóm cải bắp, rau lá</a></li>
							<li><a href="">» Nhóm rau tạo mùi</a></li>
						</ul>
					</li>
					<li><a href="">» Nhóm củ, quả</a>
						<ul class="dl-submenu  ">
							<li><a href="">» Nhóm trái cây</a></li>
							<li><a href="">» Nhóm củ, quả</a></li>
							<li><a href="">» Nhóm cải bắp, rau lá</a></li>
							<li><a href="">» Nhóm rau tạo mùi</a></li>
						</ul>
					</li>
					<li><a href="">» Nhóm cải bắp, rau lá</a></li>
					<li><a href="">» Nhóm rau tạo mùi</a></li>
				</ul>
			</li>
			<li class=""><a class="" href=""><span>Bài Viết Khoa Học</span></a></li>
			<li class=""><a class="" href="0"><span>Tuyển dụng</span></a></li>
			<li class=""><a class="" href=""><span>Liên hệ</span></a></li>
		</ul>

	</div>
	<!-- script for menu -->
	 <div class="dv-mnmb mobile menu_mobile">
        <a class="a_home" href="<?php echo base_url()?>">trang chủ</a>
        <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger cur "></button>
            <div class="clear"></div>
            <ul class="dl-menu" style = "background: rgba(0, 0, 0, 0.41);">
                <!--  -->
                <li class=" active"><a class="" href="<?php echo base_url()?>"><span>Trang Chủ</span></a></li>
                <li class=""><a class="" href="<?php echo base_url()?>gioi-thieu.html"><span>Giới thiệu</span></a></li>
                <li class=" "><a class="" href=""><span>Sản phẩm</span></a>
                    <ul class="dl-submenu"  style = "background: rgba(0, 0, 0, 0.41);">
                        <?php
                        if($this->data->getGroupsMenu() != null){
                        foreach ($this->data->getGroupsMenu() as $groups) :
                            $groups=(object)$groups;
                        ?> 
                        <li><a href="">» <?php echo $groups->name; ?></a>
                            <ul class="dl-submenu"  style = "background: rgba(0, 0, 0, 0.41);">
                            <?php
                            if($this->data->getSubsMenu() != null){
                            foreach ($this->data->getSubsMenu() as $sub) :
                                $sub=(object)$sub;
                                if($sub -> group_id  == $groups -> id) {
                            ?>   
                            <li><a href="<?php echo base_url()?><?php echo $sub -> slug?>-<?php echo $sub -> id?>.html">» <?php echo $sub -> name; ?></a></li>
                            <?php } endforeach; }?>
                        </ul>
                        </li>
                        <?php endforeach; }?>
                    </ul>
                </li>
                <li class=""><a class="" href="<?php echo base_url()?>bai-viet-khoa-hoc.html"><span>Bài Viết Khoa Học</span></a></li>
                <li class=""><a class="" href="<?php echo base_url()?>tuyen-dung.html"><span>Tuyển dụng</span></a></li>
                <!--  -->
            </ul>
        </div>
        <div class="clear"></div>
    </div>
	<!--  -->
	<style type='text/css'> .menu > ul > li:last-child > a:after{display: none} </style>					<div class="clearfix"> </div>
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