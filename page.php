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
 * @package revampedpractice
 */

get_header();
?>
	<section class="container-fluid default-page-template">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9'); ?>>
						<?php get_template_part('template-parts/content', get_post_type()); ?>
					</article>
				<?php endwhile; ?>
				<aside class="col-md-3">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</section>
<?php
get_footer();
