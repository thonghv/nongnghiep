
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thêm Sản Phẩm | 
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
         <?php echo $post_name; ?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()?>p-admin/dashboard"><i class="fa fa-dashboard"></i>Bảng Tin</a></li>
          <li><a href="<?php echo base_url()?>p-admin/product.html">Bài Viết</a></li>
          <li class="active">Giới Thiệu</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <!-- /.Alert success -->
                <?php
                if(!isset( $_SESSION )) 
                { 
                  session_start (); 
                } 
                if($this->session->userdata('ok')!=NULL)
                  {?>   
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="icon fa fa-check"></i> Cập nhập dữ liệu thành công!
                    </div>
                  <?php } ?>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" enctype="multipart/form-data" id = "frm_article" action="<?php echo base_url(); ?>p-admin/posts/onUpdate/<?php echo $post_type; ?>" method="post">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label for="desc" class="col-sm-3 control-label">
                      Nội Dung
                    </label>

                    <div class="col-sm-8">
                      <?php echo $editor; ?>
                      <textarea class="form-control" id="content"  name="content">
                        <?php if(isset($content)) { echo $content; }?></textarea>  
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Lưu Thay Đổi</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            <!-- general form elements disabled -->

            <!-- /.box -->
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
 <!-- SlimScroll -->
 <script src="<?php echo base_url()?>public/admin/js/jquery.slimscroll.min.js"></script>
 <script src="<?php echo base_url()?>public/admin/js/me.js"></script>

<?php $this->session->unset_userdata('ok'); ?>
</body>
</html>
