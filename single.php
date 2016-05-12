<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="band intro">
    <section class="layout">
      <article>
        <h1><?php the_title(); ?></h1>
        <h2><?php the_field('introduction'); ?></h2>
        <hr>
        <ul>
          <li>Date: <?php the_date(); ?></li>
          <li>Category: <?php the_category(', '); ?></li>
          <li><?php the_tags(); ?></li>
        </ul>
      </article>
      <article>
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

	<div class="band extra">
    <section class="layout">
      <h5>Comments</h5>

      <?php 
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    </section>
  </div>

  <div class="band green">
    <section class="layout">
      <?php
        $args = array(
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3
        );
        $query = new WP_Query( $args );
        while ($query->have_posts()) : $query->the_post();
      ?>
        <article>
          <h3 class="post-title"><?php the_title(); ?></h3>
          <h5><?php the_date(); ?></h5>
          <p><?php the_field('introduction'); ?></p>
          <a href="<?php the_permalink(); ?>" class="button">Read more</a>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>