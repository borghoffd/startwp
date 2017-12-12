<?php get_header(); ?>
  <div class="sidebar-container">
    <?php get_sidebar(); ?>
  </div> <!-- sidebar-container -->
	<div class="content-container">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
		endwhile; endif;
		?>
	</div> <!-- content-container -->
<?php get_footer(); ?>
