$("#pick").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/pages/work/pick.php")
});

$("#stow").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/pages/work/stow.php")
});

$("#recive").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/pages/work/recive.php")
});

$("#pack").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/pages/work/pack.php")
});

$("#cret").click(function(){
  $("#work_contents").html("");
  $("#work_contents").load("app/pages/work/cret.php")
});
