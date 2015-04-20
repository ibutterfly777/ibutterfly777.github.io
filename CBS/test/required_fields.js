/*------- проверка на jQuery на пустые поля ---------*/


$(function(){

$('#userForm').bind('submit', function(event) {
  $('[type=text]').each(function() {
    if(!$(this).val().length) {
      event.preventDefault();
      $(this).css('border', '2px solid red');
    }
  });
}); /*end ready*/

$('#myForm').bind('submit', function(event) {
  $('[type=password]').each(function() {
    if(!$(this).val().length) {
      event.preventDefault();
      $(this).css('border', '2px solid red');
    }
  });
  $('[type=mail]').each(function() {
    if(!$(this).val().length) {
      event.preventDefault();
      $(this).css('border', '2px solid red');
    }
  });
});/*end ready*/

});



/*------- проверка валидности email на JS---------*/
$(document).ready(function(){
	var reg = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
	$("#userLogin").change(function(){
	var r=$("#userLogin").val();
	if (!reg.test(r)) {
	$("#userLogin").css("border", "2px solid red");
	}
	else{
	$("#userLogin").css("backgroundColor", "white");   
	}
	});
});/*end ready*/

