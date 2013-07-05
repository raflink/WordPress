<div class="teddy_form clearfix clear formatpage">
    <div class="teddy_form_para" rel="tfb_teddy_page_list">
        <div class="teddy_form_desc"><?php _e('Category', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_category_box">
                <?php $categories = get_categories(); ?>
                <select name="teddy_page_category_select">
                    <option value="0-1" selected="selected"><?php _e('Select a category', 'teddy'); ?></option>
                    <?php foreach($categories as $cate): ?>
                    <option value="<?php echo $cate->cat_ID;?>"><?php echo $cate->name;?></option>
                    
                    <?php endforeach; ?>
                </select>
                <?php 
				if(CustomMeta('teddy_page_category_checked') == ''){
					$teddy_page_category_checked = '0-1';
				}else{
					$teddy_page_category_checked = CustomMeta('teddy_page_category_checked');
				}?>
                <input name="teddy_page_category_checked" type="hidden" value="<?php echo $teddy_page_category_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para" rel="tfb_teddy_page_list" >
        <div class="teddy_form_desc"><?php _e('Quantity/Page', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_quantity_box">
                <input type="text" id="teddy_page_quantity" name="teddy_page_quantity" size="25" value="<?php echo CustomMeta('teddy_page_quantity'); ?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
	<div class="teddy_form_para" rel="tfb_teddy_page_list" >
        <div class="teddy_form_desc"><?php _e('Pagenation Type', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_pagenation_box">
                <select name="teddy_page_pagenation_select">
                    <option value="none" selected="selected"><?php _e('Please select', 'teddy'); ?></option>
					<option value="number"><?php _e('Number', 'teddy'); ?></option>
					<option value="twitter"><?php _e('Twitter Style', 'teddy'); ?></option>
					<!--<option value="infinitescroll"><?php //_e('Infinite Scroll', 'teddy'); ?></option>-->
					<option value="none"><?php _e('None', 'teddy'); ?></option>
				</select>
				 <?php 
				if(CustomMeta('teddy_page_pagenation_checked') == ''){
					$teddy_page_pagenation_checked = 'none';
				}else{
					$teddy_page_pagenation_checked = CustomMeta('teddy_page_pagenation_checked');
				}?>
				<input name="teddy_page_pagenation_checked" type="hidden" value="<?php echo $teddy_page_pagenation_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para" rel="tfb_teddy_page_list" >
        <div class="teddy_form_desc"><?php _e('Order Post by', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_order_box">
                <select name="teddy_page_orderby_select">
                    <option value="none" selected="selected"><?php _e('Please select', 'teddy'); ?></option>
                    <option value="title"><?php _e('Title', 'teddy'); ?></option>
                    <option value="date"><?php _e('Date', 'teddy'); ?></option>
                    <option value="ID"><?php _e('ID', 'teddy'); ?></option>
                    <option value="modified"><?php _e('Modified', 'teddy'); ?></option>
                    <option value="author"><?php _e('Author', 'teddy'); ?></option>
                    <option value="comment_count"><?php _e('Comment count', 'teddy'); ?></option>
                    <option value="none"><?php _e('None', 'teddy'); ?></option>
                </select>
                <select name="teddy_page_order_select">
                    <option value="ASC" selected="selected"><?php _e('Ascending', 'teddy'); ?></option>
                    <option value="DESC"><?php _e('Descending', 'teddy'); ?></option>
                </select>
                <?php 
				if(CustomMeta('teddy_page_order_checked') == ''){
					$teddy_page_order_checked = 'ASC';
				}else{
					$teddy_page_order_checked = CustomMeta('teddy_page_order_checked');
				}?>
                <?php 
				if(CustomMeta('teddy_page_orderby_checked') == ''){
					$teddy_page_orderby_checked = '0-1';
				}else{
					$teddy_page_orderby_checked = CustomMeta('teddy_page_orderby_checked');
				}?>
                <input name="teddy_page_order_checked" type="hidden" value="<?php echo $teddy_page_order_checked;?>" />
                <input name="teddy_page_orderby_checked" type="hidden" value="<?php echo $teddy_page_orderby_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
	<!--
    <div class="teddy_form_para" rel="tfb_teddy_page_list" >
        <div class="teddy_form_desc"><?php // _e('Enable Filter', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_filter_box">
                <select name="teddy_page_filter_select">
                    <option value="no" selected="selected"><?php //_e('NO', 'teddy'); ?></option>
                    <option value="yes"><?php //_e('YES', 'teddy'); ?></option>
                </select>
                <?php /*
				if(CustomMeta('teddy_page_filter_checked') == ''){
					$teddy_page_filter_checked = 'no';
				}else{
					$teddy_page_filter_checked = CustomMeta('teddy_page_filter_checked');
				} */?>
                <input name="teddy_page_filter_checked" type="hidden" value="<?php //echo $teddy_page_filter_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>-->
    <div class="teddy_form_para" rel="tfb_teddy_page_static" style="display:none;">
        <div class="teddy_form_desc"><?php _e('Sidebar', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_sidebar" rel="tfb_teddy_page_static">
                <div id="teddy_sidebar_right" class="teddy_sidebar_box" rel="tfb_teddy_page_static">
                    <div class="checked_btn"></div>
                    <img src="<?php echo ASSETS_PATH;?>images/sidebar_right.png" width="126" height="80" />
                </div>
                <div id="teddy_sidebar_left" class="teddy_sidebar_box" rel="tfb_teddy_page_static">
                    <div class="checked_btn"></div>
                    <img src="<?php echo ASSETS_PATH;?>images/sidebar_left.png" width="126" height="80" />
                </div>
                <div id="teddy_sidebar_no" class="teddy_sidebar_box" rel="tfb_teddy_page_static">
                    <div class="checked_btn"></div>
                    <img src="<?php echo ASSETS_PATH;?>images/sidebar_no.png" width="126" height="80" />
                </div>
                <?php 
				if(CustomMeta('teddy_sidebar_checked') == ''){
					$teddy_sidebar_checked = 'teddy_sidebar_right';
				}else{
					$teddy_sidebar_checked = CustomMeta('teddy_sidebar_checked');
				}?>
                <input id="teddy_sidebar_checked" name="teddy_sidebar_checked" type="hidden" value="<?php echo $teddy_sidebar_checked;?>" />
                <div class="clear"></div>
            
            </div>
            <div class="teddy_sidebar" rel="tfb_teddy_page_static">
                <select name="teddy_sidebar_select">
                    <option value="none" selected="selected"><?php _e('Please select', 'teddy'); ?></option>
                    <?php
					global $sidebar_array;
					foreach($sidebar_array as $num => $sidebar):
					?>
                    <option value="<?php echo $sidebar['id']; ?>"><?php echo $sidebar['name']; ?></option>
                    
                    <?php endforeach; ?>
                </select>
                <?php 
				if(CustomMeta('teddy_sidebars_checked') == ''){
					$teddy_sidebars_checked = 'none';
				}else{
					$teddy_sidebars_checked = CustomMeta('teddy_sidebars_checked');
				}?>
                <input id="teddy_sidebars_checked" name="teddy_sidebars_checked" type="hidden" value="<?php echo $teddy_sidebars_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
	<?php 
    if(CustomMeta('teddy_page_background_slider_checked') == ''){
        $teddy_page_background_slider_checked = 'none';
    }else{
        $teddy_page_background_slider_checked = CustomMeta('teddy_page_background_slider_checked');
    }?>
    <input name="teddy_page_background_slider_checked" type="hidden" value="<?php echo $teddy_page_background_slider_checked;?>" />
    <?php 
	if(CustomMeta('teddy_page_background_spacer_checked') == ''){
		$teddy_page_background_spacer_checked = 'no';
	}else{
		$teddy_page_background_spacer_checked = CustomMeta('teddy_page_background_spacer_checked');
	}?>
	<input name="teddy_page_background_spacer_checked" type="hidden" value="<?php echo $teddy_page_background_spacer_checked;?>" />
    <div class="teddy_form_hr" rel="tfb_teddy_page_list tfb_teddy_page_static"></div>
    <div class="teddy_form_para" rel="tfb_teddy_page_list tfb_teddy_page_static">
        <div class="teddy_form_desc"><?php _e('Background Slider', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_background_slider_box">
                <select name="teddy_page_background_slider_select">
                    <option value="none" selected="selected"><?php _e('NONE', 'teddy'); ?></option>
                    <?php
					$sliders = get_posts('numberposts=-1&post_type=bgslider');
					if(!empty($sliders)) : ?>
					<?php global $post; foreach($sliders as $post) : setup_postdata($post) ?>
                    <?php $name = empty($post->post_title) ? 'Unnamed' : $post->post_title; ?>
                    <option value="<?php the_ID(); ?>"><?php echo $name ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para" rel="tfb_teddy_page_list tfb_teddy_page_static">
        <div class="teddy_form_desc"><?php _e('Show Top Spacer', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_background_spacer_box">
                <select name="teddy_page_background_spacer_select">
                    <option value="no" selected="selected"><?php _e('NO', 'teddy'); ?></option>
                    <option value="yes"><?php _e('YES', 'teddy'); ?></option>
                </select>
                
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>