<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="page">
      
      <div class="band top">
        <header class="layout">
          <a href="<?php echo esc_url( home_url() ) ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo_letters.svg"></a>
          <a href="#" class="open-panel open-icon"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/menu.svg"></a>
          <nav>
            <a href="#" class="close-panel close-icon"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/close.svg"></a>
            <?php 

              $defaults = array(

                'container' => '',
                'theme_location' => 'main-menu'

              );

              wp_nav_menu ( $defaults );

            ?>

            <div class="menu-social">
              <hr>
              <ul class="contact-info">
                <li>
                  <a href="tel: 07961916342">T: +44 (0)20 7510 7362</a>
                </li>
                <li>
                  <a href="mailto:info@bytebubble.co.uk?Subject=Hello">E: info@bytebubble.co.uk</a>
                </li>
              </ul>
              <ul>          
                <li><a href="https://www.instagram.com/bytebubble"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/instagram-white.svg"></a></li>  
                <li><a href="https://www.twitter.com/byte_bubble"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/twitter-white.svg"></a></li>        
                <li><a href="https://www.facebook.com/bytebubble"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/facebook-white.svg"></a></li>
              </ul>
            </div>
          </nav>
        </header>
      </div>