<?php
if(isset($_POST['mail']))
{
  include("./send_mail.php");
  $subject="Przypomnienie hasła";
  $body=file_get_contents("message_nh.php",TRUE);
  send_mail($to_email, $subject, $body);
  $_SESSION['newsession']['info'] = 3;
  header("Location: ../");
}
else {
  $_SESSION['newsession']['info'] = 3;
  header("Location: ../");
}
?>
