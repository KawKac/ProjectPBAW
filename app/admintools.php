<?php include('database.php'); ?>
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
    <?php
    $sql="SELECT `IMIE`, `NAZWISKO`, `LOGIN`, `E_MAIL`, `TELEFON` FROM `users`";
      while ($row = mysql_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>$row['IMIE']</td>";
        echo "<td>$row['NAZWISKO']</td>";
        echo "<td>$row['LOGIN']</td>";
        echo "<td>$row['E_MAIL']</td>";
        echo "<td>$row['TELEFON']</td>";
        echo "<td><input type='checkbox' name='' value='' checked></td>";
        echo "</tr>";
      }
    ?>
  </table>
  <br>
  <input type="submit" name="" value="">
</form>
