<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>
        Trang quản trị - Quản Lý Hệ Thống -
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

    <!-- bookstore styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/ace.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/ace-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/wp-admin/ace-skins.min.css">


</head>

<body>

    <?php $this->load->view("wp-admin/base/header.php");?>

    <?php $this->load->view("wp-admin/base/menu.php");?>

    <div id="main-content" class="clearfix">

        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li><i class="icon-home"></i> <a href="#">Trang Chủ</a>
            </ul>
            <!--.breadcrumb-->

            <div id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                                        <input autocomplete="off" id="nav-search-input" type="text" class="input-small search-query" placeholder="Search ..." />
                                        <i id="nav-search-icon" class="icon-search"></i>
                                    </span>
                </form>
            </div>
            <!--#nav-search-->
        </div>
        <!--#breadcrumbs-->
        <div id="page-content" class="clearfix">

            <div class="page-header position-relative">
                <h1>TRANG QUẢN TRỊ <small><i class="icon-double-angle-right"></i> <?php
                                echo $this->data->getWebName();
                            ?>
                            </small></h1>
            </div>
            <!--/page-header-->

            <div class="row-fluid">
                <!-- PAGE CONTENT BEGINS HERE -->

                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>
                    </button>
                    <i class="icon-ok green"></i> Chào mừng bạn đến trang quản trị của 
                        <strong class="green">
                     <?php
                        echo $this->data->getWebName();
                     ?>
                     </strong>, Chúc bạn một ngày làm việc vui vẻ.
                </div>



                <div class="space-6"></div>
                <div class="row-fluid">

                    <div class="vspace">
                        
                    </div>

                    <!--/span-->
                </div>
                <!--/row-->

                <div class="row-fluid">
                    <div class="span7">
                        <!--/widget-box-->
                    </div>

                </div>
                <div class="row-fluid">

                    <div class="span6">
                        <div class="widget-box transparent">

                            <div class="widget-header">
                                <h4 class="lighter smaller"><i class="icon-rss orange"></i>GẦN ĐÂY</h4>
                                <div class="widget-toolbar no-border">
                                    <ul class="nav nav-tabs" id="recent-tab">
                                        <li class="active"><a data-toggle="tab" href="#member-tab">Người Dùng</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#comment-tab">Bình Luận</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main padding-5">
                                    <div class="tab-content padding-8">
                                        <div id="task-tab" class="tab-pane active">

                                        </div>

                                        <div id="member-tab" class="tab-pane active">
                                            <div class="clearfix">

                                                <?php
                                                if($users != null){
                                                    foreach ($users as $row) :
                                                    $row=(object)$row;
                                                ?>  
                                                
                                                <div class="itemdiv memberdiv">
                                                    <div class="user">
                                                        <div style = "width: 32px; height: 32px; background-color: <?php echo $row->avatar; ?> ">
                                                            <div style = "padding: 7px 11px; font-size: 16px; color: #fff"><?php echo strtoupper(substr($row -> name, 0, 1)); ?></div>
                                                        </div>

                                                    </div>

                                                    <div class="body">
                                                        <div class="name"><a href="#"><?php  echo $row -> name; ?></a>
                                                        </div>
                                                       
                                                        <div>
                                                            <?php if($row -> is_lock == 0) {?>
                                                            <span class="label label-warning">hoạt động</span>
                                                            <?php } else { ?>
                                                            <span class="label label-error">bị khóa</span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php endforeach; } ?>


                                            </div>

                                            <div class="center">
                                                <i class="icon-group icon-2x green"></i> &nbsp; <a href="<?php echo base_url()?>wp-admin/users">Xem tất cả &nbsp; <i class="icon-arrow-right"></i></a>
                                            </div>
                                            <div class="hr hr-double hr8"></div>

                                        </div>
                                        <!-- member-tab -->



                                        <div id="comment-tab" class="tab-pane">
                                            <div class="comments">

                                                <?php
                                                if($questions != null){
                                                    foreach ($questions as $row) :
                                                    $row=(object)$row;
                                                ?>  

                                                <div class="itemdiv commentdiv">
                                                    <div class="user">
                                                        <div style = "width: 32px; height: 32px; background-color: <?php echo $row->avatar; ?> ">
                                                            <div style = "padding: 7px 11px; font-size: 16px; color: #fff"><?php echo strtoupper(substr($row -> name, 0, 1)); ?></div>
                                                        </div>

                                                    </div>

                                                    <div class="body">
                                                        <div class="name"><a href="#"><?php echo $row -> name; ?></a>
                                                        </div>
                                                        
                                                        <div class="text">
                                                            <i class="icon-quote-left"></i> 
                                                            <?php 

                                                                $limit = 20;
                                                                $desc = $row -> content;
                                                                $title = strip_tags($desc);
                                                                if (str_word_count($desc, 0) > $limit) {
                                                                    $wsords = str_word_count($desc, 2);
                                                                    $pos = array_keys($wsords);
                                                                    $title = substr($desc, 0, $pos[$limit]);
                                                                }

                                                            ?>
                                                            <?php echo $title; ?> &hellip;
                                                        </div>
                                                    </div>

                                                    <div class="tools">
                                                        <div class="inline position-relative">
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php endforeach; } ?>

                                            </div>

                                            <div class="hr hr8"></div>
                                            <div class="center">
                                                <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="<?php echo base_url()?>wp-admin/questions">Xem tất cả &nbsp; <i class="icon-arrow-right"></i></a>
                                            </div>
                                            <div class="hr hr-double hr8"></div>

                                        </div>


                                    </div>
                                </div>
                                <!--/widget-main-->
                            </div>
                            <!--/widget-body-->


                        </div>
                        <!--/widget-box-->
                    </div>
                    <!--/span-->

                </div>
                <!--/row-->

                <!-- PAGE CONTENT ENDS HERE -->
            </div>
            <!--/row-->

        </div>
        <!--/#page-content-->


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
                <div>
                    <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                    <label class="lbl" for="ace-settings-header"> Fixed Header</label>
                </div>
                <div>
                    <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>
            </div>
        </div>
        <!--/#ace-settings-container-->


    </div>
    <!-- #main-content -->


    </div>
    <!--/.fluid-container#main-container-->




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

    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/excanvas.min.js"></script>
        <![endif]-->
    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery-ui-1.10.2.custom.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.ui.touch-punch.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.slimscroll.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.easy-pie-chart.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.flot.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.flot.pie.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/jquery.flot.resize.min.js"></script>

    <!-- ace scripts -->
    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/ace-elements.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/public/js/wp-admin/ace.min.js"></script>


    <!-- inline scripts related to this page -->

    <script type="text/javascript">
        $(function() {

            $('.dialogs,.comments').slimScroll({
                height: '300px'
            });

            $('#tasks').sortable();
            $('#tasks').disableSelection();
            $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
                if (this.checked) $(this).closest('li').addClass('selected');
                else $(this).closest('li').removeClass('selected');
            });

            var oldie = $.browser.msie && $.browser.version < 9;
            $('.easy-pie-chart.percentage').each(function() {
                var $box = $(this).closest('.infobox');
                var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                var size = parseInt($(this).data('size')) || 50;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size / 10),
                    animate: oldie ? false : 1000,
                    size: size
                });
            })

            $('.sparkline').each(function() {
                var $box = $(this).closest('.infobox');
                var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                $(this).sparkline('html', {
                    tagValuesAttribute: 'data-values',
                    type: 'bar',
                    barColor: barColor,
                    chartRangeMin: $(this).data('min') || 0
                });
            });




            var data = [{
                label: "social networks",
                data: 38.7,
                color: "#68BC31"
            }, {
                label: "search engines",
                data: 24.5,
                color: "#2091CF"
            }, {
                label: "ad campaings",
                data: 8.2,
                color: "#AF4E96"
            }, {
                label: "direct traffic",
                data: 18.6,
                color: "#DA5430"
            }, {
                label: "other",
                data: 10,
                color: "#FEE074"
            }];
            var placeholder = $('#piechart-placeholder').css({
                'width': '90%',
                'min-height': '150px'
            });
            $.plot(placeholder, data, {

                series: {
                    pie: {
                        show: true,
                        tilt: 0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2

                    }
                },
                legend: {
                    show: true,
                    position: "ne",
                    labelBoxBorderColor: null,
                    margin: [-30, 15]
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                tooltip: true, //activate tooltip
                tooltipOpts: {
                    content: "%s : %y.1",
                    shifts: {
                        x: -30,
                        y: -50
                    }
                }

            });


            var $tooltip = $("<div class='tooltip top in' style='display:none;'><div class='tooltip-inner'></div></div>").appendTo('body');
            placeholder.data('tooltip', $tooltip);
            var previousPoint = null;

            placeholder.on('plothover', function(event, pos, item) {
                if (item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                        $(this).data('tooltip').show().children(0).text(tip);
                    }
                    $(this).data('tooltip').css({
                        top: pos.pageY + 10,
                        left: pos.pageX + 10
                    });
                } else {
                    $(this).data('tooltip').hide();
                    previousPoint = null;
                }

            });

            var d1 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d1.push([i, Math.sin(i)]);
            }

            var d2 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d2.push([i, Math.cos(i)]);
            }

            var d3 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.2) {
                d3.push([i, Math.tan(i)]);
            }


            var sales_charts = $('#sales-charts').css({
                'width': '100%',
                'height': '220px'
            });
            $.plot("#sales-charts", [{
                label: "Domains",
                data: d1
            }, {
                label: "Hosting",
                data: d2
            }, {
                label: "Services",
                data: d3
            }], {
                hoverable: true,
                shadowSize: 0,
                series: {
                    lines: {
                        show: true
                    },
                    points: {
                        show: true
                    }
                },
                xaxis: {
                    tickLength: 0
                },
                yaxis: {
                    ticks: 10,
                    min: -2,
                    max: 2,
                    tickDecimals: 3
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: '#555'
                }
            });


            $('[data-rel="tooltip"]').tooltip();
        })
    </script>

</body>

</html>