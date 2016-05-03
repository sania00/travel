(function($) {
    "use strict";



    //Shortcodes
    tinymce.PluginManager.add( 'gwShortcodes', function( editor, url ) {

        editor.addCommand("gwPopup", function ( a, params )
        {
            var popup = params.identifier;
            tb_show("Insert GW Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
        });

        editor.addButton( 'gw_button', {
            type: 'splitbutton',
            icon: false,
            title:  'gw Shortcodes',
            onclick : function(e) {},
            menu: [

                {text: 'Columns',onclick:function(){
                    editor.execCommand("gwPopup", false, {title: 'Columns',identifier: 'columns'})
                }}
                
            ]


        });



    });



})(jQuery);