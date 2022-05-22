<?php

include("database.php");

function delivery_action($value, $conn)
{
  $sql = mysqli_query($conn,"SELECT 'nazwa' FROM 'items' WHERE (SELECT 'ID_ITEM' FROM 'nool' WHERE (SELECT 'NOOL' FROM 'NOOW' WHERE 'NOOW = $delivery'))");
  echo '<ul>';
  while($sql){echo '<li>$sql["nazwa"]</li>';}
  echo '</ul>';
}

?>
