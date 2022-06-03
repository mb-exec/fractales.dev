<?php 

require_once 'app/vendor/phpmailer/PHPMailer.php';
require_once 'app/vendor/phpmailer/SMTP.php';
require_once 'app/vendor/phpmailer/Exception.php';

$first_name = htmlspecialchars($_POST['first_name']);
$last_name  = htmlspecialchars($_POST['last_name']);
$email      = htmlspecialchars($_POST['email']);
$phone      = htmlspecialchars($_POST['phone']);
$message    = htmlspecialchars($_POST['msg']);

$title = 'Fractales.dev - заявка';
$body = "
<b>Имя:</b> $first_name<br>
<b>Фамилия:</b> $last_name<br>
<b>Почта:</b> $email<br><br>
<b>Телефон:</b> $phone<br>
<b>Сообщение:</b><br>$message<br>
";

$mail = new PHPMailer\PHPMailer\PHPMailer();

$response = [];

if (empty($email)) {
  $response['status'] = 'error';
  $response['message'] = 'email field should be filled';
  echo json_encode($response);
  exit;
}

try {
  $mail->isSMTP();
  $mail->CharSet  = "UTF-8";
  $mail->SMTPAuth = true;
  $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

  $mail->Host       = 'smtp.yandex.ru'; 
  $mail->Username   = 'mail@fractales.dev';
  $mail->Password   = 'IP20Mu8Nn8fL5mNQ5CD6RuG4';
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('mail@fractales.dev', 'fractales dev');

  $mail->addAddress('vadim@media-bay.ru');  
  $mail->addAddress('hello@fractales.dev');  

  if (!empty($_FILES['file']['name'][0])) {
    $file      = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp  = $file['tmp_name'];
    $file_ext  = strtolower(end(explode('.',$file_name)));

    $extensions= array("jpeg","jpg","png","pdf");

    if(in_array($file_ext,$extensions)=== false) {
      $response['status']  = "error";
      $response['message'] = "extension not allowed";
      echo json_encode($response);
      exit;
    }

    // if (!is_dir('uploads')) {
    //   mkdir('uploads', 0777, true);
    // }

    if (move_uploaded_file($file_tmp,"/tmp/".$file_name)) {
      $mail->addAttachment("/tmp/".$file_name);
    } else {
      $response['file'] = "file wasn't upload";
    }
  }

} catch (Exception $e) {
  $response['status'] = "error";
  $response['message'] = "Error: {$mail->ErrorInfo}";
}

$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;

if ($mail->send()) {
  $response['status']  = "success";
  $response['message'] = "mail sent";
} else {
  $response['status'] = "error";
  $response['message'] = "mail wasn't sent";
}

echo json_encode($response)
?>