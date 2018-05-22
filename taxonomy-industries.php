<?php
get_header();
$queried_object = get_queried_object();
$current_term_id = $queried_object->term_id;
?>
<!-- INDUSTRY CONTENT -->
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
            $cat_image1 = get_field('category_image', 'industries' . '_' . $current_term_id);
              if(empty($cat_image1['url'])){
                $cat_image1['url'] = '/wp-content/themes/revampedpractice/images/rm3.png';
              }
            ?>
               <img src="<?php echo $cat_image1['url']; ?>" class="img-fluid animated fadeInTopShort" data-id="1"/>
           </div>
       </div>
   </div>
    
</section>
<!-- SHARE THE GOOD -->

<section class="container-fluid shareTheGood">
    <div class="container animatedParent animateOnce" data-sequence="250">
        <div class="row">
            <div class="col-md-6">
               <div class="customDivOne ml-auto">
                <span class="headTopLine animated growIn go" data-id="1"></span>
	                <span class="tag animated fadeInUpShort" data-id="1">Vertical</span>
                  <h5><?php the_field('section_1_title', 'industries' . '_' . $current_term_id); ?></h5>
                	<p class="paragraph animated fadeInUpShort" data-id="3"><?php the_field('section_1_excerpt', 'industries' . '_' . $current_term_id); ?></p> 
               </div>
            </div>
            <div class="col-md-6 shareRel">
                <div class="animated fadeInUpShort" data-id="4">
                	<img src="<?php $ind_image1 = get_field('section_1_image', 'industries' . '_' . $current_term_id); echo $ind_image1['url']; ?>"  class="img-fluid"/>
            </div>
        </div>
        <div class="row">
           <div class="col-md-6 shareRel pr-2">
               	<div class="animated fadeInUpShort" data-id="5">
                	<img src="<?php $ind_image2 = get_field('section_2_image', 'industries' . '_' . $current_term_id); echo $ind_image2['url']; ?>"  class="img-fluid"/>
                </div>
            </div>
            <div class="col-md-6">
               	<div class="customDivOne mr-auto pt-5 animated fadeInUpShort" data-id="6">
                  <h5><?php the_field('section_2_title', 'industries' . '_' . $current_term_id); ?></h5>
                	<p class="paragraph"><?php the_field('section_2_excerpt', 'industries' . '_' . $current_term_id); ?></p> 
               </div>
            </div>
        </div>
    </div>
</section>
<!-- TAXONOMY CASE STUDIES -->
<section class="container-fluid solCaseStudies animatedParent animateOnce" data-sequence="250">
  <div class="container">
        <div class="row">
          <div class="col-md-12 pb-3"><h3 class="animated fadeInUpShort" data-id="1">Case studies</h3></div>
            <?php 
            $caseStudyQuery = new WP_Query( array(
              'category_name' => 'case-studies',
              'posts_per_page' => -1,
              'tax_query' => array(
                  array(
                    'taxonomy' => 'industries',
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
<!-- VERTICALS -->
<section class="container-fluid expertise">
    <div class="container">
        <div class="row align-items-end animatedParent animateOnce" data-sequence="250">
            <div class="col-md-3 animated fadeInLeftShort expertiseSection" data-id="1">
                <h3><?php $id = 3885; if(get_field('pink_label', $id)){ the_field('pink_label', $id); } ?></h3>
                <p><?php if(get_field('pink_content', $id)){ the_field('pink_content', $id); } ?></p>
            </div>
            <?php
                    $terms = get_terms( array(
                        'taxonomy' => 'industries',
                        'hide_empty' => false,
                        'exclude' => array($current_term_id)
                    ) ); $counter = 2;
                    foreach ($terms as $term) { 
                      $term_link = get_term_link($term); ?>
                      <div class="col-md-3 vertical1 animated fadeInUpShort" data-id="<?php echo $counter; ?>">
                        <h3><?php echo $term->name; ?></h3>
                        <p><?php echo get_field('excerpt', 'industries' . '_' . $current_term_id)?></p>
                        <a href="<?php echo esc_url($term_link); ?>" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                      </div>
                  <?php $counter++; } ?>
        </div>
    </div>
</section>


<!-- LIFE@PRACTICE -->

<section class="container-fluid lifeaPr">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 offset-md-1">
                <div class="plyr__video-embed" id="player">
                  <!-- Change this iframe to change video -->
                    <iframe src="https://www.youtube.com/embed/IuEEEwgdAZs" allowfullscreen allowtransparency allow="autoplay"></iframe>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 pt-3 text-center">
                <p>Lorem ipsum dolor sit amet, ea vim cibo putant, pro quod virtute ne, error simul praesent vis at. Est eu eius aliquam nusquam, duo ea maiorum prodesset comprehensam, ferri mutat mel cu.</p>
                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Call for lets talk section -->
<?php 
get_template_part('template-parts/letsTalk', 'section'); 
get_footer();
?>