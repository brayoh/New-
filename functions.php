<?php
	add_filter('show_admin_bar', '__return_false');
	function GnadeTheme_scripts(){

		/* theme stylesheets */
		
		wp_enqueue_style('style',get_stylesheet_uri());
		wp_enqueue_style('gnadecapital-theme-content-sidebar', get_template_directory_uri() . "/resources/css/bootstrap.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-normalise', get_template_directory_uri() . "/resources/css/normalise.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-roboto', get_template_directory_uri() . "/resources/css/roboto.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-material', get_template_directory_uri() . "/resources/css/material.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-material-pallete', get_template_directory_uri() . "/resources/css/material-fullpalette.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-ripples', get_template_directory_uri() . "/resources/css/ripples.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-font-awesome', get_template_directory_uri() . "/resources/css/font-awesome.min.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-camera', get_template_directory_uri() . "/resources/css/camera.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-slicknav', get_template_directory_uri() . "/resources/css/slicknav.css.gz");
		wp_enqueue_style('gnadecapital-theme-content-prettyPhoto', get_template_directory_uri() . "/resources/css/prettyPhoto.css.gz");
		//wp_enqueue_style('gnadecapital-theme-content-animate', get_template_directory_uri() . "/resources/css/animate.css.gz");
		
		/*theme scripts */

		wp_enqueue_script( 'gnadecapital-theme-jquery', get_template_directory_uri() . '/resources/js/jquery.min.js.gz', array(), '20150515', false);
		wp_enqueue_script( 'gnadecapital-theme-bootstrap', get_template_directory_uri() . '/resources/js/bootstrap.min.js.gz', array('jquery'), '20150515', true );
		wp_enqueue_script( 'gnadecapital-theme-ripples', get_template_directory_uri() . '/resources/js/ripples.min.js.gz', array('jquery'), '20150515', true );
		wp_enqueue_script( 'gnadecapital-theme-material', get_template_directory_uri() . '/resources/js/material.min.js.gz', array('jquery'), '20150515', true );
		wp_enqueue_script( 'gnadecapital-theme-easing', get_template_directory_uri() . '/resources/js/jquery.easing.min.js.gz', array(), '20150522', true );
		wp_enqueue_script( 'gnadecapital-theme-isotope', get_template_directory_uri() . '/resources/js/isotope.js.gz', array('jquery'), '20150515', true );
		
		wp_enqueue_script( 'gnadecapital-theme-camera', get_template_directory_uri() . '/resources/js/camera.min.js.gz', array(), '20150515', true );
		wp_enqueue_script( 'gnadecapital-theme-slicknav', get_template_directory_uri() . '/resources/js/jquery.slicknav.js.gz', array(), '20150515', true );
		wp_enqueue_script( 'gnadecapital-theme-pretty-photo', get_template_directory_uri() . '/resources/js/jquery.pretty-photo.js.gz', array(), '20150515', true );
		wp_enqueue_script( 'gnadecapital-theme-myscript', get_template_directory_uri() . '/resources/js/script.js', array(), '20150515', true );
		remove_action('wp_head','_admin_bar_bump_cb');
	}
	add_action('wp_enqueue_scripts','GnadeTheme_scripts');
	

	/*  Get top ancestor */
	function get_top_ancestor_id(){
		global $post;
		
		if ($post->post_parent) {
				$ancestors = array_reverse(get_post_ancestors($post->ID));	
				return $ancestors[0];
		}
		return $post->ID;
	}
	/* check if page has children */
	function has_children(){
		global $post;
		 $pages = get_pages('child_of='.$post->ID);
		return COUNT($pages);
	}
	/* customise word excerpt word count link */
	function count_word_link(){
		return 34;
	}
	add_filter('excerpt_length','count_word_link');
	
	/* them setup */
	function GnadeTheme_setup(){

	   // adding the theme locations //
		register_nav_menus(array(
			'primary' => 'primary_menu',
			'footer' => 'footer_menu'
		));

		/* add featured image support */
		add_theme_support('post-thumbnails');
		add_image_size('small-thumbnail',180,120,true);
		add_image_size('banner-image',920,400,array('left','top'));
	}
	add_action('after_setup_theme','GnadeTheme_setup');
	require_once('wp_bootstrap_navwalker.php');
?>
<?php #if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start(); ?>