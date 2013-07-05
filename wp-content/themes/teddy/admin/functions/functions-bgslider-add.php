<?php
global $wpdb;
$post_bgslider = md5(current_time('mysql'));
$post_title = '';
$post_type = 'bgslider';
$prefix = 'teddy'; 

$custom_bgslider_fields = array(

		array( 'id' => $prefix.'_bgslider_img' ),
		array( 'id' => $prefix.'_post_bgslider' ),
		array( 'id' => $prefix.'_bgslider_mode_checked' ),
		array( 'id' => $prefix.'_bgslider_effect_checked' ),
		array( 'id' => $prefix.'_bgslider_speed_checked' ),
		array( 'id' => $prefix.'_bgslider_default_checked' )
		
);

if(isset($_GET['post_bgslider'])){
	$post_bgslider = $_GET['post_bgslider'];
}

if(isset($_POST['title'])){
	$post_title = $_POST['title'];
}

if(isset($_POST['post_type'])){
	$post_type = $_POST['post_type'];
	$post = array(
		'post_name'      => $post_bgslider,
		'post_status'    => 'publish',
		'post_title'     => $post_title,
		'post_type'      => $post_type,
		'post_date'      => current_time('mysql')
	);
	wp_insert_post($post);
	$post_row = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE post_name = '".$post_bgslider."'");
	$post_id = $post_row->ID;
	
	foreach ($custom_bgslider_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = @$_POST[$field['id']];  
    
	    if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } 
	
	
	$bgslider_default = get_posts('numberposts=-1&post_type=bgslider&meta_key=teddy_bgslider_default_checked&meta_value=yes');
	if($_POST['teddy_bgslider_default_checked'] == 'yes'){
		if(count($bgslider_default) != ''){
			foreach($bgslider_default as $_default){
				if($_default->ID != $post_id){
					update_post_meta($_default->ID, 'teddy_bgslider_default_checked', 'no'); 
				}
			}
		}
	}
	
	$get_bgslider = get_post_meta($post_id, 'teddy_post_bgslider', true);
	
	if($get_bgslider != ''){
		$url = "admin.php?page=bgslider&action=edit&post_bgslider=".$post_bgslider;  
		echo "<script language='javascript' type='text/javascript'>";  
		echo "window.location.href='".$url."'";  
		echo "</script>";  
	}
}

?>

<form action="?page=bgslider&action=add&post_bgslider=<?php echo $post_bgslider;?>" method="post" class="wrap" id="bs-slider-form">

	<input type="hidden" id="post_type" name="post_type" value="bgslider" />
    <input type="hidden" id="teddy_post_bgslider" name="teddy_post_bgslider" value="<?php echo $post_bgslider;?>" />
    <div class="bs-icon-layers"></div>
	<h2>
		<?php _e('Add new BgSlider', 'teddy') ?>
		<a href="?page=bgslider" class="add-new-h2"><?php _e('Back to the list', 'teddy') ?></a>
	</h2>

	<div id="bs-pages">

		<div class="bs-page bs-settings active">

			<div id="post-body-content">
				<div id="titlediv">
					<div id="titlewrap">
						<input type="text" name="title" value="" id="title" autocomplete="off" placeholder="<?php _e('Type your slider name here', 'teddy') ?>">
					</div>
				</div>
			</div>

			<div class="bs-box bs-settings">
				<h3 class="header"><?php _e('Slider Settings', 'teddy') ?></h3>
                <div class="inner" style="background:#f7f7f7;">
                    <div class="teddy_form clearfix clear formatpost">
                        <div class="teddy_form_desc"><?php _e('Select Images', 'teddy'); ?></div>
                        <div id="teddy_bgslider_img_content" class="teddy_form_content">
                            <div class="teddy_page_background_box" rel="1">
                                <input type="text" name="teddy_bgslider_img[]" class="teddy_bgslider_img" style="width:60%" value="" />
                                <input type="button" class="upload_image_button button-primary" value="<?php _e('Upload Image', 'teddy'); ?>" />
                                <div class="teddy_bgimage_add"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <script type="text/javascript">
						jQuery(function(){
							var fileInput = '';
							function bgslider_upload(){
								jQuery('.upload_image_button').click(function() {
									fileInput = jQuery(this).prev('input');
									tb_show('', 'media-upload.php?type=image&TB_iframe=true');
									jQuery(':not #TB_title:first').hide();
									return false;
								});
							}
							
							function teddy_bgimage_remove(){
								jQuery(".teddy_bgimage_remove").click(function(){
									var _this_id = jQuery(this).attr('rel');
									jQuery("#teddy_bgslider_img_each"+_this_id).remove();
								});
							}
							
							jQuery(".teddy_bgimage_add").click(function(){
								var _length = jQuery('.teddy_page_background_box').last().attr('rel');
								var _id = Number(_length)+1;
								jQuery("#teddy_bgslider_img_content").append('<div id="teddy_bgslider_img_each'+_id+'" class="teddy_page_background_box" rel="'+_id+'"><input type="text" name="teddy_bgslider_img[]" class="teddy_bgslider_img" style="width:60%" value="'+_id+'" /><input type="button" class="upload_image_button button-primary" value="<?php _e('Upload Image', 'teddy'); ?>" /><div class="teddy_bgimage_remove" rel="'+_id+'"></div><div class="clear"></div></div>');
								teddy_bgimage_remove();
								bgslider_upload();
							});
							
							teddy_bgimage_remove();
							bgslider_upload();
							
							window.original_send_to_editor = window.send_to_editor;
							window.send_to_editor = function(html){
						
								if (fileInput) {
									fileurl = jQuery('img',html).attr('src');
						
									fileInput.val(fileurl);
						
									tb_remove();
						
								} else {
									window.original_send_to_editor(html);
								}
							};
						})
						</script>
                        <div class="clear"></div>
                    </div>
                    <div class="teddy_form_hr"></div>
                    <div class="teddy_form clearfix clear formatpost">
                        <div class="teddy_form_desc"><?php _e('Modes', 'teddy'); ?></div>
                        <div class="teddy_form_content">
                            <div class="teddy_bgslider_mode_box">
                                <select name="teddy_bgslider_mode_select">
                                    <option value="pagination" selected="selected"><?php _e('Pagination', 'teddy'); ?></option>
                                    <option value="timer"><?php _e('Timer', 'teddy'); ?></option>
                                    <option value="controls"><?php _e('Controls', 'teddy'); ?></option>
                                    <option value="scroll"><?php _e('Page Scroll', 'teddy'); ?></option>
                                    <option value="thumbnails"><?php _e('Thumbnails', 'teddy'); ?></option>
                                </select>
                                <input name="teddy_bgslider_mode_checked" type="hidden" value="pagination" />
                            </div>
                        </div>
                    </div>
                    <div class="teddy_form clearfix clear formatpost">
                        <div class="teddy_form_desc"><?php _e('Effect', 'teddy'); ?></div>
                        <div class="teddy_form_content">
                            <div class="teddy_bgslider_effect_box">
                                <select name="teddy_bgslider_effect_select">
                                    <option value="fade" selected="selected"><?php _e('Fade', 'teddy'); ?></option>
                                    <option value="slide"><?php _e('Slide', 'teddy'); ?></option>
                                    <option value="crossfade"><?php _e('CrossFade', 'teddy'); ?></option>
                                    <option value="slidefade"><?php _e('SlideFade', 'teddy'); ?></option>
                                </select>
                                <span class="teddy_form_text"><?php _e('Fade', 'teddy'); ?> / <?php _e('Slide', 'teddy'); ?> / <?php _e('CrossFade', 'teddy'); ?> / <?php _e('SlideFade', 'teddy'); ?></span>
                                <input name="teddy_bgslider_effect_checked" type="hidden" value="fade" />
                            </div>
                        </div>
                    </div>
                    <div class="teddy_form clearfix clear formatpost">
                        <div class="teddy_form_desc"><?php _e('Speed', 'teddy'); ?></div>
                        <div class="teddy_form_content">
                            <div class="teddy_bgslider_speed_box">
                                <select name="teddy_bgslider_speed_select">
                                    <option value="slow" selected="selected"><?php _e('Slow', 'teddy'); ?></option>
                                    <option value="fast"><?php _e('Fast', 'teddy'); ?></option>
                                </select>
                                <span class="teddy_form_text"><?php _e('Slow', 'teddy'); ?> / <?php _e('Fast', 'teddy'); ?></span>
                                <input name="teddy_bgslider_speed_checked" type="hidden" value="slow" />
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="teddy_form_hr"></div>
                    <div class="teddy_form clearfix clear formatpost">
                        <div class="teddy_form_desc"><?php _e('Set as Default', 'teddy'); ?></div>
                        <div class="teddy_form_content">
                            <div class="teddy_bgslider_default_box">
                                <select name="teddy_bgslider_default_select">
                                    <option value="no" selected="selected"><?php _e('NO', 'teddy'); ?></option>
                                    <option value="yes"><?php _e('YES', 'teddy'); ?></option>
                                </select>
                                <span class="teddy_form_text"><?php _e('NO', 'teddy'); ?> / <?php _e('YES', 'teddy'); ?></span>
                                <input name="teddy_bgslider_default_checked" type="hidden" value="no" />
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
			</div>
		</div>
	</div>

	<div class="bs-box bs-publish">
		<h3 class="header"><?php _e('Publish', 'teddy') ?></h3>
		<div class="inner">
			<button class="button-primary"><?php _e('Save changes', 'teddy') ?></button>
			<p class="bs-saving-warning"></p>
			<div class="bs-clear"></div>
		</div>
	</div>
</form>