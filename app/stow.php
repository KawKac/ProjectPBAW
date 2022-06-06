<?php
session_start();
if($_SESSION['chmode']!=2)
  echo "Access denied!";
else { ?>
<section class="content_page">
  <form action="app/stow_action.php" method="post">
    <div class="col-6 col-12-xsmall">
      KOD KRESKOWY: <input type="text" name="ean">
    </div>
    <div class="col-6 col-12-xsmall">
      PIĘTRO: <input type="text" name="pietro">
    </div>
    <div class="col-6 col-12-xsmall">
      ALEJKA: <input type="text" name="alejka">
    </div>
    <div class="col-6 col-12-xsmall">
      POZYCJA: <input type="text" name="pozycja">
    </div><br>
    <input type="submit" value="DODAJ">
  </form>
  <div class="col-6 col-12-xsmall">
    <?php error_reporting(E_ALL ^ E_NOTICE);echo $_COOKIE['message'];setcookie('message','Proszę uzupełnić pola poprawnie',time()-1,'/'); ?>
  </div>
</section>
<?php } ?>
