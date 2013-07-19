<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css"/>
  	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css"/>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	
    <?php /* Track Code Google Analytics has been provided, we'll use that. */
	if(of_get_option('analysis')) {echo of_get_option('analysis');} else {} 
	?>
	
	<!-- IE hack
	================================================== -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--[if lte IE 8 ]>
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/ie.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ie.js"></script>
	<![endif]-->
	
	<!--[if lte IE 7]>
	=<div style="width: 100%;" class="messagebox_orange">Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
	<![endif]-->
	
	<!-- Favicons
	================================================== -->
	<?php if (of_get_option('favicon')) { ?>
	<link rel="shortcut icon" href="<?php echo of_get_option('favicon'); ?>">
	<?php } else { ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<?php } ?>
	<?php if (of_get_option('favicon_mobile')) { ?>
	<link rel="apple-touch-icon-precomposed" href="<?php echo of_get_option('favicon_mobile'); ?>">
	<?php } else { ?>
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png">
	<?php } ?>
    
    <noscript>
		<style>
            #socialicons>a span { top: 0px;left: -100%; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out; transition: all 0.3s ease-in-out; }
            #socialicons>ahover div{ left: 0px; }
        </style>
    </noscript>
		
	<?php 
	$font_menu = of_get_option('menu-font');
	$font_menu_gg = $font_menu['face'];
	if( $font_menu_gg && $font_menu_gg != 'arial' && $font_menu_gg != 'verdana'  && $font_menu_gg != 'trebuchet' && $font_menu_gg != 'georgia' && $font_menu_gg != 'times' && $font_menu_gg != 'tahoma' &&  $font_menu_gg != 'Open Sans' ){ ?>
	<link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","+", $font_menu_gg); ?>' rel='stylesheet' type='text/css'>
	<?php } ?>
	
	<?php 
	$font_menu = of_get_option('title-font');
	$font_menu_gg = $font_menu['face'];
	if( $font_menu_gg && $font_menu_gg != 'arial' && $font_menu_gg != 'verdana'  && $font_menu_gg != 'trebuchet' && $font_menu_gg != 'georgia' && $font_menu_gg != 'times' && $font_menu_gg != 'tahoma' &&  $font_menu_gg != 'Open Sans' ){ ?>
	<link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","+", $font_menu_gg); ?>' rel='stylesheet' type='text/css'>
	<?php } ?>
	
	<?php 
	$font_menu = of_get_option('main-font');
	$font_menu_gg = $font_menu['face'];
	if( $font_menu_gg && $font_menu_gg != 'arial' && $font_menu_gg != 'verdana'  && $font_menu_gg != 'trebuchet' && $font_menu_gg != 'georgia' && $font_menu_gg != 'times' && $font_menu_gg != 'tahoma' &&  $font_menu_gg != 'Open Sans' ){ ?>
	<link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","+", $font_menu_gg); ?>' rel='stylesheet' type='text/css'>
	<?php } ?>
	
	<?php 
	$font_menu = of_get_option('logo-font');
	$font_menu_gg = $font_menu['face'];
	if( $font_menu_gg && $font_menu_gg != 'arial' && $font_menu_gg != 'verdana'  && $font_menu_gg != 'trebuchet' && $font_menu_gg != 'georgia' && $font_menu_gg != 'times' && $font_menu_gg != 'tahoma' &&  $font_menu_gg != 'Open Sans' ){ ?>
	<link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","+", $font_menu_gg); ?>' rel='stylesheet' type='text/css'>
	<?php } ?>
	
	<?php wp_head(); ?>

	
  </head>
  <body <?php body_class(); ?>>
  	
    <div id="jquery_jplayer" class="jp-jplayer"></div>
    
	<?php 
	if(is_404()){
		$teddy_page_background_slider_checked = '';
	}else{
		$teddy_page_background_slider_checked = get_post_meta(get_the_ID(), 'teddy_page_background_slider_checked', true);
	}
	global $wpdb;
	$post_row = $wpdb->get_row("SELECT * FROM $wpdb->postmeta WHERE `meta_key` LIKE 'teddy_bgslider_default_checked' AND `meta_value` LIKE 'yes'");
	?>
    
    <div id="wrap">	
	<!----------
	    Header
	----------->
		<?php
		if(is_page()){
			if($teddy_page_background_slider_checked != 'none'){
				CustomShowBgSlider($teddy_page_background_slider_checked);
			}else{
				if(count($post_row) != 0){
					$post_id = $post_row->post_id;
					CustomShowBgSlider($post_id);
				}
			}
		}else{
			if(count($post_row) != 0){
				$post_id = $post_row->post_id;
				CustomShowBgSlider($post_id);
			}
		}
		?>
		<?php if (of_get_option('top-bar-fixed') == '1' ){echo "<div id='topbar_fixed'>"; } ?>
        <header id="header_wrap" class="clearfix">	
			<div id="header_inn" class="container">					
				<div id="headerinn_main" class="">
                    <!--<?php count($post_row); ?>
                    <nav id="navi" class="">
						<?php
							
						wp_nav_menu(array( 
							'theme_location' => 'primary', 
							'container_id' => 'navi_wrap',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
							) 
						);
						
						?>
                        <!--End #navi_wrap-->
					</nav>-->
                   
					<div id="socialicons" class="hidden-phone">
                    <?php if (of_get_option('search-bar')=='1') { ?>
						<a href="#" title="<?php _e('Search','teddy'); ?>" id="top_search" class="social_active"><span></span></a>
						<span id="top_search_box">
                        <form action="<?php echo home_url();?>" method="get">
                            <input type="text" name="s" class="top_search_text" value="" placeholder="<?php _e("Search","teddy");?>" />
                        </form>
                        </span>
					<?php } ?>
                    <?php if (of_get_option('social-icon')=='1') { ?>
						<?php include locate_template('/functions/include_social_icons.php'); ?>
					<?php }?>

					</div>
                    
                    <!--End #socialicons-->
				</div><!--End #headerinn_main-->
                
                <!--#logo--> 
                <div id="logo"><?php if(of_get_option('textlogo')) { ?><a class="logo-text" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
				<?php } else { ?>
				<a class="logo_normal" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php if(of_get_option('logo_custom')) { echo of_get_option('logo_custom' ); } else { echo get_template_directory_uri(); echo '/img/logo.png'; } ?>" alt="Logo"></a>
				<a class="logo_retina" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php if(of_get_option('logo_retina_custom')) { echo of_get_option('logo_retina_custom' );  } else if(of_get_option('logo_custom')) { echo of_get_option('logo_custom' ); } else { echo get_template_directory_uri(); echo '/img/logo_retina.png'; } ?>" alt="<?php bloginfo('name'); ?>"  width="<?php if(of_get_option('logo_width')) { echo of_get_option('logo_width'); } else { echo '125'; } ?>"></a>
				<?php } ?>
				</div><!--End #logo-->
                
			</div>
		</header>
		<!--End Header-->
		<?php if (of_get_option('top-bar-fixed') == '1' ){echo "</div>"; } ?>