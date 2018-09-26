
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thư Viện Ảnh | 
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
          Thư Viện Ảnh
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Bảng Tin</a></li>
          <li><a href="#">Cài đặt</a></li>
          <li class="active">Thư Viện Ảnh</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">

          <!-- Start content -->
          <form  enctype="multipart/form-data" action="<?php echo base_url()?>p-admin/media/update" method="post">
            <div class="col-md-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <button type="button" class="btn btn-primary" onclick="onAddMore()"><i class="fa fa-plus"></i> Thêm Ảnh</button>
                </div>
                <div class="panel-body">
                  <div class="col-md-6">
                    <table class="table table-hover" id = "p_media">
                      <tbody>
                        <?php
                        if(isset($slides)){
                          $index = 0;
                          foreach ($slides as $row) :
                            $row=(object)$row;
                        ?>   
                            <tr id = 'p_media_r<?php echo $index; ?>'>
                              <td style = "width: 346px;">
                                <span class="control-fileupload">
                                  <input type="file" class="upload" name="userfile[]" onChange="onLoadImage(this, <?php echo $index; ?>);">
                                </span>
                                <img class="img-thumbnail" width = "330px" id="pre_img_<?php echo $index; ?>" name="hinh" src = "<?php echo base_url();?>/public/img-slide/<?php echo $row -> name; ?>">
                              </td>
                              <td>
                                <button type='button' class= "btn btn-warning pcode-btn" id ='<?php echo $index; ?>' onClick = 'onRemoveFile(this)'><i class="fa fa-close"></i></button>
                              </td>
                            </tr>

                        <?php $index ++; endforeach; }?>

                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <button type="submit" style="float: right;" class="btn btn-primary"><i class="fa fa-save"></i> LƯU THAY ĐỔI</button>
                      </div>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
              </form>
              <!-- End content -->
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
 <script src="<?php echo base_url()?>public/admin/js/me.js"></script>
 <!-- AdminLTE for demo purposes -->

</body>
</html>
