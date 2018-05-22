<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package revampedpractice
 */

get_header();
?>
<section class="container-fluid taxContainer animatedParent animateOnce" data-sequence="250">
   <div class="container">
       <div class="row">
           <div class="col-md-9 taxContent">
              <div>
                <h1 class="animated fadeInTopShort" data-id="1"><?php the_archive_title(); ?></h1>
                <?php the_archive_description('<div class="taxonomy-description animated fadeInTopShort" data-id="2">', '</div>'); ?>
                <img src="<?php echo get_template_directory_uri() ; ?>/images/downArrow.png" class="img-fluid d-block ml-auto mt-5 animated fadeInTopShort" data-id="3"/> 
              </div>
           </div>
       </div>
   </div>
</section>
<!-- Archive Container -->
	<section class="container-fluid archiveGrid">
		<div class="container">
			<div class="row">
<?php if ( have_posts() ) : 
	/* Start the Loop */
		while ( have_posts() ) : the_post();
			echo '<div class="col-md-4">';
			get_template_part( 'template-parts/archive', 'block' );
			echo '</div>';
		endwhile;
			// the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
			</div>
		</div>
	</section>
<!-- Call for lets talk section -->
<?php 
get_template_part('template-parts/letsTalk', 'section'); 
get_footer();