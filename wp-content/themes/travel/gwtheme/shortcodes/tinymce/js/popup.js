
// start the popup specefic scripts
// safe to use $
jQuery(document).ready(function($) {
    var ales = {
    	loadVals: function()
    	{
    		var shortcode = $('#_gw_shortcode').text(),
    			uShortcode = shortcode;
    		
    		// fill in the gaps eg {{param}}
    		$('.gw-input').each(function() {
    			var input = $(this),
    				id = input.attr('id'),
    				id = id.replace('gw_', ''),		// gets rid of the gw_ prefix
    				re = new RegExp("{{"+id+"}}","g");
    				
    			uShortcode = uShortcode.replace(re, input.val());
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_gw_ushortcode').remove();
    		$('#gw-sc-form-table').prepend('<div id="_gw_ushortcode" class="hidden">' + uShortcode + '</div>');
    	},
    	cLoadVals: function()
    	{
    		var shortcode = $('#_gw_cshortcode').text(),
    			pShortcode = '';
    			shortcodes = '';
    		
    		// fill in the gaps eg {{param}}
    		$('.child-clone-row').each(function() {
    			var row = $(this),
    				rShortcode = shortcode;
    			
    			$('.gw-cinput', this).each(function() {
    				var input = $(this),
    					id = input.attr('id'),
    					id = id.replace('gw_', '')		// gets rid of the gw_ prefix
    					re = new RegExp("{{"+id+"}}","g");
    					
    				rShortcode = rShortcode.replace(re, input.val());
    			});
    	
    			shortcodes = shortcodes + rShortcode + "\n";
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_gw_cshortcodes').remove();
    		$('.child-clone-rows').prepend('<div id="_gw_cshortcodes" class="hidden">' + shortcodes + '</div>');
    		
    		// add to parent shortcode
    		this.loadVals();
    		pShortcode = $('#_gw_ushortcode').text().replace('{{child_shortcode}}', shortcodes);
    		
    		// add updated parent shortcode
    		$('#_gw_ushortcode').remove();
    		$('#gw-sc-form-table').prepend('<div id="_gw_ushortcode" class="hidden">' + pShortcode + '</div>');
    	},
    	children: function()
    	{
    		// assign the cloning plugin
    		$('.child-clone-rows').appendo({
    			subSelect: '> div.child-clone-row:last-child',
    			allowDelete: false,
    			focusFirst: false
    		});
    		
    		// remove button
    		$('.child-clone-row-remove').live('click', function() {
    			var	btn = $(this),
    				row = btn.parent();
    			
    			if( $('.child-clone-row').size() > 1 )
    			{
    				row.remove();
    			}
    			else
    			{
    				alert('You need a minimum of one row');
    			}
    			
    			return false;
    		});
    		
    		// assign jUI sortable
    		$( ".child-clone-rows" ).sortable({
				placeholder: "sortable-placeholder",
				items: '.child-clone-row'
				
			});
    	},
    	resizeTB: function()
    	{
			var	ajaxCont = $('#TB_ajaxContent'),
				tbWindow = $('#TB_window'),
				gwPopup = $('#gw-popup');

            tbWindow.css({
                height: gwPopup.outerHeight() + 50,
                width: gwPopup.outerWidth(),
                marginLeft: -(gwPopup.outerWidth()/2)
            });

			ajaxCont.css({
				paddingTop: 0,
				paddingLeft: 0,
				paddingRight: 0,
				height: (tbWindow.outerHeight()-47),
				overflow: 'auto', // IMPORTANT
				width: gwPopup.outerWidth()
			});
			
			$('#gw-popup').addClass('no_preview');
    	},
    	load: function()
    	{
    		var	ales = this,
    			popup = $('#gw-popup'),
    			form = $('#gw-sc-form', popup),
    			shortcode = $('#_gw_shortcode', form).text(),
    			popupType = $('#_gw_popup', form).text(),
    			uShortcode = '';
    		
    		// resize TB
    		ales.resizeTB();
    		$(window).resize(function() { ales.resizeTB() });
    		
    		// initialise
    		ales.loadVals();
    		ales.children();
    		ales.cLoadVals();
    		
    		// update on children value change
    		$('.gw-cinput', form).live('change', function() {
    			ales.cLoadVals();
    		});
    		
    		// update on value change
    		$('.gw-input', form).change(function() {
    			ales.loadVals();
    		});
    		
    		// when insert is clicked
    		$('.gw-insert', form).click(function() {
                if(parent.tinymce)
                {
                    parent.tinymce.activeEditor.execCommand('mceInsertContent',false,$('#_gw_ushortcode', form).html());
                    tb_remove();
                }
    		});
    	}
	}
    
    // run
    $('#gw-popup').livequery( function() { ales.load(); } );
});