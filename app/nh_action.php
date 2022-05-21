<?php
include("./send_mail.php");
function nh_action($to_email)
{
  $subject="Przypomnienie hasła";
  $body=file_get_contents("message_nh.php",TRUE);
  send_mail($to_email, $subject, $body);
}
?>
