<?php
/*
 * 
 *Template Name: Test

 *
 *
 */
get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">
	<?php the_content(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' ); ?>
    <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
