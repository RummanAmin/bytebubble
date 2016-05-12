<?php get_header(); ?>

  <div class="band intro">
    <section class="layout">
      <article>
        <h1>Blog</h1>
        <h2>We hope you enjoy reading our posts as much as we enjoy writing them. We cover everything from the Web to Project Management and some random things in between.</h2>
      </article>
    </section>
  </div>

	<div class="band main">
	  <section class="layout">
	    <article>
	    	<ul class="list-grid">
			    <?php get_template_part( 'content', 'blog' ); ?>
	    	</ul>
	    	<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) : ?>
		    	<div class="pagination">
		    		<hr>
		      	<?php posts_nav_link(); ?>
		      </div>

				<?php endif; ?>
	    </article>
	    <article>
	    	<?php get_sidebar(); ?>
	    </article>
	  </section>
	</div>

<?php get_footer(); ?>