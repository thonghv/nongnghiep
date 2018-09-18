<div class="topbar">
    <div class="topbar-wrapper">

        <div class="js-topbar-dialog-corral">

        </div>

        <div class="network-items">
           

            <a href="<?php echo base_url()?>contact" class="topbar-icon icon-inbox yes-hover js-inbox-button" title="Gui Thư Quản Trị">
                <span class="hidden-text">Hộp Thư</span>
                <span class="unread-count" style="display:none"></span>
            </a>
            <a class="topbar-icon icon-achievements yes-hover js-achievements-button " data-unread-class="" title="Câu hỏi mới trong ngày vừa được đăng lên">
                <span class="hidden-text">Tương Tác Người Dùng</span>
                <span class="unread-count">
                    <?php
                        echo $this->data->getNumQuesInday();
                    ?>
                </span>
            </a>
            <a class="topbar-icon icon-achievements yes-hover js-achievements-button " data-unread-class="" title="Lượt tương tác hệ thống">
                <span class="hidden-text">Tương Tác Hệ Thống</span>
                <span class="unread-count" style = "background-color: #928e12;">
                    <?php
                        echo $this->data->getinteractive();
                    ?>
                </span>
            </a>
        </div>

        <?php 
        if(!isset( $_SESSION )) { 
            session_start (); 
        } 
        if($this->session->userdata('name')!=NULL) {
        ?>

        <div class="topbar-links">

            <a href="<?php echo base_url();?>users/myprofile?target=questions" class="profile-me js-gps-track" data-gps-track="profile_summary.click()">

                <?php if($this->data->isLoginNormal()) { ?>
                <div class="gravatar-wrapper-24" title="Pine">
                    <div style = "width: 25px; height: 24px;margin-top: 4px; margin-right: 5px; background-color: <?php echo $this->session->userdata('avatar'); ?> ">
                        <div style = "padding: 6px 8px; font-size: 13px; color: #fff"><?php echo strtoupper(substr($this->session->userdata('name'), 0, 1)); ?></div>
                    </div>
                   
                </div>
                <?php } ?>

                <?php if($this->data->isLoginFace()) { ?>
                <div class="gravatar-wrapper-24" title="Pine">
                    <img src="https://graph.facebook.com/<?=$this->session->userdata('id');?>/picture?type=large" width="24" height="24" class="avatar-me js-avatar-me">
                </div>
                <?php } ?>

                <?php if($this->data->isLoginGoogle()) { ?>
                <div class="gravatar-wrapper-24" title="Pine">
                    <img src="<?=$this->session->userdata('avatar');?>" width="24" height="24" class="avatar-me js-avatar-me">
                </div>
                <?php } ?>

                <div class="links-container topbar-flair">
                    <span class="reputation" title="">
                        <?php echo $this->session->userdata('name');?>
                    </span>
                </div>
                
            </a>
            <div class="links-container" style = "border-left: 1px solid #4e4b4b;">
                <span class="topbar-menu-links">

                    <a id="notify" class="icon-help js-help-button" title="Help Center and other resources" style = "padding: 11px;">

                        Thông Báo &nbsp;
                        <?php 
                            $newNoti = $this->data->getNewNotify($this->session->userdata('uid'));
                            if($newNoti > 0) { 
                        ?> 
                        <span class="unread-count" id = "number-notify">
                            <?php echo $newNoti; ?>  
                        </span>
                        <?php } ?>
                    </a>
                    <div class="topbar-dialog help-dialog js-help-dialog dno dno-notification" id="notification"  style="top: 34px; display: block;">

                        <?php 
                        $noti = $this->data->getNotify($this->session->userdata('uid'));
                        if(count($noti) > 0) { ?>
                        <div class="modal-content">
                            <ul>  
                                <?php
                                    
                                    foreach($noti as $json)
                                    {
                                        $noti = json_decode($json -> json_data);
                                ?>
                                <li>
                                    <a href="<?php echo base_url()?>question/<?php echo $noti-> slug;?>-<?php echo $noti->id; ?>.html" class="js-gps-track" data-gps-track="help_popup.click({ item_type:4 })">
                                        <div style = "float: left; margin-top: 7px; width: 31px; height: 31px; background-color: <?php echo $noti-> avatar; ?>">
                                            <div style = "padding: 6px 11px; font-size: 15px; color: #fff"><?php echo strtoupper(substr($noti-> name, 0, 1)); ?></div>
                                        </div>
                                        <div style = "width: 150px; margin-left: 5px; float: right;">
                                         
                                            <span class="item-summary" style = "line-height: 17px;">
                                                <span class="item-header-summary"><?php echo $noti-> name; ?></span> vừa tham gia bình luận câu hỏi của bạn.
                                            </span>
                                          
                                            <span style ="color: #bf7a7a; font-size: 11px;">
                                                 <?php echo date("d-m-Y H:i:s", strtotime($json -> created_at));?>
                                            </span>
                                        </div>
                                    </a>
                                </li>   
                                <?php } ?> 
                            </ul>
                            <div style = "border-top: 1px solid #f7eded; margin-left: 18px;">
                                 <a href="" style = "font-size: 11px"><span class="item-header-summary">Xem Tất Cả</span></a>
                                 <a>|</a>
                                 <a href="<?php echo base_url()?>users/onRemoveNoti" style = "font-size: 11px"><span class="item-header-summary">Xóa Tất Cả</span></a>
                            </div>
                        </div>

                        <?php } else { ?>

                        <div class="modal-content">
                            <ul>  
                                <li>
                                    <a class="js-gps-track" data-gps-track="help_popup.click({ item_type:4 })">
                                        <span class="item-header-summary">
                                            Hiện chưa có thông báo nào :) ...
                                        </span>
                                    </a>
                                </li>   
                                
                            </ul>
                           
                        </div>

                        <?php } ?>
                    </div>

                    <script type="text/javascript">
                        var div = document.getElementById('notification');
                        div.style.display = 'none';

                        var helpa = document.getElementById('notify');

                        var number = document.getElementById('number-notify');

                        $("#notify").click(function () {
                            helpa.style.backgroundColor  = "#eff0f1";
                            helpa.style.color = '#272525';

                            <?php if($newNoti  > 0) {?> 
                                number.style.display = 'none';
                            <?php } ?>

                            $('.dno-notification').slideToggle(100, function(){ 
                                if ($('#notification').is(':visible')) {
                                    
                                } else {
                                    helpa.style.color = '#e4e6e8';
                                    helpa.style.backgroundColor  = "transparent";
                                }
                                
                            });


                            $.ajax({
                                url: "<?php echo base_url();?>users/onResetNoti/<?php echo $this->session->userdata('uid');?>", 
                                complete: function (response) {
                                   alert(A);
                                },
                                error: function () {
                                    alert(B);
                                }
                              }); 

                        });
                    </script>
                </span>
            </div>

            <div class="search-container">
                <form id="search" action="<?php echo base_url()?>search" method="get" autocomplete="off" role="search">
                    <input name="key" type="text" placeholder="Tìm kiếm câu hỏi" value="" tabindex="1" autocomplete="off" maxlength="240">
                </form>
            </div>

        </div>
        <?php } else {?>
        <div class="topbar-links">
            <div class="links-container">
                <span class="topbar-menu-links topbar-more">
                    <a style = "padding: 11px; border-right: 1px solid #4e4b4b" href="<?php echo base_url();?>users/signup">Đăng Ký</a>
                    <a style = "padding: 11px; border-right: 1px solid #4e4b4b" href="<?php echo base_url();?>users/login">Đăng Nhập</a>
                    <a style = "padding: 11px; " href="<?php echo base_url();?>about">Giới Thiệu</a>
                </span>
            </div>

            <div class="search-container">
                <form id="search" action="<?php echo base_url()?>search" method="get" autocomplete="off" role="search">
                    <input name="key" type="text" placeholder="Tìm kiếm câu hỏi" value="" tabindex="1" autocomplete="off" maxlength="240" />
                </form>
            </div>

        </div>
        <?php } ?>
    </div>
</div>