<?php session_start(); ?>
<section class="content_page">
  <form class="" action="app/option_action.php" method="post">
    <section class="row gtr-uniform">DANE:</section>
      <div class="col-6 col-12-xsmall">
        Hasło: <input type="password" name="password">
      </div>
      <div class="col-6 col-12-xsmall">
        Powtórz hasło: <input type="password" name="ppassword">
      </div>
      <br>
    <section class="row gtr-uniform">KONTAKT:</section>
    <div class="col-6 col-12-xsmall">
      Numer telofonu: <input type="text" name="telefon">
    </div>
    <div class="col-6 col-12-xsmall">
      E-mail: <input type="email" name="email">
    </div>
    <br>
    <section class="row gtr-uniform">ADRES:</section>
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
  </form>
  <div class="col-6 col-12-xsmall">
    <form class="" action="delete_account.php" method="post">
      Usuń konto: <input type="submit" name="delete" value="Usuń">
    </form>
  </div>
</section>
