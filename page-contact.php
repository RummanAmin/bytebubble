<?php get_header(); ?>  
  
<div class="band intro">
  <section class="layout">
    <article>
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('introduction'); ?></h2>
    </article>
    <article>
      <p><?php the_field('overview'); ?></p>
    </article>
  </section>
</div>

  <div class="band extra">
    <section class="layout">
      <?php echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
    </section>
  </div>

  <div class="instagram">
    <section>
      <?php echo do_shortcode('[instagram-feed]'); ?>
    </section>
  </div>

<?php get_footer(); ?>