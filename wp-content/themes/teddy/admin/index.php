<?php

define( 'ADMIN_PATH', get_template_directory_uri() . '/admin/' );
define( 'ASSETS_PATH', ADMIN_PATH . 'assets/' );
$prefix = 'teddy'; 

add_action('admin_menu', 'BackSliderSettingsMenu');

/*
============================================================================
	*
	* Background Slider
	*
============================================================================	
*/

function BackSliderSettingsMenu(){
	add_menu_page('BgSlider', 'BgSlider', 'administrator', 'bgslider', 'BackSliderRouter', ASSETS_PATH.'images/icon_16x16.png');
	
	// Add sub-menus
	add_submenu_page('bgslider', 'BgSlider', __('All Sliders', 'teddy'), 'administrator', 'bgslider', 'BackSliderRouter');
	add_submenu_page('bgslider', 'Add New BgSlider', __('Add New', 'teddy'), 'administrator', 'bgslider_add_new', 'BackSliderAddNew');
}

/*
============================================================================
	*
	* setting router
	*
============================================================================	
*/

function BackSliderRouter(){
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('my-upload');
	wp_enqueue_style('thickbox'); 
	
	if(isset($_GET['action']) && $_GET['action'] == 'add') {
		include('functions/functions-bgslider-add.php');

	}elseif(isset($_GET['action']) && $_GET['action'] == 'edit') {
		include('functions/functions-bgslider-edit.php');

	}elseif(isset($_GET['action']) && $_GET['action'] == 'remove') {
		$_id = $_GET['id'];
		wp_delete_post($_id);
		$url = "admin.php?page=bgslider";  
		echo "<script language='javascript' type='text/javascript'>";  
		echo "window.location.href='".$url."'";  
		echo "</script>";  

	}else {
		include('functions/functions-bgslider-list.php');
	}
}

function BackSliderAddNew(){
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('my-upload');
	wp_enqueue_style('thickbox'); 
	include('functions/functions-bgslider-add.php');
}



/*
============================================================================
	*
	* Custom meta
	*
============================================================================	
*/

$custom_post_meta_fields = array(

		//gallery
		array( 'id' => $prefix.'_gallery_selected_images' ),
		array( 'id' => $prefix.'_listtype_checked' ),
		
		//audio
		array( 'id' => $prefix.'_artist_name' ),
		array( 'id' => $prefix.'_mp3_title' ),
		array( 'id' => $prefix.'_mp3_url' ),
		array( 'id' => $prefix.'_soundcloud_code' ),
		array( 'id' => $prefix.'_audio_layout_checked' ),
		
		//video
		array( 'id' => $prefix.'_embeded_code' ), 
		array( 'id' => $prefix.'_m4v_file' ), 
		array( 'id' => $prefix.'_ogv_file' ),
				
		//standard
		array( 'id' => $prefix.'_layout_checked' ), 
		array( 'id' => $prefix.'_color_checked' ), 
		array( 'id' => $prefix.'_sidebar_checked' ),
		array( 'id' => $prefix.'_sidebars_checked' ),
		array( 'id' => $prefix.'_post_featured' ), 
		array( 'id' => $prefix.'_post_author'  ), 
		array( 'id' => $prefix.'_post_date' ),
		array( 'id' => $prefix.'_post_tag' ),
		array( 'id' => $prefix.'_post_share' ), 
		array( 'id' => $prefix.'_post_comment' )
		
		
);

$custom_page_meta_fields = array(

		//page option
		array( 'id' => $prefix.'_page_attributes_checked' ), 
		array( 'id' => $prefix.'_page_category_checked' ), 
		array( 'id' => $prefix.'_page_quantity' ),
		array( 'id' => $prefix.'_page_pagenation_checked' ),
		array( 'id' => $prefix.'_page_order_checked' ), 
		array( 'id' => $prefix.'_page_orderby_checked' ), 
		array( 'id' => $prefix.'_sidebar_checked' ),
		array( 'id' => $prefix.'_sidebars_checked' ),
		array( 'id' => $prefix.'_page_filter_checked' ),
		array( 'id' => $prefix.'_page_background_img' ),
		array( 'id' => $prefix.'_page_background_color' ),
		array( 'id' => $prefix.'_post_featured' ), 
		array( 'id' => $prefix.'_page_background_slider_checked' ),
		array( 'id' => $prefix.'_page_background_spacer_checked' )
		
);

/*
============================================================================
	*
	* post format
	*
============================================================================	
*/
add_theme_support( 'post-formats', array( 'gallery', 'audio', 'video' ) );

/*
============================================================================
	*
	* Costom metabox
	*
============================================================================	
*/
function AddCustomPostMetaBox(){
	
	//gallery
	add_meta_box(  
        'box-post-format-gallery', 
        __('Select Images', 'teddy'), 
        'ShowCustomPostMetaBoxGallery',
        'post', 
        'normal', 
        'high'); 
		
	//audio
	add_meta_box(  
        'box-post-format-audio', 
        __('Select Audio Files', 'teddy'), 
        'ShowCustomPostMetaBoxAudio',
        'post', 
        'normal', 
        'high'); 
		
	//video
	add_meta_box(  
        'box-post-format-video', 
        __('Select Video', 'teddy'), 
        'ShowCustomPostMetaBoxVideo',
        'post', 
        'normal', 
        'high'); 
		
	//standard
	add_meta_box(  
        'box-post-format-0', 
        __('Post Options', 'teddy'), 
        'ShowCustomPostMetaBoxStandard',
        'post', 
        'normal', 
        'high'); 
		
	//page attributes
	add_meta_box(  
        'box-page-attributes', 
        __('Page Attributes', 'teddy'), 
        'ShowCustomPageMetaBoxAttributes',
        'page', 
        'normal', 
        'high'); 
		
	//page options
	add_meta_box(  
        'box-page-options', 
        __('Page Options', 'teddy'), 
        'ShowCustomPageMetaBoxOptions',
        'page', 
        'normal', 
        'high'); 
	
}

add_action('add_meta_boxes', 'AddCustomPostMetaBox');

/*
============================================================================
	*
	* post format metabox
	*
============================================================================	
*/
function ShowCustomPostMetaBoxStandard(){
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" /> ';
	require_once('functions/functions-standard.php');
	
}
function ShowCustomPostMetaBoxGallery(){
	require_once('functions/functions-gallery.php');
}

function ShowCustomPostMetaBoxAudio(){
	require_once('functions/functions-audio.php');
}

function ShowCustomPostMetaBoxVideo(){
	require_once('functions/functions-video.php');
}

function ShowCustomPageMetaBoxAttributes(){
	require_once('functions/functions-page-attributes.php');
}
 
function ShowCustomPageMetaBoxOptions(){
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" /> ';
	require_once('functions/functions-page-options.php');
}

/*
============================================================================
	*
	* style
	*
============================================================================	
*/
function CustomAdminEnqueueScripts(){
	wp_register_style('custom_wp_admin_css', ASSETS_PATH. 'css/adminstyles.css', false, '1.0.0' );
    wp_enqueue_style('custom_wp_admin_css' );
	//wp_enqueue_style('custom_color-picker_css', ASSETS_PATH . 'css/colorpicker.css');
	//wp_enqueue_style('custom_color-picker_css' );
	wp_enqueue_script('jquery-ui-sortable');
	//wp_enqueue_script('color-picker', ASSETS_PATH .'js/colorpicker.js', array('jquery'));
	wp_enqueue_script('jquery-core-custom',ASSETS_PATH. 'js/jquery_core.js',array( 'jquery' ),'1.0.0',true); ?>

    <script type="text/javascript">var ASSETS_PATH = "<?php echo ASSETS_PATH;?>";</script>
<?php }
add_action('admin_enqueue_scripts','CustomAdminEnqueueScripts');

/*
============================================================================
	*
	* load cutom meta
	*
============================================================================	
*/

function CustomMeta($id){
	global $post;
	$meta = get_post_meta($post->ID, $id, true);
	if($id == 'teddy_gallery_selected_images'){
		if($meta == ''){
			echo '<div class="teddy_form_gallery_selected_image_below"></div>';
			echo '<ul class="teddy_form_gallery_selected_images" style="display:none;"></ul>';
		}else{
			echo '<div class="teddy_form_gallery_selected_image_below" style="display:none;"></div>';
			echo '<ul class="teddy_form_gallery_selected_images">';
			foreach($meta as $m){
				$thumb_src_preview = wp_get_attachment_image_src( $m, 'gallery-selected-thumb');
				echo '<li><span class="remove_item_image"></span><img src="'.$thumb_src_preview[0].'" /><input type="hidden" name="teddy_gallery_selected_images[]" value="'.$m.'" /></li>';
				
			}
			
			
			echo '</ul>';
		}
	}else{
		return $meta;
	}
}


/*
============================================================================
	*
	* save post
	*
============================================================================	
*/
function CustomSaveCustomPostMeta($post_id) {  
    global $custom_post_meta_fields, $custom_page_meta_fields,  $post;
 
	if(!isset($_POST['custom_meta_box_nonce'])){
		$post_nonce = '';
	}else{
		$post_nonce = $_POST['custom_meta_box_nonce'];
	}
	
	if (!wp_verify_nonce($post_nonce, basename(__FILE__)))  
        return $post_id;  
		
	
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    
    if ('page' == $_POST['post_type']) {  
        $custom_fields = $custom_page_meta_fields;
		if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }else{
		$custom_fields = $custom_post_meta_fields;
	}
  

	foreach ($custom_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = @$_POST[$field['id']];  
    
	    if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } 
    
	return $post_id;

}  
add_action('save_post', 'CustomSaveCustomPostMeta'); 

?>