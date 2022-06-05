<?php
include('database.php');
if($_COOKIE['chmode']!=3)
  echo "Access denied!";
else { ?>
  <form action="app/admintools_action.php" method="post">
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
      <th class="edit">DEZAKTYWUJ</th>
    </tr>
<?php
    $sql="SELECT `users`.`IMIE`, `users`.`NAZWISKO`, `users`.`LOGIN`, `users`.`E_MAIL`, `users`.`TELEFON`, `users_chmode`.`ID_CHMODE` FROM `users`, `users_chmode` WHERE `users`.`LOGIN` LIKE `users_chmode`.`ID_USERS`";
    $wynik = mysqli_query($conn,$sql);
    $i = 0;
    $arr = mysqli_fetch_array($wynik);
    while($row = mysqli_fetch_row($wynik)) {
      echo "<tr>";
      echo "<td class='edit'>".$row[0]."</td>";
      echo "<td class='edit'>".$row[1]."</td>";
      echo "<td class='edit'>".$row[2]."</td>";
      echo "<td class='edit'>".$row[3]."</td>";
      echo "<td class='edit'>".$row[4]."</td>";
      switch ($row[5]) {
        case 1:
          echo "<td class='edit'><a href='{url action=}/$arr[$i]}' class='button'>USER</a></td>";
          echo "<td class='edit'><a href='{url action=}/$arr[$i]}' class='button'>EMPLOY</a></td>";
          echo "<td class='edit'><a href='{url action=}/$arr[$i]}' class='button'>ADMIN</a></td>";
          break;
        case 2:
          echo "<td class='edit'><a href='{url action=}/$arr[$i]}' class='button'>USER</a></td>";
          echo "<td class='edit'><a href='{url action=}/$arr[$i]}' class='button'>EMPLOY</a></td>";
          echo "<td class='edit'><a href='{url action=}/$arr[$i]}' class='button'>ADMIN</a></td>";
          break;
        case 3:
          echo "<td class='edit'><a href='{/$arr[$i]}' class='button'>USER</a></td>";
          echo "<td class='edit'><a href='{/$arr[$i]}' class='button'>EMPLOY</a></td>";
          echo "<td class='edit'><a href='{/$arr[$i]}' class='button'>ADMIN</a></td>";
          break;
      }
      echo "<td class='edit'><a href='{/$arr[$i]}'>ADMIN</a></td>";
      echo "</tr>";
    }
  echo '
  </table>
  </form>
  ';}?>
