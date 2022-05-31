<section class="content_page">
  <h2 class="h2_center">ZALOGUJ</h2>
  <hr class="hr_dashed">
  <?php if(!empty($COOKIE['message'])){error_reporting(E_ALL ^ E_NOTICE);echo '<div class="alert alert-danger" role="alert">'.$_COOKIE['message'].'</div>';setcookie('message','',time()-1,'/');} ?>
  <form class="" action="app/login_action.php" method="post">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="login" placeholder="LOGIN" id="login">
      </div>
    </div>
  <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="password" name="password" placeholder="HASŁO" id="password">
      </div>
    </div>
    <br>
      <a href="#" class="white_font" id="nh">Nie pamiętam hasła.</a><br>
    <br>
      <input type="submit" name="submit" value="Zaloguj" class="button">
  </form>
</section>
<script type="text/javascript">
$("#nh").click(function()
{
  $("#intro").html("");
  $("#intro").load("app/nh.php")
});
</script>
