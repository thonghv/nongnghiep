<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
            Thiết Lập - Quản Lý Hệ Thống -
            <?php
                echo $this->data->getWebTitle();
            ?>
        </title>
        <link href="<?php echo base_url();?>public/favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
    </head>
    <body>
        
        <?php $this->load->view("wp-admin/base/header.php");?>

        <?php $this->load->view("wp-admin/base/menu.php");?>
        
            <div id="main-content" class="clearfix">
                    
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i> <a href="<?php echo base_url()?>wp-admin">Trang Chủ</a><span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li class="active">Cài Đặt</li>
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
    <h3 class="header smaller lighter blue">Thiết Lập
        <span style ="padding-left:80%"> </span>
    </h3>  
    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse:collapse; border: 1px solid #ddd;     background-color: rgba(195, 171, 171, 0.15);" bgcolor="#FFCC99" bordercolor="#FF9999">
                        <tr>
                         <form action="<?php echo base_url();?>wp-admin/settings/onUpdateTitle?>" method="post" id="account-creation_form"  class="std box contact-form">
                            <td style="padding-left:15px;"><span class="title_info_manager"> Têu Đề Trang </span>
                            </td>
                            <td>
                                <input class="required" name="web_title" style="width:400px" type="text" id="input-mystyle" value="<?php echo $title;?>" size="40"/>
                            </td>
                            <td>
                                <label for="active"></label>
                                <a href="<?php echo base_url(); ?>wp-admin/settings/updateTitle?>">
                                    <input class='btn btn-mini btn-info' type="submit" name="save" value="LƯU THAY ĐỔI" />
                                </a>
                            </td>
                            </form>
                        </tr>
                        <tr>
                             <form action="<?php echo base_url();?>wp-admin/settings/onUpdateAdmin?>" method="post" id="account-creation_form"  class="std box contact-form">
                            <td style="padding-left:15px"><span class="title_info_manager"> Admin Name &nbsp;  &nbsp;  &nbsp;</span>
                            </td>
                            <td>
                                <input class="required" name="admin" style="width:400px" type="text" id="input-mystyle" value="<?php echo $admin;?>" size="40"/>
                            </td>
                            <td>
                                <label for="active"></label>
                                <a href="<?php echo base_url(); ?>admin/Setting/updateEmail?>">
                                    <input class='btn btn-mini btn-info' type="submit" name="themtg" value="LƯU THAY ĐỔI" />
                                </a>
                            </td>
                        </tr>
                        </form>
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
      null, null, null, null, null, null,
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
    </body>
</html>
