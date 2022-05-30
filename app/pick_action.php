<?php
  include('database.php');
  if(!(empty($_POST['ean']))&&!(empty($_POST['name']))&&!(empty($_POST['ilosc'])))
  {
    $ean=intval($_POST['ean']);
    $lpn=$_POST['lpn'];
    $stan=intval($_POST['stan']);
    $data=date("Y-m-d");
    $sql="INSERT INTO `items_state`(`ID`, `ID_ITEM`, `LPN`, `STAN`, `PRZYJECIE`) VALUES ('','$ean','$lpn','$stan','$data')";
    mysqli_query($conn,$sql);
    setcookie('info','6',time()+1800,'/');
    setcookie('work','0',time()+1800,'/');
    setcookie('message','Dodano przedmiot',time()+1800,'/');
    header("Location: ../");
  }
  else
  {
    setcookie('info','6',time()+1800,'/');
    setcookie('work','0',time()+1800,'/');
    setcookie('message','Proszę uzupełnić pola poprawnie',time()+1800,'/');
    header("Location: ../");
  }
  mysqli_close($conn);
?>
