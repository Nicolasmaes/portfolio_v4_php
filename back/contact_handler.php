<?php
if(isset($_POST['visitor_email'])&& !empty($_POST['visitor_email'])){
    $email = $_POST['visitor_email'];
    $name = $_POST['visitor_name'];
    $objet = 'contact depuis le site web';
    $message = $_POST['visitor_message'];
    $recipient = 'contact@nicolasmaes.fr';
    $sender = 'no-reply@nicolasmaes.fr';
    $send = 'message envoyé par '.$name.', '.$email.' : '.$message;
    $messageToGuest=
    "<h1 style='color:black;'>Hello</h1><br>
    <h2 style='color:black;'>Your message has been sent, I will reply to it as soon as
    posible.</h2> <br>
    <h2 style='color:black;'>Best regards<br>Nicolas Maës<h2>";
    $headerFields = array(
      "From: {$recipient}",
      "MIME-Version: 1.0",
      "Content-Type: text/html;charset=utf-8"
      );
    $headerFieldsToGuest = array(
      "From: {$sender}",
      "MIME-Version: 1.0",
      "Content-Type: text/html;charset=utf-8"
      );
    mail($recipient, $objet, $send, implode("\r\n", $headerFields));
    mail($email, 'About your request on nicolasmaes.fr', $messageToGuest, implode("\r\n", $headerFieldsToGuest));
    echo "message si sent.";
    header('Location: ../front/confirmation/');
}
else{
  echo 'erreur';
}
?>