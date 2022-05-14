<?php
  function check()
  {
    if(!(session_status() === PHP_SESSION_ACTIVE))
      include('menu.php');
  }
?>
