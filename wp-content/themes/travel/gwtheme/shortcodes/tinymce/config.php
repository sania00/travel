<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button URL', 'gwtheme'),
			'desc' => __('Add the button\'s url eg http://example.com', 'gwtheme')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Style', 'gwtheme'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'gwtheme'),
			'options' => array(
				'grey' => 'Grey',
				'black' => 'Black',
				'green' => 'Green',
				'light-blue' => 'Light Blue',
				'blue' => 'Blue',
				'red' => 'Red',
				'orange' => 'Orange',
				'purple' => 'Purple'
			)
		),
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'gwtheme'),
			'desc' => __('Select the button\'s size', 'gwtheme'),
			'options' => array(
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large'
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __('Button Type', 'gwtheme'),
			'desc' => __('Select the button\'s type', 'gwtheme'),
			'options' => array(
				'round' => 'Round',
				'square' => 'Square'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'gwtheme'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'gwtheme'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'gwtheme'),
			'desc' => __('Add the button\'s text', 'gwtheme'),
		)
	),
	'shortcode' => '[gw_button url="{{url}}" style="{{style}}" size="{{size}}" type="{{type}}" target="{{target}}"] {{content}} [/gw_button]',
	'popup_title' => __('Insert Button Shortcode', 'gwtheme')
);

/*-----------------------------------------------------------------------------------*/
/*	gwrt Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['gwrt'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('gwrt Style', 'gwtheme'),
			'desc' => __('Select the gwrt\'s style, ie the gwrt colour', 'gwtheme'),
			'options' => array(
				'white' => 'White',
				'grey' => 'Grey',
				'red' => 'Red',
				'yellow' => 'Yellow',
				'green' => 'Green'
			)
		),
		'content' => array(
			'std' => 'Your gwrt!',
			'type' => 'textarea',
			'label' => __('gwrt Text', 'gwtheme'),
			'desc' => __('Add the gwrt\'s text', 'gwtheme'),
		)
		
	),
	'shortcode' => '[gw_gwrt style="{{style}}"] {{content}} [/gw_gwrt]',
	'popup_title' => __('Insert gwrt Shortcode', 'gwtheme')
);

/*-----------------------------------------------------------------------------------*/
/*	Toggle Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['toggle'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => __('Toggle Content Title', 'gwtheme'),
			'desc' => __('Add the title that will go above the toggle content', 'gwtheme'),
			'std' => 'Title'
		),
		'content' => array(
			'std' => 'Content',
			'type' => 'textarea',
			'label' => __('Toggle Content', 'gwtheme'),
			'desc' => __('Add the toggle content. Will accept HTML', 'gwtheme'),
		),
		'state' => array(
			'type' => 'select',
			'label' => __('Toggle State', 'gwtheme'),
			'desc' => __('Select the state of the toggle on page load', 'gwtheme'),
			'options' => array(
				'open' => 'Open',
				'closed' => 'Closed'
			)
		),
		
	),
	'shortcode' => '[gw_toggle title="{{title}}" state="{{state}}"] {{content}} [/gw_toggle]',
	'popup_title' => __('Insert Toggle Content Shortcode', 'gwtheme')
);

/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[gw_tabs] {{child_shortcode}}  [/gw_tabs]',
    'popup_title' => __('Insert Tab Shortcode', 'gwtheme'),

    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'gwtheme'),
                'desc' => __('Title of the tab', 'gwtheme'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'gwtheme'),
                'desc' => __('Add the tabs content', 'gwtheme')
            )
        ),
        'shortcode' => '[gw_tab title="{{title}}"] {{content}} [/gw_tab]',
        'clone_button' => __('Add Tab', 'gwtheme')
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'gwtheme'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'gwtheme'),
				'desc' => __('Select the type, ie width of the column.', 'gwtheme'),
				'options' => array(
					'gw_two_third' => 'Two Pictures'
					/*'gw_one_third_last' => 'One Third Last',
					'gw_two_third' => 'Two Thirds',
					'gw_two_third_last' => 'Two Thirds Last',
					'gw_one_half' => 'One Half',
					'gw_one_half_last' => 'One Half Last',
					'gw_one_fourth' => 'One Fourth',
					'gw_one_fourth_last' => 'One Fourth Last',
					'gw_three_fourth' => 'Three Fourth',
					'gw_three_fourth_last' => 'Three Fourth Last',
					'gw_one_fifth' => 'One Fifth',
					'gw_one_fifth_last' => 'One Fifth Last',
					'gw_two_fifth' => 'Two Fifth',
					'gw_two_fifth_last' => 'Two Fifth Last',
					'gw_three_fifth' => 'Three Fifth',
					'gw_three_fifth_last' => 'Three Fifth Last',
					'gw_four_fifth' => 'Four Fifth',
					'gw_four_fifth_last' => 'Four Fifth Last',
					'gw_one_sixth' => 'One Sixth',
					'gw_one_sixth_last' => 'One Sixth Last',
					'gw_five_sixth' => 'Five Sixth',
					'gw_five_sixth_last' => 'Five Sixth Last'*/
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'gwtheme'),
				'desc' => __('Add the column content.', 'gwtheme'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'gwtheme')
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Divider Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['divider'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Divider Style', 'gwtheme'),
            'desc' => __('Select the divider\'s style', 'gwtheme'),
            'options' => array(
                'bold' => 'Bold Line',
                'thin' => 'Thin Line',
                'medium' => 'Medium Line',
                'dashed' => 'Dashed Line',
                'dark' => 'Dark Line',
                'light' => 'Light Line'
            )
        ),
        'text' => array(
            'type' => 'select',
            'label' => __('Divider Text', 'gwtheme'),
            'desc' => __('Select the divider\'s text option', 'gwtheme'),
            'options' => array(
                'notext' => 'No Text',
                'textleft' => 'Text Left',
                'textright' => 'Text Right',
                'textcenter' => 'Text Center'
            )
        ),
        'content' => array(
            'std' => 'Divider Text',
            'type' => 'text',
            'label' => __('Divider Text', 'gwtheme'),
            'desc' => __('Add the divider\'s text', 'gwtheme'),
        )

    ),
    'shortcode' => '[gw_divider style="{{style}}" text="{{text}}"] {{content}} [/gw_divider]',
    'popup_title' => __('Insert Divider Shortcode', 'gwtheme')
);

/*-----------------------------------------------------------------------------------*/
/*	Testimonial Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['testimonial'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Testimonial Style', 'gwtheme'),
            'desc' => __('Select the testimonial\'s style', 'gwtheme'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'avatar' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Testimonial Author photo link', 'gwtheme'),
            'desc' => __('Add the testimonial\'s author photo link.', 'gwtheme'),
        ),
        'name' => array(
            'std' => 'Testimonial Author',
            'type' => 'text',
            'label' => __('Testimonial Author', 'gwtheme'),
            'desc' => __('Add the testimonial\'s author', 'gwtheme'),
        ),
        'link' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Testimonial Link', 'gwtheme'),
            'desc' => __('Add the testimonial\'s link', 'gwtheme'),
        ),
        'content' => array(
            'std' => 'Testimonial Text',
            'type' => 'textarea',
            'label' => __('Testimonial Text', 'gwtheme'),
            'desc' => __('Add the testimonial\'s text', 'gwtheme'),
        )

    ),
    'shortcode' => '[gw_testimonial link="{{link}}" style="{{style}}" avatar="{{avatar}}" name="{{name}}"] {{content}} [/gw_testimonial]',
    'popup_title' => __('Insert Testimonial Shortcode', 'gwtheme')
);


/*-----------------------------------------------------------------------------------*/
/*	Team Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['team'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Team box Style', 'gwtheme'),
            'desc' => __('Select the team box\'s style', 'gwtheme'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'avatar' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Team Author photo link', 'gwtheme'),
            'desc' => __('Add the team\'s author photo link.', 'gwtheme'),
        ),
        'name' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Team Author', 'gwtheme'),
            'desc' => __('Add the team\'s author', 'gwtheme'),
        ),
        'prof' => array(
            'std' => 'Designer',
            'type' => 'text',
            'label' => __('Team Prof', 'gwtheme'),
            'desc' => __('Add the prof. team\'s author', 'gwtheme'),
        ),
        'fblink' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Facebook Link', 'gwtheme'),
            'desc' => __('Add the facebook link', 'gwtheme'),
        ),
        'twilink' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Twitter Link', 'gwtheme'),
            'desc' => __('Add the twitter link', 'gwtheme'),
        ),
        'glink' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Google+ Link', 'gwtheme'),
            'desc' => __('Add the google+ link', 'gwtheme'),
        ),
        'content' => array(
            'std' => 'Testimonial Text',
            'type' => 'textarea',
            'label' => __('Testimonial Text', 'gwtheme'),
            'desc' => __('Add the testimonial\'s text', 'gwtheme'),
        )

    ),
    'shortcode' => '[gw_team style="{{style}}" avatar="{{avatar}}" name="{{name}}" prof="{{prof}}" fblink="{{fblink}}" twilink="{{twilink}}" glink="{{glink}}"] {{content}} [/gw_team]',
    'popup_title' => __('Insert Team Shortcode', 'gwtheme')
);

/*-----------------------------------------------------------------------------------*/
/*	Partner Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['partner'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Partner box Style', 'gwtheme'),
            'desc' => __('Select the partner box\'s style', 'gwtheme'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'logo' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Partner logo link', 'gwtheme'),
            'desc' => __('Add the partner\'s logo link.', 'gwtheme'),
        ),
        'content' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Partner Title', 'gwtheme'),
            'desc' => __('Add the partner\'s title', 'gwtheme'),
        ),

        'link' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Partner Link', 'gwtheme'),
            'desc' => __('Add the partner link', 'gwtheme'),
        ),

    ),
    'shortcode' => '[gw_partner style="{{style}}" logo="{{logo}}" link="{{link}}"]{{content}}[/gw_partner]',
    'popup_title' => __('Insert Partner Shortcode', 'gwtheme')
);


/*-----------------------------------------------------------------------------------*/
/*	Service Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['service'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Partner box Style', 'gwtheme'),
            'desc' => __('Select the partner box\'s style', 'gwtheme'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'icon' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Service icon link', 'gwtheme'),
            'desc' => __('Add the service\'s icon link.', 'gwtheme'),
        ),
        'name' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Service Title', 'gwtheme'),
            'desc' => __('Add the service title', 'gwtheme'),
        ),
        'content' => array(
            'std' => '',
            'type' => 'textarea',
            'label' => __('Short Description', 'gwtheme'),
            'desc' => __('Add the service\'s description', 'gwtheme'),
        ),


    ),
    'shortcode' => '[gw_service style="{{style}}" icon="{{icon}}" name="{{name}}"]{{content}}[/gw_service]',
    'popup_title' => __('Insert Service Shortcode', 'gwtheme')
);

/*-----------------------------------------------------------------------------------*/
/*	Map Config
/*-----------------------------------------------------------------------------------*/

$gw_shortcodes['map'] = array(
    'no_preview' => true,
    'params' => array(
        'address' => array(
            'std' => 'Chisinau',
            'type' => 'text',
            'label' => __('Add the Address', 'gwtheme'),
            'desc' => __('Add the address', 'gwtheme'),
        ),
        'width' => array(
            'std' => '100%',
            'type' => 'text',
            'label' => __('Map width', 'gwtheme'),
            'desc' => __('Add the width', 'gwtheme'),
        ),
        'height' => array(
            'std' => '400px',
            'type' => 'text',
            'label' => __('Map height', 'gwtheme'),
            'desc' => __('Add the map height', 'gwtheme'),
        ),


    ),
    'shortcode' => '[gw_map address="{{address}}" width="{{width}}" height="{{height}}"]',
    'popup_title' => __('Insert Map Shortcode', 'gwtheme')
);

?>