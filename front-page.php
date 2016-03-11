<?php get_header(); ?>

	<div class="band heading">
    <section class="layout">
      <div class="title">
        <h1>Welcome</h1>
      </div>
    </section>
  </div>

  <div class="band intro">
    <section class="layout">
      <article>
        <h2><?php the_field('introduction'); ?></h2>
      </article>
      <!-- <article>
        <p><?php the_field('overview'); ?></p>
      </article> -->
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/browser.svg" alt="">
        <h3>Web design</h3>
        <p>Our bread and butter. Tell us your ideas and we'll transform them in to an beautiful, engaging and reliable website.</p>
      </article>
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/adjustments.svg" alt="">
        <h3>Hosting & Support</h3>
        <p>We'll help you keep your website up and running so your customers can reach you. Bugs? We'll take care of those as well.</p>
      </article>
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/linegraph.svg" alt="">
        <h3>Consultancy</h3>
        <p>If you need someone to help you manage a project, review your code or run training sessions - Give us a call.</p>
      </article>
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/tools.svg" alt="">
        <h3>Branding</h3>
        <p>Your organisation is one of a kind, so make it memorable with consistent branding that sends the right message.</p>
      </article>
    </section>
  </div>

  <div class="band background">
    <section class="layout"></section>
  </div>

  <div class="band">
    <section class="layout">
      <h2>Our projects</h2>
      <div class="home-projects">
        <ul class="list-grid">
          <?php
            $args = array(
            'post_type' => 'project',
            'post__not_in' => array($post->ID),
            'posts_per_page' => 2
            );
            $query = new WP_Query( $args );
            while ($query->have_posts()) : $query->the_post();
          ?>
            <li>
              <article>
                <h3 class="post-title"><?php the_title(); ?></h3>
                <h5><?php the_tags(' '); ?></h5>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </article>
              <article>
                <!-- <p><?php the_field('introduction'); ?></p> -->
                <a href="<?php the_permalink(); ?>" class="button">Read more</a>
              </article>
            </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>
  </div>

  <div class="band background background-2">
    <section class="layout"></section>
  </div>

  <div class="band extra">
    <section class="layout">
      <h2>From the blog</h2>
      <div>
        <?php $the_query = new WP_Query( 'showposts=4' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <article>
            <h3 class="post-title"><?php the_title(); ?></h3>
            <h5><?php the_date(); ?></h5>
            <p><?php the_field('introduction'); ?></p>
            <a href="<?php the_permalink(); ?>" class="button">Read more</a>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </section>
  </div>

<?php get_footer(); ?>