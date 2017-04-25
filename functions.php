<?php

// HTML5
	$args = array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	);
	add_theme_support( 'html5', $args );
	
	
	
// STYLES AND SCRIPTS
	function ka_register_styles() {
		wp_register_style( 'normalizer', get_template_directory_uri() .'/css/normalize.css' );
		wp_enqueue_style( 'normalizer' );
		
		wp_register_style( 'skeleton', get_template_directory_uri() .'/css/skeleton.css' );
		wp_enqueue_style( 'skeleton' );
		
		wp_register_style( 'slicknav', get_template_directory_uri() .'/css/slicknav.css' );
		wp_enqueue_style( 'slicknav' );
		
		wp_register_style( 'animate', get_template_directory_uri() .'/css/animate.css' );
		wp_enqueue_style( 'animate' );
		
		wp_register_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'style' );
	}
	add_action( 'wp_enqueue_scripts', 'ka_register_styles' );

	function ka_register_scripts() {
		wp_register_script( 'slicknavjs', get_template_directory_uri() .'/js/jquery.slicknav.min.js' ,null, true );
		wp_enqueue_script( 'slicknavjs' );
	}
	add_action( 'wp_enqueue_scripts', 'ka_register_scripts' );
	

	
// GOGGLE UND ICONS	
	function load_google_fonts() {
		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet');
		wp_enqueue_style( 'googleFonts');
	}
	 add_action('wp_print_styles', 'load_google_fonts');
	 
	wp_enqueue_style(
		'font-awesome',
		'//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'
	);


	
// NAVIGATION
	function kat_register_menu() {
		register_nav_menu( 'mainnav', __( 'Hauptnavigation - Header', 'katharina' ) );
		register_nav_menu( 'footernav', __( 'Navigation im Footer', 'katharina' ) );
		register_nav_menu( 'static_nav', __( 'Menü für statische Seiten', 'katharina') );
	}
	add_action( 'after_setup_theme', 'kat_register_menu' );
	
	
	
// CUSTOM BACKGROUNDS	
	add_theme_support( 'custom-background', $defaults );
	
// CUSTOM HEADER	
	add_theme_support( 'custom-header', $args );
	
// CUSTOM LOGO
	add_theme_support( 'custom-logo' );		
		function ka_custom_logo_setup() {
		$defaults = array(
			'height'      => 50,
			'width'       => 50,
			'flex-height' => true,
			'flex-width'  => true,
		);
		add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'ka_custom_logo_setup' );
	
	
	
// WIDGET
	function ka_widgets_init() {
		register_sidebar( array(
			'name' => __( 'Footer Widget', 'katharina' ),
			'id' => 'footer-widget',
			'description' => __( 'Widget im Footerbereich', 'katharina' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>',
		) );
	}
	add_action( 'widgets_init', 'ka_widgets_init' );
	
	
	
//REMOVES TAGS
	remove_filter( 'the_content', 'wpautop' );	

	
	
// SHORTCODE
	function ka_shortcode( $atts, $content = null ) {
        extract( shortcode_atts(
            array(
                'cols' => 'six',
            ), $atts )
        );		
		return '<div class="' .$cols. ' columns">' .$content. '</div>';
	}
	add_shortcode( 'columns', 'ka_shortcode' );
	
	


// THEMEDOKU - DASHBOARD
    function ka_add_dashboard_widget() {
        wp_add_dashboard_widget(
                     'example_dashboard_widget',        
                     'Dokumentation für dieses Theme',         
                     'wpv_dashboard_widget_content' 
            );	
    }
    add_action( 'wp_dashboard_setup', 'ka_add_dashboard_widget' );

    function wpv_dashboard_widget_content() {
        echo '<p>Shortcode fürs Gridlayout:</p>
		<p>[columns cols="three"]...[/columns]</p>';
    }
	

	
	
	
	
