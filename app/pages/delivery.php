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
  include('../db/delivery_action.php');
  delivery_action($_POST['delivery']);
?>
