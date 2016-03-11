<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="band heading">
    <section class="layout">
      <div class="title">
        <h1><?php the_title(); ?></h1>
      </div>
    </section>
  </div>

  <div class="band intro">
    <section class="layout">
      <article>
        <h2><?php the_field('introduction'); ?></h2>
      </article>
      <article class="panel">
        <!-- <p><?php the_field('overview'); ?></p> -->
        <h5>Key Information:</h5>
        <ul>
          <li>Date: <?php the_date(); ?></li>
          <li><?php the_tags('Work: '); ?></li>
          <li>URL: <?php the_field('url'); ?></li>
        </ul>
      </article>
    </section>
  </div>
    
  <div class="band main">
    <section class="layout">
      <article class="post-content">
        
        <?php the_content(); ?>
        
      </article>
    </section>
  </div>

	<div class="band extra testimonials">
    <section class="layout">
      <h5>testimonials</h5>
      <blockquote><?php the_field('customers_quote'); ?></blockquote>
      <cite><?php the_field('customers_name'); ?></cite>
    </section>
  </div>

  <div class="band green">
    <section class="layout">
      <?php
        $args = array(
        'post_type' => 'project',
        'post__not_in' => array($post->ID),
        'orderby'   => 'rand',
        'posts_per_page' => 3
        );
        $query = new WP_Query( $args );
        while ($query->have_posts()) : $query->the_post();
      ?>
        <article>
          <h3 class="post-title"><?php the_title(); ?></h3>
          <h5><?php the_tags(' '); ?></h5>
          <p><?php the_field('introduction'); ?></p>
          <a href="<?php the_permalink(); ?>" class="button">Read more</a>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>