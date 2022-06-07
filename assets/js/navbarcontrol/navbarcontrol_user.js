$("#1").click(function()
{
  $("#intro").html("");
  $("#intro").load("app/twojezamowienia.php");
});

$("#2").click(function()
{
  $("#intro").html("");
  $("#intro").load("app/options.php");
});
