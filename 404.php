<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package revampedpractice
 */

get_header();
?>
	<section class="container-fluid default-page-template">
		<div class="container">
			<div class="row">
				<?php // while ( have_posts() ) : the_post(); ?>
					<article class="col-md-12 error-404 not-found">
						<header>
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'revampedpractice' ); ?></h1>
						</header>
						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'revampedpractice' ); ?></p>
						</div>
					</article>
				<?php // endwhile; ?>
			</div>
		</div>
	</section>
<?php
get_footer();
