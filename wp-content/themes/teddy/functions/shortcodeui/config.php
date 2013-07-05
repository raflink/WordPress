<?php

// Buttons shortcode config
$ux_shortcodes['button'] = array(
	'params' => array(
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Text', 'ux'),
			'desc' => __('Add the button\'s text', 'ux'),
		),
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link', 'ux'),
			'desc' => __('Add the button\'s url eg http://example.com', 'ux')
		),
		'color' => array(
			'type' => 'select',
			'label' => __('Color', 'ux'),
			'desc' => __('Select the button\'s colour', 'ux'),
			'options' => array(
				'black' => 'Black',
				'green' => 'Green',
				'olivine' =>'Olivine',
				'blue' => 'Blue',
				'skyblue' => 'Skyblue',
				'lightblue' => 'Lightblue',
				'purple' => 'Purple',
				'pink' => 'Pink',
				'yellow' => 'Yellow',
				'orange' =>'Orange',
				'red' => 'Red',
				'grey' => 'Grey'
			)
		)
	),
	'shortcode' => '[button link="{{link}}" color="{{color}}"] {{content}} [/button]',
	'popup_title' => __('Insert Button Shortcode', 'ux')
);
// Maps shortcode config
$ux_shortcodes['map'] = array(
	'params' => array(
		'location' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Location<br>(Lat/Lng)', 'ux'),
			'desc' => __('Link to your map. Visit <a href="http://maps.google.com/" target="_blank">Google maps</a> find your address and then click "Link" button to obtain your map link.<br>You need to get your location Lat/Lng in this page', 'ux')
		),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width', 'ux'),
			'desc' => __('Add the Maps\'s width eg 90%', 'ux')
		),
		'height' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Height', 'ux'),
			'desc' => __('Add the Maps\'s height eg 300px', 'ux')
		),
		'maptype' => array(
			'std' => 'm',
			'type' => 'select',
			'options' => array(
				'm' => 'Map',
				'k' => 'Satellite',
				'p' => 'Map + Terrain'
			),
			'label' => __('Type', 'ux'),
			'desc' => '',
		),
		'zoom' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Zoom', 'ux'),
			'desc' => __('eg 14', 'ux')
		)
		
	),
	'no_preview' => true,
	'shortcode' => '[map width="{{width}}" height="{{height}}" zoom="{{zoom}}"  maptype="{{maptype}}" location="{{location}}"][/map]',
	'popup_title' => __('Insert Google Maps Shortcode', 'ux')
);
// Embed shortcode config
$ux_shortcodes['embed'] = array(
	'params' => array(
		'content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Insert the url', 'ux'),
			'desc' => __('Support Youtube, Vimeo, Twitter ... <a href="http://codex.wordpress.org/Embeds">more</a>', 'ux'),
			),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width', 'ux'),
			'desc' => __('Add the width eg 300, min width is 250', 'ux')
			)
	),
	'shortcode' => '[embed width="{{width}}"]{{content}}[/embed]',
	'popup_title' => __('Insert Embed Shortcode', 'ux')
);

// Face shortcode config
$ux_shortcodes['icon'] = array(
	'params' => array(
		'content' => array(
			'std' => 'accept',
			'type' => 'select',
			'options' => array(
				'accept' => 'accept',
				'arrow_full_down' => 'arrow_full_down',
				'arrow_full_right' => 'arrow_full_right',
				'arrow_full_up' => 'arrow_full_up',
				'calendar' => 'calendar',
				'cancel' => 'cancel',
				'cd' => 'cd',
				'cd_run' => 'cd_run',
				'clock' => 'clock',
				'computer' => 'computer',
				'controls_stop' => 'controls_stop',
				'document_music' => 'document_music',
				'document_text' => 'document_text',
				'document_video' => 'document_video',
				'download' => 'download',
				'edit' => 'edit',
				'group_full' => 'group_full',
				'home' => 'home',
				'image' => 'image',
				'imprint' => 'imprint',
				'light' => 'light',
				'mail' => 'mail',
				'move' => 'move',
				'music' => 'music',
				'network_sans' => 'network_sans',
				'phone_on' => 'phone_on',
				'screen_4to3' => 'screen_4to3',
				'settings' => 'settings',
				'shopping_cart' => 'shopping_cart',
				'star' => 'star',
				'trash' => 'trash',
				'user_full' => 'user_full',
				'video' => 'video'
			),
			'label' => __('Select icon', 'ux'),
			'desc' => __('Add the icon', 'ux'),
		)
		
	),
	'shortcode' => '[icon]{{content}}[/icon]',
	'popup_title' => __('Insert Face Shortcode', 'ux')
);

// Social shortcode config
$ux_shortcodes['social'] = array(
	'params' => array(
		'social_type' => array(
			'std' => 'crying',
			'type' => 'select',
			'options' => array(
				'facebook' => 'Facebook',
				'twitter' => 'Twitter',
				'google_plus' => 'Google Plus',
				'youtube' => 'Youtube',
				'flickr' => 'Flickr',
				'vimeo' => 'Vimeo',
				'linkedin' => 'LinkedIn',
				'trumblr' => 'Trumblr',
				'forst' => 'Forst',
				'dribbble' => 'Dribbble',
				'pinterest' =>'Pinterest',
				'instagram' =>'Instagram',
				'skype' =>'Skype',
				'tumblr' => 'Tumblr',
				'github' =>'Github',
				'rss' => 'RSS'
			),
			'label' => __('Please select the type', 'ux'),
			'desc' => '',
		),
		 'social_link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link', 'ux'),
			'desc' => __('Please enter the url, e.g. http://www.facebook.com/your-facebook-name', 'ux')
			)
		
	),
	'shortcode' => '[social social_type="{{social_type}}" social_link="{{social_link}}"][/social]',
	'popup_title' => __('Insert Face Shortcode', 'ux')
);

// Message box shortcode config
$ux_shortcodes['mbox'] = array(
	'params' => array(
		'color' => array(
			'type' => 'select',
			'label' => __('Color', 'ux'),
			'desc' => __('Select the Message box\'s colour', 'ux'),
			'options' => array(
				'blue' => 'Blue',
				'red' => 'Red',
				'orange' => 'Orange',
				'green' => 'Green'
			)
		),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width', 'ux'),
			'desc' => __('Add the Message box\'s width eg 95%', 'ux')
		),
		'content' => array(
			'std' => 'Message box text',
			'type' => 'textarea',
			'label' => __('Message box\'s Text', 'ux'),
			'desc' => __('Add the Message box\'s text', 'ux'),
		)
		
	),
	'shortcode' => '[mbox width="{{width}}" color="{{color}}"] {{content}} [/mbox]',
	'popup_title' => __('Insert Message box Shortcode', 'ux')
);

// Contact Form shortcode config
$ux_shortcodes['contactform'] = array(
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'ux'),
			'desc' =>__('The shortcode only works in page', 'ux')
		),	
		'name' => array(
			'std' => 'Name',
			'type' => 'text',
			'label' => __('Name Box', 'ux'),
			'desc' =>''
		),
		'email' => array(
			'std' => 'Email',
			'type' => 'text',
			'label' => __('Email Box', 'ux'),
			'desc' => ''
		),
		'button' => array(
			'std' => 'Send',
			'type' => 'text',
			'label' => __('Button', 'ux'),
			'desc' => ''
		)
		
	),
	'no_preview' => true,
	'shortcode' => '[form title="{{title}}" name="{{name}}" email="{{email}}" button="{{button}}"][/form]',
	'popup_title' => __('Insert Contact Form Shortcode (The shortcode only works in page)', 'ux')
);
// Image border shortcode config
$ux_shortcodes['imageborder'] = array(
	'params' => array(
		'img' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image URL', 'ux'),
			'desc' => __('Add the image\'s url', 'ux'),
		),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width', 'ux'),
			'desc' => __('Add the image\'s width eg 95%', 'ux')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Border Style', 'ux'),
			'desc' => __('Select the border\'s style', 'ux'),
			'options' => array(
				'style1' => 'Style 1',
				'style2' => 'Style 2',
				'style3' => 'Style 3'
			)
		),
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Name', 'ux'),
			'desc' => __('Add the image\'s name', 'ux'),
		),
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Link URL', 'ux'),
			'desc' => __('Add the image\'s link url, It\'s optional.', 'ux'),
		)
		
	),
	'shortcode' => '[imageborder  img="{{img}}" style="{{style}}" width="{{width}}"]',
	'popup_title' => __('Insert Image Border Shortcode', 'ux')
);
// Image round
$ux_shortcodes['round'] = array(
	'params' => array(
		'img' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image URL', 'ux'),
			'desc' => __('Add the image\'s url', 'ux'),
		),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width', 'ux'),
			'desc' => __('Add the image\'s width eg 140', 'ux')
		),
		'height' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Height', 'ux'),
			'desc' => __('Add the image\'s height eg 140', 'ux')
		),
		'align' => array(
			'type' => 'select',
			'label' => __('Align', 'ux'),
			'desc' => '',
			'options' => array(
				'center' => 'Center',
				'left' => 'Left'
			)
		),
		'radius' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Radius', 'ux'),
			'desc' => __('Add the image\'s radius eg 70', 'ux')
		)
		
	),
	'shortcode' => '[round  img="{{img}}" radius="{{radius}}" width="{{width}}" height="{{height}}" align="{{align}}"]',
	'popup_title' => __('Insert Image Round shortcode', 'ux')
);
// Lines shortcode config
$ux_shortcodes['line'] = array(
	'params' => array(
		'color' => array(
			'type' => 'select',
			'label' => __('Color', 'ux'),
			'desc' => __('Select the Line\'s colour', 'ux'),
			'options' => array(
				'blue' => 'Blue',
				'red' => 'Red',
				'pink' => 'Pink',
				'green' => 'Green',
				'brown' => 'Brown',
				'grey' => 'Grey',
				'dark' => 'Dark',
				'black' => 'Black'
			)
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'ux'),
			'desc' => __('Select the Line\'s type', 'ux'),
			'options' => array(
				'solid' => 'Solid',
				'dot' => 'Dot',
				'dashed' => 'Dashed'
			)
		),
		'width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Width', 'ux'),
			'desc' => __('Add the Line\'s width eg 95%', 'ux')
		)
	),
	'shortcode' => '[line width="{{width}}" color="{{color}}" style="{{style}}"] ',
	'popup_title' => __('Insert Line Shortcode', 'ux')
);


// Toggle content shortcode config
$ux_shortcodes['toggle'] = array(
'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'no_preview' => true,
	'popup_title' => __('Insert Toggle Content Shortcode', 'ux'),
	'child_shortcode' => array(
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => __('Toggle Content Title', 'ux'),
			'desc' => __('Add the title that will go above the toggle content', 'ux'),
			'std' => 'Title'
		),
		'content' => array(
			'std' => 'Content',
			'type' => 'textarea',
			'label' => __('Toggle Content', 'ux'),
			'desc' => __('Add the toggle content.', 'ux'),
		)
		
	),
	'shortcode' => '[toggle title="{{title}}"] {{content}} [/toggle]',
	'clone_button' => __('Add New', 'eandc')
	)
);

// Columns
$ux_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'ux'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'ux'),
				'desc' => __('Select the type, ie width of the column.', 'ux'),
				'options' => array(
					'one_third' => 'One Third',
					'one_third_last' => 'One Third Last',
					'two_third' => 'Two Thirds',
					'two_third_last' => 'Two Thirds Last',
					'one_half' => 'One Half',
					'one_half_last' => 'One Half Last',
					'one_fourth' => 'One Fourth',
					'one_fourth_last' => 'One Fourth Last',
					'three_fourth' => 'Three Fourth',
					'three_fourth_last' => 'Three Fourth Last',
					'one_fifth' => 'One Fifth',
					'one_fifth_last' => 'One Fifth Last',
					'two_fifth' => 'Two Fifth',
					'two_fifth_last' => 'Two Fifth Last',
					'three_fifth' => 'Three Fifth',
					'three_fifth_last' => 'Three Fifth Last',
					'four_fifth' => 'Four Fifth',
					'four_fifth_last' => 'Four Fifth Last',
					'one_sixth' => 'One Sixth',
					'one_sixth_last' => 'One Sixth Last',
					'five_sixth' => 'Five Sixth',
					'five_sixth_last' => 'Five Sixth Last'
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'ux'),
				'desc' => __('Add the column content.', 'ux'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add a new Column', 'ux')
	)
);
// Lists
$ux_shortcodes['lists'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Lists Shortcode', 'ux'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'list' => array(
				'type' => 'select',
				'label' => __('List ICON', 'ux'),
				'desc' => '',
				'options' => array(
					'list_style_location' => __('Location','ux'),
					'list_style_phone' => __('Phone','ux'),
					'list_style_mail' => __('Mail','ux'),
					'list_style_dot' => __('Dot','ux'),
					'list_style_triangle' => __('Triangle','ux'),
					'list_style_check' => __('Check','ux'),
					'list_style_hollowarrow' => __('Hollow Arrow','ux'),
					'list_style_heart' => __('Heart','ux'),
					'list_style_square' => __('Square','ux'),
					'list_style_dash' => __('Dash','ux'),
					'list_style_bigdot' => __('Big Dot','ux')
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('List Content', 'ux'),
				'desc' => ''
			)
		),
		'shortcode' => '[{{list}}] {{content}} [/{{list}}] ',
		'clone_button' => __('Add List', 'ux')
	)
);

// Fixed Column
$ux_shortcodes['fixedcolumns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Fixed Columns Shortcode', 'ux'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'width' => array(
				'std' => '300px',
				'type' => 'text',
				'label' => __('Width', 'ux'),
				'desc' => __('e.g. 300px', 'ux')
			),
			'margin_top' => array(
				'std' => '20px',
				'type' => 'text',
				'label' => __('Margin Top', 'ux'),
				'desc' => __('Column spacing on the top, e.g. 20px', 'ux')
			),
			'margin_left' => array(
				'std' => '20px',
				'type' => 'text',
				'label' => __('Margin Left', 'ux'),
				'desc' => __('Column spacing on the left, e.g. 20px', 'ux')
			),
			'margin_bottom' => array(
				'std' => '20px',
				'type' => 'text',
				'label' => __('Margin Bottom', 'ux'),
				'desc' => __('Column spacing on the bottom, e.g. 20px', 'ux')
			),
			'margin_right' => array(
				'std' => '20px',
				'type' => 'text',
				'label' => __('Margin Right', 'ux'),
				'desc' => __('Column spacing on the right, e.g. 20px', 'ux')
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Content', 'ux'),
				'desc' => ''
			)
		),
		'shortcode' => '[fixed_column margin_top="{{margin_top}}"  margin_right="{{margin_right}}" margin_bottom="{{margin_bottom}}" margin_left="{{margin_left}}" width="{{width}}"] {{content}} [/fixed_column] ',
		'clone_button' => __('Add Fixed Columns', 'ux')
	)
);
?>