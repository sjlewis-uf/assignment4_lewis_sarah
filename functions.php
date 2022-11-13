<?php
/*=========================================
  Adding Stylesheets and Javascript Files
===========================================*/

function custom_theme_scripts(){
  //Bootstrap CSS
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*================================
Adds Featured Images
==================================*/
add_theme_support('post-thumbnails');

/*================================
Post Data Information
==================================*/
function post_data(){
  $archive_year = get_the_time('Y');
  $archive_month = get_the_time('m');
  $archive_day = get_the_time('d');
?>
  <p>Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a> | Published on: <a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>

<?php
}

/*================================
Custom Header Image
==================================*/
$custom_image_header = array(
  'width'  => 250,
  'height' => 250,
  'uploads'=> true
);
add_theme_support('custom-header', $custom_image_header)
?>
