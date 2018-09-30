<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview menu-open">
        <a href="<?php echo base_url()?>p-admin/dashboard>
          <i class="fa fa-dashboard"></i> <span>Bảng Tin</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Sản Phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()?>p-admin/product.html"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
          <li><a href="<?php echo base_url()?>p-admin/add-product.html"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
        </ul>
      </li>
       <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Bài Viết</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()?>p-admin/product"><i class="fa fa-circle-o"></i>Giới Thiệu</a></li>
          <li><a href="<?php echo base_url()?>p-admin/"><i class="fa fa-circle-o"></i>Tuyển Dụng</a></li>
          <li><a href="<?php echo base_url()?>p-admin/product"><i class="fa fa-circle-o"></i>Bài Viết Khoa Học</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-cogs"></i> <span>Cài Đặt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()?>p-admin/optionsgeneral"><i class="fa fa-circle-o"></i>Tổng Quan</a></li>
          <li><a href="<?php echo base_url()?>p-admin/menus"><i class="fa fa-circle-o"></i>Danh Mục</a></li>
          <li><a href="<?php echo base_url()?>p-admin/media"><i class="fa fa-circle-o"></i>Thư Viện Ảnh</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>