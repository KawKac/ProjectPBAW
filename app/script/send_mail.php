<?php
  public function send_mail($to_email, $subject, $body, $headers)
  {
    if (mail($to_email, $subject, $body, $headers))
      echo "Wysłany";
    else
        echo "Nie wysłany";
  }
?>
