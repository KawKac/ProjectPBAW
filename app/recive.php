<?php
if($_COOKIE['chmode']!=2)
  echo "Access denied!";
else { ?>
<section class="content_page">
  <form action="app/recive_action.php" method="post">
    <div class="col-6 col-12-xsmall">
      KOD KRESKOWY: <input type="text" name="ean">
    </div>
    <div class="col-6 col-12-xsmall">
      NAZWA: <input type="text" name="name">
    </div>
    <div class="col-6 col-12-xsmall">
      ILOŚĆ: <input type="text" name="ilosc">
    </div><br>
    <input type="submit" value="DODAJ">
  </form>
  <div class="col-6 col-12-xsmall">
    <?php error_reporting(E_ALL ^ E_NOTICE);echo $_COOKIE['message']; ?>
  </div>
</section>
<?php } ?>
