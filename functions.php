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
		
		wp_register_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'style' );
	}
	add_action( 'wp_enqueue_scripts', 'ka_register_styles' );

	function ka_register_scripts() {
		wp_register_script( 'slicknavjs', get_template_directory_uri() .'/js/jquery.slicknav.min.js' ,null, true );
		wp_enqueue_script( 'slicknavjs' );
	}
	add_action( 'wp_enqueue_scripts', 'ka_register_scripts' );
	
	
// Navigation
	function kat_register_menu() {
		register_nav_menu( 'mainnav', __( 'Hauptnavigation - Header', 'katharina' ) );
		register_nav_menu( 'footernav', __( 'Navigation im Footer', 'katharina' ) );
	}
	add_action( 'after_setup_theme', 'kat_register_menu' );
