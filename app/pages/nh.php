<script type="text/javascript">
$("#back").click(function()
{
  $("#intro").html("");
  $("#intro").load("app/pages/login.php")
});
</script>

<section class="content_page">
  <h2 class="h2_center">PRZYPOMNINAMY HASEŁKO</h2>
  <hr class="hr_dashed">
  <div class="white_font">
    Zapomniałeś hasła? Nic się nie stało! Uzupełnij polę, a na e-mail przyjdzie ci instrukcja.
  </div>
  <br>
  <form class="" action="nh_action.php" method="post">
    <div class="col-6 col-12-xsmall">
      <input type="email" name="mail" value="" placeholder="E-MAIL">
    </div>
    <br>
    <div class="col-6 col-12-xsmall">
      <input type="submit" name="" value="WYŚLIJ">
    </div>
    <br>
    <a href="#" class="button" id="back">POWRÓT</a>
  </form>
</section>
<?php
include ("../db/nh_action.php");
if(isset($_POST['mail']))
  nh_action($_POST['mail']);
else
  {
    echo (`
    <script type="text/javascript">
      alert("Podaj poprawny mail");
    </script>
    `);
  }
?>