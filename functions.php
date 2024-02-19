<?php
//svg handler
function cc_mime_types($mimes)
{
     $mimes['svg'] = 'image/svg+xml';
     return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//add dynamic title tag
function custom_title_tag_support()
{
     add_theme_support('title_tag');
}
add_action('after_theme_setup', 'custom_title_tag_support');

// register menu
function register_menus()
{
     register_nav_menus(
          array(
               'main-menu' => ('Main Menu'),
          )
     );
}
add_action('after_setup_theme', 'register_menus');

//acf options page
if (function_exists('acf_add_options_page')) {
     acf_add_options_page();
     acf_add_options_sub_page('Stopka');
     acf_add_options_sub_page('Logo');

}

// login
function my_login_logo()
{ ?>
     <style type="text/css">
          #login h1 a,
          .login h1 a {
               background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/src/assets/svg/artneo.svg");
               height: 65px;
               width: 320px;
               background-size: 320px 65px;
               background-repeat: no-repeat;
               padding-bottom: 30px;
          }
     </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');