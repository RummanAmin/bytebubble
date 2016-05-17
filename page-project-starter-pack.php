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
        
    <div class="band first">
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
      <section class="layout">
        <article>
          <h1><?php the_title(); ?></h1>
          <h2><?php the_field('introduction'); ?></h2>
          <div class="download">
            <a href="http://ul.to/z36bgxu5" class="button">Download</a>
            <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=byte_bubble; ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="button">Share</a>
          </div>
        </article>
        <article>
          
        </article>
      </section>
    </div>

    <div class="band second">
      <section class="layout">
        <article>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/pencil.svg" alt="">
          <h3>Easy to change</h3>
          <p>These documents are small, concise and available online, so changes are encouraged and easy to implement by anyone.</p>
        </article>
        <article>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/chat.svg" alt="">
          <h3>Promote discussions</h3>
          <p>At the core of every project is comms and these artefacts will create a catalyst for discussion between all stakeholders.</p>
        </article>
        <article>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/clipboard.svg" alt="">
          <h3>Cover all bases</h3>
          <p>Whether you're an Agency or a Freelancer, this pack contains all the documents you'll need to deliver a successful project.</p>
        </article>
      </section>
    </div>

    <div class="band third">
      <section class="layout">
        <article>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image_18.jpg" alt="">
        </article>
        <article>
          <h3>What's included</h3>
          <p>These documents cover Project Management, Design, Analysis, Research, Legal and Finance - but avoid being complicated. We've added some instructions to help just in case.</p>
          <ul>
            <li>&rsaquo; Project Overview</li>
            <li>&rsaquo; Questionnaire</li>
            <li>&rsaquo; User Stories</li>
            <li>&rsaquo; Style Tile</li>
            <li>&rsaquo; Wireframes</li>
            <li>&rsaquo; Contract</li>
            <li>&rsaquo; Invoice</li>
          </ul>
          <div class="download">
            <a href="http://ul.to/z36bgxu5" class="button">Download</a>
            <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=byte_bubble; ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="button">Share</a>
          </div>
        </article>
      </section>
    </div>

    <div class="band fourth">
      <section class="layout move-right">
        <article>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image_10.jpg" alt="">
        </article>
        <article>
          <h3>How we use it</h3>
          <p>We've been using these documents in an Agile development process for over 5 years now. It's important to note that this is done in an Iterative way. Documents are fluid and should evolve over time.</p>
          <p>We usually start with a conversation with the client and then ask them to complete the questionnaire. This usually gives us enough to put together a high level overview.</p>
          <p>Once approved, we break down the User Stories and concurrently work on Wireframes and Style Tile. The next logical step would be to create a prototype and build on that.</p>
        </article>
      </section>
    </div>

    <div class="band fifth">
      <section class="layout">
        <article>
          <div class="panel">
            <div class="icon-container">
              <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/folder.svg" alt="">
            </div>
            <div class="download">
              <p>We'd really appriciate it if you could share this pack with your friends online.</p>  
              <a href="http://ul.to/z36bgxu5" class="button">Download</a>
              <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=byte_bubble; ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="button">Share</a>
            </div>
          </div>
        </article>
        <article></article>
      </section>
    </div>

<?php get_footer(); ?>