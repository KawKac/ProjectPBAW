<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
$('#haslo').focusin(function(){
  $('#haslo').parent().append('<div class="alert alert-primary" role="alert">Hasło powinno zawierać małą i dużą literę, cyfrę i znak specjalny</div>');
});
$('#haslo').focusout(function(){
  $("#haslo").next().remove();
});
</script>
<section class="content_page">
  <h2 class="h2_center">REJESTRACJA</h2>
  <hr class="hr_dashed">
  <?php if(!empty($_COOKIE['message'])){error_reporting(E_ALL ^ E_NOTICE);echo '<div class="alert alert-danger" role="alert">'.$_COOKIE['message'].'</div>';setcookie('message','',time()-1,'/');} ?>
  <form class="" action="./app/registry_action.php" method="post" name="rejestracja">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="name" placeholder="IMIE">
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
        <input type="password" name="password" placeholder="HASŁO" id='password'>
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="password" name="ppassword" placeholder="POWTÓRZ HASŁO" id='ppassword'>
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="email" placeholder="E-MAIL" id='email'>
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="pemail" placeholder="POWTÓRZ E-MAIL" id="pemail">
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
