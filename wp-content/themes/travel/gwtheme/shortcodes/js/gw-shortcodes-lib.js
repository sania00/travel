jQuery(document).ready(function($) {

	$(".gw-tabs").tabs();
	
	$(".gw-toggle").each( function () {
		if($(this).attr('data-id') == 'closed') {
			$(this).accordion({ header: '.gw-toggle-title', collapsible: true, active: false  });
		} else {
			$(this).accordion({ header: '.gw-toggle-title', collapsible: true});
		}
	});
	
	
});