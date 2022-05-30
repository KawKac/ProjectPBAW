<?php
  include('database.php');
  if(!(empty($_POST['nool']))&&!(empty($_POST['now']))&&!(empty($_POST['ean'])))
  {
    $nool=$_POST['nool'];
    $noow=$_POST['noow'];
    $ean=$_POST['ean'];
    $login=$_COOKIE['user'];
    $data=date("Y-m-d");
    $sql="INSERT INTO `nool`(`ID`, `NOOL`,`ID_ITEM`) VALUES ('','$nool','$ean')";
    mysqli_query($conn,$sql);
    $sql="INSERT INTO `noow`(`NOOL`,`NOOW`) VALUES ('','$nool','$noow')";
    mysqli_query($conn,$sql);
    $sql="INSERT INTO `orders`(`ID_NOOW`,`ID_USER`,`WYSYLKA`) VALUES ('$noow','$login','$data')";
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
