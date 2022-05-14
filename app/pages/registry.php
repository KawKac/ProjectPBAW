<section class="content_page">
  <h2 class="h2_center">REJESTRACJA</h2>
  <hr class="hr_dashed">
  <form class="" action="registry.php" method="get">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="name" placeholder="IMIĘ" id="imie">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="vorname" placeholder="NAZWISKO" id="nazwisko">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="login" placeholder="LOGIN" id="login">
      </div>
    </div>
    <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="password" name="password" placeholder="HASŁO" id="haslo">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="password" name="ppassword" placeholder="POWTÓRZ HASŁO" id="phaslo">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="email" placeholder="E-MAIL" id="email">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="pemail" placeholder="POWTÓRZ E-MAIL" id="peamail">
      </div>
      <input type="text" name="anty_bot" hidden>
    </div>
    <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="checkbox" name="demo-human" value="YES" id="demo-human">
        <label for="demo-human">Nie jestem robotem.</label>
      </div>
    </div>
    <br>
      <input type="submit" name="submit" value="Zarejestruj" class="button">
  </form>
</section>
<?php
  inlcude("../db/registry_action.php");
  if(isset($_POST['demo-human']=='YES')||$_POST['anty_bot']==null)
    registry_action_validation($_POST['name'],$_POST['vorname'], $_POST['login'], md5($_POST['password']),md5($_POST['ppassword']),$_POST['email'],$_POST['pemail']);
?>
