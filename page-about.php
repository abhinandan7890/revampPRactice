<?php
/**
 * Template Name: About Us
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
                  <img src="<?php echo get_template_directory_uri() ; ?>/images/downArrow.png" class="img-fluid d-block ml-auto mt-5"/>
              </div>
           </div>
           <div class="col-md-6 rmImage text-center">
               <img src="<?php echo $src[0]; ?>" class="img-fluid animated fadeInUpShort" data-id="2"/>
           </div>
       </div>
   </div>
    
</section>

<!-- TEAM -->
<section class="container-fluid PRteam animatedParent animateOnce" data-sequence="250">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="animated fadeInUpShort" data-id="1">Management Team</h2>
                <p class="animated fadeInUpShort" data-id="2"><?php if(get_field('management_team_excerpt')){ the_field('management_team_excerpt'); } ?></p>
            </div>
            <?php if( have_rows('team_members') ): $uniqueId = 532; $popup = '';?>
              <div class="col-md-12">
                <div class="team-owl-carousel owl-carousel owl-theme">
            <?php while ( have_rows('team_members') ) : the_row(); 
              $image = get_sub_field('member_profile_picture');
            ?>
                  <div class="item">
                    <img src="<?php echo $image['url']; ?>"/>
                    <div class="teamOverlay">
                      <div class="memberName"><?php the_sub_field('member_name'); ?></div>
                      <div class="memberDesignation"><?php the_sub_field('member_designation'); ?></div>
                      <div class="memberDetail mt-2">
                        <a class="prDbtn" data-target="#member<?php echo $uniqueId; ?>" data-toggle="modal"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- modal popup -->
                    <?php $popup = $popup . '<div class="modal fade" id="member'.$uniqueId.'" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.get_sub_field('member_name').'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">'.get_sub_field('member_bio').'
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>'; ?>
                    <!-- end of modal popup -->
            <?php $uniqueId++; endwhile; ?> </div></div> <?php endif; ?>
            <div class="col-md-10 offset-md-1">
                <p class="teampara">
                  <?php if(get_field('paragraph_below_team_slider')){ the_field('paragraph_below_team_slider'); } ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- All popup content -->
<?php echo $popup; ?>

<!-- GLOBAL PARTNER -->
<section class="container-fluid PRglobalPartner animatedParent animateOnce" data-sequence="250">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pnlogo.png" class="img-fluid animated fadeInUpShort" data-id="1"/>
            </div>
            <div class="col-md-8">
                <div class="partnerContent animated fadeInUpShort" data-id="2"><?php if(get_field('global_partner_excerpt')){ the_field('global_partner_excerpt'); } ?></div>
                  <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>our network<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>


<!-- 
  HISTORY & AWARDS
  To add awards and recognition slider call this page template
-->

<?php get_template_part( 'template-parts/awards', 'slider' ); ?>


<!-- BLOG -->

<section class="container-fluid homeBlog animatedParent animateOnce" data-sequence="250">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-3">
              <h3 class="animated fadeInUpShort" data-id="1">Blog</h3>
            </div>
            <?php 
            $blogQuery = new WP_Query( array( 'category_name' => 'blog', 'posts_per_page' => 2,  ) );
            $dataId = 1;
            if($blogQuery -> have_posts()) : while ($blogQuery -> have_posts()) : $blogQuery -> the_post();
              $dataId++;
              echo '<div class="col-md-4 animated fadeInUpShort" data-id="'.$dataId.'">';
              get_template_part( 'template-parts/archive', 'block' );
              echo '</div>';
            endwhile; endif; wp_reset_query();
            ?>
            <div class="col-md-4 notBlog">
                <div class="pt-3">
                  <h2 class="animated fadeInUpShort" data-id="4"><?php the_field('blog_highlight_label'); ?></h2>
                  <p class="blogDesc animated fadeInUpShort" data-id="5"><?php the_field('blog_highlight_excerpt'); ?></p>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- Call for lets talk section -->
<?php get_template_part('template-parts/letsTalk', 'section'); ?>
<?php
get_footer();