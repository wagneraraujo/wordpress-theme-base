<?php
function wordpressify_resources()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script(
    'header_js',
    get_template_directory_uri() . '/js/header-bundle.js',
    null,
    1.0,
    false
  );
  wp_enqueue_script(
    'footer_js',
    get_template_directory_uri() . '/js/footer-bundle.js',
    null,
    1.0,
    true
  );
}

add_action('wp_enqueue_scripts', 'wordpressify_resources');

// Customize excerpt word count length
function custom_excerpt_length()
{
  return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function wordpressify_setup()
{
  // Handle Titles
  add_theme_support('title-tag');

  // Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 720, 720, true);
  add_image_size('square-thumbnail', 80, 80, true);
  add_image_size('banner-image', 1024, 1024, true);
  add_image_size('slide-image', 2560, 700, true);
}

add_action('after_setup_theme', 'wordpressify_setup');

show_admin_bar(false);

// Checks if there are any posts in the results
function is_search_has_results()
{
  return 0 != $GLOBALS['wp_query']->found_posts;
}

// Add Widget Areas
function wordpressify_widgets()
{
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar1',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));
}

add_action('widgets_init', 'wordpressify_widgets');


//remover sidebar
remove_action("woocommerce_sidebar", "woocommerce_get_sidebar");

//add class no woo
function add_container_row_classes(){
  echo "<div class='container'><div class='row'>";
}
add_action("woocommerce_before_main_content", "add_container_row_classes", 5);

//close container and row
function close_container_row(){
  echo "</div></div>";
}
add_action("woocommerce_after_main_content", "close_container_row", 5);

//menu
function simple_menu_config()
{
  register_nav_menus(array(
    "menu_header" => "Menu Principal",
    "menu_footer" => "Menu Rodape"
  ));

  //theme support
  add_theme_support("post-thumbnails");
  add_theme_support("woocommerce", array(
    "thumbnail_image_width" => 250,
    "single_image_width" => 200,
    "product_grid" => array(
      "default_columns" => 12,
      "min_columns" => 2,
      "max_columns" => 4,
    )
  ));
}
add_action("after_setup_theme", "simple_menu_config");

//class items menu
function simple_class_add_li($classes, $item, $args)
{
  $classes[] = "class1 ";
  return $classes;
}
add_action("nav_menu_css_class", "simple_class_add_li", 1, 3);

//class items a archor
function simple_class_add_archor($classes, $item, $args)
{
  $classes['class'] = "nav-link";
  return $classes;
}
add_action("nav_menu_link_attributes", "simple_class_add_archor", 1, 3);

/* include_once '' */
remove_action("woocommerce_before_shop_loop", "woocommerce_catalog_ordering", 30);

/* function webapptiv_remove_block_library_css() */
/* { */
/* wp_dequeue_style( 'wp-block-library' ); } */
/* add_action( 'wp_enqueue_scripts', 'webapptiv_remove_block_library_css' ); */

add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
   if ( !is_page('contato') ) {
    wp_deregister_script( 'contact-form-7' );
     }
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

include_once 'mod/modifications.php';
