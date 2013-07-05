(function ()
{
	// create tzShortcodes plugin
	tinymce.create("tinymce.plugins.Shortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("uxPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "ux_button" )
			{	
				var a = this;
					
				// adds the tinymce button
				btn = e.createMenuButton("ux_button",
				{
					title: "Insert Shortcode",
					image: "../wp-content/themes/teddy/functions/shortcodeui/images/icon.png",
					icons: false
				});
				
				// adds the dropdown to the button
				btn.onRenderMenu.add(function (c, b)
				{
					a.addWithPopup( b, "Buttons", "button" );
					a.addWithPopup( b, "Message box", "mbox" );
					a.addWithPopup( b, "Line", "line" );
					a.addWithPopup( b, "Bordered Image", "imageborder" );
					a.addWithPopup( b, "Round Image", "round" );
					a.addWithPopup( b, "List", "lists" );
					a.addWithPopup( b, "Columns", "columns" );
					a.addWithPopup( b, "Fixed Columns", "fixedcolumns" );
					a.addWithPopup( b, "Icon", "icon" );
					a.addWithPopup( b, "Toggle(FAQ)", "toggle" );
					a.addWithPopup( b, "Embed", "embed" );
					a.addWithPopup( b, "Social Icons", "social" );
					a.addWithPopup( b, "Maps", "map" );
					a.addWithPopup( b, "Contact From", "contactform" );
				});
				
				return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("uxPopup", false, {
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
				longname: 'TZ Shortcodes',
				author: 'Orman Clark',
				authorurl: 'http://themeforest.net/user/ormanclark/',
				infourl: 'http://wiki.moxiecode.com/',
				version: "1.0"
			}
		}
	});
	
	// add tzShortcodes plugin
	tinymce.PluginManager.add("tzShortcodes", tinymce.plugins.Shortcodes);
})();