

	$('.colors').click(function(){
		var title = jQuery(this).attr('title');		
		jQuery('#templateColor').attr('href', 'css/colors/' + title + '.css');				
	  	return false;
    });	