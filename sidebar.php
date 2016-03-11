<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="widget-area panel" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="widget-area panel">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="widget-area panel">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="widget-area panel twitter-feed">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>