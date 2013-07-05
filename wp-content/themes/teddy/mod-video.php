<?php
$teddy_embeded_code = get_post_meta(get_the_ID(), 'teddy_embeded_code', true);
$teddy_m4v_file = get_post_meta(get_the_ID(), 'teddy_m4v_file', true);
$teddy_ogv_file = get_post_meta(get_the_ID(), 'teddy_ogv_file', true);
if($teddy_m4v_file != ''){
	$teddy__file = $teddy_m4v_file;
}else{
	$teddy__file = $teddy_ogv_file;
}

if($teddy_embeded_code != ''):
?>
            <!-- VIdeo -->
            <section class="list_item container video_wrap" >
                <div class="videoWrapper">
                    <?php if ( ereg ("youtube", $teddy_embeded_code) && !(ereg("iframe", $teddy_embeded_code))) : ?>
                        <iframe src="http://www.youtube.com/embed/<?php echo get_you_tube_id($teddy_embeded_code);?>?rel=0&controls=1&showinfo=0&theme=light&autoplay=0&wmode=transparent"></iframe>
                    <?php elseif ( ereg ("vimeo", $teddy_embeded_code) && !(ereg("iframe", $teddy_embeded_code))) : ?>
                        <iframe title="Vimeo video player" src="http://player.vimeo.com/video/<?php echo get_vimeo_id($teddy_embeded_code); ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" height="auto" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    <?php else :?>
                        <?php echo $teddy_embeded_code; ?>
                    <?php endif; ?>
                </div><!--End .video_wrap-->	
            </section>

<?php else: ?>

            <!-- VIdeo -->
            <section class="list_item container video_wrap" >
                <div class="videoWrapper">
                    <iframe title="Vimeo video player" src="<?php echo $teddy__file; ?>" width="100%" height="auto" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div><!--End .video_wrap-->	
            </section>
            
<?php endif; ?>