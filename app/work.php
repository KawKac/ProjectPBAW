<?php
if($_COOKIE['chmode']!=2)
  echo "Access denied!";
else { ?>
<section>
  <div class="col-6 col-12-xsmall">
    <a href="#" class="button" id="pick">Pick</a>
    <a href="#" class="button" id="stow">Stow</a>
    <a href="#" class="button" id="recive">Recive</a>
    <a href="#" class="button" id="cret">C-Ret</a>
  </div>
  <div id="work_contents">
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    switch ($_COOKIE['work']) {
      case 0:
        include('pick.php');
        break;
      case 1:
        include('stow.php');
        break;
      case 2:
        include('recive.php');
        break;
      case 3:
        include('cret.php');
        break;

    } ?>
    <!-- tu wczytają się narzędzia do pracy w zależności który przycisk się wybierze -->
  </div>
</section>
<script src="assets/js/work/work_action.js"></script>
<?php } ?>
