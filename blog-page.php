<?php
/**
 * Template Name: Blog Page
 *
 * @package revampedpractice
 */

get_header();
?>
<!-- BLOG POST UNDER BLOG CATEGORY -->
<section class="container-fluid blogSection animatedParent animateOnce" data-sequence="250">
    <div class="container">
          <?php  
            $args = array(
              'posts_per_page' => 4, 
              'category_name' => 'blog'
            );
            $q = new WP_Query( $args);
            $blogCounter = 1;
            if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post();
              if($blogCounter == 1){
                // Displaying the big block
                echo '<div class="row animated fadeInTopShort" data-id="1">';
                get_template_part('template-parts/archive', 'bigBlock');
                echo '</div>';
              } else if($blogCounter == 2){
                // Creating the row around small block
                echo '<div class="row animated fadeInTopShort" data-id=2>';
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
              } else if($blogCounter == 4){
                // closing row for small blocks
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
                echo '</div>';
              } else {
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
              }
              $blogCounter++;
            endwhile; endif; wp_reset_postdata();
          ?>
    </div>
</section>

<!-- BLOG POST UNDER NEWS CATEGORY -->
<section class="container-fluid newsSection animateOnce animatedParent" data-sequence="250">
    <div class="container">
      <div class="row animated fadeInTopShort" data-id="1"><div class="col-md-12"><h2>News</h2></div></div>
          <?php  
            $args = array(
              'posts_per_page' => 4, 
              'category_name' => 'news'
            );
            $q = new WP_Query( $args);
            $blogCounter = 1;
            if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post();
              if($blogCounter == 1){
                // Displaying the big block
                echo '<div class="row animated fadeInTopShort" data-id="2">';
                get_template_part('template-parts/archive', 'bigBlock');
                echo '</div>';
              } else if($blogCounter == 2){
                // Creating the row around small block
                echo '<div class="row animated fadeInTopShort" data-id="3">';
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
              } else if($blogCounter == 4){
                // closing row for small blocks
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
                echo '</div>';
              } else {
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
              }
              $blogCounter++;
            endwhile; endif; wp_reset_postdata();
          ?>
    </div>
</section>

<!-- BLOG POST UNDER PODCAST CATEGORY -->
<section class="container-fluid podcastSection animatedParent animateOnce" data-sequence="250">
    <div class="container">
      <div class="row animated fadeInTopShort" data-id="1"><div class="col-md-12"><h2>Podcast</h2></div></div>
          <?php  
            $args = array(
              'posts_per_page' => 4, 
              'category_name' => 'blog'
            );
            $q = new WP_Query( $args);
            $blogCounter = 1;
            if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post();
              if($blogCounter == 1){
                // Displaying the big block
                echo '<div class="row animated fadeInTopShort" data-id="2">';
                get_template_part('template-parts/archive', 'bigBlock');
                echo '</div>';
              } else if($blogCounter == 2){
                // Creating the row around small block
                echo '<div class="row animated fadeInTopShort" data-id="3">';
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
              } else if($blogCounter == 4){
                // closing row for small blocks
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
                echo '</div>';
              } else {
                echo '<div class="col-md-4">';
                get_template_part('template-parts/archive', 'block');
                echo '</div>';
              }
              $blogCounter++;
            endwhile; endif; wp_reset_postdata();
          ?>
    </div>
</section>


<!-- LIFE@PRACTICE -->

<section class="container-fluid lifeaPr">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2 class="">LIFE@PRACTICE</h2>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="plyr__video-embed" id="player">
                    <iframe src="<?php if(get_field('video_url')){ the_field('video_url'); } ?>" allowfullscreen allowtransparency allow="autoplay"></iframe>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 pt-3 text-center">
                <p><?php if(get_field('video_excerpt')){ the_field('video_excerpt'); } ?></p>
                <a href="<?php if(get_field('explore_link')){ the_field('explore_link'); } else { echo '#'; } ?>" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
