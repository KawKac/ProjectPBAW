<?php
  function send_mail($to_email, $subject, $body, $headers='Od: eduedi2200@gmail.com')
  {
    if (mail($to_email, $subject, $body, $headers))
      header("Location:../");
    else
      header("Location:../");
  }
?>
