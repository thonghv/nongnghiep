<?php defined('BASEPATH') OR exit('No direct script access allowed.');
 
$config['useragent']        = 'PHPMailer';   
$config['protocol']         = 'mail';  
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host'] 		= 'mail.hoaluyenthi.vn';
$config['smtp_user'] 		= 'support@hoaluyenthi.vn';
$config['smtp_pass'] 		= 'Thong2012@X';
$config['smtp_port'] 		= 465;
$config['smtp_timeout'] 	= 30; 
$config['smtp_crypto'] 		= 'tls';
$config['smtp_debug'] 		= 0; 
$config['smtp_auto_tls'] 	= false;
$config['smtp_conn_options'] = array();
$config['wordwrap'] 		= true;
$config['wrapchars'] 		= 76;
$config['mailtype'] 		= 'html';
$config['charset'] 			= 'UTF-8'; 
$config['validate'] 		= true;
$config['priority'] 		= 3; 
$config['crlf'] 			= "\n"; 
$config['newline'] = 		"\n"; 
$config['bcc_batch_mode'] 	= false;
$config['bcc_batch_size'] 	= 200;
$config['encoding'] 		= '8bit';
 
?>