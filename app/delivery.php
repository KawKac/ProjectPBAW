<section class="content_page">
  <h2 class="h2_center">SPRAWDŹ ZAMÓWIENIE</h2>
  <hr class="hr_dashed">
  <form class="" action="delivery.php" method="get">
    <div class="row gtr-uniform">
      <div class="col-12">
        <input type="text" name="delivery" placeholder="KOD ZAMÓWIENIA">
      <br>
        <input type="submit" name="checkdelivery" value="SPRAWDŹ" class="button">
      </div>
    </div>
  </form>
</section>
<?php
  include('./delivery_action.php');
  include('./database.php');
  if(isset($_POST['delivery']))
    delivery_action($_POST['delivery'],$conn);
?>
