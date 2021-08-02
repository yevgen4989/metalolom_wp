<?php
include('inc/include.php');
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// Use a quality setting of 75 for WebP images.
function filter_webp_quality( $quality, $mime_type ) {
    if ( 'image/webp' === $mime_type ) {
        return 75;
    }
    return $quality;
}
add_filter( 'wp_editor_set_quality', 'filter_webp_quality', 10, 2 );

// Ensure all network sites include WebP support.
add_filter(
    'site_option_upload_filetypes',
    function ( $filetypes ) {
        $filetypes = explode( ' ', $filetypes );
        if ( ! in_array( 'webp', $filetypes, true ) ) {
            $filetypes[] = 'webp';
            $filetypes   = implode( ' ', $filetypes );
        }

        return $filetypes;
    }
);

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

//function insert_jquery(){
//    wp_enqueue_script('jquery', false, array(), false, false);
//    wp_enqueue_script('jquery-core', false, array(), false, false);
//}
//add_filter('wp_enqueue_scripts','insert_jquery',1);

add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );

function change_default_jquery( ){
    if ( !is_admin() ) {
        wp_dequeue_script( 'jquery');
        wp_deregister_script( 'jquery');
    }
}


/**
 * Enqueue scripts.
 */
function tailpress_enqueue_scripts() {
	wp_enqueue_style( 'tailpress', tailpress_get_mix_compiled_asset_url( 'css/all.css' ), array(), false );
	wp_enqueue_script( 'jquery', tailpress_get_mix_compiled_asset_url( 'js/app.js' ), array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts', PHP_INT_MAX );

/**
 * Get mix compiled asset.
 *
 * @param string $path The path to the asset.
 *
 * @return string
 */
function tailpress_get_mix_compiled_asset_url( $path ) {
	$path                = '/' . $path;
	$stylesheet_dir_uri  = get_stylesheet_directory_uri();
	$stylesheet_dir_path = get_stylesheet_directory();

	if ( ! file_exists( $stylesheet_dir_path . '/mix-manifest.json' ) ) {
		return $stylesheet_dir_uri . $path;
	}

	$mix_file_path = file_get_contents( $stylesheet_dir_path . '/mix-manifest.json' );
	$manifest      = json_decode( $mix_file_path, true );
	$asset_path    = ! empty( $manifest[ $path ] ) ? $manifest[ $path ] : $path;

	return $stylesheet_dir_uri . $asset_path;
}

/**
 * Theme setup.
 */
function tailpress_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style();

    acf_add_options_page(array(
        'page_title' => 'Баннер на главной',
        'menu_slug' => 'banner',
        'menu_title' => 'Баннер на главной',
        'capability' => 'edit_posts',
        'position' => '',
        'parent_slug' => '',
        'icon_url' => '',
        'redirect' => true,
        'post_id' => 'banner',
        'autoload' => true,
        'update_button' => 'Обновить',
        'updated_message' => 'Сохранено',
    ));
}

function cw_post_type() {

    register_post_type( 'type_metal',
        array(
            'labels' => array(
                'name' => __( 'Тип металла' ),
                'singular_name' => __( 'Тип металла' )
            ),
            'has_archive' => false,
            'public' => true,
            'rewrite' => array('slug' => 'type-metal'),
            'show_in_rest' => true,
            'supports' => array('editor', 'revisions', 'title', 'custom-fields', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'page-attributes', 'post-formats')

        )
    );

}
add_action( 'init', 'cw_post_type' );


add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );
