jQuery(function(){
		
	var _boxStandard       = jQuery('#box-post-format-0');
	var _boxGallery        = jQuery('#box-post-format-gallery');
	var _boxAudio          = jQuery('#box-post-format-audio');
	var _boxVideoSelect    = jQuery('#box-post-format-video-select');
	var _boxVideo          = jQuery('#box-post-format-video');
	
	var _teddy_layout_checked_val             = jQuery('#teddy_layout_checked').val();
	var _teddy_color_checked_val              = jQuery('#teddy_color_checked').val();
	var _teddy_sidebar_checked_val            = jQuery('#teddy_sidebar_checked').val();
	var _teddy_sidebars_checked_val           = jQuery('#teddy_sidebars_checked').val();
	
	var _teddy_post_featured_val              = jQuery('[name=teddy_post_featured]').val();
	var _teddy_post_author_val                = jQuery('[name=teddy_post_author]').val();
	var _teddy_post_date_val                  = jQuery('[name=teddy_post_date]').val();
	var _teddy_post_tag_val                   = jQuery('[name=teddy_post_tag]').val();
	var _teddy_post_share_val                 = jQuery('[name=teddy_post_share]').val();
	var _teddy_post_comment_val               = jQuery('[name=teddy_post_comment]').val();
	
	var _teddy_listtype_checked_val               = jQuery('[name=teddy_listtype_checked]').val();
	var _teddy_page_attributes_checked_val        = jQuery('[name=teddy_page_attributes_checked]').val();
	var _teddy_page_category_checked_val          = jQuery('[name=teddy_page_category_checked]').val();
	var _teddy_page_order_checked_val             = jQuery('[name=teddy_page_order_checked]').val();
	var _teddy_page_orderby_checked_val           = jQuery('[name=teddy_page_orderby_checked]').val();
	var _teddy_page_filter_checked_val            = jQuery('[name=teddy_page_filter_checked]').val();
	var _teddy_page_background_slider_checked_val = jQuery('[name=teddy_page_background_slider_checked]').val();
	var _teddy_page_background_spacer_checked_val = jQuery('[name=teddy_page_background_spacer_checked]').val();
	var _teddy_page_pagenation_checked_val        = jQuery('[name=teddy_page_pagenation_checked]').val();
	
	var _teddy_audio_layout_checked_val           = jQuery('#teddy_audio_layout_checked').val();
	
	
	function ajax_gallery(paged){
		jQuery('.teddy_form_gallery_image_list').html('<div class="loading_div"></div>');
		jQuery.ajax({
			type: "POST",
			data: {page : paged},
			url: ASSETS_PATH+"ajax/ajax-gallery.php",
		}).done(function(d){
			jQuery('.teddy_form_gallery_image_list').html(d);
			add_galleryimg();
		});
	}
	
	function show_formats_box(_box_val){
		jQuery('[id=box-post-format-'+_box_val+']').fadeIn();_boxStandard.fadeIn();
		jQuery('.teddy_form_title:not([rel*=tfb_'+_box_val+']),.teddy_form_para:not([rel*=tfb_'+_box_val+']),.teddy_form_hr:not([rel*=tfb_'+_box_val+']),.teddy_layout_box:not([rel*=tfb_'+_box_val+']),.teddy_sidebar:not([rel*=tfb_'+_box_val+']),#teddy_post_featured:not([rel*=tfb_'+_box_val+']),.teddy_sidebar_box:not([rel*=tfb_'+_box_val+'])').hide();
		jQuery('.teddy_form_title[rel*=tfb_'+_box_val+'],.teddy_form_para[rel*=tfb_'+_box_val+'],.teddy_form_hr[rel*=tfb_'+_box_val+'],.teddy_layout_box[rel*=tfb_'+_box_val+'],.teddy_sidebar[rel*=tfb_'+_box_val+'],#teddy_post_featured[rel*=tfb_'+_box_val+'],.teddy_sidebar_box[rel*=tfb_'+_box_val+']').fadeIn();
		jQuery('.teddy_layout_box[rel=tfb_'+_box_val+']').css({'margin-bottom':'15px'});
		
	}
	
	function teddy_mp3_remove(){
		jQuery(".teddy_mp3_remove").click(function(){
			var _this_id = jQuery(this).attr('rel');
			jQuery("#teddy_mp3_each"+_this_id).remove();
		});
	}
	
	function add_galleryimg(){
		jQuery('.selectimage img').click(function(){
			var  _preview_url = jQuery(this).attr('rel');
			var  _attid = jQuery(this).attr('attid');
			var _below = jQuery('.teddy_form_gallery_selected_image_below');
			var _images = jQuery('.teddy_form_gallery_selected_images');
			_below.hide();_images.show();
			_images.append('<li><span class="remove_item_image"></span><img src="'+_preview_url+'" /><input type="hidden" name="teddy_gallery_selected_images[]" value="'+_attid+'" /></li>');
			remove_galleryimg();
			jQuery(".teddy_form_gallery_selected_images").sortable();
		})
		
	}
	
	function remove_galleryimg(){
		var _below = jQuery('.teddy_form_gallery_selected_image_below');
		var _images = jQuery('.teddy_form_gallery_selected_images');
		jQuery('.remove_item_image').click(function(){
			jQuery(this).parent().remove();
			if(jQuery('.teddy_form_gallery_selected_images li').length == 0){
				_below.fadeIn();_images.hide();
			}
			jQuery(".teddy_form_gallery_selected_images").sortable();
		})
		
	}
	
	function load_gallery(){
		var _val = jQuery('[name=lp_val]').val();
		var _length = jQuery('.lp_num span').length;
		if(_val == _length){
			jQuery('.lp_next').hide();
		}else if(_val == 1){
			jQuery('.lp_prev').hide();
		}else{
			jQuery('.lp_prev').show();
			jQuery('.lp_next').show();
		}
		ajax_gallery(_val);
	}
	
	if(_teddy_sidebar_checked_val != ''){
		jQuery('.teddy_sidebar_box').removeClass('checked');
		jQuery('#'+_teddy_sidebar_checked_val).addClass('checked');
	}
	
	if(_teddy_sidebars_checked_val != ''){
		jQuery('[name=teddy_sidebar_select] [value='+_teddy_sidebars_checked_val+']').attr("selected", "selected");
	}
	
	if(_teddy_post_featured_val == 'true'){
		jQuery('#teddy_post_featured').addClass('checked');
	}
	
	if(jQuery('#post_type').val() == 'post'){
		
		jQuery('#postexcerpt').insertBefore('#postdivrich');
		
		if(jQuery("#post-formats-select input[type=radio]:checked")){
			var _box_val_other = jQuery("#post-formats-select input[type=radio]:checked").val();
			show_formats_box(_box_val_other);
			if(_box_val_other == 'gallery'){
				ajax_gallery(1);
				jQuery('[name=lp_val]').val(1);
				if(_teddy_layout_checked_val != ''){
					jQuery('.teddy_layout_box').removeClass('checked');
					jQuery('#'+_teddy_layout_checked_val).addClass('checked');
				}
				jQuery('#postexcerpt').show();
			}else if(_box_val_other == 'audio'){
				if(_teddy_audio_layout_checked_val != ''){
					jQuery('.teddy_layout_box').removeClass('checked');
					jQuery('#'+_teddy_audio_layout_checked_val).addClass('checked');
					
					if(_teddy_audio_layout_checked_val == 'teddy_layout_soundcloud'){
						jQuery(".audio_soundcloud").show();
						jQuery(".audio_self").hide();
					}else if(_teddy_audio_layout_checked_val == 'teddy_layout_self_hosted_audio'){
						jQuery(".audio_soundcloud").hide();
						jQuery(".audio_self").show();
					}else{
						jQuery(".audio_soundcloud").hide();
						jQuery(".audio_self").show();
					}
				}
				jQuery('#postexcerpt').hide();
			}else if(_box_val_other == 'video'){
				if(_teddy_layout_checked_val != ''){
					jQuery('.teddy_layout_box').removeClass('checked');
					jQuery('#'+_teddy_layout_checked_val).addClass('checked');
					
				}
				jQuery('#postexcerpt').hide();
				
			}else{
				if(_teddy_layout_checked_val != ''){
					jQuery('.teddy_layout_box').removeClass('checked');
					jQuery('#'+_teddy_layout_checked_val).addClass('checked');
					
				}
				jQuery('#postexcerpt').show();
			}
		}
		
		if(_teddy_color_checked_val != ''){
			jQuery('.teddy_color_box span').removeClass('checked');
			jQuery('[title='+_teddy_color_checked_val+']').addClass('checked');
		}
		
		if(_teddy_listtype_checked_val != ''){
			jQuery('[name=teddy_listtype_select] [value='+_teddy_listtype_checked_val+']').attr("selected", "selected");
		}

		
		
		if(_teddy_post_author_val == 'true'){
			jQuery('#teddy_post_author').addClass('checked');
		}
		
		if(_teddy_post_date_val == 'true'){
			jQuery('#teddy_post_date').addClass('checked');
		}
		
		if(_teddy_post_tag_val == 'true'){
			jQuery('#teddy_post_tag').addClass('checked');
		}
		
		if(_teddy_post_share_val == 'true'){
			jQuery('#teddy_post_share').addClass('checked');
		}
		
		if(_teddy_post_comment_val == 'true'){
			jQuery('#teddy_post_comment').addClass('checked');
		}
		
		jQuery(".teddy_form_gallery_selected_images").sortable();
	}
	
	
	if(jQuery('#post_type').val() == 'page'){
		
		if(_teddy_page_attributes_checked_val != ''){
			jQuery('[name=teddy_page_attributes_select] [value='+_teddy_page_attributes_checked_val+']').attr("selected", "selected");
			show_formats_box(_teddy_page_attributes_checked_val);
		}
		
		if(_teddy_page_category_checked_val != ''){
			jQuery('[name=teddy_page_category_select] [value='+_teddy_page_category_checked_val+']').attr("selected", "selected");
			
		}
		
		if(_teddy_page_pagenation_checked_val != ''){
			jQuery('[name=teddy_page_pagenation_select] [value='+_teddy_page_pagenation_checked_val+']').attr("selected", "selected");
			
		}
		
		if(_teddy_page_order_checked_val != ''){
			jQuery('[name=teddy_page_order_select] [value='+_teddy_page_order_checked_val+']').attr("selected", "selected");
		}
		
		if(_teddy_page_orderby_checked_val != ''){
			jQuery('[name=teddy_page_orderby_select] [value='+_teddy_page_orderby_checked_val+']').attr("selected", "selected");
		}
		
		if(_teddy_page_filter_checked_val != ''){
			jQuery('[name=teddy_page_filter_select] [value='+_teddy_page_filter_checked_val+']').attr("selected", "selected");
		}
		jQuery("[name=teddy_page_filter_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_page_filter_checked]").val(_listtype_id);
		})
		
		if(jQuery("[name=teddy_page_attributes_select]").val() == 'teddy_page_list'){
			jQuery("#postdivrich").hide();
		}
		
		if(_teddy_page_background_slider_checked_val != ''){
			jQuery('[name=teddy_page_background_slider_select] [value='+_teddy_page_background_slider_checked_val+']').attr("selected", "selected");
		}
		
		jQuery("[name=teddy_page_background_slider_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_page_background_slider_checked]").val(_listtype_id);
		})
		
		if(_teddy_page_background_spacer_checked_val != ''){
			jQuery('[name=teddy_page_background_spacer_select] [value='+_teddy_page_background_spacer_checked_val+']').attr("selected", "selected");
		}
		
		jQuery("[name=teddy_page_background_spacer_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_page_background_spacer_checked]").val(_listtype_id);
		})
		
	}
	
	if(jQuery('#post_type').val() == 'bgslider'){
		var teddy_bgslider_mode_checked = jQuery('[name=teddy_bgslider_mode_checked]').val();
		if(teddy_bgslider_mode_checked != ''){
			jQuery('[name=teddy_bgslider_mode_select] [value='+teddy_bgslider_mode_checked+']').attr("selected", "selected");
		}
		jQuery("[name=teddy_bgslider_mode_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_bgslider_mode_checked]").val(_listtype_id);
		})
		
		var teddy_bgslider_effect_checked = jQuery('[name=teddy_bgslider_effect_checked]').val();
		if(teddy_bgslider_effect_checked != ''){
			jQuery('[name=teddy_bgslider_effect_select] [value='+teddy_bgslider_effect_checked+']').attr("selected", "selected");
		}
		jQuery("[name=teddy_bgslider_effect_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_bgslider_effect_checked]").val(_listtype_id);
		})
		
		var teddy_bgslider_speed_checked = jQuery('[name=teddy_bgslider_speed_checked]').val();
		if(teddy_bgslider_speed_checked != ''){
			jQuery('[name=teddy_bgslider_speed_select] [value='+teddy_bgslider_speed_checked+']').attr("selected", "selected");
		}
		jQuery("[name=teddy_bgslider_speed_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_bgslider_speed_checked]").val(_listtype_id);
		})
		
		var teddy_bgslider_default_checked = jQuery('[name=teddy_bgslider_default_checked]').val();
		if(teddy_bgslider_default_checked != ''){
			jQuery('[name=teddy_bgslider_default_select] [value='+teddy_bgslider_default_checked+']').attr("selected", "selected");
		}
		jQuery("[name=teddy_bgslider_default_select]").change(function(){
			var _listtype_id = jQuery(this).val();
			jQuery("[name=teddy_bgslider_default_checked]").val(_listtype_id);
		})
	}
	
	jQuery('#box-page-attributes').insertBefore('#postdivrich');
		
	jQuery("#post-formats-select input[type=radio]").click(function(){
		var _box_val = jQuery(this).val();
		var _box_name = jQuery(this).next().html()
		_boxStandard.hide();_boxGallery.hide();_boxAudio.hide();_boxVideo.hide();_boxVideoSelect.hide();
		show_formats_box(_box_val);
		if(_box_val == 'gallery'){
			ajax_gallery(1);
			jQuery('[name=lp_val]').val(1);
			jQuery('#postexcerpt').show();
		}else if(_box_val == 'audio'){
			if(_teddy_audio_layout_checked_val == 'teddy_layout_soundcloud'){
				jQuery(".audio_soundcloud").show();
				jQuery(".audio_self").hide();
			}else if(_teddy_audio_layout_checked_val == 'teddy_layout_self_hosted_audio'){
				jQuery(".audio_soundcloud").hide();
				jQuery(".audio_self").show();
			}else{
				jQuery(".audio_soundcloud").hide();
				jQuery(".audio_self").show();
			}
			jQuery('#postexcerpt').hide();
		}else if(_box_val == 'video'){
			jQuery('#postexcerpt').hide();
		}else{
			jQuery('#postexcerpt').show();
		}
		
		
	});
	
	jQuery("#teddy_layout_self_hosted_audio").click(function(){
		jQuery(".audio_soundcloud").hide();
		jQuery(".audio_self").fadeIn();
	})
	
	jQuery("#teddy_layout_soundcloud").click(function(){
		jQuery(".audio_self").hide();
		jQuery(".audio_soundcloud").fadeIn();
	})
	
	jQuery("[rel=layout_s] .teddy_layout_box").click(function(){
		var _layout_id = jQuery(this).attr('id');
		jQuery(".teddy_layout_box").removeClass('checked');
		jQuery(this).addClass('checked');
		jQuery("#teddy_layout_checked").val(_layout_id);
	})
	
	jQuery("[rel=layout_audio] .teddy_layout_box").click(function(){
		var _layout_id = jQuery(this).attr('id');
		jQuery(".teddy_layout_box").removeClass('checked');
		jQuery(this).addClass('checked');
		jQuery("#teddy_audio_layout_checked").val(_layout_id);
	})
	
	jQuery(".teddy_color_box span").click(function(){
		var _color_id = jQuery(this).attr('title');
		jQuery(".teddy_color_box span").removeClass('checked');
		jQuery(this).addClass('checked');
		jQuery("#teddy_color_checked").val(_color_id);
	})
	
	jQuery(".teddy_postshow_box label[class*='enabled']").click(function(){
		var _postshow_id = jQuery(this).attr('id');
		var _postshow_name = jQuery(this).html();
		if(jQuery(this).hasClass('checked')){
			jQuery(this).removeClass('checked');
			jQuery("[name="+_postshow_id+"]").val("false");
			jQuery("[rel="+_postshow_id+"]").html("");
		}else{
			jQuery(this).addClass('checked');
			jQuery("[name="+_postshow_id+"]").val("true");
			jQuery("[rel="+_postshow_id+"]").html(_postshow_name);
		}
	})
	
	jQuery(".teddy_sidebar_box").click(function(){
		var _sidebar_id = jQuery(this).attr('id');
		jQuery(".teddy_sidebar_box").removeClass('checked');
		jQuery(this).addClass('checked');
		jQuery("#teddy_sidebar_checked").val(_sidebar_id);
		if(_sidebar_id == 'teddy_sidebar_no'){
			jQuery("[name=teddy_sidebar_select]").hide();
		}else{
			jQuery("[name=teddy_sidebar_select]").show();
		}
	})
	
	jQuery("[name=teddy_sidebar_select]").change(function(){
		var _sidebar_id = jQuery(this).val();
		jQuery("[name=teddy_sidebars_checked]").val(_sidebar_id);
	})
	
	jQuery("[name=teddy_listtype_select]").change(function(){
		var _listtype_id = jQuery(this).val();
		jQuery("[name=teddy_listtype_checked]").val(_listtype_id);
	})
	
	jQuery("[name=teddy_page_category_select]").change(function(){
		var _listtype_id = jQuery(this).val();
		jQuery("[name=teddy_page_category_checked]").val(_listtype_id);
	})
	
	jQuery("[name=teddy_page_pagenation_select]").change(function(){
		var _listtype_id = jQuery(this).val();
		jQuery("[name=teddy_page_pagenation_checked]").val(_listtype_id);
	})
	
	jQuery("[name=teddy_page_order_select]").change(function(){
		var _listtype_id = jQuery(this).val();
		jQuery("[name=teddy_page_order_checked]").val(_listtype_id);
	})
	
	jQuery("[name=teddy_page_orderby_select]").change(function(){
		var _listtype_id = jQuery(this).val();
		jQuery("[name=teddy_page_orderby_checked]").val(_listtype_id);
	})
	
	jQuery("[name=teddy_page_attributes_select]").change(function(){
		var _listtype_id = jQuery(this).val();
		jQuery("[name=teddy_page_attributes_checked]").val(_listtype_id);
		if(_listtype_id == 'teddy_page_static'){
			jQuery("#postdivrich").show();
			jQuery(".mceLayout").css({"height":"auto"});
			jQuery("#content_ifr").css({"height":'360px'})
		}else{
			jQuery("#postdivrich").hide();
		}
		show_formats_box(_listtype_id);
	})
	
	jQuery(".teddy_mp3_add").click(function(){
		var _length = jQuery('.teddy_mp3_infor').last().attr('rel');
		var _id = Number(_length)+1;
		var _title = jQuery('.teddy_mp3_title:first .teddy_form_desc').html();
		var _title_url = jQuery('.teddy_mp3_name:first').html();
		jQuery("#teddy_mp3_content").append('<div id="teddy_mp3_each'+_id+'" rel="'+_id+'" class="teddy_mp3_infor"><div class="teddy_mp3_title"><div class="teddy_form_desc">'+_title+'</div><div class="teddy_mp3_input"><input type="text" name="teddy_mp3_title[]" value="" size="20" /></div><div class="clear"></div></div><div class="teddy_mp3_url"><div class="teddy_mp3_name">'+_title_url+'</div><div class="teddy_mp3_input"><input type="text" name="teddy_mp3_url[]" value="'+_id+'" size="40" /></div><div class="teddy_mp3_remove" rel="'+_id+'"></div><div class="clear"></div></div><div class="clear"></div></div>');
		teddy_mp3_remove();
	});
	
	jQuery('.lp_num span').click(function(){
		var _length = jQuery('.lp_num span').length;
		var _val = jQuery(this).html();
		jQuery('.lp_num span').removeClass('set');
		jQuery(this).addClass('set');
		jQuery('[name=lp_val]').val(_val);
		load_gallery();
	})
	
	jQuery('.lp_next').click(function(){
		var _val = Number(jQuery('[name=lp_val]').val());
		var _next_val = _val + 1;
		jQuery('.lp_num span').removeClass('set');
		jQuery('.lp_num span[rel=span_'+_next_val+']').addClass('set');
		jQuery('[name=lp_val]').val(_next_val);
		load_gallery();
	});
	
	jQuery('.lp_prev').click(function(){
		var _val = Number(jQuery('[name=lp_val]').val());
		var _prev_val = _val - 1;
		jQuery('.lp_num span').removeClass('set');
		jQuery('.lp_num span[rel=span_'+_prev_val+']').addClass('set');
		jQuery('[name=lp_val]').val(_prev_val);
		load_gallery();
	});
	
	teddy_mp3_remove();
	remove_galleryimg();
	
	
	
});