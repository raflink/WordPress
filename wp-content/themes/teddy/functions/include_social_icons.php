<?php /*?><?php if(of_get_option('twitter-link')){ ?><a href="<?php echo of_get_option('twitter-link'); ?>" title="Visit Twitter Page"><img src="<?php echo get_template_directory_uri();?>/img/social/twitter.png" alt="Twitter"></a><?php } ?>
<?php if(of_get_option('facebook-link')){ ?><a href="<?php echo of_get_option('facebook-link'); ?>" title="Visit Facebook Page"><img src="<?php echo get_template_directory_uri();?>/img/social/facebook.png" alt="Facebook"></a><?php } ?>
<?php */?>
<?php if(of_get_option('facebook-link')){ ?><a id="social_facebook" class="social_active" href="<?php echo of_get_option('facebook-link'); ?>" title="<?php _e('Visit Facebook page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('twitter-link')){ ?><a id="social_twitter" class="social_active" href="<?php echo of_get_option('twitter-link'); ?>" title="<?php _e('Visit Twitter page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('google-plus-link')){ ?><a id="social_google_plus" class="social_active" href="<?php echo of_get_option('google-plus-link'); ?>" title="<?php _e('Visit Google Plus page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('pinterest-link')){ ?><a id="social_pinterest" class="social_active" href="<?php echo of_get_option('pinterest-link'); ?>" title="<?php _e('Visit Pinterest page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('instagram-link')){ ?><a id="social_instagram" class="social_active" href="<?php echo of_get_option('instagram-link'); ?>" title="<?php _e('Visit Instagram page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('trumblr-link')){ ?><a id="social_trumblr" class="social_active" href="<?php echo of_get_option('trumblr-link'); ?>" title="<?php _e('Visit Tumblr page','teddy'); ?>"><span></span></a><?php } ?>	
	<?php if(of_get_option('youtube-link')){ ?><a id="social_youtube" class="social_active" href="<?php echo of_get_option('youtube-link'); ?>" title="<?php _e('Visit Youtube page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('flickr-link')){ ?><a id="social_flickr" class="social_active" href="<?php echo of_get_option('flickr-link'); ?>" title="<?php _e('Visit Flickr page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('vimeo-link')){ ?><a id="social_vimeo" class="social_active" href="<?php echo of_get_option('vimeo-link'); ?>" title="<?php _e('Visit Vimeo page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('linkedin-link')){ ?><a id="social_linkedin" class="social_active" href="<?php echo of_get_option('linkedin-link'); ?>" title="<?php _e('Visit LinkedIn page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('dribbble-link')){ ?><a id="social_dribbble" class="social_active" href="<?php echo of_get_option('dribbble-link'); ?>" title="<?php _e('Visit Dribbble page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('forst-link')){ ?><a id="social_forst" class="social_active" href="<?php echo of_get_option('forst-link'); ?>" title="<?php _e('Visit Forst page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('github-link')){ ?><a id="social_github" class="social_active" href="<?php echo of_get_option('github-link'); ?>" title="<?php _e('Visit Github page','teddy'); ?>"><span></span></a><?php } ?>
	<?php if(of_get_option('rss-link')){ ?><a id="social_rss" class="social_active" href="<?php echo of_get_option('rss-link'); ?>" title="<?php _e('Rss','teddy'); ?>"><span></span></a><?php } ?>