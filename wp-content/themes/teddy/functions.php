<?php
/*
============================================================================
	*
	* Admin 
	*
============================================================================	
*/

	require_once('admin/index.php');
	define('UX_LOCAL_URL', get_template_directory_uri());
/*
============================================================================
	*
	*  Auto feed
	*
============================================================================	
*/

	add_theme_support( 'automatic-feed-links' );

/*
============================================================================
	*
	*  Add thumbnails 
	*
============================================================================	
*/

	add_theme_support('post-thumbnails');
	if(function_exists('add_theme_support')){
		add_theme_support('post-thumbnails');
	}
	
	add_image_size('gallery-selected-thumb', 160, 110, true); 
	add_image_size('post-list-thumb', 620, 380, true);
	add_image_size('post-gallery-429x380', 429, 380, true);
	add_image_size('post-gallery-190x190', 190, 190, true);
	add_image_size('post-gallery-559x380', 559, 380, true);
	add_image_size('post-gallery-380x190', 380, 190, true);
	add_image_size('post-gallery-940x380', 940, 380, true);
	add_image_size('post-gallery-470x380', 470, 380, true);
	add_image_size('post-head-picture', 940, 280, true);
	set_post_thumbnail_size('gallery-selected-thumb', 160, 110, true);

/*
============================================================================
	*
	* Content width 
	*
============================================================================	
*/

if ( ! isset( $content_width ) ) $content_width = 940;  

/*
============================================================================
	*
	* Theme Title
	*
============================================================================	
*/  

function CustomTeddyTitle( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	$title .= get_bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter('wp_title','CustomTeddyTitle',10, 2 );



/*
============================================================================
	*
	* Load list
	*
============================================================================	
*/  
function CustomPostLists($key=''){
	global $post;
	if($key == 'archive'){
		if(have_posts()) {
			while ( have_posts() ) : the_post();
			CustomPostList();
			endwhile;
		}
	}elseif($key == 'page'){
		$teddy_page_quantity =  get_post_meta(get_the_ID(), 'teddy_page_quantity', true);
		$teddy_page_orderby_checked  =  get_post_meta(get_the_ID(), 'teddy_page_orderby_checked', true);
		$teddy_page_order_checked  =  get_post_meta(get_the_ID(), 'teddy_page_order_checked', true);
		$teddy_page_category_checked   =  get_post_meta(get_the_ID(), 'teddy_page_category_checked', true);
		
		if(!$teddy_page_quantity){
			$posts_per_page = '10';
		}else{
			$posts_per_page = $teddy_page_quantity;
		}
		if($teddy_page_category_checked != '0-1'){
			$cat = $teddy_page_category_checked;
		}else{
			$cat = '-1';
		}
		//Get paged
		if ( is_front_page() ) { 
			$paged = (get_query_var('page')) ? get_query_var('page') : 1;
		} else { 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		}
		$statement = array(
			'post_type' => 'post',
			'paged' => $paged,
			'posts_per_page' => $posts_per_page,
			'orderby' => $teddy_page_orderby_checked,
			'order' => $teddy_page_order_checked,
			'cat' => $cat
		);
		
		query_posts($statement);
		
		if(have_posts()) {
			while ( have_posts() ) : the_post();
			CustomPostList();
			endwhile;
		}
		
	}else{
		if(have_posts()) {
			while ( have_posts() ) : the_post();
			CustomPostList();
			endwhile;
		}
	}
}

function CustomPostList(){
	if(has_post_format('video')){
		get_template_part('mod','video');
	}elseif(has_post_format('audio')){
		get_template_part('mod','audio');
	}elseif(has_post_format('gallery')){
		get_template_part('mod','gallery');
	}else{
		get_template_part('mod','standard');
	}

}

/*
============================================================================
	*
	* Custom meta
	*
============================================================================	
*/  
function ToArabic($number){
	$arabic = array("٠","١","٢","٣","٤","٥","٦","٧","٨","٩");
	$size = strlen($number);
	$num = '';
	for ($i = 0; $i < $size; $i++) {
		$num = $num . $arabic[intval(substr($number, 0 + $i, 1))];
	}
	return $num;
}

function CustomPostShowMeta($key){
	global $post;
	$teddy_post_author = get_post_meta($post->ID, 'teddy_post_author', true);
	$teddy_post_date = get_post_meta($post->ID, 'teddy_post_date', true);
	$teddy_post_tag = get_post_meta($post->ID, 'teddy_post_tag', true);
	
	if($teddy_post_author == 'true'){
		echo '<li class="'.$key.'_author">'. __(' دُوِن بواسطة ','teddy') . get_the_author() .'</li>';
		//echo '<li class="'.$key.'_author">'. __('Posted by ','teddy') . get_the_author() .'</li>';
	}
	
	if($teddy_post_date == 'true'){
		$index1 = strpos(get_the_time('F j Y'), " "); //index of first space
		$index2 = strrpos(get_the_time('F j Y'), " "); //index of last space
		$month = substr(get_the_time('F j Y'), 0, $index1); // month in arabic
		$day = substr(get_the_time('F j Y'), $index1 + 1, $index2 - $index1 - 1); //day in english
		$year = substr(get_the_time('F j Y'), $index2 + 1); //year in english
		echo '<li class="'.$key.'_date">'. $month . "  " . ToArabic($day) . "  " . ToArabic($year) . '</li>';
	}
	
	if($teddy_post_tag == 'true'){
		if(get_the_tag_list() != ''){
			echo '<li class="'.$key.'_cate">';
			if($key == 'post'):echo get_the_tag_list(__('Tags: ','teddy'),' ','');
			elseif($key == 'gallery'):echo get_the_tag_list('',' ','');
			endif;
			echo '</li>';
		}
	}
	
	
}

/*
============================================================================
	*
	* Load head picture
	*
============================================================================	
*/ 
function CustomPostHeadPicture(){
	global $post;
	$teddy_post_featured = get_post_meta($post->ID, 'teddy_post_featured', true);
	
	if($teddy_post_featured == 'true'){
		$image_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'post-head-picture'); 
		if(has_post_thumbnail()){
			echo '<div id="head-picture"><img src="'.$image_thumbnail[0].'" title="'.get_the_title().'"></div>';
		}
	}
}

/*
============================================================================
	*
	* Custom siderbar
	*
============================================================================	
*/ 
$sidebar_array = array(
	array('id' => 'sidebar_default', 'name' => __('default','teddy')),
	array('id' => 'sidebar_1', 'name' => __('sidebar_1','teddy')),
	array('id' => 'sidebar_2', 'name' => __('sidebar_2','teddy')),
	array('id' => 'sidebar_3', 'name' => __('sidebar_3','teddy')),
	array('id' => 'sidebar_4', 'name' => __('sidebar_4','teddy')),
	array('id' => 'sidebar_5', 'name' => __('sidebar_5','teddy')),
	array('id' => 'sidebar_6', 'name' => __('sidebar_6','teddy')),
	array('id' => 'sidebar_7', 'name' => __('sidebar_7','teddy')),
	array('id' => 'sidebar_8', 'name' => __('sidebar_8','teddy')),
	array('id' => 'sidebar_9', 'name' => __('sidebar_9','teddy')),
	array('id' => 'sidebar_10', 'name' => __('sidebar_10','teddy')),

);

foreach($sidebar_array as $num => $sidebar){
	register_sidebar(array(
		'name' => $sidebar['name'],
		'id' => 'teddy-'.$sidebar['id'],
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'class' => ''
	));
	
}

register_sidebar(array(
	'name' => __('Teddy Footer','teddy'),
	'id' => 'teddy-footer',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	'before_widget' => '<li id="%1$s" class="widget-container %2$s span3">',
	'after_widget' => '</li>',
	'class' => ''
));

/*
============================================================================
	*
	* pagenation
	*
============================================================================	
*/ 
function kriesi_pagination($pages = '', $range = 3)
{  
     $showitems = ($range * 2)+1;  

     //global $paged;
     //if(empty($paged)) $paged = 1;
	 
	 if (is_front_page()) {
		 if(get_post_type()){
			 global $paged;
			 if(empty($paged)) $paged = 1;
		 }else{
			 $paged = (get_query_var('page')) ? get_query_var('page') : 1;
		 }
	 }else{
		 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	 }

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."' class='first'>&laquo;</a>";
        
		 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='pre'>".__('PREVIOUS','ux')."</a>";
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ( $paged < $pages && $showitems < $pages ) echo "<a href='".get_pagenum_link($paged + 1)."' class='next'>".__('NEXT','ux')."</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."' class='last'>&raquo;</a>";
         echo "</div>\n";
     }
}
/*
============================================================================
	*
	* Get youtube/vimeo ID
	*
============================================================================	
*/ 

function get_you_tube_id($url)
{
	preg_match('#http://w?w?w?.?youtube.com/watch\?v=([A-Za-z0-9\-_]+)#s', $url, $matches);
	return $matches[1];
}
function get_vimeo_id($url)
{
	$matches = parse_url($url);
	$matches = str_replace("/","",$matches['path']);
	return $matches;

}
/*
============================================================================
	*
	* Cutom menu
	*
============================================================================	
*/ 
register_nav_menu( 'primary', 'Primary Menu' );

/*
============================================================================
	*
	* Show BgSlider
	*
============================================================================	
*/ 
function CustomShowBgSlider($id){ 
	
	$timerDelay = 4000;
	$effectTime = 2000;
	
	$teddy_bgslider_img = get_post_meta($id, 'teddy_bgslider_img', true);
	$teddy_bgslider_mode_checked = get_post_meta($id, 'teddy_bgslider_mode_checked', true);
	$teddy_bgslider_effect_checked = get_post_meta($id, 'teddy_bgslider_effect_checked', true);
	$teddy_bgslider_speed_checked = get_post_meta($id, 'teddy_bgslider_speed_checked', true);
	
	if($teddy_bgslider_speed_checked == 'slow'){
		$timerDelay = 4000;
		$effectTime = 2000;
	}elseif($teddy_bgslider_speed_checked == 'fast'){
		$timerDelay = 3000;
		$effectTime = 1000;
	}

?>
	<?php if(count($teddy_bgslider_img) != 0): ?>
    <div id="bs0" class="backslider">
        <ul class="bs-slides">
            <?php foreach($teddy_bgslider_img as $num => $bgsliderimg): ?>
            <li><img src="<?php echo $bgsliderimg; ?>"/></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#bs0').backslider({
				photoSource: 'none',
				mode:'<?php echo $teddy_bgslider_mode_checked; ?>',
				effect:'<?php echo $teddy_bgslider_effect_checked; ?>',
				timerDelay: <?php echo $timerDelay; ?>,
				effectTime: <?php echo $effectTime; ?>
			});
		});
	</script>
    <?php endif;?>
<?php
  
}


/*
============================================================================
	*
	*Replaces [...]
	*
============================================================================	
*/ 
function twentyten_continue_reading_link() {
	return '';
}
function twentyten_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyten_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );
/*
============================================================================
	*
	* handle more...
	*
============================================================================	
*/ 

function CustomStrCut($str,$length)
{
	$str = trim($str);
	$string = "";
	if(strlen($str) > $length)
	{
		for($i = 0 ; $i<$length ; $i++)
		{
			if(ord($str) > 127)
			{
				$string .= $str[$i] . $str[$i+1] . $str[$i+2];
				$i = $i + 2;
			}
			else
			{
				$string .= $str[$i];
			}
		}
		$string .= " ...";
		return $string;
	}
	return $str;
}

/*
============================================================================
	*
	* Hook Theme OPTIONS
	*
============================================================================	
*/

if ( !function_exists( 'optionsframework_init' ) ) {

	/* Set the file path based on whether we're in a child theme or parent theme */

	if ( get_stylesheet_directory() == get_template_directory() ) {
		define('OPTIONS_FRAMEWORK_URL', get_template_directory() . '/functions/option/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/functions/option/');
	} else {
		define('OPTIONS_FRAMEWORK_URL', get_stylesheet_directory() . '/functions/option/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/functions/option/');
	}

	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');
}


/*
============================================================================
	*
	* Define COMMENT
	*
============================================================================	
*/
function idi_cust_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
  	<li class="commlist-unit">
		<div class="avatar"></div><!--END avatar--> 
		<div class="comm-u-wrap">	
		<div class="comment">
			<?php comment_text() ?>
		</div><!--END comment-->
		<div class="comment-meta">
		 	<span class="comment-author"><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></span>
			<span class="date"><?php echo human_time_diff(get_comment_time('U'), current_time('timestamp'));  _e(" ago","ux"); ?></span>
			
			<span class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text'=>__('Reply','ux'),'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>		
		</div><!--END comment-mate--> 
		</div>
<?php if ($comment->comment_approved == '0') : ?>
<p><em><?php _e('Your comment is awaiting moderation','ux'); ?>.</em></p>
<?php endif; ?>				
<?php 
}
/*
============================================================================
	
// Adds lightbox called tag to all linked image files/////////

============================================================================	
*/
add_filter('the_content', 'addlightboxrel_replace', 12);
add_filter('get_comment_text', 'addlightboxrel_replace');
add_filter('wp_get_attachment_image', 'addlightboxrel_replace');
function addlightboxrel_replace ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1 class="lightbox" href=$2$3.$4$5 rel="post['.$post->ID.']"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

/*
============================================================================
	*
	* Hook widget / Shortcode
	*
============================================================================	
*/
require_once locate_template('/functions/widget-recent-tweets.php');
require_once locate_template('/functions/widget-recent-comments.php');
require_once locate_template('/functions/widget-contact-form.php');
require_once locate_template('/functions/shortcodes.php');
require_once locate_template('/functions/shortcodeui/tinymce.loader.php');

/*
============================================================================
	*
	* Custom js css
	*
============================================================================	
*/  
function CustomEnqueueScripts(){
	
	$lightboxskin = of_get_option('lightbox-skin');
	if(!$lightboxskin){ $lightboxskin = 'default'; }
	
	wp_register_style('teddy-google-font-Open+Sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic');
    wp_enqueue_style('teddy-google-font-Open+Sans');

	wp_register_style('teddy-bootstrap', UX_LOCAL_URL. '/css/bootstrap.css');
    wp_enqueue_style('teddy-bootstrap');
	
	wp_register_style('teddy-lightbox', UX_LOCAL_URL. '/js/lightbox/themes/'.$lightboxskin.'/jquery.lightbox.css');
    wp_enqueue_style('teddy-lightbox');
	
	wp_register_style('teddy-jscrollpane', UX_LOCAL_URL. '/css/jquery.jscrollpane.css');
    wp_enqueue_style('teddy-jscrollpane');
	
	wp_register_style('jquery-tooltip', UX_LOCAL_URL. '/css/jquery.tooltip.css');
    wp_enqueue_style('jquery-tooltip');
	
	wp_register_style('jquery-backslider', UX_LOCAL_URL. '/css/backslider.css');
    wp_enqueue_style('jquery-backslider');
	
	wp_register_style('teddy-style', UX_LOCAL_URL. '/style.css');
    wp_enqueue_style('teddy-style');
	
	wp_register_style('teddy-bootstrap-responsive', UX_LOCAL_URL. '/css/bootstrap-responsive.css');
    wp_enqueue_style('teddy-bootstrap-responsive');
	
	wp_register_style('teddy-responsive', UX_LOCAL_URL. '/css/responsive.css');
    wp_enqueue_style('teddy-responsive');
	
	wp_register_style('teddy-custom-style', UX_LOCAL_URL. '/functions/include_custom_style.php');
	wp_enqueue_style('teddy-custom-style');
	
	wp_register_style('teddy-retina', UX_LOCAL_URL. '/css/retina.css', array(), '1.2', 'only screen and (-webkit-min-device-pixel-ratio: 2)');
	wp_enqueue_style('teddy-retina');
	
	wp_register_script('jquery-bootstrap',UX_LOCAL_URL. '/js/bootstrap.js',array('jquery'),'2.3.1',true);
	wp_enqueue_script('jquery-bootstrap');
	
	wp_register_script('jquery-lightbox',UX_LOCAL_URL. '/js/lightbox/jquery.lightbox.min.js',array('jquery'),'1.7.1',true);
	wp_enqueue_script('jquery-lightbox');
	
	wp_register_script('jquery-easing',UX_LOCAL_URL. '/js/jquery.easing.1.3.js',array('jquery'),'1.3',true);
	wp_enqueue_script('jquery-easing');
	
	wp_register_script('jquery-backslider',UX_LOCAL_URL. '/js/jquery.backslider.min.js',array('jquery'),'1.5',true);
	wp_enqueue_script('jquery-backslider');
	
	wp_register_script('jquery-jscrollpanen',UX_LOCAL_URL. '/js/jquery.jscrollpane.min.js',array('jquery'),'2.0',true);
	wp_enqueue_script('jquery-jscrollpanen');
	
	wp_enqueue_script('jquery-ui-tooltip');
	
	wp_register_script('jquery-jplayer',UX_LOCAL_URL. '/js/jquery.jplayer.min.js',array('jquery'),'2.2',true);
	wp_enqueue_script('jquery-jplayer');
	
	wp_register_script('jquery-nicescroll',UX_LOCAL_URL. '/js/jquery.nicescroll.min.js',array('jquery'),'3.2',true);
	wp_enqueue_script('jquery-nicescroll');
	
	if(is_single()){
		if(has_post_format('gallery')){
			wp_register_script('jquery-isotope',UX_LOCAL_URL. '/js/jquery.isotope.min.js',array('jquery'),'3.1.5',true);
			wp_enqueue_script('jquery-isotope');
		}
		wp_register_script( 'jquery-comments-ajax', UX_LOCAL_URL.'/js/comments-ajax.js', 'jquery', "1.3", true);
		wp_enqueue_script('jquery-comments-ajax');
	}
	
	if(is_page()){
	wp_register_script( 'jquery-infinitescroll', UX_LOCAL_URL.'/js/jquery.infinitescroll.js', 'jquery',"2.0", true );
	wp_enqueue_script('jquery-infinitescroll');
	
	wp_register_script( 'jquery-infinitescroll-manual', UX_LOCAL_URL.'/js/manual-trigger.js', 'jquery', "1.0", true);
	wp_enqueue_script('jquery-infinitescroll-manual');
	}
	
	wp_register_script('jquery-hoverdir',UX_LOCAL_URL. '/js/jquery.hoverdir.js',array('jquery'),'1.0',true);
	wp_enqueue_script('jquery-hoverdir');
	
	wp_register_script('jquery-custom-main',UX_LOCAL_URL. '/js/main.js',array('jquery'),'1.0',true);
	wp_enqueue_script('jquery-custom-main');
	
	
	?>
    <script type="text/javascript">var JS_PATH = "<?php echo UX_LOCAL_URL.'/js';?>";</script>
<?php	
}

add_action( 'wp_enqueue_scripts', 'CustomEnqueueScripts' );

add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );
function my_mce_before_init( $settings ) {
    $style_formats = array(
        array(
        	'title' => 'QUOTE',
        	'inline' => 'span',
        	'classes' => 'quote'
        ),
        array(
        	'title' => 'QUESTION',
        	'inline' => 'span',
        	'classes' => 'question'
        )
    );
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}

add_action( 'admin_init', 'add_my_editor_style' );

function add_my_editor_style() {
	add_editor_style();
}

// add category nicenames in body and post class
function category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
        $classes[] = $category->category_nicename;
        return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

?>