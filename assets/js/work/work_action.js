$("#pick").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/pick.php")
});

$("#stow").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/stow.php")
});

$("#recive").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/recive.php")
});

$("#cret").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/cret.php")
});
