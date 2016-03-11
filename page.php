<?php get_header(); ?>
  
  <?php get_template_part( 'content', 'intro' ); ?>

  <div class="band main">
    <section class="layout">
      <?php the_content(); ?>
    </section>
  </div>

<?php get_footer(); ?>