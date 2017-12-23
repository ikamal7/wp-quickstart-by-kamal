<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
	            <?php get_template_part( 'template-parts/content', get_post_format() ) ?>
	        <?php endwhile; ?>
          </div>

          <ul class="pagination">
            <?php the_posts_pagination( array(
                'prev_text'   => '<i class="ti-arrow-left"></i>',    
                'next_text'   => '<i class="ti-arrow-right"></i>',
                'screen_reader_text'  => ' ',
                'type'          => 'list'    
              ) ); ?>
          </ul>
        </div>

        <div class="col-md-3 col-md-offset-1">
        	<?php get_sidebar( ); ?>
      </div>
    </section>




<?php 
get_footer();
