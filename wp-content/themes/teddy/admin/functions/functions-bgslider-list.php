<?php

	$sliders = get_posts('numberposts=-1&post_type=bgslider');
	
?>
<div class="wrap">
	<div class="bs-icon-layers"></div>
	<h2>
		<?php _e('BgSlider sliders', 'teddy') ?>
		<a href="?page=bgslider_add_new" class="add-new-h2"><?php _e('Add New', 'teddy') ?></a>
	</h2>

	<div class="bs-box bs-slider-list">
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td><?php _e('Name', 'teddy') ?></td>
					<td><?php _e('Actions', 'teddy') ?></td>
					<td><?php _e('Created', 'teddy') ?></td>
					<td><?php _e('Modified', 'teddy') ?></td>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($sliders)) : ?>
				<?php global $post; foreach($sliders as $num => $post) : setup_postdata($post) ?>
				<?php $name = empty($post->post_title) ? 'Unnamed' : $post->post_title; ?>
				<tr>
					<td><?php echo $num+1; ?></td>
					<td><a href="?page=bgslider&action=edit&post_bgslider=<?php echo $post->post_name; ?>"><?php echo $name ?></a></td>
					<td>
						<a href="?page=bgslider&action=edit&post_bgslider=<?php echo $post->post_name; ?>"><?php _e('Edit', 'teddy') ?></a> |
						<a href="?page=bgslider&action=remove&&id=<?php the_ID(); ?>" class="remove"><?php _e('Remove', 'teddy') ?></a>
					</td>
					<td><?php the_time('M. d. Y.'); ?></td>
					<td><?php the_modified_time('M. d. Y.'); ?></td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>
				<?php if(empty($sliders)) : ?>
				<tr>
					<td colspan="5"><?php _e("You didn't create a slider yet.", "teddy") ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>