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
    $i = 0;
    while($row = mysqli_fetch_row($wynik)) {
      echo "<tr>";
      echo '<form class="" action="admintools_action.php" method="post">';
      echo "<td class='edit'><div id='name'>".$row[0]."</div></td>";
      echo "<td class='edit'><div id='vorname'>".$row[1]."</div></td>";
      echo "<td class='edit'><div id='log'>".$row[2]."</div></td>";
      echo "<td class='edit'><div id='email'>".$row[3]."</div></td>";
      echo "<td class='edit'><div id='tel'>".$row[4]."</div></td>";
      switch ($row[5]) {
        case 1:
          echo "<td class='edit'><input type='radio' name='chmode".$i."' checked class='checkboks' id='user".$i."'><label for='user".$i."'></label></td>";
          echo "<td class='edit'><input type='radio' name='chmode".$i."' class='checkboks' id='employ".$i."'><label for='employ".$i."'></label></td>";
          echo "<td class='edit'><input type='radio' name='chmode".$i."' class='checkboks' id='admin".$i."'><label for='admin".$i."'></label></td>";
          break;
        case 2:
          echo "<td class='edit'><input type='radio' name='chmode".$i."' class='checkboks' id='user".$i."'><label for='user".$i."'></label></td>";
          echo "<td class='edit'><input type='radio' name='chmode".$i."' checked class='checkboks' id='employ".$i."'><label for='employ".$i."'></label></td>";
          echo "<td class='edit'><input type='radio' name='chmode".$i."' class='checkboks' id='admin".$i."'><label for='admin".$i."'></label></td>";
          break;
        case 3:
          echo "<td class='edit'><input type='radio' name='chmode".$i."' class='checkboks' id='user".$i."'><label for='user".$i."'></label></td>";
          echo "<td class='edit'><input type='radio' name='chmode".$i."' class='checkboks' id='employ".$i."'><label for='employ".$i."'></label></td>";
          echo "<td class='edit'><input type='radio' checked name='chmode".$i."' class='checkboks' id='admin".$i."'><label for='admin".$i."'></label></td>";
          break;
      }
      echo '<td class="edit"><input type="submit" name="submit" value="zapisz"></td>';
      echo '<td class="edit"><input type="submit" name="button" value="dezaktywuj"></td>';
      echo "</form></tr>";
      $i++;
    }
  echo '
  </table>
  <br>
  ';}?>
