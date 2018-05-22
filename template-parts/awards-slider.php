<section class="container-fluid PRawardHistory">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>history & awards</h2>
            </div>
            <div class="col-md-12 mt-4">
                <div class="award-owl-carousel owl-carousel owl-theme">
                  <?php $awards = new WP_Query( array('post_type' => 'award', 'posts_per_page'=>-1) ); 
                  if ( $awards -> have_posts()) : while ( $awards -> have_posts()) : $awards -> the_post();
                    if (has_post_thumbnail($post->ID)) {
                          $src1 = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                      }else{
                          $src1[0] = get_template_directory_uri() . '/images/award1.png';
                      }
                    ?>
                  <div class="item">
                   <h5><?php if(get_field('year_of_recognition')) { the_field('year_of_recognition');} ?></h5>
                    <img src="<?php echo $src1[0]; ?>">
                      <div class="awardSdETAIL">
                          <p><?php the_title(); ?></p>
                      </div> 
                  </div>
                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>