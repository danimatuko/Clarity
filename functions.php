<?php
class MyTheme {
    // Constructor method to initialize theme setup
    public function __construct() {
        add_action('after_setup_theme', array($this, 'theme_setup'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('widgets_init', array($this, 'register_widget_areas'));
    }

    // Theme setup
    public function theme_setup() {
        // Add support for title tags
        add_theme_support('title-tag');

        // Add support for post thumbnails
        add_theme_support('post-thumbnails');

        // Register navigation menus
        register_nav_menus(array(
            'primary-menu' => esc_html__('Primary Menu', 'your-theme-textdomain'),
            // Add more menu locations as needed
        ));
    }

    // Enqueue styles
    public function enqueue_styles() {
        wp_enqueue_style('my-theme-style', get_stylesheet_uri());
        // You can enqueue additional styles here
        // wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css', array(), '1.0');
    }

    // Enqueue scripts
    public function enqueue_scripts() {
        // Enqueue JavaScript files as needed
        // wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/js/my-script.js', array('jquery'), '1.0', true);
    }

    // Register widget areas
    public function register_widget_areas() {
        // Register sidebar widget area
        register_sidebar(array(
            'name' => esc_html__('Sidebar Widget Area', 'your-theme-textdomain'),
            'id' => 'sidebar-widget-area',
            'description' => esc_html__('Add widgets here to appear in the sidebar.', 'your-theme-textdomain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }
}

// Instantiate the MyTheme class
$my_theme = new MyTheme();
