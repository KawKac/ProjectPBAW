<?php
  public function send_mail($to_email, $subject, $body, $headers='Od: eduedi2200@gmail.com')
  {
    if (mail($to_email, $subject, $body, $headers))
      echo "Wysłany";
    else
        echo "Nie wysłany";
  }
?>
