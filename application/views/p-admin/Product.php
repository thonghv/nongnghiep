
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sản Phẩm | 
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/_all-skins.min.css">

   <!-- Google Font -->
   <link rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
          Sản Phẩm
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()?>p-admin/dashboard"><i class="fa fa-dashboard"></i>Bảng Tin</a></li>
          <li><a href="">Sản Phẩm</a></li>
          <li class="active">Danh Sách</li>
        </ol>
      </section>

      <!-- Main Content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID" style="width: 30px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tên Sản Phẩm" style="width: 300px;">Tên Sản Phẩm</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Danh Mục Sản Phẩm" style="width: 140px;">Danh Mục Sản Phẩm</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Loại Sản Phẩm" style="width: 140px;">Loại Sản Phẩm</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tùy Chọn" style="width: 100px;">Tùy Chọn</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if($products != null){
                                                    foreach ($products as $row) :
                                                    $row=(object)$row;
                                            ?>   
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $row -> id; ?></td>
                                                    <td><?php echo $row -> product_name; ?></td>
                                                    <td>
                                                        <span class="label label-success">
                                                            <?php echo $row -> group_name; ?>
                                                        </span>
                                                    </td>
                                                    <td><span class="label label-primary">
                                                            <?php echo $row -> menu_name; ?>
                                                        </span>
                                                    </td>
                                                    <td> 
                                                        <button type="button" class="btn btn-xs btn-flat btn-info" data-toggle="modal" data-target="#modal-info-<?php echo $row->id;?>">Chi Tiết</button>
                                                        <a href ="<?php echo base_url(); ?>p-admin/product/update/<?php echo $row->id;?>">
                                                            <button type="button" class="btn btn-xs btn-flat btn-warning">&nbsp;Sửa&nbsp;</button>
                                                        </a>
                                                        <button type="button" class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-remove-<?php echo $row->id;?>">&nbsp;Xóa&nbsp;</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; }?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">ID</th>
                                                    <th rowspan="1" colspan="1">Tên Sản Phẩm</th>
                                                    <th rowspan="1" colspan="1">Danh Mục Sản Phẩm</th>
                                                    <th rowspan="1" colspan="1">Loại Sản Phẩm</th>
                                                    <th rowspan="1" colspan="1">Tùy Chọn</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <!-- START modal-dialog -->
                    <?php
                                if($products != null){
                                        foreach ($products as $row) :
                                        $row=(object)$row;
                                ?>   
                                <div class="modal fade" id="modal-info-<?php echo $row->id;?>" style="display: none;">
                                    <form class="form-horizontal" id = "frm_up_group_menu" action="<?php echo base_url(); ?>p-admin/menus/onUpdateGroup?group_id=<?php echo $row->id;?>" method="post">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Thông Tin Sản Phẩm</h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2">Sản Phẩm</th>
                                                            <th><?php echo $row->product_name; ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Danh Mục</strong></td>
                                                            <td>
                                                                <span class="label label-success">
                                                                    <?php echo $row -> group_name; ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Loại Sản Phẩm</strong></td>
                                                            <td>
                                                                <span class="label label-primary">
                                                                    <?php echo $row -> menu_name; ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Giá</strong></td>
                                                            <td>
                                                                <?php echo $row -> price; ?> VND
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Hình Ảnh</strong></td>
                                                            <td>
                                                                <?php
                                                                if($imgs != null){
                                                                        foreach ($imgs as $imgr) :
                                                                        $imgr=(object)$imgr;
                                                                        if($imgr->product_id == $row->id) {
                                                                ?> 
                                                                <img src="<?php echo base_url()?>public/img-slide/<?php echo $imgr -> img_name; ?>" class="img-thumbnail" width = "100px;" alt="<?php echo $row -> product_name; ?>"> 
                                                                <?php } endforeach; }?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Giới Thiệu</strong></td>
                                                            <td>
                                                                <?php echo $row -> overview; ?>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><strong>Chi Tiết</strong></td>
                                                            <td>
                                                                <?php echo $row -> content; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy Bỏ</button>
                                            </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </form>
                                </div>

                                <div class="modal modal-warning fade" id="modal-remove-<?php echo $row->id;?>" style="displa
                                y: none;">
                                    <form class="form-horizontal" id = "frm_up_group_menu" action="<?php echo base_url(); ?>p-admin/product/onRemove/<?php echo $row->id;?>" method="post">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Bạn có chắc muốn xóa sản phẩm này hay không ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h2><p><?php echo $row->product_name;?></p></h2>
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
      <!-- /.content -->
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
 <!-- DataTables -->
<script src="<?php echo base_url()?>public/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>public/admin/js/dataTables.bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo base_url()?>public/admin/js/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
<script src="<?php echo base_url()?>public/admin/js/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url()?>public/admin/js/adminlte.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
