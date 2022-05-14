<section class="content_page">
  <h2 class="h2_center">REJESTRACJA</h2>
  <hr class="hr_dashed">
  <form class="" action="" method="post">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="name" placeholder="IMIĘ">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="vorname" placeholder="NAZWISKO">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="login" placeholder="LOGIN">
      </div>
    </div>
    <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="password" name="password" placeholder="HASŁO">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="password" name="ppassword" placeholder="POWTÓRZ HASŁO">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="email" placeholder="E-MAIL">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="pemail" placeholder="POWTÓRZ E-MAIL">
      </div>
    </div>
    <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="checkbox" name="demo_human" value="YES">
        <label for="demo_human">Nie jestem robotem.</label>
      </div>
    </div>
    <br>
      <input type="submit" name="submit" value="Zarejestruj" class="button">
  </form>
</section>
<?php
  include("../db/registry_action.php");
  if(isset($_POST['demo_human']))
    registry_action_validation($_POST['name'],$_POST['vorname'], $_POST['login'], md5($_POST['password']),md5($_POST['ppassword']),$_POST['email'],$_POST['pemail']);
  else echo `<script>alert("Potwierdź że nie jesteś robotem");</script>`;
?>
