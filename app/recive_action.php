<?php
  include('database.php');
  if(!(empty($_POST['ean']))&&!(empty($_POST['name']))&&!(empty($_POST['ilosc'])))
  {
    $ean=intval($_POST['ean']);
    $name=$_POST['name'];
    $ilosc=intval($_POST['ilosc']);
    if(is_int($_POST['ean'])&&is_int($_POST['ilosc']))
    {
      $sql="INSERT INTO `items`(`KOD`, `NAZWA`, `ILOSC`) VALUES ('".$ean."','".$name."','".$ilosc."')";
      mysqli_query($conn,$sql);
      setcookie('info','5',time()+1800,'/');
      setcookie('work','3',time()+1800,'/');
      setcookie('message','Dodano przedmiot',time()+1800,'/');
      header("Location: ../");
    }
  }
  else
  {
    setcookie('info','5',time()+1800,'/');
    setcookie('work','3',time()+1800,'/');
    setcookie('message','Proszę uzupełnić pola poprawnie',time()+1800,'/');
    header("Location: ../");
  }
?>
