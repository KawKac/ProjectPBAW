<?php
function wrapper($value=0)
{
  switch ($value) {
    case 0:
      include('home.php');
      break;
    case 1:
      include('login.php');
      break;
    case 2:
      include('registry.php');
      break;
    case 3:
      include('nh.php');
      break;
    case 4:
      include('options.php');
      break;
  }
}
 ?>
