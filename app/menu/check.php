<?php
  function check($default='0')
  {
    switch ($default) {
      case '0':
        include('menu.php');
        break;
      case '1':
        include('menu_user.php');
        break;
      case '2':
        include('menu_employ.php');
        break;
      case '3':
        include('menu_admin.php');
        break;
      default:
        include('menu.php');
        break;
    }
  }
?>
