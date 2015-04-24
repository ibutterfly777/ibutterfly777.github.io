$(document).ready(function(){
	$("#nav li a").click(function(){
		var selected = $(this).attr('href');	
		$.scrollTo(selected, 555);		
		return false;
	});	
});			