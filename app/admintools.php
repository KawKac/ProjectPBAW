<?php
session_start();
include('database.php');
if($_SESSION['chmode']!=3)
  echo "Access denied!";
else
{
  if(!empty($_COOKIE['message'])) echo $_COOKIE['message'];
  ?>
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
      <th class="edit">(DEZ-)AKTYWUJ</th>
    </tr>
<?php
    $sql="SELECT `users`.`IMIE`, `users`.`NAZWISKO`, `users`.`LOGIN`, `users`.`E_MAIL`, `users`.`TELEFON`, `users_chmode`.`ID_CHMODE`, `users`.`AKTYWNE` FROM `users`, `users_chmode` WHERE `users`.`LOGIN` LIKE `users_chmode`.`ID_USERS`";
    $wynik = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_row($wynik)) {
      echo "<tr>";
      echo "<td class='edit'>".$row[0]."</td>";
      echo "<td class='edit'>".$row[1]."</td>";
      echo "<td class='edit'>".$row[2]."</td>";
      echo "<td class='edit'>".$row[3]."</td>";
      echo "<td class='edit'>".$row[4]."</td>";
      switch ($row[5]) {
        case 1:
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=1' class='button'>USER</a></td>";
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=2' class='button'>EMPLOY</a></td>";
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=3' class='button'>ADMIN</a></td>";
          break;
        case 2:
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=1' class='button'>USER</a></td>";
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=2' class='button'>EMPLOY</a></td>";
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=3' class='button'>ADMIN</a></td>";
          break;
        case 3:
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=1' class='button'>USER</a></td>";
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=2' class='button'>EMPLOY</a></td>";
          echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&chmode=3' class='button'>ADMIN</a></td>";
          break;
      }
      if($row[6]=='1')
        echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&dezaktywuj=`0`' class='button'>DEZAKTYWUJ</a></td>";
      elseif ($row[6]=='0')
        echo "<td class='edit'><a href='app/admintools_action.php?login=".$row[2]."&dezaktywuj=1' class='button'>AKTYWUJ</a></td>";
      echo "</tr>";
    }
  echo '</table>';
}
?>
