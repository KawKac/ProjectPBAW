<?php
session_start();
include 'database.php';
if($_SESSION['chmode']!='1')
{
  echo 'Access denied!';
}
else {
  ?><section class="content_page"><?php
  $login = $_SESSION['user'];
  $sql = "SELECT `ID_NOOW`, `STATUS`,`WYSYLKA` FROM `noow` WHERE `ID_USER` LIKE '$login'";
  $wynik=mysqli_query($conn,$sql);
  if(!empty($wynik))
  {
    ?>
    <table>
      <tr>
        <th>NUMER PRZESYŁKI</th>
        <th>STATUS</th>
        <th>DATA WYSŁANIA</th>
      </tr>
    <?php
    while($row = mysqli_fetch_row($wynik))
    {
      echo "<tr>";
        echo "<td>";
          echo $row[0];
        echo "</td>";
        echo "<td>";
          echo $row[1];
        echo "</td>";
        echo "<td>";
          echo $row[2];
        echo "</td>";
      echo "</tr>";
    }
    ?>
    </table>
    <?php
  }
  else
  {
      echo "<h2>BRAK ZAMÓWIEŃ</h2>";
  }
  ?></section><?php
}
 ?>
