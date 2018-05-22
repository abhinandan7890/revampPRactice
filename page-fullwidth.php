<?php
/**
 * Template Name: About Us
 *
 * @package revampedpractice
 */

get_header();
?>
<section class="container-fluid default-page-template">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="<?php post_class('col-md-12'); ?>">
						<?php get_template_part('template-parts/content', get_post_type()); ?>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php
get_footer();