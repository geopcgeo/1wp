<?php
/**
 * onevoice functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Onevoice 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * onevoice only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'onevoice_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Onevoice 1.0
 */
function onevoice_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on onevoice, use a find and replace
	 * to change 'onevoice' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'onevoice', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'onevoice' ),
		'social'  => __( 'Social Links Menu', 'onevoice' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	$color_scheme  = onevoice_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'onevoice_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', onevoice_fonts_url() ) );
}
endif; // onevoice_setup
add_action( 'after_setup_theme', 'onevoice_setup' );

/**
 * Register widget area.
 *
 * @since Onevoice 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function onevoice_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'onevoice' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'onevoice' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Dashboard Sidebar 1', 'onevoice' ),
		'id'            => 'dashboard-sidebar-1',
		'description'   => __( 'Add widgets here to appear in your dashboard sidebar 1.', 'onevoice' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Dashboard Sidebar 2', 'onevoice' ),
		'id'            => 'dashboard-sidebar-2',
		'description'   => __( 'Add widgets here to appear in your dashboard sidebar 2.', 'onevoice' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Dashboard Sidebar 3', 'onevoice' ),
		'id'            => 'dashboard-sidebar-3',
		'description'   => __( 'Add widgets here to appear in your dashboard sidebar 3.', 'onevoice' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'rareRelated', 'onevoice' ),
		'id'            => 'rareRelated-sidebar',
		'description'   => __( 'Add widgets here to appear in your dashboard sidebar 3.', 'onevoice' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	

}
add_action( 'widgets_init', 'onevoice_widgets_init' );



add_action('init', 'evidance_education');
function evidance_education() 
{
  $labels = array(
    'name' => _x('Curate Evidance & Education', 'Onevoice'),
    'singular_name' => _x('Evidance & Education', 'Onevoice'),
    'add_new' => _x('Add New', 'Onevoice'),
    'add_new_item' => __('Add New Evidance & Education'),
    'edit_item' => __('Edit Evidance & Education'),
    'new_item' => __('New Evidance & Education'),
    'view_item' => __('View Evidance & Education'),
    'search_items' => __('Search Evidance & Education'),
    'not_found' =>  __('No Evidance & Education found'),
    'not_found_in_trash' => __('No Evidance & Education found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'page',
    'hierarchical' => false,
    'menu_position' => 20,
	'has_archive' => true,
    'supports' => array('title','editor','excerpt','revisions')
  ); 
  register_post_type('evidance-education',$args);

  register_taxonomy('evidance-categories', array('evidance-education'), array('hierarchical' => true, 'label' => _x('Categories', 'Onevoice'), 'singular_label' => _x('Category', 'Onevoice'), 'rewrite' => array('slug' => 'evidance-categories')));
}

	

if ( ! function_exists( 'onevoice_fonts_url' ) ) :
/**
 * Register Google fonts for onevoice.
 *
 * @since Onevoice 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function onevoice_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'onevoice' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'onevoice' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'onevoice' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'onevoice' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since onevoice 1.1
 */
function onevoice_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'onevoice_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Onevoice 1.0
 */
function onevoice_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'onevoice-fonts', onevoice_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'onevoice-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'onevoice-ie', get_template_directory_uri() . '/css/ie.css', array( 'onevoice-style' ), '20141010' );
	wp_style_add_data( 'onevoice-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'onevoice-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'onevoice-style' ), '20141010' );
	wp_style_add_data( 'onevoice-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'onevoice-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'onevoice-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'onevoice-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'onevoice-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'onevoice' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'onevoice' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'onevoice_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Onevoice 1.0
 *
 * @see wp_add_inline_style()
 */
function onevoice_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'onevoice-style', $css );
}
add_action( 'wp_enqueue_scripts', 'onevoice_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Onevoice 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function onevoice_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'onevoice_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Onevoice 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function onevoice_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'onevoice_search_form_modify' );



add_filter('bp_activity_time_since', 'bp_activity_time_since_newformat', 10, 2);
function bp_activity_time_since_newformat( $time_since, &$actvitiy ) {
 
        // you can change the date format to "Y-m-d H:i:s"
	$time_since = '<span class="time-since">' .  date_i18n("F j, Y  H:i:s", strtotime( $actvitiy->date_recorded ) ) . '</span>';
	return $time_since;
}
 
/**
 * Implement the Custom Header feature.
 *
 * @since Onevoice 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Onevoice 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Onevoice 1.0
 */
require get_template_directory() . '/inc/customizer.php';
