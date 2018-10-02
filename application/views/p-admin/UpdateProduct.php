
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cập Nhập Sản Phẩm | 
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
          Cập Nhập Sản Phẩm
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()?>p-admin/dashboard"><i class="fa fa-dashboard"></i>Bảng Tin</a></li>
          <li><a href="<?php echo base_url()?>p-admin/product.html">Sản Phẩm</a></li>
          <li class="active">Cập Nhập</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" enctype="multipart/form-data" id = "frm_product" action="<?php echo base_url(); ?>p-admin/product/onUpdate/<?php echo $info[0] -> id;?>" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="nameproduct" class="col-sm-3 control-label">
                      Tên Sản Phẩm
                    </label>

                    <div class="col-sm-8">
                      <input type=text class="form-control" id="name_product" name = "name_product" placeholder="Tên sản phẩm" value = "<?php echo $info[0]->name;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="groupmenu" class="col-sm-3 control-label">
                      Danh Mục
                    </label>

                    <div class="col-sm-8">
                      <select class="form-control" name = "group_menu" id = "group_menu" onChange="getSubMenu(this.value)">
                        <option value = "">Chọn danh mục sản phẩm ?</option>
                        <?php
                              if(isset($groups)){
                              foreach ($groups as $row) :
                              $row=(object)$row;
                              ?>
                        <option value = "<?php echo($row -> id);?>"<?php if($row->id == $info[0] -> group_menu_id) { echo "selected";}?>><?php echo($row -> name);?></option>
                        <?php endforeach; }?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="submenu" class="col-sm-3 control-label">
                      Loại Sản Phẩm
                    </label>

                    <div class="col-sm-8">
                      <select class="form-control" id ="sub_menu" name = "sub_menu">
                        <option value = "">Chọn loại sản phẩm ?</option>
                        <?php
                              if(isset($subMenu)){
                              foreach ($subMenu as $row) :
                              $row=(object)$row;
                              ?>
                        <option value = "<?php echo($row -> id);?>"<?php if($row->id == $info[0] -> sub_menu_id) { echo "selected";}?>><?php echo($row -> name);?></option>
                        <?php endforeach; }?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="overivew" class="col-sm-3 control-label">
                      Giới Thiệu
                    </label>

                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" id = "overview" name = "overview" placeholder="Giới thiệu tổng quan"><?php echo $info[0]->overview;?></textarea>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">
                      Hiển Thị Top
                    </label>

                    <div class="col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="1" name ="is_show" <?php if($info[0]->is_show == 1) {
                            echo "checked"; }?> >
                          
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="desc" class="col-sm-3 control-label">
                      Hình Ảnh
                    </label>

                    <div class="col-sm-8">
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <button type="button" class="btn btn-sm btn-primary" onclick="onAddMore()"><i class="fa fa-plus fa-sm"></i> Thêm Ảnh</button>
                          </h3>
                        </div>
                        <div class="panel-body">
                          <table class="table table-hover" id = "p_media">
                            <tbody>
                              <?php
                              if(isset($imgs)){
                              $index = 0;
                              foreach ($imgs as $row) :
                              $row=(object)$row;
                              ?>   
                              <tr id = 'p_media_r<?php echo $index; ?>'>
                                <td style = "width: 346px;" class="pcode-col">
                                  <span class="control-fileupload">
                                    <input type="file" class="upload" name="userfile[]" onChange="onLoadImage(this, <?php echo $index; ?>);">
                                  </span>
                                  <img class="img-thumbnail" width = "300px" id="pre_img_<?php echo $index; ?>" name="hinh" src = "<?php echo base_url();?>/public/img-slide/<?php echo $row -> img_name; ?>">
                                  <input type="text" class="pcode-hidden" name="input_img_<?php echo $index; ?>" value = "<?php echo $row -> img_name; ?>">
                                </td>
                                <td>
                                  <button type='button' class= "btn btn-warning pcode-btn" id ='<?php echo $index; ?>' onClick = 'onRemoveFile(this)'><i class="fa fa-close"></i></button>
                                </td>
                              </tr>

                              <?php $index ++; endforeach; }?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="desc" class="col-sm-3 control-label">
                      Chi Tiết
                    </label>

                    <div class="col-sm-8">
                      <?php echo $editor; ?>
                      <textarea class="form-control" id="content"  name="content"><?php echo $info[0]->content;?></textarea>  
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Lưu Thay Đổi</button>
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

 <script type="text/javascript">
  function createObject() {
    var request_type;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
    request_type = new ActiveXObject("Microsoft.XMLHTTP");
  }
  else{
    request_type = new XMLHttpRequest();
  }
    return request_type;
  }
  var http = createObject();
  function getSubMenu(id)
  {
    http.open('get','<?php echo base_url()?>p-admin/ajax/getSubMenu/'+id);
    http.onreadystatechange= process;
    http.send(null);
  }
  
  function process()
  {
    if(http.readyState == 4 && http.status == 200)
    {
      result= http.responseText;
      document.getElementById('sub_menu').innerHTML= result;
    }
  }

</script>
</body>
</html>
