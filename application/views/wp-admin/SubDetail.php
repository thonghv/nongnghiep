<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>
            Chi Tiết Danh Mục - Quản Lý Hệ Thống -
            <?php
                echo $this->data->getWebTitle();
            ?>  
        </title>
        
        <link rel="shortcut icon" href="<?php echo base_url()?>public/img/favicon.ico">
        <meta name="description" content="overview & stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- basic styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.1/css/font-awesome.css" />

        <!-- page specific plugin styles -->
        
        <!-- bookstore styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/ace.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/ace-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/ace-skins.min.css">
        
        <!--[if lt IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <script>
        function checkform() {
            var x = document.forms["myForm"]["name"].value;
            if (x == "") {
                document.getElementById("name").focus();
                return false;
            }
        }
        </script>

    </head>
    <body>
        
        <?php $this->load->view("wp-admin/base/header.php");?>

        <?php $this->load->view("wp-admin/base/menu.php");?>
        
            <div id="main-content" class="clearfix">
                    
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i> <a href="<?php echo base_url();?>">Trang Chủ</a><span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li class="active"><a href="<?php echo base_url();?>wp-admin/category?group=<?php echo $group; ?>">Chuyên Đề</a><span class="divider"><i class="icon-angle-right"></i></span></li><li>Danh Mục</li>
                        </ul><!--.breadcrumb-->

                        <div id="nav-search">
                            <form class="form-search">
                                    <span class="input-icon">
                                        <input autocomplete="off" id="nav-search-input" type="text" class="input-small search-query" placeholder="Tìm kiếm ..." />
                                        <i id="nav-search-icon" class="icon-search"></i>
                                    </span>
                            </form>
                        </div><!--#nav-search-->
                    </div><!--#breadcrumbs-->
                    <div id="page-content" class="clearfix"><!--/page-header-->
                        
                        <div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE --><!--/row-->

<div class="row-fluid">
    <h3 class="header smaller lighter blue"><strong><?php echo $sub_name; ?></strong>
    </h3> 
    <?php
    if(!isset( $_SESSION )) 
    { 
        session_start (); 
    } 
    if($this->session->userdata('success')!=NULL)
    {?>                  
    <div class="alert alert-block alert-success">
         <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
          <i class="icon-ok green"></i> Thao tác cập nhập dữ liệu thành công!
    </div>
    <?php }?>
    
     <form method='post' onsubmit="return checkform()"  class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>wp-admin/category/addDetail?sub_type=<?php echo $sub_type; ?>&group=<?php echo $group;?>" name="myForm">
        <div class="tabbable">
            <table align="left" cellpadding="7" cellspacing="10">
            <tr>
                <td>
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-oldpass">
                       
                   </style><strong>Danh Mục&nbsp;</strong></label>
                </td>
                <td colspan="2"><label for="title"></label>
                    <select name="sub_type_detail" id="sub_type_detail" class="ask-category" style = "width: 450px;">
                        <option value="0">Vui lòng chọn danh mục ...</option>
                            <?php foreach($sub_all as $val) {

                                $check = false;
                                foreach($sub_detail as $val_detail) {
                                    if($val->id == $val_detail -> detail_type) {
                                        $check = true;
                                        break;
                                    }
                                }
                                if(!$check) {
                            ?>
                                <option value="<?php echo $val->id; ?>">
                                    <?php echo $val -> name; ?>  
                                </option>
                            <?php } } ?>
                    </select>          
                </td>            
            </tr>
            </table>
        </div>
        <div class="clearfix form-actions" style ="padding-left: 20px">
            <div class="col-md-offset-3 col-md-9 no-marginleft">
                <button class="btn btn-info" type="submit">
                    <i class="icon-ok bigger-110"></i>
                                                Thêm Mới    </button>
            </div>
        </div>
    </form>
    

    <table id="table_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                     <th style ="width: 20px;" class="center"> 
                      <label><input type="checkbox" /><span class="lbl"></span></label>
                    </th>
                    <th style ="width: 70px;">Mã DM</th>
                    <th style ="width: 300px;">Tên Danh Mục</th>
                    <th></th>
                </tr>
            </thead>                   
            <tbody>
                 <?php
                    if($sub_detail != null){
                      foreach ($sub_detail as $row) :
                      $row=(object)$row;
                      ?>          
                <tr>
                     <td class='center'>
                        <label><input type='checkbox' /><span class="lbl"></span></label>
                    </td>
                    <td id="masp"> <?php echo  $row -> detail_type ; ?></td>
                    <td><?php echo  ($row -> detail_type_name); ?></td>
                
                    <td>

                    <div class="modal fade" id="confirm-delete-<?php echo $row -> id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">XÁC NHẬN XÓA DỮ LIỆU</h4>
                                        </div>
                                    
                                        <div class="modal-body">
                                            <p>Bạn có chắc chắn muốn xóa danh mục này ra khỏi danh sách hay không ?</p>
                                            <p class="debug-url"></p>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a  href="<?php echo base_url(); ?>wp-admin/category/onRemove?group=<?php echo $group ?>&category=<?php echo  $row -> id ; ?>" class="btn btn-danger btn-ok">Xóa</a>
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Hủy Bỏ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <a href="<?php echo base_url(); ?>wp-admin/category/">
                            <input class='btn btn-mini btn-info' type="button" name="editsp" value="Cập Nhập"/>
                             </a>
                            <a href="#" data-href="#" data-toggle="modal" data-target="#confirm-delete-<?php echo $row -> id; ?>">
                                <input class='btn btn-mini btn-danger' type="button" name="delsp" value="&nbsp; Xóa &nbsp;"/>
                            </a>
                            <br>  
                        
                            </script>
                        <div class='hidden-phone visible-desktop btn-group'>

                            </div>
                         
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left"><span class="blue"><i class="icon-flag"></i></span> </a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>         
                <?php endforeach; }?></tbody>
    </table>

</div>


 
 
<!-- PAGE CONTENT ENDS HERE -->
                         </div><!--/row-->
    
                    </div><!--/#page-content-->
                      

                    <div id="ace-settings-container">
                        <div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
                            <i class="icon-cog"></i>
                        </div>
                        <div id="ace-settings-box">
                            <div>
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hidden">
                                        <option data-class="default" value="#438EB9">#438EB9</option>
                                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" /><label class="lbl" for="ace-settings-header"> Fixed Header</label></div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" /><label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label></div>
                        </div>
                    </div><!--/#ace-settings-container-->


            </div><!-- #main-content -->


        </div><!--/.fluid-container#main-container-->




        <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only"></i>
        </a>


        <!-- basic scripts -->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo base_url();?>public/js/wp-admin/jquery-1.9.1.min.js'>\x3C/script>");
        </script>
        
        
        <script src="<?php echo base_url();?>/public/js/wp-admin/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/wp-admin/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/wp-admin/jquery.dataTables.bootstrap.js"></script>
        
        <!-- ace scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>public/js/wp-admin/ace-elements.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/wp-admin/ace.min.js"></script>


        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
        $(function() {


    var oTable1 = $('#table_report').dataTable( {
    "aoColumns": [
      { "bSortable": false },
      null, null, 
      { "bSortable": false }
    ] } );
    
    
    $('table th input:checkbox').on('click' , function(){
        var that = this;
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });
            
    });

    $('[data-rel=tooltip]').tooltip();
})

        </script>
<?php $this->session->unset_userdata('status'); ?>
<?php $this->session->unset_userdata('success'); ?>
    </body>
</html>
