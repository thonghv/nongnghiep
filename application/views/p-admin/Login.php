
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin PCode | 
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
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/blue.css">

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href=""><b>Admin</b>PCode</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Đăng nhập để bắt đầu quản trị hệ thống</p>

			<form action="<?php echo base_url(); ?>p-admin/login/onCheckLogin" method="post">
				<?php if (isset($error)&&$error!="") {?>
				<div class="form-group has-feedback">
					<span class="label label-danger"><i class="fa fa-question-circle"></i>  
					&nbsp; <?php  echo "$error" ?>
        			</span>
				</div>
				<?php } ?>
				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Email" id="username" name="Username">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password" id="password" name="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">

						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Nhập</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<div class="social-auth-links text-center">
				
			</div>
			<!-- /.social-auth-links -->

			<a href="#"><i class="fa fa-info-circle"></i> Bạn quên mật khẩu ?</a><br>

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 3 -->
	 <script src="<?php echo base_url()?>public/admin/js/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	 <script src="<?php echo base_url()?>public/admin/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url()?>public/admin/js/icheck.min.js"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>
</html>
