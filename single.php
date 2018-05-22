<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package revampedpractice
 */

get_header();
?>
	<section class="container-fluid single-post-template">
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
