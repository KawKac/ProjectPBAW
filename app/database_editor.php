<?php
session_start();
if($_SESSION['chmode']!=3)
  echo "Access denied!";
else {
  echo '
    <section>
      <form class="" action="index.html" method="post">
        <input type="button" name="" value="" id="">
      </form>
    </section>
    ';}
