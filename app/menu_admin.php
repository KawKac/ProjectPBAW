<?php session_start(); ?>
<div class="inner">
  <nav>
    <ul>
      <li><h2>Witaj <?php echo $_SESSION['user']; ?></h2></li>
      <li><a href="#" id="0">Welcome</a></li>
      <li><a href="#" id="1">Opcje</a></li>
      <li><a href="#" id="2">Narzędzia administracyjne</a></li>
      <li><a href="#" id="3">Baza danych</a></li>
    </ul>
    <a href="app/logout.php" class="button">WYLOGUJ</a>
    <script src="./assets/js/navbarcontrol/navbarcontrol_admin.js"></script>
  </nav>
</div>
