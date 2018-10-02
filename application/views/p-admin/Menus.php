
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh mục sản phẩm | 
        <?php
        echo $this->data->getWebTitle();
        ?>  
    </title>

    <link href="<?php echo base_url();?>public/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/me.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Header Admin -->
    <?php $this->load->view("p-admin/base/header.php");?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view("p-admin/base/sidebar.php");?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Danh Mục Sản Phẩm
      </h1>
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Bảng Tin</a></li>
          <li><a href="#">Cài Đặt</a></li>
          <li class="active">Danh Mục Sản Phẩm</li>
      </ol>
  </section>

  <section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="<?php if($tabActive == 'MENU_ACTIVE') {?> active  <?php } ?>"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Danh Mục</a></li>
                    <li class="<?php if($tabActive == 'SUB_MENU_ACTIVE') {?> active  <?php } ?>"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Quản Lý Danh Mục Con</a></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane <?php if($tabActive == 'MENU_ACTIVE') {?> active  <?php } ?>" id="tab_1">
                        <div class="box">
                            <!-- /.box-header -->
                            <!-- /.Alert success -->
                            <?php if (isset($ok)&&$ok!="") {?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="icon fa fa-check"></i> Lưu dữ liệu thành công!
                            </div>
                            <?php } ?>
                            <!-- form start -->
                            <form class="form-horizontal" id = "frm_group_menu" action="<?php echo base_url(); ?>p-admin/menus/onAddGroup" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="group_name" class="col-sm-2 control-label" style = "width:10%">Danh Mục</label>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="group_name" name = "group_name" placeholder="Tên danh mục">
                                        </div>

                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus-circle"></i> Tạo Mới</button>
                                    </div>
                                    <div class="form-group">
                                        <label for="group_name" class="col-sm-2 control-label" style = "width:10%">Hiển Thị</label>

                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" name="show_home">
                                                    (Hiển thị sản phẩm của danh mục trên trang chủ)
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </form>
                            </div>
                            <div class="box">
                                <div class="box-header">

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>DANH MỤC</th>
                                                <th>THAO TÁC</th>
                                                <th>HIỂN THỊ TRANG CHỦ</th>
                                            </tr>
                                            <?php
                                                if($groups != null){
                                                foreach ($groups as $row) :
                                                $row=(object)$row;
                                            ?>   
                                            <tr>
                                                <td><?php echo  ($row -> id); ?>.</td>
                                                <td><strong><?php echo  ($row -> name); ?> </strong>
                                                    <ul class="">
                                                        <?php 
                                                            foreach ($subMenu as $val) {
                                                                if($val -> group_id == $row -> id) {
                                                        ?>
                                                        <li class="" style="margin-top : 5px;">
                                                            <span class="label label-success" 
                                                            style="font-size: 85%"><?php echo  ($val -> name); ?></span>
                                                        </li>
                                                        <?php } } ?>
                                                        
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit-<?php echo $row->id;?>">
                                                        Cài Đặt
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-remove-<?php echo $row->id;?>">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;Xóa&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                </td>
                                                <td>
                                                    <?php if($row ->is_show == 1) {?>
                                                        <i class="fa fa-check"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; }?>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                
                                <!-- START modal-dialog -->
                                <?php
                                    if($groups != null){
                                        foreach ($groups as $row) :
                                        $row=(object)$row;
                                ?>   
                                <div class="modal fade" id="modal-edit-<?php echo $row->id;?>" style="display: none;">
                                    <form class="form-horizontal" id = "frm_up_group_menu" action="<?php echo base_url(); ?>p-admin/menus/onUpdateGroup?group_id=<?php echo $row->id;?>" method="post">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Cập Nhập Tên Danh Mục</h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <div class="form-group">
                                                    <label for="group_name" class="col-sm-2 control-label pcode-right"><strong>Danh Mục</strong></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="up_group_name" name = "up_group_name" placeholder="Tên danh mục" 
                                                        value = "<?php echo $row -> name; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_name" class="col-sm-2 control-label pcode-right"><strong>Hiển Thị</strong></label>
                                                    <div class="col-sm-8">
                                                        <input type="checkbox" value="1" name ="is_show" <?php if($row->is_show == 1) {
                                                        echo "checked"; }?> >
                                                        (Hiển thị sản phẩm của danh mục trên trang chủ)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy Bỏ</button>
                                                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                                            </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </form>
                                </div>
                                

                                <div class="modal modal-warning fade" id="modal-remove-<?php echo $row->id;?>" style="display: none;">
                                    <form class="form-horizontal" id = "frm_up_group_menu" action="<?php echo base_url(); ?>p-admin/menus/onRemoveGroup/<?php echo $row->id;?>" method="post">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Bạn có chắc muốn xóa danh mục này hay không ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h2><p><?php echo $row->name;?></p></h2>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline" data-dismiss="modal">Hủy Bỏ</button>
                                                <button type="submit" class="btn btn-outline">Xóa</button>
                                            </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </form>
                                </div>
                                <?php endforeach; }?>
                                <!-- /.modal-dialog -->

                                <!-- /.box -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane <?php if($tabActive == 'SUB_MENU_ACTIVE') {?> active  <?php } ?>" id="tab_2">
                            <div class="alert alert-warning alert-dismissible" id ="sub_menu_alert" style ="display : none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="icon fa fa-check"></i>Bạn phải chọn danh mục trước khi thêm danh mục con !
                            </div>
                            <div class="row">    
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Chọn Danh Mục
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" id = "frm_filter_group" action="<?php echo base_url(); ?>p-admin/menus/onFilterGroup" method="post">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <select name="lst-group-menu" id="groups-input" class="form-control" required="required">
                                                                <option value="">Vui lòng chọn danh mục ... !</option>
                                                                <?php 
                                                                    foreach ($groups as $val) {
                                                                ?>
                                                                <?php if($val -> id == $groupId) {?>
                                                                    <option value="<?php echo $val -> id;?>" selected="selected"><?php echo $val -> name; ?></option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $val -> id;?>"><?php echo $val -> name; ?></option>
                                                                <?php } } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-8" style = "margin-top :10px;">
                                                            <button type="submit" class="btn btn-primary">
                                                            <i class="fa fa-search"></i> Cài Đặt</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <br/><br/><br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                
                                    <div class="col-md-8">
                                        
                                        <div class="panel panel-warning">
                                              <div class="panel-heading">
                                                    <h3 class="panel-title">Danh mục con &nbsp;
                                                    <?php if(isset($groupName)) {?>
                                                    <span style ="float:right;" class="label label-info"><?php echo $groupName;?></span> <?php } ?></h3>  
                                              </div>
                                              <div class="panel-body">
                                              <div class="box">
                                            
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                            <!-- form start -->
                                                <form class="form-horizontal" id = "pcode_fr_sub_menu" action="<?php echo base_url(); ?>p-admin/menus/onAddSubMenu" method="post">
                                                    <div class="form-group">
                                                            <label for="group_name" class="col-sm-2 control-label">Danh Mục</label>

                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="sub_menu_name" name = "sub_menu_name" placeholder="Tên danh mục">
                                                                <?php if(isset($groupId)) {?>
                                                                <input type="text" name = "group_id" class = "pcode-hidden" value = "<?php echo $groupId;?>">
                                                                <?php } ?>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="fa fa-plus-circle"></i> Tạo Mới</button>
                                                        </div>

                                                </form>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th style="width: 10px">ID</th>
                                                            <th>TÊN DANH MỤC</th>
                                                            <th>THAO TÁC</th>
                                                        </tr>
                                                        <?php
                                                            if(isset($subMenuFilter)){
                                                                foreach ($subMenuFilter as $row) :
                                                                $row=(object)$row;
                                                        ?>   
                                                        <tr>
                                                            <td><?php echo $row ->id; ?>.</td>
                                                            <td><?php echo $row ->name; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit-sub-<?php echo $row->id;?>">
                                                                    Cài Đặt
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-remove-sub-<?php echo $row->id;?>">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;Xóa&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; }?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                              </div>
                                        </div>
                                        
                                        <!-- /.box -->
                                    </div>

                                </div>
                            </div>

                            <!-- START modal-dialog -->
                            <?php
                                    if(isset($subMenuFilter)){
                                        foreach ($subMenuFilter as $row) :
                                        $row=(object)$row;
                                ?>   
                                <div class="modal fade" id="modal-edit-sub-<?php echo $row->id;?>" style="display: none;">
                                    <form class="form-horizontal" id = "pcode_fr_up_sub_menu" action="<?php echo base_url(); ?>p-admin/menus/onUpdateSubMenu?subId=<?php echo $row->id;?>" method="post">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Cập Nhập Tên Danh Mục Con</h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="group_name" class="col-sm-2 control-label pcode-right"><strong>Danh Mục</strong></label>

                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="up_sub_menu_name" name = "up_sub_menu_name" placeholder="Tên danh mục" 
                                                                value = "<?php echo $row -> name; ?>">
                                                                <?php if(isset($groupId)) {?>
                                                                <input type="text" name = "group_id" class = "pcode-hidden" value = "<?php echo $groupId;?>">
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy Bỏ</button>
                                                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                                            </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </form>
                                </div>
                                

                                <div class="modal modal-warning fade" id="modal-remove-sub-<?php echo $row->id;?>" style="displa
                                y: none;">
                                    <form class="form-horizontal" id = "frm_up_group_menu" action="<?php echo base_url(); ?>p-admin/menus/onRemoveSubMenu/<?php echo $row->id;?>" method="post">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Bạn có chắc muốn xóa danh mục con này hay không ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h2><p><?php echo $row->name;?></p></h2>
                                                <?php if(isset($groupId)) {?>
                                                                <input type="text" name = "group_id" class = "pcode-hidden" value = "<?php echo $groupId;?>">
                                                                <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline" data-dismiss="modal">Hủy Bỏ</button>
                                                <button type="submit" class="btn btn-outline">Xóa</button>
                                            </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </form>
                                </div>
                                <?php endforeach; }?>
                                <!-- /.modal-dialog -->


                      </div>
                      <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
              </div>
          </div>
      </div>
  </section>
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2018 <a href="">PCode Team</a>.</strong> All rights
reserved.
</footer>

<!-- Control Sidebar -->
<?php $this->load->view("p-admin/base/config.php");?>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
     <div class="control-sidebar-bg"></div>

 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?php echo base_url()?>public/admin/js/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url()?>public/admin/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo base_url()?>public/admin/js/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url()?>public/admin/js/adminlte.min.js"></script>
 <!-- Sparkline -->
 <script src="<?php echo base_url()?>public/admin/js/jquery.sparkline.min.js"></script>
 <!-- jvectormap  -->
 <script src="<?php echo base_url()?>public/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="<?php echo base_url()?>public/admin/js/jquery-jvectormap-world-mill-en.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo base_url()?>public/admin/js/jquery.slimscroll.min.js"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url()?>public/admin/js/Chart.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="<?php echo base_url()?>public/admin/js/dashboard2.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url()?>public/admin/js/me.js"></script>
</body>
</html>
