<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {	
	$social_like = array("heart" => __('Heart','ux'),"facebook" => "Facebook","twitter" => "Twitter","googleplus" => "Google Plus");
	
		// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);
	
	 // numbers
     $numbers = array(
          '0.1' => '0.1',
          '0.2' => '0.2',
          '0.3' => '0.3',
          '0.4' => '0.4',
          '0.5' => '0.5',
          '0.6' => '0.6',
          '0.7' => '0.7',
          '0.8' => '0.8',
          '0.9' => '0.9',
          '1.0' => '1.0'
     );
     
	 // lightbox skin
     $lightbox_skin = array(
          'default' => 'default',
          'carbono' => 'carbono',
          'classic' => 'classic',
          'classic-dark' => 'classic-dark',
          'evolution' => 'evolution',
          'evolution-dark' => 'evolution-dark',
          'facebook' => 'facebook',
          'minimalist' => 'minimalist',
          'minimalist-dark' => 'minimalist-dark',
          'white-green' => 'white-green'
     );
	 
     // Skin
     $skin = array(
          'light' => 'Light',
          'dark' => 'Dark',
          'transparent'  => 'Transparent'
     );
     
     $skin_form = array(
          'light' => 'Under Light Backgorund',
          'dark' => 'Under Dark Backgorund'
     );
	
	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '10','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);
	// Typography general Options
	$typography_general = array(
		'sizes' => array( '10','11','12','13','14','15','16','17','18','19','20','22','24','26','28','30','32','36','38','40','46','50','56','60','66'),
		'faces' => false,
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold','italic'=>'Italic' ),
		'color' => false
	);
	// Typography remove color
	$typography_nocolor = array(
		'sizes' => array( '10','11','12','13','14','15','16','17','18','19','20','22','24','26','28','30','32','36','38','40','46','50','56','60','66'),
		'faces' => array(
			'arial'     => 'Arial',
			'Alike'	=> 'Alike',			
			'Amarante'		=> 'Amarante',		
			'Alegreya SC'	=> 'Alegreya SC',
			'Almendra SC'	=> 'Almendra SC',
			'Alfa Slab One' =>'Alfa Slab One',
			'Aguafina Script'	=> 'Aguafina Script',
			'Bitter'	=> 'Bitter',
			'Balthazar'		=> 'Balthazar',
			'Bonbon'	=> 'Bonbon',
			'Butcherman'	=> 'Butcherman',
			'Coda'		=> 'Coda',
			'Changa One'=> 'Changa One',
			'Codystar'	=> 'Codystar',
			'Capriola'	=> 'Capriola',
			'Courgette'	=> 'Courgette',
			'Cagliostro'=> 'Cagliostro',
			'Creepster'	=> 'Creepster',
			'Contrail One'	=> 'Contrail One',
			'Ceviche One'	=> 'Ceviche One',
			'Cedarville Cursive'=> 'Cedarville Cursive',
			'Dosis'		=> 'Dosis',
			'Duru Sans'		=> 'Duru Sans',
			'Diplomata SC'	=> 'Diplomata SC',
			'Eater'	=> 'Eater',
			'Esteban'		=> 'Esteban',
			'Eagle Lake'	=> 'Eagle Lake',
			'Electrolize'	=> 'Electrolize',
			'Enriqueta'		=> 'Enriqueta',
			'Emblema One'	=> 'Emblema One',
			'Engagement'	=>'Engagement',
			'Felipa'	=> 'Felipa',
			'Federant'=>'Federant',
			'Fascinate Inline' =>'Fascinate Inline',
			'georgia'   => 'Georgia',
			'Galindo'	=> 'Galindo',
			'Gudea'		=> 'Gudea',
			'Give You Glory'=> 'Give You Glory',
			'Gochi Hand'	=> 'Gochi Hand',
			'Glegoo'		=> 'Glegoo',
			'helvetica' => 'Helvetica*',
			'Happy Monkey'	=> 'Happy Monkey',
			'Headland One'	=> 'Headland One',
			'Inder'	=> 'Inder',
			'IM Fell DW Pica'=>'IM Fell DW Pica',
			'IM Fell French Canon SC'=>'IM Fell French Canon SC',
			'Jolly Lodger'	=> 'Jolly Lodger',
			'Jockey One'	=> 'Jockey One',
			'Jim Nightshade'=> 'Jim Nightshade',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Karla'	=> 'Karla',
			'Kristi'=> 'Kristi',
			'Knewave'=>'Knewave',
			'Lemon'	=> 'Lemon',
			'Lustria'	=> 'Lustria',
			'Life Savers'	=> 'Life Savers',
			'Londrina Outline'	=> 'Londrina Outline',
			'Marck Script'	=> 'Marck Script',
			'Metal Mania'=> 'Metal Mania',
			'Metamorphous'	=> 'Metamorphous',
			'Mr Dafoe'	=> 'Mr Dafoe',
			'McLaren'	=> 'McLaren',
			'Meie Script'	=> 'Meie Script',
			'Metrophobic'	=> 'Metrophobic',		
			'Niconne'	=> 'Niconne',
			'Noticia Text' => 'Noticia Text',
			'Numans'	=> 'Numans',
			'Original Surfer'	=> 'Original Surfer',
			'Oregano'	=> 'Oregano',
			'Oranienbaum'	=> 'Oranienbaum',
			'Open Sans'	=> 'Open Sans',
			'Oswald'	=> 'Oswald',
			'Playfair Display' => 'Playfair Display',
			'Playball'	=> 'Playball',
			'Passion One'	=> 'Passion One',
			'palatino'  => 'Palatino',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'Port Lligat Slab'	=> 'Port Lligat Slab',
			'Quando' => 'Quando',
			'Qwigley'=>'Qwigley',
			'Questrial'=>'Questrial',
			'Quicksand'=>'Quicksand',
			'Quattrocento'=>'Quattrocento',
			'Russo One'	=> 'Russo One',
			'Ruthie'	=> 'Ruthie',
			'Rye'	=> 'Rye',
			'Racing Sans One'	=> 'Racing Sans One',
			'Romanesco'	=> 'Romanesco',
			'Stoke'	=> 'Stoke',
			'Skranji'   => 'Skranji',
			'Signika Negative' => 'Signika Negative',
			'Stint Ultra Expanded'=> 'Stint Ultra Expanded',
			'Stint Ultra Condensed'=> 'Stint Ultra Condensed',
			'Spirax'	=> 'Spirax',
			'Source Sans Pro'=> 'Source Sans Pro',
			'trebuchet' => 'Trebuchet',	
			'times'     => 'Times New Roman',
			'tahoma'    => 'Tahoma, Geneva',
			'Ubuntu'	=> 'Ubuntu',
			'Ubuntu Condensed' => 'Ubuntu Condensed',
			'verdana'   => 'Verdana, Geneva',
			'VT323'	=> 'VT323',
			'Varela Round' => 'Varela Round',
			'Waiting for the Sunrise'=>'Waiting for the Sunrise'
		),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold','italic'=>'Italic' ),
		'color' => false
	);
	// Typography  only fontface
	$typography_face = array(
		'sizes' => false,
		'faces' => array(
			'arial'     => 'Arial',
			'Alike'	=> 'Alike',			
			'Amarante'		=> 'Amarante',		
			'Alegreya SC'	=> 'Alegreya SC',
			'Almendra SC'	=> 'Almendra SC',
			'Alfa Slab One' =>'Alfa Slab One',
			'Aguafina Script'	=> 'Aguafina Script',
			'Bitter'	=> 'Bitter',
			'Balthazar'		=> 'Balthazar',
			'Bonbon'	=> 'Bonbon',
			'Butcherman'	=> 'Butcherman',
			'Coda'		=> 'Coda',
			'Changa One'=> 'Changa One',
			'Codystar'	=> 'Codystar',
			'Capriola'	=> 'Capriola',
			'Courgette'	=> 'Courgette',
			'Cagliostro'=> 'Cagliostro',
			'Creepster'	=> 'Creepster',
			'Contrail One'	=> 'Contrail One',
			'Ceviche One'	=> 'Ceviche One',
			'Cedarville Cursive'=> 'Cedarville Cursive',
			'Dosis'		=> 'Dosis',
			'Duru Sans'		=> 'Duru Sans',
			'Diplomata SC'	=> 'Diplomata SC',
			'Eater'	=> 'Eater',
			'Esteban'		=> 'Esteban',
			'Eagle Lake'	=> 'Eagle Lake',
			'Electrolize'	=> 'Electrolize',
			'Enriqueta'		=> 'Enriqueta',
			'Emblema One'	=> 'Emblema One',
			'Engagement'	=>'Engagement',
			'Felipa'	=> 'Felipa',
			'Federant'=>'Federant',
			'Fascinate Inline' =>'Fascinate Inline',
			'georgia'   => 'Georgia',
			'Galindo'	=> 'Galindo',
			'Gudea'		=> 'Gudea',
			'Give You Glory'=> 'Give You Glory',
			'Gochi Hand'	=> 'Gochi Hand',
			'Glegoo'		=> 'Glegoo',
			'helvetica' => 'Helvetica*',
			'Happy Monkey'	=> 'Happy Monkey',
			'Headland One'	=> 'Headland One',
			'Inder'	=> 'Inder',
			'IM Fell DW Pica'=>'IM Fell DW Pica',
			'IM Fell French Canon SC'=>'IM Fell French Canon SC',
			'Jolly Lodger'	=> 'Jolly Lodger',
			'Jockey One'	=> 'Jockey One',
			'Jim Nightshade'=> 'Jim Nightshade',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Karla'	=> 'Karla',
			'Kristi'=> 'Kristi',
			'Knewave'=>'Knewave',
			'Lemon'	=> 'Lemon',
			'Lustria'	=> 'Lustria',
			'Life Savers'	=> 'Life Savers',
			'Londrina Outline'	=> 'Londrina Outline',
			'Marck Script'	=> 'Marck Script',
			'Metal Mania'=> 'Metal Mania',
			'Metamorphous'	=> 'Metamorphous',
			'Mr Dafoe'	=> 'Mr Dafoe',
			'McLaren'	=> 'McLaren',
			'Meie Script'	=> 'Meie Script',
			'Metrophobic'	=> 'Metrophobic',		
			'Niconne'	=> 'Niconne',
			'Noticia Text' => 'Noticia Text',
			'Numans'	=> 'Numans',
			'Original Surfer'	=> 'Original Surfer',
			'Oregano'	=> 'Oregano',
			'Oranienbaum'	=> 'Oranienbaum',
			'Open Sans'	=> 'Open Sans',
			'Oswald'	=> 'Oswald',
			'Playfair Display' => 'Playfair Display',
			'Playball'	=> 'Playball',
			'Passion One'	=> 'Passion One',
			'palatino'  => 'Palatino',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'Port Lligat Slab'	=> 'Port Lligat Slab',
			'Quando' => 'Quando',
			'Qwigley'=>'Qwigley',
			'Questrial'=>'Questrial',
			'Quicksand'=>'Quicksand',
			'Quattrocento'=>'Quattrocento',
			'Russo One'	=> 'Russo One',
			'Ruthie'	=> 'Ruthie',
			'Rye'	=> 'Rye',
			'Racing Sans One'	=> 'Racing Sans One',
			'Romanesco'	=> 'Romanesco',
			'Stoke'	=> 'Stoke',
			'Skranji'   => 'Skranji',
			'Signika Negative' => 'Signika Negative',
			'Stint Ultra Expanded'=> 'Stint Ultra Expanded',
			'Stint Ultra Condensed'=> 'Stint Ultra Condensed',
			'Spirax'	=> 'Spirax',
			'Source Sans Pro'=> 'Source Sans Pro',
			'trebuchet' => 'Trebuchet',	
			'times'     => 'Times New Roman',
			'tahoma'    => 'Tahoma, Geneva',
			'Ubuntu'	=> 'Ubuntu',
			'Ubuntu Condensed' => 'Ubuntu Condensed',
			'verdana'   => 'Verdana, Geneva',
			'VT323'	=> 'VT323',
			'Varela Round' => 'Varela Round',
			'Waiting for the Sunrise'=>'Waiting for the Sunrise'
		),
		'styles' => false,
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$layoutThumbPath =  get_template_directory_uri() . '/functions/option/images/';
	
	$options = array();
	
	///////////////////
	//////General/////
	///////////////////	
	
	$options[] = array( "name" => __("General","ux"),
						"type" => "heading");
													

	$options[] = array( "name" => "",
						"desc" => __("Header","ux"),
						"type" => "info");		

	$options[] = array( "name" => __("Custom Logo","ux"),
						"desc" => __("Upload a logo for your theme, or specify the image address of your online logo. ","ux"),
						"id" => "logo_custom",
						"type" => "upload");
	
	$options[] = array( "name" => __("Custom Retina Logo","ux"),
						"desc" => __("It's optional. The retina logo's width and height should be double of normal logo's . ","ux"),
						"id" => "logo_retina_custom",
						"type" => "upload");
	
	$options[] = array( "name" => __("Custom Logo Width","ux"), 
						"desc" => __("It's optional,it's usually used for retina logo, e.g. 142","ux"),
						"id" => "logo_width",
						"std" => "",
						"class" => "mini",
						"type" => "text");																						
						
	$options[] = array( "name" => __("Enable Plain Text Logo","ux"), 
						"desc" => "",
						"id" => "textlogo",
						"std" => "0",
						"type" => "checkbox");	
						
	$options[] = array( "name" => __("Enable Search Bar","ux"), 
						"desc" => "",
						"id" => "search-bar",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => __("Enable Top Bar Fixed","ux"), 
						"desc" => "",
						"id" => "top-bar-fixed",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __("Enable Back Top Button","ux"), 
						"desc" => "",
						"id" => "back-top",
						"std" => "0",
						"type" => "checkbox");												
	
	$options[] = array('name' => __('LightBox Skin', 'ux'),
						'desc' =>"",
						'id' => 'lightbox-skin',
						'std' => 'default',
						'type' => 'select',
						'class' => 'mini',  
						'options' => $lightbox_skin);														
	
	$options[] = array( "name" => "",
						"desc" => __("Footer","ux"),
						"type" => "info");
	
	$options[] = array(
						'name' => "Footer Layout",
						'desc' => "",
						'id' => "footer_layout",
						'std' => "footer_a",
						'type' => "images",
						'options' => array(
							'footer_a' => $layoutThumbPath . 'footer_a.png',
							'footer_b' => $layoutThumbPath . 'footer_b.png',
							'footer_c' => $layoutThumbPath . 'footer_c.png')
					);		
						
	$options[] = array( "name" => __("Copyright Information","ux"),
						"desc" => "",
						"id" => "footer-copyright",
						"std" => "Copyright uiueux",
						"type" => "textarea"); 	
	
												
	$options[] = array( "name" => "",
						"desc" => __("List Page","ux"),
						"type" => "info");								
						
	$options[] = array( "name" => __("The Pagination Button (Twitter Style) Text","ux"),
						"desc" => "",
						"id" => "pagenavi-btn",
						"std" => __("Load more","ux"),
						"class" => "mini",
						"type" => "text");
	
	$options[] = array( "name" => __("Loading Image for List","ux"),
						"desc" => __("Recommended image GIF format","ux"),
						"id" => "infi-loading",
						"type" => "upload");
						
	$options[] = array( "name" => "",
						"desc" => __("System","ux"),
						"type" => "info");																					
						
	$options[] = array( "name" => __("Email","ux"),
						"desc" => __("Please enter a email that recive the shortcode contact form","ux"),
						"id" => "emailto",
						"std" => "",
						"class" => "mini",
						"type" => "text");
						
	$options[] = array( "name" => __("Track Code","ux"),
						"desc" => "",
						"id" => "analysis",
						"std" => "",
						"type" => "textarea"); 
	
	$options[] = array( "name" => __("Custom Favicon","ux"),
						"desc" => __("Upload a 16px x 16px Png/Gif image that will represent your website's favicon.","ux"),
						"id" => "favicon",
						"type" => "upload");
	
	$options[] = array( "name" => __("Custom Mobile Bookmark Icon","ux"),
						"desc" => __("This icon is used by Android (v2.1+) and iPhones to display home screen bookmarks. Recommended image size 129 x 129, saved in PNG format","ux"),
						"id" => "favicon_mobile",
						"type" => "upload");					

								
	$options[] = array( "name" => __("Custom Css","ux"),
						"desc" => "e.g. #navi li a{ color:blue; }",
						"id" => "custom_css",
						"std" => "",
						"type" => "textarea"); 
	///////////////////
	//Social Networks//
	///////////////////
						
	$options[] = array( "name" => __("Social Networks","ux"),
						"type" => "heading");
	
	$options[] = array( "name" => "",
						"desc" => __("Social icons in Top Bar.","ux"),
						"type" => "info");	

	$options[] = array( "name" => __("Enable Social Icons","ux"), 
						"desc" => "",
						"id" => "social-icon",
						"std" => "0",
						"type" => "checkbox");						
	
	$options[] = array( "name" => __("Your Facebook Link","ux"), 
						"desc" => "Please enter the url, e.g. http://www.facebook.com/your-facebook-name",
						"id" => "facebook-link",
						"std" => "",
						"type" => "text");	
	
	$options[] = array( "name" => __("Your Twitter Link","ux"), 
						"desc" => "",
						"id" => "twitter-link",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => __("Your Google+ Link","ux"), 
						"desc" => "",
						"id" => "google-plus-link",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => __("Your Pinterest Link","ux"), 
						"desc" => "",
						"id" => "pinterest-link",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __("Your Instagram Link","ux"), 
						"desc" => "",
						"id" => "instagram-link",
						"std" => "",
						"type" => "text");					
						
	$options[] = array( "name" => __("Your Tumblr Link","ux"), 
						"desc" => "",
						"id" => "trumblr-link",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __("Your Youtube Link","ux"), 
						"desc" => "",
						"id" => "youtube-link",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __("Your Flickr Link","ux"), 
						"desc" => "",
						"id" => "flickr-link",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => __("Your Vimeo Link","ux"), 
						"desc" => "",
						"id" => "vimeo-link",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => __("Your LinkedIn Link","ux"), 
						"desc" => "",
						"id" => "linkedin-link",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => __("Your Dribbble Link","ux"), 
						"desc" => "",
						"id" => "dribbble-link",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __("Your Forst Link","ux"), 
						"desc" => "",
						"id" => "forst-link",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => __("Your Github Link","ux"), 
						"desc" => "",
						"id" => "github-link",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => __("Your Rss Link","ux"), 
						"desc" => "",
						"id" => "rss-link",
						"std" => "",
						"type" => "text");
	
	///////////////////
	///Color Settings//
	///////////////////	
	
	$options[] = array( "name" => __("Color Settings","ux"),
						"type" => "heading");
	
	$options[] = array( "name" => "",
						"desc" => __("General","ux"),
						"type" => "info");
	
	$options[] = array('name' => __('Skin', 'ux'),
						'desc' =>__('If you select the skin, all color value will be changed','ux'),
						'id' => 'skin_select',
						'std' => 'dark',
						'type' => 'select',
						'class' => 'mini', //mini, tiny, small
						'options' => $skin);					
	
	$options[] = array( "name" =>  __("Custom Background","ux"),
						"desc" => "",
						"id" => "bg_custom",
						"std" => $background_defaults, 
						"type" => "background");
	
	$options[] = array( "name" => __("Hyperlinks Color","ux"),
						"desc" => "",
						"id" => "link-color",
						"std" => "rgb(255,199,0)",
						"type" => "rgb");												
	
	$options[] = array( "name" => __("Selected Text BG Color","ux"),
						"desc" => "",
						"id" => "selected-color",
						"std" => "#89b4f5",
						"type" => "color");						
	
	
	
	/* Header */
	$options[] = array( "name" => "",
						"desc" => __("Header","ux"),
						"type" => "info");	
						
	$options[] = array( "name" => __("Header BG Color","ux"),
						"desc" => "",
						"id" => "header-color",
						"std" => "rgb(57,57,57)",
						"type" => "rgb");	
						
	$options[] = array('name' => __('Header BG Alpha', 'ux'),
						'desc' =>"",
						'id' => 'header-alpha',
						'std' => '1.0',
						'type' => 'select',
						'class' => 'mini',  
						'options' => $numbers);	
						
	$options[] = array( "name" => __("Search Border Color","ux"),
						"desc" => "",
						"id" => "search-border-color",
						"std" => "",
						"type" => "color");	
	
	$options[] = array( "name" => __("Search Text Color","ux"),
						"desc" => "",
						"id" => "search-text-color",
						"std" => "",
						"type" => "color");									
						
	$options[] = array( "name" => "",
						"desc" => __("Logo","ux"),
						"type" => "info");
						
	$options[] = array( "name" => __("Logo Text Color","ux"),
						"desc" => "",
						"id" => "logo-color",
						"std" => "",
						"type" => "color");	
	
	$options[] = array( "name" => __("Logo BG Color","ux"),
						"desc" => "",
						"id" => "logo-box-bgcolor",
						"std" => "",
						"type" => "color");	
	
	$options[] = array( "name" => "",
						"desc" => __("Menu","ux"),
						"type" => "info");																											
						
	$options[] = array( "name" => __("Menu Text Color","ux"),
						"desc" => "",
						"id" => "menu-color",
						"std" => "#999999",
						"type" => "color");	
	
	$options[] = array( "name" => __("Menu Current Item Color","ux"),
						"desc" => "",
						"id" => "menu-active-color",
						"std" => "#ffc700",
						"type" => "color");						
						
	$options[] = array( "name" => __("Sub Menu Mouseover BG Color","ux"),
						"desc" => "",
						"id" => "submenu-mouseover-bgcolor",
						"std" => "#3d3d3d",
						"type" => "color");
						
	/* List page color */
	
	$options[] = array( "name" => "",
						"desc" => __("List Page","ux"),
						"type" => "info");
	

	
	$options[] = array( "name" => __("Title Color","ux"),
						"desc" => "",
						"id" => "post-tit-color",
						"std" => "rgb(0,0,0)",
						"type" => "rgb");

	$options[] = array( "name" => __("Descriptions Font Color","ux"),
						"desc" => "",
						"id" => "post-con-color",
						"std" => "rgb(0,0,0)",
						"type" => "rgb");
						
	$options[] = array( "name" => __("Image Mouseover BG Color","ux"),
						"desc" => "",
						"id" => "gallery-hover-bg-color",
						"std" => "",
						"type" => "color");						

	$options[] = array( "name" => __("Category/Archive/Search Page Title Color","ux"),
						"desc" => "",
						"id" => "archive-tit-color",
						"std" => "",
						"type" => "color");	


	/* Content page color */
						
	$options[] = array( "name" => "",
						"desc" => __("Content Page","ux"),
						"type" => "info");
	
	$options[] = array( "name" => __("Content BG Color","ux"),
						"desc" => "",
						"id" => "con-bg-color",
						"std" => "",
						"type" => "color");	
						
	$options[] = array( "name" => __("Sidebar BG Color","ux"),
						"desc" => "",
						"id" => "sidebar-bg-color",
						"type" => "color");							
	
	$options[] = array( "name" => __("Title Color","ux"),
						"desc" => "",
						"id" => "con-tit-color",
						"std" => "",
						"type" => "color");	
	
	$options[] = array( "name" => __("Content Text Color","ux"),
						"desc" => "",
						"id" => "con-con-color",
						"std" => "",
						"type" => "color");	
	
	$options[] = array( "name" => __("Auxiliary Content Color","ux"),
						"desc" => "",
						"id" => "con-meta-color",
						"std" => "",
						"type" => "color");																	
						
	$options[] = array( "name" => __("Comment Title Font Color","ux"),
						"desc" => "",
						"id" => "comm-tit-color",
						"std" => "",
						"type" => "color");
	
	$options[] = array('name' => __('Commnet Form Skin', 'ux'),
						'desc' =>'',
						'id' => 'comment-form',
						'std' => 'light',
						'type' => 'select',
						'class' => 'mini', 
						'options' => $skin_form);					
						
	$options[] = array( "name" => __("Sidebar Widget Title Color","ux"),
						"desc" => "",
						"id" => "sidebar-tit-color",
						"type" => "color");	
						
	$options[] = array( "name" => __("Sidebar Widget Content Color","ux"),
						"desc" => "",
						"id" => "sidebar-con-color",
						"type" => "color");	
	
	$options[] = array('name' => __('Sidebar Widget Contact Form Skin', 'ux'),
						'desc' =>"",
						'id' => "siderbar-form",
						'std' => "light",
						'type' => "select",
						'class' => "mini",
						'options' => $skin_form);								
	
	/* Footer color */
	$options[] = array( "name" => "",
						"desc" => __("Footer","ux"),
						"type" => "info");
	
	$options[] = array( "name" => __("Footer BG Color","ux"),
						"desc" => "",
						"id" => "footerbar-bg-color",
						'std' => "rgb(57,57,57)",
						"type" => "rgb");	

	$options[] = array('name' => __('Footer BG Alpha', 'ux'),
						'desc' =>"",
						'id' => 'footerbar-alpha',
						'std' => '1.0',
						'type' => 'select',
						'class' => 'mini',  
						'options' => $numbers);								
						
	$options[] = array( "name" => __("Copyright Text Color","ux"),
						"desc" => "",
						"id" => "copyright-font-color",
						'std' => "rgb(102,102,102)",
						"type" => "rgb");	
						
	$options[] = array('name' => __('Copyright Text Alpha', 'ux'),
						'desc' =>"",
						'id' => 'copyright-font-alpha',
						'std' => '0.3',
						'type' => 'select',
						'class' => 'mini',  
						'options' => $numbers);						
						
	$options[] = array( "name" => __("Footer Widget Title Color","ux"),
						"desc" => "",
						"id" => "footer-tit-color",
						'std' => "rgb(255,255,255)",
						"type" => "rgb");	
	
	$options[] = array('name' => __('Footer Widget Title Alpha', 'ux'),
						'desc' =>"",
						'id' => 'footer-tit-alpha',
						'std' => '0.5',
						'type' => 'select',
						'class' => 'mini',  
						'options' => $numbers);						
	
	$options[] = array( "name" => __("Footer Widget Content Color","ux"),
						"desc" => "",
						"id" => "footer-con-color",
						'std' => "rgb(255,255,255)",
						"type" => "rgb");	
	
	$options[] = array('name' => __('Footer Widget Content Alpha', 'ux'),
						'desc' =>"",
						'id' => 'footer-con-alpha',
						'std' => '0.3',
						'type' => 'select',
						'class' => 'mini',  
						'options' => $numbers);							
	
	$options[] = array('name' => __('Contact Form Widget Skin', 'ux'),
						'desc' =>'',
						'id' => 'footer-form',
						'std' => 'dark',
						'type' => 'select',
						'class' => 'mini', //mini, tiny, small
						'options' => $skin_form);		
														
							
	///////////////////
	///Fonts Settings///
	///////////////////	

	$options[] = array( "name" => __("Font settings","ux"),
						"type" => "heading");
						
	
	$options[] = array( "name" => "",
						"desc" => __("General","ux"),
						"type" => "info");	
											
	$options[] = array( "name" => __("Main Font","ux"),
						"desc" => __("For most content text.","ux"),
						"id" => "main-font",
						"std" => array('face' => 'Open Sans'),
						'options' => $typography_face,
						"type" => "typography");
	
	$options[] = array( "name" => __("Heading Font","ux"),
						"desc" => "",
						"id" => "title-font",
						"std" => array('face' => 'Open Sans'),
						'options' => $typography_face,
						"type" => "typography");
											
	/* Logo / Menu fonts */
	$options[] = array( "name" => "",
						"desc" => __("Logo","ux"),
						"type" => "info");	
						
	$options[] = array( "name" => __("Logo Font","ux"),
						"desc" => "",
						"id" => "logo-font",
						'options' => $typography_nocolor,
						"std" => array('size' => '32px','face' => 'Open Sans','style' => 'normal'),
						"type" => "typography");					
						
											
	$options[] = array( "name" => __("Menu Font","ux"),
						"desc" => "",
						"id" => "menu-font",
						'options' => $typography_nocolor,
						"std" => array('size' => '12px','face' => 'Open Sans','style' => 'normal'),
						"type" => "typography");
						
	/* List page fonts*/
	
	$options[] = array( "name" => "",
						"desc" => __("List Page","ux"),
						"type" => "info");
	
	$options[] = array( "name" => __("Title Font","ux"),
						"desc" => "",
						"id" => "list-tit-fontstyle",
						'options' => $typography_general,
						"std" => array('size' => '20px'),
						"type" => "typography");
						
	$options[] = array( "name" => __("Title Font(Fullwidth layout)","ux"),
						"desc" => "",
						"id" => "list-full-tit-fontstyle",
						'options' => $typography_general,
						"std" => array('size' => '32px'),
						"type" => "typography");					
						
	$options[] = array( "name" => __("Content Font","ux"),
						"desc" => "",
						"id" => "list-des-fontstyle",
						'options' => $typography_general,
						"std" => array('size' => '12px'),
						"type" => "typography");
						
	/* Content page fonts*/

	$options[] = array( "name" => "",
						"desc" => __("Content Page","ux"),
						"type" => "info");
	
	$options[] = array( "name" => __("Title Font (Standard, Video)","ux"),
						"desc" => "",
						"id" => "post-tit-font",
						'options' => $typography_general,
						"std" => array('size' => '32px'),
						"type" => "typography");
	
	$options[] = array( "name" => __("Title Font (Gallery)","ux"),
						"desc" => "",
						"id" => "gallery-tit-font",
						'options' => $typography_general,
						"std" => array('size' => '20px'),
						"type" => "typography");					
	
	$options[] = array( "name" => __("Content Font","ux"),
						"desc" => "",
						"id" => "post-con-font",
						'options' => $typography_general,
						"std" => array('size' => '12px'),
						"type" => "typography");						
	
	$options[] = array( "name" => __("Auxiliary Font","ux"),
						"desc" => "",
						"id" => "meta-font",
						'options' => $typography_general,
						"std" => array('size' => '12px'),
						"type" => "typography");
						
	/* Sidebar fonts */

	$options[] = array( "name" => __("Sidebar Widget Title Font","ux"),
						"desc" => "",
						"id" => "sidebar-widget-tit-font",
						'options' => $typography_general,
						"std" => array('size' => '20px'),
						"type" => "typography");
						
	$options[] = array( "name" => __("Sidebar Widget Content Font","ux"),
						"desc" => "",
						"id" => "sidebar-widget-con-font",
						'options' => $typography_general,
						"std" => array('size' => '12px'),
						"type" => "typography");
	
	/* Footer fonts */
	$options[] = array( "name" => "",
						"desc" => __("Footer","ux"),
						"type" => "info");
						
	$options[] = array( "name" => __("Copyright Font","ux"),
						"desc" => "",
						"id" => "copyright-font",
						'options' => $typography_general,
						"std" => array('size' => '12px'),
						"type" => "typography");
	
	$options[] = array( "name" => __("Widget Title","ux"),
						"desc" => "",
						"id" => "footer-widget-title-font",
						'options' => $typography_general,
						"std" => array('size' => '20px'),
						"type" => "typography");
						
	$options[] = array( "name" => __("Widget Content","ux"),
						"desc" => "",
						"id" => "footer-widget-content-font",
						'options' => $typography_general,
						"std" => array('size' => '12px'),
						"type" => "typography");				


	
						
	///////////////////
	///Import/Export///
	///////////////////	

	$options[] = array( "name" => __("Import/Export","ux"),
						"type" => "heading");
    $options[] = array( "name" => "",
						"desc" => __("Import option","ux"),
						"type" => "info");		
    $options[] = array( "name" => __("Import from text or backup file url","ux"),
						"desc" => __("Paste your backup file text above or input backup file url and hit Import to restore your sites options.","ux"),
						"id" => "import_text",
						"type" => "textarea4ine");
    $options[] = array( "name" => "",
						"desc" => __("Export option","ux"),
						"type" => "info");
    $options[] = array( "name" => __("Export to text or download backup file","ux"),
						"desc" => __("Export to text box or click download button to a file.<br>NOTE: Only Export the theme option data","ux"),
						"id" => "export_text",
						"type" => "textarea4ine");
	return $options;
}