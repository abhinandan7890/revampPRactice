<?php


get_header();
$queried_object = get_queried_object();
$current_term_id = $queried_object->term_id;
// Check for second level term
if($queried_object->parent > 0){ ?>
  <section class="container-fluid taxContainer animatedParent animateOnce" data-sequence="250">
   <div class="container">
       <div class="row term_child_content">
          <div class="col-md-12">
            <?php // Breadcrumb function
            if ( function_exists('yoast_breadcrumb') )
              { 
                yoast_breadcrumb('<div class="breadcrumbs">','</div>'); 
              }
            ?>
          </div>
      <div class="col-md-10 singleProgramPage">
        <h1 class="animated fadeInTopShort" data-id="1"><?php the_archive_title(); ?></h1>
        <?php
        // Taxonomy Image 
            $cat_image1 = get_field('category_image', 'solutions' . '_' . $current_term_id);
              if(empty($cat_image1['url'])){
                $cat_image1['url'] = '/wp-content/themes/revampedpractice/images/rm3.png';
              }
            ?>
            <img src="<?php echo $cat_image1['url']; ?>" class="img-fluid animated fadeInTopShort" data-id="2"/>
            <!-- Taxonomy description -->
        <?php the_archive_description('<div class="taxonomy-description animated mt-3 fadeInTopShort" data-id="3">', '</div>'); ?>
      </div>
       </div>
       <div class="row otherPrograms">
        <div class="col-md-12 opTitle"><h3>Other Programs</h3></div>
        <div class="col-md-12">
            <div class="other-program-owl-carousel owl-carousel owl-theme">
                <div class="item">
                    <h6>message development</h6>
                    <img src="<?php echo get_template_directory_uri();?>/images/rm2.png " class="img-fluid"/>
                </div>
                <div class="item">
                    <h6>message development</h6>
                    <img src="<?php echo get_template_directory_uri();?>/images/rm2.png " class="img-fluid"/>
                </div>
                <div class="item">
                    <h6>message development</h6>
                    <img src="<?php echo get_template_directory_uri();?>/images/rm2.png " class="img-fluid"/>
                </div>
                <div class="item">
                    <h6>message development</h6>
                    <img src="<?php echo get_template_directory_uri();?>/images/rm2.png " class="img-fluid"/>
                </div>
                <div class="item">
                    <h6>message development</h6>
                    <img src="<?php echo get_template_directory_uri();?>/images/rm2.png " class="img-fluid"/>
                </div>
            </div>
        </div>
        <?php

        ?>
       </div>
   </div>
</section>
<!-- End of child term page template -->
  <?php
} else {
?>
<!-- SOLUTIONS CONTENT -->
<section class="container-fluid taxContainer">
   <div class="container">
       <div class="row">
           <div class="col-md-6 taxContent animatedParent animateOnce" data-sequence="250">
              <div>
                <h1 class="animated fadeInTopShort" data-id="1"><?php the_archive_title(); ?></h1>
                <p><?php the_archive_description('<div class="taxonomy-description animated fadeInTopShort" data-id="2">', '</div>'); ?></p>
                <img src="<?php echo get_template_directory_uri() ; ?>/images/downArrow.png" class="img-fluid d-block ml-auto mt-5 animated fadeInTopShort" data-id="3"/> 
              </div>
           </div>
           <div class="col-md-6 taxImage rmImage text-center">
            <?php
            $cat_image1 = get_field('category_image', 'solutions' . '_' . $current_term_id);
              if(empty($cat_image1['url'])){
                $cat_image1['url'] = '/wp-content/themes/revampedpractice/images/rm3.png';
              }
            ?>
               <img src="<?php echo $cat_image1['url']; ?>" class="img-fluid animated fadeInTopShort" data-id="1"/>
           </div>
       </div>
   </div>
    
</section>


<!-- PUBLIC POLICY AND ADVOCACY and EMPLOYEE PROGRAM -->
<?php
$title = get_the_archive_title();
switch ($title) {
    case 'Reputation Management':
        ?>
        <section class="container-fluid ppAndAdvocacy">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>public policy and advocacy</h2>
              </div>
              <div class="col-md-12 card-columns advocacyContent">
                <?php the_field('public_policy_and_advocacy_content') ?>
              </div>
              <div class="col-md-12">
                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </section>
    <?php
    break;

    case 'Employee Communications':
      ?>
      <section class="container-fluid ec-programs">
        <div class="container">
          <div class="row">
            <?php
            while(the_repeater_field('employee_communication_-_grid', 'solutions' . '_' . $current_term_id)): ?>
            <div class="col-md-4 eachProgram">
              <!-- Title -->
              <?php if(get_sub_field('grid_title', 'solutions' . '_' . $current_term_id)):
                 echo '<h5>'; the_sub_field('grid_title', $queried_object); echo '</h5>';
              endif; ?>
              <!-- Image -->
              <?php if(get_sub_field('grid_image', 'solutions' . '_' . $current_term_id)): 
              $img = get_sub_field('grid_image', 'solutions' . '_' . $current_term_id);
              ?>
                <img src="<?php echo $img['url']; ?>" class="img-fluid"/>
              <?php endif; ?>
              <!-- Content -->
              <?php if(get_sub_field('grid_content', 'solutions' . '_' . $current_term_id)):
                 echo '<p>'; the_sub_field('grid_content', $queried_object); echo '</p>';
              endif; ?>
            </div>
              <?php 
            endwhile;
            ?>
          </div>
        </div>
      </section>
      <?php
      // grid_content
      // grid_title
    break;

    default:
       // Default code

}
?>



<!-- PROGRAMS -->
<section class="container-fluid proGrams">
   <div class="container">
       <div class="row">
<?php
  $taxonomy_name = 'solutions';
  $termchildren = get_term_children( $current_term_id, $taxonomy_name );
  if(!empty($termchildren)){
    $counter = 32; $tab_contant = '';
    ?>
    <div class="tabs_wrapper d-flex justify-content-start align-items-start">
      <ul class="tabs">
  <?php
  foreach ($termchildren as $child) {
    $term = get_term_by( 'id', $child, $taxonomy_name );
    $cat_image = wp_get_attachment_image_src(get_field('category_image', $taxonomy_name . '_' . $child), 'full');
    if(empty($cat_image)){
      $cat_image = '/wp-content/themes/revampedpractice/images/rm2.png';
    }
    $url = get_term_link( $child, $taxonomy_name );
    echo '<li rel="tab'.$counter.'">'.$term->name.'</li>';
    /* Tab content template */
    $tab_content = $tab_content . '<h3 class="tab_drawer_heading" rel="tab'.$counter.'">'.$term->name.'</h3>
      <div id="tab'.$counter.'" class="tab_content">
        <div class="title">
            <h2>'.$term->name.'</h2>
        </div>
        <img src="'.$cat_image.'" class="img-fluid d-block ml-auto" />
        <div class="para">'.$term->description.'</div>
        <div class="para"><a href="'.$url.'" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a></div>
      </div>';
      $counter++;
  }
  echo '</ul>';
}
?>
<div class="tab_container">
  <?php echo $tab_content; ?>
</div>
<!-- .tab_container -->
</div>
       </div>
   </div>
    
</section>

<!-- BLOG -->

<section class="container-fluid solBlog animatedParent animateOnce" data-sequence="250">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-3">
              <h3 class="animated fadeInUpShort" data-id="1">Knowledge Base</h3>
            </div>
            <?php 
            $knowledgeBaseQuery = new WP_Query( array(
              'category_name' => 'blog',
              'posts_per_page' => 3,
              'tax_query' => array(
                  array(
                    'taxonomy' => 'solutions',
                    'field'    => 'term_id',
                    'terms'    => $current_term_id,
                  ),
                ),
            ) );
            $dataId = 1;
            if($knowledgeBaseQuery -> have_posts()) : while ($knowledgeBaseQuery -> have_posts()) : $knowledgeBaseQuery -> the_post();
              $dataId++;
              echo '<div class="col-md-4 animated fadeInUpShort" data-id="'.$dataId.'">';
              get_template_part( 'template-parts/archive', 'block' );
              echo '</div>';
            endwhile; endif; wp_reset_query();
            ?>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1 mt-5 text-center kbh2">
            <h2 class="">#The PRactice</h2>
          </div>
        </div>
    </div>
</section>


<!-- CASE STUDIES(SAME STYLING LIKE BLOG SECTION) -->

<section class="container-fluid solCaseStudies animatedParent animateOnce" data-sequence="250">
    <div class="container">
        <div class="row">
          <div class="col-md-12 pb-3"><h3 class="animated fadeInUpShort" data-id="1">Case studies</h3></div>
            <?php 
            $caseStudyQuery = new WP_Query( array(
              'category_name' => 'case-studies',
              'posts_per_page' => 3,
              'tax_query' => array(
                  array(
                    'taxonomy' => 'solutions',
                    'field'    => 'term_id',
                    'terms'    => $current_term_id,
                  ),
                ),
            )); 
            $dataId = 1;
            if($caseStudyQuery -> have_posts()) : while ($caseStudyQuery -> have_posts()) : $caseStudyQuery -> the_post();
              $dataId++;
              echo '<div class="col-md-4 animated fadeInUpShort" data-id="'.$dataId.'">';
              get_template_part( 'template-parts/archive', 'block' );
              echo '</div>';
            endwhile; endif; wp_reset_query();
            ?>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="container-fluid PR_testimonial animatedParent animateOnce" data-sequence="250">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pb-3 animatedParent">
          <h3 class="animated fadeInLeftShort" data-id="1">Testimonials</h3>
        </div>
<!-- video testimonial -->
        <div class="col-md-9 PR_video_testimonial">
          <div id="PR_video_testimonial" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#PR_video_testimonial" data-slide-to="0" class="active">
                  <div class="dotWrapper">
                  <img src="<?php echo get_template_directory_uri();?>/images/testimonial1.jpg" class="img-fluid rounded-circle" />
                  <span class="companyLogo"><img src="<?php echo get_template_directory_uri();?>/images/brand1.jpg" class="img-fluid rounded-circle" /></span>
                  <span class="companyName">company name</span>
                  </div>
              </li>
    <li data-target="#PR_video_testimonial" data-slide-to="1">
       <div class="dotWrapper">
        <img src="<?php echo get_template_directory_uri();?>/images/testimonial2.jpg" class="img-fluid rounded-circle" />
        <span class="companyLogo"><img src="<?php echo get_template_directory_uri();?>/images/brand2.jpg" class="img-fluid rounded-circle" /></span>
        <span class="companyName">company name</span>
        </div>
        </li>
    <li data-target="#PR_video_testimonial" data-slide-to="2">
        <div class="dotWrapper">
        <img src="<?php echo get_template_directory_uri();?>/images/testimonial3.jpg" class="img-fluid rounded-circle" />
        <span class="companyLogo"><img src="<?php echo get_template_directory_uri();?>/images/brand3.jpg" class="img-fluid rounded-circle" /></span>
        <span class="companyName">company name</span>
        </div>    
        </li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="plyr__video-embed" id="player1">
        <iframe src="https://www.youtube.com/embed/IuEEEwgdAZs" allowfullscreen allowtransparency allow="autoplay"></iframe>
       </div>
        <div class="carousel-caption d-none d-md-block">
            <h5>Lorem Ipsum</h5>
            <p>Lorem ipsum dolor sit amet, eu aeque Lorem ipsum dolor sit amet, eu aeque Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="carousel-item">
      <div class="plyr__video-embed" id="player2">
         <iframe src="https://www.youtube.com/embed/IuEEEwgdAZs" allowfullscreen allowtransparency allow="autoplay"></iframe>
       </div>
       <div class="carousel-caption d-none d-md-block">
            <h5>Lorem Ipsum</h5>
            <p>Lorem ipsum dolor sit amet, eu aeque Lorem ipsum dolor sit amet, eu aeque Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="carousel-item">
      <div class="plyr__video-embed" id="player3">
         <iframe src="https://www.youtube.com/embed/IuEEEwgdAZs" allowfullscreen allowtransparency allow="autoplay"></iframe>
       </div>
       <div class="carousel-caption d-none d-md-block">
            <h5>Lorem Ipsum</h5>
            <p>Lorem ipsum dolor sit amet, eu aeque Lorem ipsum dolor sit amet, eu aeque Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
  </div>
  
</div>
            </div>
<!------------- blockquote testimonial -------------------->
           <div class="col-md-3 PR_bq_testimonial">
               <div id="PR_bq_testimonial" class="carousel slide" data-ride="carousel" data-interval="false">
                  <ol class="carousel-indicators">
                    <li data-target="#PR_bq_testimonial" data-slide-to="0" class="active"></li>
                    <li data-target="#PR_bq_testimonial" data-slide-to="1"></li>
                    <li data-target="#PR_bq_testimonial" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                     <div class="imgCircle">
                         <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/images/testimonial1.jpg" alt="">
                     </div>
                     <blockquote>
                             <p>Pork filet mignon rump salami, tri-tip ham hock turducken meatball spare ribs tail shoulder pork belly sirloin. Sirloin fatback bresaola, biltong brisket pancetta tenderloin tri-tip. Ground round salami shank, chicken pig sausage shankle. 
                             </p>
                             <h5>Client Name</h5>
                             <h6>Company Name</h6>
                         </blockquote>
                    </div>
                    <div class="carousel-item">
                      <div class="imgCircle">
                         <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/images/testimonial1.jpg" alt="">
                     </div>
                     <blockquote>
                             <p>Pork filet mignon rump salami, tri-tip ham hock turducken meatball spare ribs tail shoulder pork belly sirloin. Sirloin fatback bresaola, biltong brisket pancetta tenderloin tri-tip. Ground round salami shank, chicken pig sausage shankle. 
                             </p>
                             <h5>Client Name</h5>
                             <h6>Company Name</h6>
                         </blockquote>
                    </div>
                    <div class="carousel-item">
                      <div class="imgCircle">
                         <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/images/testimonial1.jpg" alt="">
                     </div>
                     <blockquote>
                             <p>Pork filet mignon rump salami, tri-tip ham hock turducken meatball spare ribs tail shoulder pork belly sirloin. Sirloin fatback bresaola, biltong brisket pancetta tenderloin tri-tip. Ground round salami shank, chicken pig sausage shankle. 
                             </p>
                             <h5>Client Name</h5>
                             <h6>Company Name</h6>
                         </blockquote>
                    </div>
                  </div>
  
                </div>
           </div>
            
        </div>
    </div>
</section>
<?php } // closing loop for child term check ?>
<!-- Call for lets talk section -->
<?php get_template_part('template-parts/letsTalk', 'section'); 
get_footer();