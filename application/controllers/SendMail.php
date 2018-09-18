<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendMail extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }

    function index() {
      $this->load->library('email');
      $this->email->from('support@hoaluyenthi.vn'); //change it
      $this->email->to('huynhthong.uit@gmail.com'); //change it
      $this->email->subject('HELLO');
      $this->email->message('Dear Thong');
      if ($this->email->send())
       {
          $data['success'] = 'Yes';
       }
       else
       {
          $data['success'] = 'No';
          $data['error'] = $this->email->print_debugger(array(
             'headers'
          ));
       }
     
       echo ' < pre > ';
       print_r($data);
       echo '< / pre >';
 
  }

   function send() {
        $this->load->library('My_PHPMailer');
       $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = false; // enabled SMTP authentication
        $mail->SMTPSecure = false;  // prefix for secure protocol to connect to the server
        $mail->Host       = "mail.hoaluyenthi.vn";      // setting GMail as our SMTP server
        $mail->Port       = 25;                   // SMTP port to connect to GMail
        $mail->Username   = "support@hoaluyenthi.vn";  // user email address
        $mail->Password   = "Thong2012@X";            // password in GMail
        $mail->SetFrom('support@hoaluyenthi.vn', 'Firstname Lastname');  //Who is sending the email
        $mail->AddReplyTo("huynhthong.uit@gmail.com","Firstname Lastname");  //email address that receives the response
        $mail->Subject    = "Email subject";
        $mail->Body      = "HTML messagez";
        $mail->AltBody    = "Plain text message";
        $mail->isHTML(true);
        $mail->SMTPDebug = 4;

        $destino = "huynhthong.uit@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "John Doe");

        echo !extension_loaded('openssl')?"Not Available":"Available";

        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "Message sent correctly!";
        }
        print_r($data);
   }
}