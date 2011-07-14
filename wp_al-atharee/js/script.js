/* Author: 

*/
$(document).ready(function(){
	/* ######SET / RESET INPUT VALUES ON FOCUS AND BLUE EVENTS ##### */
	$('#branding-top #top-search').focusin(function(){
		$(this).val('');
	});
	
	
	$('#branding-top #top-search').blur(function(){
		$(this).val('search..');
	});
});
	
	
	






















