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
 * @package revampedpractice
 */

get_header();
?>
	<section class="container-fluid default-page-template">
		<div class="container">
			<div class="row">
				<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="<?php post_class('col-md-9'); ?>">
						<?php get_template_part('template-parts/content', get_post_type()); ?>
					</article>
					<?php 
						endwhile; 
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
				<aside class="col-md-3">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</section>
<?php
get_sidebar();
get_footer();
