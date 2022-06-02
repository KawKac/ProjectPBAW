<?php
include('database.php');
if($_COOKIE['chmode']!=3)
  echo "Access denied!";
else { ?>
<form class="" action="index.html" method="post">
  <table>
    <tr>
      <th class="edit">IMIĘ</th>
      <th class="edit">NAZWISKO</th>
      <th class="edit">LOGIN</th>
      <th class="edit">E-MAIL</th>
      <th class="edit">TELEFON</th>
      <th class="edit">USER</th>
      <th class="edit">PRACOWNIK</th>
      <th class="edit">ADMINISTRACJA</th>
      <th class="edit">EDYTUJ</th>
      <th class="edit">USUŃ</th>
    </tr>
<?php
    $sql="SELECT `users`.`IMIE`, `users`.`NAZWISKO`, `users`.`LOGIN`, `users`.`E_MAIL`, `users`.`TELEFON`, `users_chmode`.`ID_CHMODE` FROM `users`, `users_chmode` WHERE `users`.`LOGIN` LIKE `users_chmode`.`ID_USERS`";
    $wynik = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_row($wynik)) {
      echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "<td>".$row[4]."</td>";
      switch ($row[5]) {
        case 1:
          echo "<td><input type='checkbox' name='user' heigh='20px' width='20px' checked></td>";
          echo "<td><input type='checkbox' name='employ' heigh='20px' width='20px'></td>";
          echo "<td><input type='checkbox' name='admin' heigh='20px' width='20px'></td>";
          break;
        case 2:
          echo "<td><input type='checkbox' name='user' heigh='20px' width='20px'></td>";
          echo "<td><input type='checkbox' name='employ' heigh='20px' width='20px' checked></td>";
          echo "<td><input type='checkbox' name='admin' heigh='20px' width='20px'></td>";
          break;
        case 3:
          echo "<td><input type='checkbox' name='user' heigh='20px' width='20px'></td>";
          echo "<td><input type='checkbox' name='employ' heigh='20px' width='20px'></td>";
          echo "<td><input type='checkbox' heigh='20px' width='20px' checked name='admin'></td>";
          break;
      }
      echo "</tr>";
    }
  echo '
  </table>
  <br>
  <input type="submit" name="" value="zapisz">
</form>
  ';}?>
