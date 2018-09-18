
    <div class="topbar">
        <div class="network-items" id="nav" role="navigation">

            <a href="#nav" title="Show navigation">Show navigation</a>
                <a href="#" title="Hide navigation">Hide navigation</a>
                <ul class="clearfix">
                     <?php
                    $index = 0;
                    foreach($menu as $val)
                    {
                        $id=$val->id;
                    ?>

                    <li>
                        <a href="" aria-haspopup="true"><span>CHUYÊN ĐỀ <?php echo $val->name; ?></span></a>
                        <ul>
                            <li><a href="?design">Design</a></li>
                            <li><a href="?html">HTML</a></li>
                            <li><a href="?css">CSS</a></li>
                            <li><a href="?javascript">JavaScript</a></li>
                        </ul>
                    </li>

                    <?php $index ++; } ?>
                   
                </ul>

            <a href="<?php echo base_url()?>" class="topbar-icon js-site-switcher-button icon-site-switcher-bubble">
                <span class="hidden"><?php echo $this->data->getWebName(); ?></span>
            </a>

          

            <?php 
            if(!isset( $_SESSION )) { 
                session_start (); 
            } 
            if($this->session->userdata('name')!=NULL) {  ?>
           
				<div class="my-login-links-container">
					<a href="<?php echo base_url();?>users/myprofile?target=questions">
                        <?php echo $this->session->userdata('name'); ?>
                    </a>
				</div>

			    <?php if($this->data->isLoginNormal()) { ?>
                <div class="login-links-container my-login-links-container-more">
					<a href="<?php echo base_url();?>users/myprofile?target=questions">

                        <div style = "width: 25px; height: 24px;margin-top: 4px; background-color: <?php echo $this->session->userdata('avatar'); ?> ">
                            <div style = "padding: 6px 8px; font-size: 13px; color: #fff"><?php echo strtoupper(substr($this->session->userdata('name'), 0, 1)); ?></div>
                        </div>

					</a>
				</div>
                <?php } ?>

                <?php if($this->data->isLoginFace()) { ?>
                <div class="login-links-container my-login-links-container-more">
                    <a href="<?php echo base_url();?>users/myprofile?target=questions">
                        <img src="https://graph.facebook.com/<?=$this->session->userdata('id');?>/picture?type=large" alt="" width="24" height="24" class="avatar-me js-avatar-me">
                    </a>
                </div>
                <?php } ?>

                <?php if($this->data->isLoginGoogle()) { ?>
                 <div class="login-links-container my-login-links-container-more">
                    <a href="<?php echo base_url();?>users/myprofile?target=questions">
                        <img src="<?=$this->session->userdata('avatar');?>" alt="<?php echo $this->session->userdata('name');?>" width="24" height="24" class="avatar-me js-avatar-me">
                    </a>
                </div>
                <?php } ?>

            <?php } else {?>

				<div class="login-links-container">
					<a href="<?php echo base_url();?>users/signup" class="signup">Đăng Ký</a>
					<a href="<?php echo base_url();?>users/login">Đăng Nhập</a>
				</div>

            <?php } ?>

        </div>

       
    </div>
