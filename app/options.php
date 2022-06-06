<?php session_start(); ?>
<section class="content_page">
  <form class="content_page" action="app/option_action.php" method="post">
    <h2>DANE:</h2>
      <div class="col-6 col-12-xsmall">
        Hasło: <input type="password" name="password">
      </div>
      <div class="col-6 col-12-xsmall">
        Powtórz hasło: <input type="password" name="ppassword">
      </div>
      <br> <br>
    <h2>KONTAKT:</h2>
    <div class="col-6 col-12-xsmall">
      Numer telofonu: <input type="text" name="telefon">
    </div>
    <div class="col-6 col-12-xsmall">
      E-mail: <input type="email" name="email">
    </div>
    <br> <br>
    <h2>ADRES:</h2>
    <div class="col-6 col-12-xsmall">
      Ulica: <input type="text" name="ulica">
    </div>
    <div class="col-6 col-12-xsmall">
      Budynek: <input type="text" name="budynek">
    </div>
    <div class="col-6 col-12-xsmall">
      Mieszkania: <input type="text" name="mieszkania">
    </div>
    <div class="col-6 col-12-xsmall">
      Miasto: <input type="text" name="miasto">
    </div>
    <div class="col-6 col-12-xsmall">
      Kod pocztowy: <input type="text" name="kp">
    </div>
    <div class="col-6 col-12-xsmall">
      Państwo: <input type="text" name="panstwo">
    </div>
    <br>
    <input type="submit" name="" value="Zapisz">
  </form><br>
  <div class="col-6 col-12-xsmall">
    <form class="" action="delete_account.php" method="post">
      <h2>Usuń konto:</h2><input type="submit" name="delete" value="Usuń">
    </form>
  </div>
</section>
