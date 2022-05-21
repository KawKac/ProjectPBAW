$("#pick").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("pick.php")
});

$("#stow").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("stow.php")
});

$("#recive").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("recive.php")
});

$("#pack").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("pack.php")
});

$("#cret").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("cret.php")
});
