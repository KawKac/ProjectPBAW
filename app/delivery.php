<section class="content_page">
  <h2 class="h2_center">SPRAWDŹ ZAMÓWIENIE</h2>
  <hr class="hr_dashed">
  <?php if(isset($_COOKIE['message'])){echo "<div class='alert alert-danger' role='alert'>".$_COOKIE['message']."</div>";} ?>
  <form action="app/delivery_action.php" method="post">
    <div class="row gtr-uniform">
      <div class="col-12">
        <input type="text" name="delivery" placeholder="KOD ZAMÓWIENIA">
      <br>
        <input type="submit" name="checkdelivery" value="SPRAWDŹ" class="button">
      </div>
    </div>
  </form>
</section>
