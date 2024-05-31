<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

add_theme_support( 'custom-logo' );

function get_post_cat(Int $id) {
  if ($id) {
    $cat = get_the_category($id);
  }
  
  $r = $cat[0]->name;

  return $r;
}

function add_footer_menu_location() {
  register_nav_menus((
    array(
      'footer_menu' => __('Footer Menu')
    )
    ));
}
add_action('after_setup_theme', 'add_footer_menu_location');

function loadFontAwesome() {
  wp_enqueue_script('FontAwesome', 'https://kit.fontawesome.com/7c1bfc6a69.js');
}
add_action('wp_enqueue_scripts', 'loadFontAwesome');

function wpdocs_excerpt_more( $more ) {
  return '... <a href="'. get_the_permalink() .'" title="'. get_the_title() .'" class="font-semibold text-tvs-orange-1 text-base">Read More</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
