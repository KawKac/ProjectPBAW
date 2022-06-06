<?php session_start(); ?>
<div class="inner">
  <nav>
    <ul>
      <li><h2>Witaj <?php echo $_SESSION['user']; ?></h2></li>
      <li><a href="#" id="0">Welcome</a></li>
      <li><a href="#" id="1">Twoje zamówienie</a></li>
      <li><a href="#" id="2">Opcje</a></li>
    </ul>
  </nav>
  <a href="app/logout.php" class="button">WYLOGUJ</a>
</div>
<script src="./assets/js/navbarcontrol/navbarcontrol_user.js"></script>
