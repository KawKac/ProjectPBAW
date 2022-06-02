$('#name, #vorname, #log, #email, #tel').click(function(){
  var temp = $(this).text();
  var temp2 = $(this).attr("id");
  $(this).parent().html('<input type="text" id="' + temp2 + '"name="' + temp2 +'"style="width: 200px;">');
  $('#name').val(temp);
});
