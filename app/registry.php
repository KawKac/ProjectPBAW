<section class="content_page">
  <h2 class="h2_center">REJESTRACJA</h2>
  <hr class="hr_dashed">
  <form class="" action="./app/registry_action.php" method="post">
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
        <input type="checkbox" name="demo_human" value="YES" id="demo_human">
        <label for="demo_human">Nie jestem robotem.</label>
      </div>
    </div>
    <br>
      <input type="submit" name="submit" value="Zarejestruj" class="button">
  </form>
</section>