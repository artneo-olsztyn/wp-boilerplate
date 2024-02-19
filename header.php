<!DOCTYPE html>
<html lang="pl">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="description" content="frontend">
     <!-- <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/> -->
     <!--usuwa stylowanie numeru telefonu z edga-->
     <meta name="format-detection" content="telephone=no">
     <!-- usunąć przy podpięciu -->
     <meta name="robots" content="index, nofollow">
     <!--koniecznie dodać przy podpięciu, definiuje kolor belki w przeglądarce mobilnej-->
     <meta name="theme-color" content="#FFF">
     <meta name="msapplication-navbutton-color" content="#FFF">
     <meta name="apple-mobile-web-app-status-bar-style" content="#FFF">



     <?php if (is_front_page()): ?>

     <?php endif; ?>


     <?php wp_head() ?>
     <link rel="stylesheet" href=" <?php echo get_stylesheet_directory_uri(); ?>/build/style-index.css">
</head>

<body <?php body_class(); ?>>
     <header>
          <nav class="uk-navbar-container uk-margin">
               <div class="uk-container">
                    <div uk-navbar="" class="uk-navbar">
                         <div class="uk-navbar-left">

                              <a class="uk-navbar-item uk-logo" href="#">Logo</a>

                         </div>
                         <div class="desktop-menu uk-navbar-center hidden-sm">
                              <?php
                              wp_nav_menu(
                                   array(
                                        'theme_location' => 'main-menu',
                                        'menu_id' => 'main-menu',
                                        'container' => 'nav',
                                        'container_class' => 'main-menu-container',
                                        'menu_class' => 'main-menu',
                                   )
                              );
                              ?>
                         </div>
                         <div class="mobile-menu uk-navbar-right uk-hidden@s">
                              <a class="" uk-toggle="target: #offcanvas-usage" href="#">
                              <span uk-icon="menu"></span>
                              </a>

                              <div id="offcanvas-usage" uk-offcanvas="overlay: true">
                                   <div class="uk-offcanvas-bar">

                                        <button class="uk-offcanvas-close" type="button" uk-close></button>

                                        <?php
                                        wp_nav_menu(
                                             array(
                                                  'theme_location' => 'main-menu',
                                                  'menu_id' => 'main-menu',
                                                  'container' => 'nav',
                                                  'container_class' => 'main-menu-container',
                                                  'menu_class' => 'main-menu',
                                             )
                                        );
                                        ?>

                                   </div>
                              </div>

                         </div>
                    </div>
               </div>
          </nav>
     </header>