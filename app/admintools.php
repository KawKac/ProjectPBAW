<?php
include('database.php');
if($_COOKIE['chmode']!=3)
  echo "Access denied!";
else {
    echo '
<form class="" action="index.html" method="post">
  <table>
    <tr>
      <th>IMIĘ</th>
      <th>NAZWISKO</th>
      <th>LOGIN</th>
      <th>E-MAIL</th>
      <th>TELEFON</th>
      <th>USER</th>
      <th>PRACOWNIK</th>
      <th>ADMINISTRACJA</th>
      <th>EDYTUJ</th>
      <th>USUŃ</th>
    </tr>
    ';
    $sql="SELECT `IMIE`, `NAZWISKO`, `LOGIN`, `E_MAIL`, `TELEFON` FROM `users`";
    $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $num_row = mysqli_num_rows(mysqli_query($conn,$sql));
      for($i=0;$i<$num_row;$i++) {
        echo "<tr>";
        echo "<td>".$row['IMIE']."</td>";
        echo "<td>".$row['NAZWISKO']."</td>";
        echo "<td>".$row['LOGIN']."</td>";
        echo "<td>".$row['E_MAIL']."</td>";
        echo "<td>".$row['TELEFON']."</td>";
        echo "</tr>";
      }
  echo '
  </table>
  <br>
  <input type="submit" name="" value="zapisz">
</form>
  ';}?>
