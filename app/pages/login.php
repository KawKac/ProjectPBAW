<script type="text/javascript">
$("#nh").click(function()
{
  $("#intro").html("");
  $("#intro").load("app/pages/nh.php")
});
</script>
<section class="content_page">
  <h2 class="h2_center">ZALOGUJ</h2>
  <hr class="hr_dashed">
  <form class="" action="" method="post">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="login" placeholder="LOGIN" id="login">
      </div>
    </div>
  <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="password" name="password" placeholder="HASŁO" id="haslo">
      </div>
    </div>
    <br>
      <a href="#" class="white_font" id="nh">Nie pamiętam hasła.</a><br>
    <br>
      <input type="submit" name="submit" value="Zaloguj" class="button">
  </form>
</section>
<?php
include('../db/login_action.php');
$pass=isset($_POST['pass']);
$login=isset($_POST['login']);
if(isset($login)&&isset($pass)&&md5($pass)!="d41d8cd98f00b204e9800998ecf8427e")
  login($login,md5($pass,FALSE));
else
  echo `<script>alert("Nie podano loginu lub hasła");$('#intro').load(login.php);</script>`;
?>
