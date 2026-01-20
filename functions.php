<?php
/**
 * Theme bootstrap file
 *
 * This file initializes the MarketingAgency theme.
 * It registers theme features and loads modular files.
 *
 * @package MarketingAgency
 */

/* ============================================================
   SAFETY CHECK
   ============================================================ */

/**
 * Prevent direct access to this file.
 * If WordPress is not loaded, ABSPATH will not be defined.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ============================================================
   THEME SETUP
   ============================================================ */

/**
 * Register theme supports and defaults.
 *
 * This function runs during the after_setup_theme hook,
 * which is the correct place to declare theme capabilities.
 *
 * @return void
 */
function marketingagency_theme_setup() {

	// Let WordPress manage the <title> tag.
	add_theme_support( 'title-tag' );

	// Enable featured images for posts and custom post types.
	add_theme_support( 'post-thumbnails' );

	// Enable modern HTML5 markup.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Enable support for a custom logo in the Customizer.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}

// Hook the setup function into WordPress.
add_action( 'after_setup_theme', 'marketingagency_theme_setup' );

/* ============================================================
   LOAD THEME FILES
   ============================================================ */

/**
 * Load required theme files.
 *
 * Keeps the theme modular and maintainable.
 *
 * @return void
 */
function marketingagency_load_files() {

	// Enqueue styles and scripts.
	require_once get_template_directory() . '/inc/enqueue.php';

	// Register custom post types.
	require_once get_template_directory() . '/inc/custom-post-types.php';

	// Register custom fields.
	require_once get_template_directory() . '/inc/custom-fields.php';
}

// Load files after the theme is set up.
add_action( 'after_setup_theme', 'marketingagency_load_files' );
