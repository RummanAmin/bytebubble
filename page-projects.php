<?php get_header(); ?>  
  
  <?php get_template_part( 'content', 'intro' ); ?>

  <div class="band main">
    <section class="layout">
      <ul class="list-grid">
        <?php
          $args = array(
          'post_type' => 'project',
          'posts_per_page' => 5
          );
          $query = new WP_Query( $args );
          while ($query->have_posts()) : $query->the_post();
        ?>
          <li>
            <article>
              <h3 class="post-title"><?php the_title(); ?></h3>
              <h5><?php the_tags(' '); ?></h5>
              <p><?php the_field('introduction'); ?></p>
              <a href="<?php the_permalink(); ?>" class="button">Read more</a>
            </article>
            <article>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            </article>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>

<?php get_footer(); ?>