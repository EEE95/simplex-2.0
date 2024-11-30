<?php   
/**
 * Simplex 2.0 functions and definitions
 */

 if ( ! function_exists( 'simplex_setup' ) ) :
    function simplex_setup() {
        // Make theme available for translation.
        load_theme_textdomain( 'simplex', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title. 
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'simplex' ),
            'footer'  => esc_html__( 'Footer Menu', 'simplex' ),
            'header'  => esc_html__( 'Header Menu', 'simplex' ),
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set custom background.
        add_theme_support( 'custom-background', apply_filters( 'simplex_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Theme support for custom logo.
        add_theme_support( 'custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-height' => true,
            'flex-width'  => true,
        ] );

        // Theme support for custom header.
        add_theme_support( 'custom-header', [
            'default-image'          => '',
            'width'                  => 1600,
            'height'                 => 450,
            'flex-height'            => true,
            'flex-width'             => true,
            'default-color'          => 'ffffff',
        ] );

    }
add_action( 'after_setup_theme', 'simplex_setup');
endif;

function simplex_content_width() {
    // This variable is intended to be overruled from themes.
    // It's used to set the maximum width of content.
    $GLOBALS['content_width'] = apply_filters( 'simplex_content_width', 1170 );

}

add_action( 'after_setup_theme', 'simplex_content_width', 0 );

function simplex_sidebar_widgets_init() {
    //default sidebar
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'simplex' ),
        'id'            => 'default-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'simplex' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'simplex_sidebar_widgets_init' );

// Enqueue public scripts and styles.
function simplex_public_scripts() {
    //styles 
    wp_enqueue_style( 'default', get_stylesheet_uri() . '/assets/css/default.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'main', get_stylesheet_uri() . '/assets/css/main.css', [], wp_rand(), 'all' );

    //scripts
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], wp_rand(), true );
}

add_action( 'wp_enqueue_scripts', 'simplex_public_scripts' );

// Enqueue admin scripts and styles.
function simplex_admin_scripts() {
    
}

add_action( 'admin_enqueue_scripts', 'simplex_admin_scripts' );