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
      include('registry_successfull.php');
      break;
    case 4:
      include('nh.php');
      break;
    case 5:
      include('options.php');
      break;
    case 6:
      include('work.php');
      break;
    case 7:
      include('delivery.php');
      break;
    case 8:
      include('admintools.php');
      break;
  }
}
 ?>
