<?php
include('database.php');
if($_COOKIE['chmode']!=3)
  echo "Access denied!";
else { ?>
  <table>
    <tr>
      <th class="edit">IMIĘ</th>
      <th class="edit">NAZWISKO</th>
      <th class="edit">LOGIN</th>
      <th class="edit">E-MAIL</th>
      <th class="edit">TELEFON</th>
      <th class="edit">USER</th>
      <th class="edit">EMPLOY</th>
      <th class="edit">ADMIN</th>
      <th class="edit">EDYTUJ</th>
      <th class="edit">DEZAKTYWUJ</th>
    </tr>
<?php
    $sql="SELECT `users`.`IMIE`, `users`.`NAZWISKO`, `users`.`LOGIN`, `users`.`E_MAIL`, `users`.`TELEFON`, `users_chmode`.`ID_CHMODE` FROM `users`, `users_chmode` WHERE `users`.`LOGIN` LIKE `users_chmode`.`ID_USERS`";
    $wynik = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_row($wynik)) {
      echo "<tr>";
      echo '<form class="" action="index.html" method="post">';
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "<td>".$row[4]."</td>";
      switch ($row[5]) {
        case 1:
          echo "<td><input type='checkbox' name='user' checked class='checkboks' id='user'><label for='user'></label></td>";
          echo "<td><input type='checkbox' name='employ' class='checkboks' id='employ'><label for='employ'></label></td>";
          echo "<td><input type='checkbox' name='admin' class='checkboks' id='admin'><label for='admin'></label></td>";
          break;
        case 2:
          echo "<td><input type='checkbox' name='user' class='checkboks' id='user'><label for='user'></label></td>";
          echo "<td><input type='checkbox' name='employ' checked class='checkboks' id='employ'><label for='employ'></label></td>";
          echo "<td><input type='checkbox' name='admin' class='checkboks' id='admin'><label for='admin'></label></td>";
          break;
        case 3:
          echo "<td><input type='checkbox' name='user' class='checkboks' id='user'><label for='user'></label></td>";
          echo "<td><input type='checkbox' name='employ' class='checkboks' id='employ'><label for='employ'></label></td>";
          echo "<td><input type='checkbox' checked name='admin' class='checkboks' id='admin'><label for='admin'></label></td>";
          break;
      }
      echo '<td><input type="submit" name="submit" value="zapisz"></td>';
      echo '<td><input type="submit" name="button" value="dezaktywuj"></td>';
      echo "</form></tr>";
    }
  echo '
  </table>
  <br>
  ';}?>
