<?php
include("send_mail.php");
public function nh_action($to_email)
{
  $subject="Przypomnienie hasła";
  $body=
  send_mail($to_email, $subject, $body, $headers);
}
?>
