<?php
if(isset($_POST['mail']))
{
  include("./send_mail.php");
  $subject="Przypomnienie hasła";
  $body=file_get_contents("message_nh.php",TRUE);
  send_mail($to_email, $subject, $body);
  setcookie('info','3',time()+1800);
  header("Location: ../");
}
else {
  setcookie('info','3',time()+1800);
  header("Location: ../");
}
?>
