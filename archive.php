<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<div class="band heading">
			  <section class="layout">
			    <div class="title">
			      <h1>Archives</h1>
			    </div>
			  </section>
			</div>

			<div class="band intro">
			  <section class="layout">
			    <article>
			      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error illum ipsa, fuga repellat dignissimos inventore.</h2>
			    </article>
			    <article>
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			    </article>
			  </section>
			</div>

			<div class="band main">
				<section class="layout">
					<article>
						<ul class="post-list">
							<?php
								// Start the Loop.
								while ( have_posts() ) : the_post();
						
									echo "<li>";
									echo "<h3>";the_title();echo "</h3>";
									echo "<h5>";the_date();echo "</h5>";
									the_excerpt();
									echo "<a href=";the_permalink(); echo '>Read more</a>';
									echo "</li>";
						
								// End the loop.
								endwhile;
								
								// Previous/next page navigation.
								the_posts_pagination( array(
									'prev_text'          => __( 'Previous page' ),
									'next_text'          => __( 'Next page' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
								) );
							
							endif; ?>
						</ul>
					</article>
					<article>
						<div class="panel">
							<h5>Archives by Category</h5>
							<ul> <?php wp_list_categories('title_li='); ?></ul>

							<h5>Archives by Year</h5>
							<ul><?php wp_get_archives('type=yearly'); ?></ul>
							
							<h5>Archives by Month</h5>
							<ul><?php wp_get_archives('type=monthly'); ?></ul>   
						</div>
					</article>
				</section>
			</div>

<?php get_footer(); ?>