<section>
  <form class="" action="login.php" method="post">
    <div class="col-6 col-12-xsmall">
      <input type="login" name="login" placeholder="LOGIN">
    </div>
    <div class="col-6 col-12-xsmall">
      <input type="hasło" name="hasło" placeholder="HASŁO">
    </div>
    <input type="submit" name="submit" value="Zaloguj" class="button">
  </form>
</section>
<?php
function getParamsLogin(&$form){
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['password'] = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
    $form['password'] = md5($form['password']);
  }

  function validateLogin(&$form, &$messages){
      if (! (isset($form['login']) && isset($form['password']))) { return false; }

      if($form['password'] == "" || $form['login'] == "") {
          $messages [] = 'Nie podano hasła lub loginu.';
      }

      if(count($messages) > 0) return false;

      $servername = "127.0.0.1";
      $username = "projectpbaw";
      $password = "1eH@-YaUB)]Qey5H";

      $conn = new mysqli($servername, $username, $password);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
      $dbpass="SELECT haslo FROW users WHERE LOGIN=$form['login']";
      if($form['password']!=$dbpass)
        $messages="Zły login lub hasło";

      $conn->close();

      $messages [] = 'Niepoprawne dane.';
      return false;
}
?>
