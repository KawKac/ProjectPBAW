<?php
session_start();
if($_SESSION['chmode']!=2)
  echo "Access denied!";
else {
  include('database.php');
  if(!(empty($_POST['ean']))&&!(empty($_POST['name']))&&!(empty($_POST['ilosc'])))
  {
    $ean=intval($_POST['ean']);
    $name=$_POST['name'];
    $ilosc=intval($_POST['ilosc']);
    $data=date("Y-m-d");
    $sql="INSERT INTO `items`(`KOD`, `NAZWA`, `ILOSC`) VALUES ('$ean','$name','$ilosc')";
    mysqli_query($conn,$sql);
    echo mysqli_error($conn);
    $sql="INSERT INTO `items_state`(`ID`, `ID_ITEM`, `LPN`, `STAN`, `PRZYJECIE`) VALUES ('','$ean','','0','$data')";
    mysqli_query($conn,$sql);
    setcookie('info','6',time()+1800,'/');
    setcookie('work','2',time()+1800,'/');
    setcookie('message','Dodano przedmiot',time()+1800,'/');
    header("Location: ../");
  }
  else
  {
    setcookie('info','6',time()+1800,'/');
    setcookie('work','2',time()+1800,'/');
    setcookie('message','Proszę uzupełnić pola poprawnie',time()+1800,'/');
    header("Location: ../");
  }
  mysqli_close($conn);
}
?>
