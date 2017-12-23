<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ready
 */

get_header(); ?>

	
    <section>
      <div class="container">
        <div class="col-md-8">
          <div class="blog-posts">
			<?php while (have_posts()) : the_post(); ?>
	            <?php the_content(); ?>
	        <?php endwhile; ?>
          </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
        	<?php get_sidebar(); ?>
      </div>
    </section>
	

<?php get_footer();
