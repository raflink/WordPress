/*
	--------------------------------
	Infinite Scroll Behavior
	Manual / Twitter-style
	--------------------------------
	+ https://github.com/paulirish/infinitescroll/
	+ version 2.0b2.110617
	+ Copyright 2011 Paul Irish & Luke Shumard
	+ Licensed under the MIT license
	
	+ Documentation: http://infinite-scroll.com/
	
*/

jQuery.extend(jQuery.infinitescroll.prototype,{
	
	_setup_twitter: function infscr_setup_twitter () {
		var opts = this.options,
			instance = this;
			
		// Bind nextSelector link to retrieve
		jQuery(opts.nextSelector).click(function(e) {
			jQuery(this).hide();//fadeOut(100);
			if (e.which == 1 && !e.metaKey && !e.shiftKey) {
				e.preventDefault();
				instance.retrieve();
			}
		});
		
		// Define loadingStart to never hide pager
		instance.options.loading.start = function (opts) {
			var load_wrap = opts.loading.selector;
			opts.loading.msg
				.appendTo("#pagenums")/*.delay(200)*/
				.show(0, function () {
                	beginAjax(opts);
            });
		}
	}
	
});