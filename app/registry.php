<script type="text/javascript">
$('#haslo').focusin(function(){
  $('#haslo').parent().append('<div class="alert alert-primary" role="alert">Hasło powinno zawierać małą i dużą literę, cyfrę i znak specjalny</div>');
});
$('#haslo').focusout(function(){
  $("#haslo").next().remove();
});
</script>
<section class="content_page">
  <h2 class="h2_center">REJESTRACJA</h2>
  <hr class="hr_dashed">
  <form class="" action="./app/registry_action.php" method="post" name="rejestracja">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="name" placeholder="IMIĘ">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="vorname" placeholder="NAZWISKO">
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="login" placeholder="LOGIN">
      </div>
    </div>
    <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="password" name="password" placeholder="HASŁO" id='password'>
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="password" name="ppassword" placeholder="POWTÓRZ HASŁO" id='ppassword'>
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="email" placeholder="E-MAIL" id='email'>
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="pemail" placeholder="POWTÓRZ E-MAIL" id="pemail">
      </div>
    </div>
    <br>
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="checkbox" name="demo_human" value="YES" id="demo_human">
        <label for="demo_human">Nie jestem robotem.</label>
      </div>
    </div>
    <br>
      <input type="submit" name="submit" value="Zarejestruj" class="button">
  </form>
</section>

<script type="text/javascript">
$(function() {
$("form[name='rejestracja']").validate({
  rules: {
    name: "required",
    vorname: "required",
    login: "required",
    email: {
      required: true,
      email: true
    },
    pemail: {
      required: true,
      email: true
    },
    password: {
      required: true,
      minlength: 5
    }
    ppassword: {
      required: true,
      minlength: 5
    }
  },
  messages: {
    name: "Proszę podać imię",
    vorname: "Proszę podać nazwisko",
    login: "Proszę podać login",
    password: {
      required: "Proszę podać hasło",
      minlength: "Hasło powinno posiadać minimum 5 znaków"
    },
    ppassword: {
      required: "Proszę powtórzyć hasło",
      minlength: "Hasło powinno posiadać minimum 5 znaków"
    },
    email: "Proszę podać email",
    pemail: "Proszę powtórzyć email"
  },
  submitHandler: function(form) {
    form.submit();
  }
});
});
</script>
