<?php
include('database.php');
function delivery_action($delivery)
{
  $sql = mysql_query("SELECT 'nazwa' FROM 'items' WHERE (SELECT 'ID_ITEM' FROM 'nool' WHERE (SELECT 'NOOL' FROM 'NOOW' WHERE 'NOOW = $delivery'))")
  $sql_array = mysql_fetch_assoc($sql);
  while($sql_array)
    echo (`
      
    `);
}
?>
