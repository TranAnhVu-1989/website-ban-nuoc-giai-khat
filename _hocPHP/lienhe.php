<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
function GuiMail(){
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
      $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug
      $mail->isSMTP();  
      $mail->CharSet  = "utf-8";
      $mail->Host = 'smtp.gmail.com'; //địa chỉ server
      $mail->SMTPAuth = true; 
      $tennguoigui = 'Vu'; //Nhập tên người gửi
      $mail->Username='vu19892023@gmail.com';
      $mail->Password = 'rtuxmayfsuznuhjc'; // mật khẩu ứng dụng
      $mail->SMTPSecure = 'ssl';   
      $mail->Port = 465;              
      $mail->setFrom('vu19892023@gmail.com'); 
      $mail->addAddress($_POST['guiden']); //mail người nhận  
      $mail->isHTML(true);  
      $mail->Subject = 'Gửi thư từ php';      
      $mail->Body = nl2br($_POST['noidung']).' |     Số điện thoại người mua: '.nl2br($_POST['dtnguoimua']).' |    Địa chỉ giao hàng: '.nl2br($_POST['diachigiao']); //nội dung thư
      $mail->smtpConnect( array("ssl" => array(
          "verify_peer" => false,
          "verify_peer_name" => false,
          "allow_self_signed" => true
      )));
      $mail->send();
      echo 'Đã gửi mail xong';
    } catch (Exception $e) {
       echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
}
?>
<?php
GuiMail();
header("location:../giohang.php");
?>