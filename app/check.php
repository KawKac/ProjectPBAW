<?php
  function check($default='0')
  {
    switch ($default) {
      case '0':
        include('app/menu.php');
        break;
      case '1':
        include('app/menu_user.php');
        break;
      case '2':
        include('app/menu_employ.php');
        break;
      case '3':
        include('app/menu_admin.php');
        break;
      default:
        include('app/menu.php');
        break;
    }
  }
?>
