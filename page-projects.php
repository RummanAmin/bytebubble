<?php get_header(); ?>  
  
  <?php get_template_part( 'content', 'intro' ); ?>

  <div class="band main">
    <section class="layout">
      <ul class="list-grid">
        <?php
          $args = array(
          'post_type' => 'project',
          'posts_per_page' => 6
          );
          $query = new WP_Query( $args );
          while ($query->have_posts()) : $query->the_post();
        ?>
          <li>
            <div class="blog_item">
              <a class="full_link" href="<?php the_permalink(); ?>"></a>
              <div class="abs_bg"><?php the_post_thumbnail(); ?></div>
              <div class="blog_item_inner">
                <h3 class="post-title"><?php the_title(); ?></h3>
                <h5><?php the_tags(' '); ?></h5>
              </div>
            </div>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>

<?php get_footer(); ?>