<?php

include("database.php");

function delivery_action($value)
{
  $sql = mysqli_query($conn,"SELECT 'nazwa' FROM 'items' WHERE (SELECT 'ID_ITEM' FROM 'nool' WHERE (SELECT 'NOOL' FROM 'NOOW' WHERE 'NOOW = $delivery'))");
}

/*
include('../database.php');
function delivery_action($delivery)
{
  $
  $sql_array = mysqli_fetch_assoc($sql);
  while($sql_array)
    echo (`

    `);
    mysqli_close($conn);
}
?>
