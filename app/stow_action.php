<?php
if($_COOKIE['chmode']!=2)
  echo "Access denied!";
else {
  error_reporting(E_ALL ^ E_NOTICE);
  include('database.php');
  $kod=$_POST['ean'];
  $pietro=$_POST['pietro'];
  $alejka=$_POST['alejka'];
  $pozycja=$_POST['pozycja'];
  if(!(empty($kod))&&!(empty($pietro))&&!(empty($alejka))&&!(empty($pozycja)))
  {
    $sql="INSERT INTO `location`(`ID`, `ID_ITEM_STATE`, `FLOOR`, `LANE`, `POSITION`) VALUES ('','$kod','$pietro','$alejka','$pozycja')";
    mysqli_query($conn,$sql);
    setcookie('info','6',time()+1800,'/');
    setcookie('work','1',time()+1800,'/');
    setcookie('message','Dodano przedmiot',time()+1800,'/');
    header("Location: ../");
  }
  else
  {
    setcookie('info','6',time()+1800,'/');
    setcookie('work','1',time()+1800,'/');
    setcookie('message','Proszę uzupełnić pola poprawnie',time()+1800,'/');
    header("Location: ../");
  }
}
 ?>
