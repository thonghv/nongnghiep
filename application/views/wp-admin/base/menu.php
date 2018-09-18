		<div class="container-fluid" id="main-container">
			<a href="#" id="menu-toggler"><span></span></a><!-- menu toggler -->

			<div id="sidebar">
				
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success"><i class="icon-signal"></i></button>
						<button class="btn btn-small btn-info"><i class="icon-pencil"></i></button>
						<button class="btn btn-small btn-warning"><i class="icon-group"></i></button>
						<button class="btn btn-small btn-danger"><i class="icon-cogs"></i></button>
					</div>
					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>
						<span class="btn btn-info"></span>
						<span class="btn btn-warning"></span>
						<span class="btn btn-danger"></span>
					</div>
				</div><!-- #sidebar-shortcuts -->

				<ul class="nav nav-list">
					
					<li class="active">
					  <a href="<?php echo base_url();?>wp-admin/home">
						<i class="icon-dashboard"></i>
						<span>Trang chủ</span>
					  </a>
					</li>

					<li>
					  <a href="#" class="dropdown-toggle" >
						<i class="icon-edit"></i>
						<span>Tương Tác</span>
						<b class="arrow icon-angle-down"></b>
					  </a>
					 	<ul class="submenu">
							<li id="posts">
								<a href="<?php echo base_url();?>wp-admin/questions"><i class="icon-double-angle-right"></i><span class="menu-text">Câu Hỏi</span></a>
							</li>

							<li id="postscreate">
								<a href="<?php echo base_url();?>wp-admin/answers"><i class="icon-double-angle-right"></i><span class="menu-text">Bình Luận</span></a>
							</li>
                    	</ul>
					</li>

					<li>
					  <a href="#" class="dropdown-toggle" >
						<i class="icon-user"></i>
						<span>Người Dùng</span>
						<b class="arrow icon-angle-down"></b>
					  </a>
					  <ul class="submenu">
						<li><a href="<?php echo base_url();?>wp-admin/users"></i>Danh Sách</a></li>
						  <li><a href=""><i class="icon-double-angle-right"></i>Phân Quyền</a></li>
						<li><a href=""><i class="icon-double-angle-right"></i>Lịch Sử</a></li>
					  </ul>
					</li>
					
					<li>
					  <a href="#" class="dropdown-toggle" >
						<i class="icon-comments-alt"></i>
						<span>Hộp Thư</span>
						<b class="arrow icon-angle-down"></b>
					  </a>
					 <ul class="submenu">
						<li><a href="#"><i class="icon-double-angle-right"></i>Soạn Thư</a></li>
					  </ul>
					</li>
					
					<li>
					  <a href="#" class="dropdown-toggle">
						<i class="icon-picture"></i>
						<span>Thiết Lập</span>
						<b class="arrow icon-angle-down"></b>
					  </a>
					  <ul class="submenu">
						<li><a href="<?php echo base_url();?>wp-admin/settings"><i class="icon-double-angle-right"></i>Tổng Quan</a></li>
						<li><a href="<?php echo base_url();?>wp-admin/group"><i class="icon-double-angle-right"></i>Danh Mục</a></li>
						<li><a href="<?php echo base_url();?>wp-admin/policy"><i class="icon-double-angle-right"></i>Chính Sách</a></li>
						<li><a href="<?php echo base_url();?>wp-admin/about"><i class="icon-double-angle-right"></i>Giới Thiệu</a></li>
					  </ul>
					</li>
					
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>
			</div><!--/#sidebar-->

		
			



