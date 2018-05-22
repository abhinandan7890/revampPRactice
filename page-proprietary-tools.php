<?php
/**
 * Template Name: Proprietary Tools
 *
 * @package revampedpractice
 */

get_header();
?>
<!-- Content -->
<section class="container-fluid pageContent animatedParent animateOnce" data-sequence="250">
   <div class="container">
       <div class="row">
           <div class="col-md-6">
              <div>
                  <h1 class="animated fadeInUpShort" data-id="1"><?php the_title(); ?></h1>
                  <?php 
                  global $post;
                    if (have_posts()) : while (have_posts()) : the_post();
                      if (has_post_thumbnail($post->ID)) {
                          $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                      }else{
                          $src[0] = get_template_directory_uri() . '/images/rm3.png';
                      }
                      echo '<div class="animated fadeInUpShort" data-id="2">'; the_content(); echo '</div>';
                    endwhile; endif;
                  ?>
              </div>
           </div>
           <div class="col-md-6 rmImage text-center">
               <img src="<?php echo $src[0]; ?>" class="img-fluid animated fadeInUpShort" data-id="2"/>
           </div>
       </div>
   </div>
    
</section>
	
	
<!-- Tools -->
<section class="container-fluid pToolsWrap animatedParent animateOnce" data-sequence="250">
    <div class="container">
        <div class="row align-items-end">
          <?php $sequence = 1; 
          if(have_rows('tool')) : while ( have_rows('tool') ) : the_row(); ?>
          <?php 
          // Getting image
          $image = get_sub_field('cover_image');
          ?>
            <div class="col-md-4 pTools animated fadeInUpShort" data-id="<?php echo $sequence; ?>">
                <h3><?php the_sub_field('name'); ?></h3>
                <img src="<?php echo $image["url"]; ?>" class="img-fluid"/>
                <p class="mt-4"><?php the_sub_field('excerpt'); ?></p>
                <a href="<?php the_sub_field('url'); ?>" class="prDbtn"><i class="fa fa-angle-left"></i>Visit<i class="fa fa-angle-right"></i></a>
            </div>
          <?php $sequence++; endwhile; endif; ?>
        </div>
    </div>
</section>

<!-- Call for lets talk section -->
<?php get_template_part('template-parts/letsTalk', 'section'); ?>
<?php
get_footer();