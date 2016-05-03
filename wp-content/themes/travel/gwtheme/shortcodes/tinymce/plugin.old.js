(function ()
{
	// create aleShortcodes plugin
	tinymce.create("tinymce.plugins.gwShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("gwPopup", function ( a, params )
			{
				var popup = params.identifier;

				// load thickbox
				tb_show("Insert Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "gw_button" )
			{
				var a = this;

				var btn = e.createSplitButton('gw_button', {
                    title: "Insert Shortcode",
					image: gwShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{
					a.addWithPopup( b, "Alerts", "alert" );
					a.addWithPopup( b, "Buttons", "button" );
					a.addWithPopup( b, "Columns", "columns" );
					a.addWithPopup( b, "Tabs", "tabs" );
					a.addWithPopup( b, "Toggle", "toggle" );
                    a.addWithPopup( b, "Divider", "divider" );
                    a.addWithPopup( b, "Testimonial", "testimonial" );
                    a.addWithPopup( b, "Team", "team" );
                    a.addWithPopup( b, "Partner", "partner" );
                    a.addWithPopup( b, "Service", "service" );
                    a.addWithPopup( b, "Map", "map" );
				});

                return btn;
			}

			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("gwPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'gw Shortcodes'
			}
		}
	});


	tinymce.PluginManager.add("gwShortcodes", tinymce.plugins.gwShortcodes);
})();