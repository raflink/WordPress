<?php
include_once('../../../../../../wp-load.php');

$paged = (isset($_POST['page']))? $_POST['page'] : 1; 
if($paged == ''){ $paged = 1; }

$statement = array(
	'post_type' => 'attachment',
	'post_mime_type' =>'image',
	'post_status' => 'inherit',
	'posts_per_page' => '12',
	'paged' => $paged
);
	
$media_query = new WP_Query($statement);

if(is_user_logged_in()){ ?>

<ul>

<?php

	foreach($media_query->posts as $image){
		$thumb_src = wp_get_attachment_image_src( $image->ID, 'thumbnail');
		$thumb_src_preview = wp_get_attachment_image_src( $image->ID, 'gallery-selected-thumb');
		echo '<li class="selectimage"><img src="' . $thumb_src[0] .'" title="' . $image->post_title . '" attid="' . $image->ID . '" rel="' . $thumb_src_preview[0] . '"/></li>'; 
	
	}

}?>
</ul>
<div class="clear"></div>
