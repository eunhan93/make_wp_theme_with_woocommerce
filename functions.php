<?php


function simple_bootstrap_theme_load_scripts(){

  // css files
  wp_enqueue_style("bootstrap", get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], '1.0', 'all');
  wp_enqueue_style("blog-home", get_template_directory_uri() . '/assets/css/blog-home.css', [], '1.0', 'all');
  wp_enqueue_style("theme-style", get_stylesheet_uri(), [], "all");

  // js files
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], '1.0', true);

}

add_action('wp_enqueue_scripts', 'simple_bootstrap_theme_load_scripts');


function simple_bootstrap_theme_nav_config(){
  register_nav_menus(array(
    "sbt_primary_menu_id" => "SBT Primary Menu(Top Memu)",
    "sbt_secondary_menu_id" => "SBT Sidebar Menu",
  ));

  add_theme_support("post-thumbnails");

  add_theme_support('woocommerce', [
    'thumbnail_image_width' => 150,
    'single_image_width' => 200,
    'product_grid' => [
      
    ]
  ]);
}

add_action('after_setup_theme', 'simple_bootstrap_theme_nav_config');


function simple_bootstrap_theme_add_li_class($classes, $item, $args){
    $classes[] = 'nav-item sbt-theme';
    return $classes;
}

add_filter('nav_menu_css_class', 'simple_bootstrap_theme_add_li_class', 1, 3);


function simple_bootstrap_theme_add_anchor_class($classes, $item, $args){
  $classes['class'] = 'nav-link sbt-link-class';
  return $classes;
}

add_filter('nav_menu_link_attributes', 'simple_bootstrap_theme_add_anchor_class', 1, 3);