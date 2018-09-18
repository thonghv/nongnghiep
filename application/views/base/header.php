<section class="topbar">
    <div class="topbar-wrapper">

        <div class="js-topbar-dialog-corral">
        </div>

        <div class="network-items">

            <a href="<?php echo base_url()?>" class="topbar-icon icon-site-switcher yes-hover js-site-switcher-button js-gps-track" data-gps-track="site_switcher.show" title="A list of all 170 Stack Exchange sites">
                <span class="hidden-text">Stack Exchange</span>
            </a>

        </div>

        <div class="topbar-links">
            <div class="links-container">
                <span class="topbar-menu-links">
                    <a href="register">Đăng Ký</a>
                    <a href="login">Đăng Nhập</a>
                    <a href="about">Giới Thiệu</a>
                </span>
            </div>

            <div class="search-container">
                <form action="/search" method="get" autocomplete="off">
                    <input name="q" id="search" type="text" placeholder="Tìm kiếm" tabindex="1" autocomplete="off" maxlength="240" />
                </form>
            </div>

        </div>
    </div>
</section>
<script src="https://cdn.sstatic.net/stackexchange/js/topbar.js?v=cf010b31fcd2"></script>

<header>
    <div class="contentWrapper">
        <a href="<?php echo base_url()?>"><h1>Stack Exchange</h1></a>

        <nav id="primary_nav_wrap">
            <ul>
                <?php 
                    foreach($menu as $val)
                    {
                        $id=$val->id;
                    ?>
                <li><a href="#"><?php echo $val->name; ?></a>
                    <ul>
                        <?php 
                        foreach($menu_sub as $val_sub)
                        {
                            $id_sub=$val_sub->id;
                            $type =$val_sub->menu_type;
                            if($type == $id){
                        ?>

                        <li><a href="#"><?php echo $val_sub->name; ?></a>
                            <ul>
                            <?php 
                            foreach($menu_sub_detail as $val_sub_detail)
                            {
                                $id_sub_detail=$val_sub_detail->id;
                                $sub_menu_type =$val_sub_detail->sub_menu_type;
                                if($sub_menu_type == $id_sub){
                            ?>
                                <li><a href="#"><?php echo $val_sub_detail->name; ?></a></li>
                            <?php } } ?>
                            </ul>
                        </li>
                        <?php } } ?>
                    </ul>
                </li>
                
                <?php  } ?>
                <li>
                    <a href="<?php echo base_url();?>users">TOP USER</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>users/ask">ĐẶT CÂU HỎI </a>
                </li>
            </ul>
        </nav>
    </div>
</header>