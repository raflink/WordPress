/**
 * Prints out the inline javascript needed for the colorpicker and choosing
 * the tabs in the panel.
 */

jQuery(document).ready(function($) {
	
	// Fade out the save message
	$('.fade').delay(1000).fadeOut(1000);
	
	// Color Picker
	$('.colorSelector').each(function(){
		$(this).next('input').colorpicker();
		$(this).siblings(".resetcolor").css("cursor","pointer");
		$(this).siblings(".resetcolor").click(function(){
			$(this).siblings('input.of-color').attr('value','');
		});
	});
	$('.colorSelectorAlpha').each(function(){
		$(this).next('input').colorpicker();
		$(this).siblings(".resetcolor").css("cursor","pointer");
		$(this).siblings(".resetcolor").click(function(){
			$(this).siblings('input.of-color').attr('value','');
		});
	});
	// Switches option sections
	$('.group').hide();
	var activetab = '';
	if (typeof(localStorage) != 'undefined' ) {
		activetab = localStorage.getItem("activetab");
	}
	if (activetab != '' && $(activetab).length ) {
		$(activetab).fadeIn();
	} else {
		$('.group:first').fadeIn();
	}
	$('.group .collapsed').each(function(){
		$(this).find('input:checked').parent().parent().parent().nextAll().each( 
			function(){
				if ($(this).hasClass('last')) {
					$(this).removeClass('hidden');
						return false;
					}
				$(this).filter('.hidden').removeClass('hidden');
			});
	});
	
	if (activetab != '' && $(activetab + '-tab').length ) {
		$(activetab + '-tab').addClass('nav-tab-active');
	}
	else {
		$('.nav-tab-wrapper a:first').addClass('nav-tab-active');
	}
	$('.nav-tab-wrapper a').click(function(evt) {
		$('.nav-tab-wrapper a').removeClass('nav-tab-active');
		$(this).addClass('nav-tab-active').blur();
		var clicked_group = $(this).attr('href');
		if (typeof(localStorage) != 'undefined' ) {
			localStorage.setItem("activetab", $(this).attr('href'));
		}
		$('.group').hide();
		$(clicked_group).fadeIn();
		evt.preventDefault();
	});
           					
	$('.group .collapsed input:checkbox').click(unhideHidden);
				
	function unhideHidden(){
		if ($(this).attr('checked')) {
			$(this).parent().parent().parent().nextAll().removeClass('hidden');
		}
		else {
			$(this).parent().parent().parent().nextAll().each( 
			function(){
				if ($(this).filter('.last').length) {
					$(this).addClass('hidden');
					return false;		
					}
				$(this).addClass('hidden');
			});
           					
		}
	}
	
	// Image Options
	$('.of-radio-img-img').click(function(){
		$(this).parent().parent().find('.of-radio-img-img').removeClass('of-radio-img-selected');
		$(this).addClass('of-radio-img-selected');		
	});
		
	$('.of-radio-img-label').hide();
	$('.of-radio-img-img').show();
	$('.of-radio-img-radio').hide();
	
	//When slip font face show the tip
	$('select.of-typography-face').each(function(){
			
		var current_font = jQuery(this).find('option:selected').val();
		current_font_z = current_font.replace(' ','+');
		jQuery("head").append("<link href=http://fonts.googleapis.com/css?family="+current_font_z+" rel=stylesheet type=text/css>");
		jQuery(this).siblings("span.fonts_preview").css("font-family",current_font);
		
		jQuery(this).live('change', function(){	
			var live_font = jQuery(this).find('option:selected').val();
			live_font_z = live_font.replace(' ','+');
			jQuery("head").append("<link href=http://fonts.googleapis.com/css?family="+live_font_z+" rel=stylesheet type=text/css>");
			jQuery(this).siblings("span.fonts_preview").css("font-family",live_font);
		})

	});
	//end slip font
	// Show tip
	jQuery('.explain').each(function(){
		if ( jQuery(this).html() == '' ){
			jQuery(this).parent('.explain_wrap').remove();
		}
		jQuery(this).siblings('.explain_trggle').hover(function(){
			jQuery(this).siblings('.explain').fadeIn(200);
		},function(){
			jQuery(this).siblings('.explain').fadeOut(200);
		})
	})
	//
	/* Skin select */
		$('select#skin_select').each(function(){
			jQuery(this).live('change', function(){
				var cur_skin = jQuery(this).find('option:selected').val();
				if( cur_skin =='light' ) {
					jQuery('input#bg_custom_color').val('#dfe1e3');
					jQuery('input#link-color').val('rgb(25,150,80)');
					jQuery('input#selected-color').val('');
					jQuery('input#header-color').val('rgb(56,63,73)');
					jQuery('select#header-alpha').val('1.0');
					jQuery('input#logo-box-bgcolor').val('');
					jQuery('input#menu-color').val('#b5b6ba');
					jQuery('input#menu-active-color').val('#e6ecf0');
					jQuery('input#submenu-mouseover-bgcolor').val('#424854');
					jQuery('input#post-tit-color').val('');
					jQuery('input#post-con-color').val('');
					jQuery('input#footerbar-bg-color').val('rgb(56,63,73)');
					jQuery('select#footerbar-alpha').val('1.0');
					jQuery('input#copyright-font-color').val('rgb(255,255,255)');
					jQuery('select#copyright-font-alpha').val('0.3');
					jQuery('input#footer-tit-color').val('rgb(255,255,255)');
					jQuery('select#footer-tit-alpha').val('0.5');
					jQuery('input#footer-con-color').val('rgb(255,255,255)');
					jQuery('select#footer-con-alpha').val('0.3');	
					
					
				} else if ( cur_skin =='dark' ){
					jQuery('input#bg_custom_color').val('');
					jQuery('input#link-color').val('rgb(255,199,0)');
					jQuery('input#selected-color').val('#89b4f5');
					jQuery('input#header-color').val('rgb(57,57,57)');
					jQuery('select#header-alpha').val('1.0');
					jQuery('input#logo-box-bgcolor').val('');
					jQuery('input#menu-color').val('#999999');
					jQuery('input#menu-active-color').val('#ffc700');
					jQuery('input#submenu-mouseover-bgcolor').val('#3d3d3d');
					jQuery('input#post-tit-color').val('rgb(0,0,0)');
					jQuery('input#post-con-color').val('rgb(0,0,0)');
					jQuery('input#footerbar-bg-color').val('rgb(57,57,57)');
					jQuery('select#footerbar-alpha').val('1.0');
					jQuery('input#copyright-font-color').val('rgb(102,102,102)');
					jQuery('select#copyright-font-alpha').val('0.3');
					jQuery('input#footer-tit-color').val('rgb(255,255,255)');
					jQuery('select#footer-tit-alpha').val('0.3');
					jQuery('input#footer-con-color').val('rgb(255,255,255)');
					jQuery('select#footer-con-alpha').val('0.2');	
					
					
				} else if ( cur_skin =='transparent' ){
					jQuery('input#bg_custom_color').val('');
					jQuery('input#link-color').val('rgb(255,105,177)');
					jQuery('input#selected-color').val('#89b4f5');
					jQuery('input#header-color').val('rgb(33,33,33)');
					jQuery('select#header-alpha').val('0.3');
					jQuery('input#logo-box-bgcolor').val('');
					jQuery('input#menu-color').val('#e0e0e0');
					jQuery('input#menu-active-color').val('#ffffff');
					jQuery('input#submenu-mouseover-bgcolor').val('#ff69b1');
					jQuery('input#post-tit-color').val('rgb(0,0,0)');
					jQuery('input#post-con-color').val('rgb(0,0,0)');
					jQuery('input#footerbar-bg-color').val('rgb(31,31,31)');
					jQuery('select#footerbar-alpha').val('0.8');
					jQuery('input#copyright-font-color').val('rgb(102,102,102)');
					jQuery('select#copyright-font-alpha').val('0.3');
					jQuery('input#footer-tit-color').val('rgb(255,255,255)');
					jQuery('select#footer-tit-alpha').val('0.8');
					jQuery('input#footer-con-color').val('rgb(255,255,255)');
					jQuery('select#footer-con-alpha').val('0.5');	
					
				}
			})
		});
	/* Skin select */
    $('#export_settings').click(function(){
		$('#export_text').toggle();		
	});
    $('#import_settings').click(function() {
        //set data varialbel with values
        var jcode = $('#import_text').val();
        if (!jcode)
        {
            alert('Paste backup file text or backup file url!');
            return false;
        }
        var data = {
                action: 'import_action',
                code: jcode
        };
        
        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.post(ajaxurl, data, function(response) {
           $('#import-msg').text(response.substring(0, response.length - 1));
           $('#import_text').val('');
        });
        return false;
    });
    
});	