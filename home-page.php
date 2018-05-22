<?php
/**
 * Template Name: Home Page
 *
 * @package revampedpractice
 */

get_header();
?>
<!-- BANNER -->
<header class="container-fluid pl-0 pr-0 parallaxBanner d-flex align-items-end">
   <div class="container">
       <div class="row">
           <div class="col-md-8 layer-4">
              <img src="<?php echo get_template_directory_uri();?>/images/colourbg.png" class="img-fluid" /> 
              <div class="layer-3 d-flex align-items-end">
                 <div class="">
                  <img src="<?php echo get_template_directory_uri();?>/images/Layer-4.png" class="img-fluid" />
                 </div> 
              </div>
           </div>
       </div>
   </div>
    
</header>

<!-- WELCOME PRACTICE -->
<section class="container-fluid welcomeMsg animatedParent animateOnce" data-sequence='250'>
    <dicv class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="animated fadeInUpShort" data-id="1"><?php the_title(); ?></h1>
            </div>
            <div class="col-md-5 offset-md-3 animated fadeInUpShort" data-id="2">
            	<?php 
            	if (have_posts()) : while (have_posts()) : the_post(); 
            		the_content();
            	endwhile; endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/downArrow.png" class="img-fluid"/>
            </div>
        </div>
    </dicv>
</section>

<!-- TAB SECTION -->

<section class="container-fluid tabSection">
       <div class="row">
            <div id="homeTab">
            <ul class="resp-tabs-list hor_1">
                <li>reputation management</li>
                <li>brand communication</li>
                <li>Employee Communication</li>
                <li>socila impact</li>
            </ul>
            <div class="resp-tabs-container hor_1">
                <div>
                    <div class="repoManagement-owl-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/7C1A6134.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/Project.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/7C1A6134.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/urban-ladder.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/7C1A6134.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div>
                    <div class="brandComm-owl-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/7C1A6134.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/Project.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/7C1A6134.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/urban-ladder.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="item tabEffect">
                           <img src="<?php echo get_template_directory_uri();?>/images/7C1A6134.png" class="img-fluid" />
                            <div class="slideAbs d-flex align-items-center">
                            <div class="innerAbs text-center">
                                <h5>Maple</h5>
                                <p class="para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                    <br>
                    <br>
                    <p>Tab 3 Container</p>
                </div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                    <br>
                    <br>
                    <p>Tab 3 Container</p>
                </div>
            </div>
        </div>
       </div>
</section>



<!-- VERTICALS -->


<section class="container-fluid expertise">
    <div class="container">
        <div class="row align-items-end animatedParent animateOnce" data-sequence="250">
            <div class="col-md-3 animated fadeInLeftShort expertiseSection" data-id="1">
                <h3><?php if(get_field('pink_label')){ the_field('pink_label'); } ?></h3>
                <p><?php if(get_field('pink_content')){ the_field('pink_content'); } ?></p>
            </div>
            <div class="col-md-3 vertical1 animated fadeInUpShort" data-id="2">
                <h3><?php the_field('vertical_1_label'); ?></h3>
                <p><?php the_field('vertical_1_excerpt'); ?></p>
                <a href="<?php the_field('vertical_1_explore_link'); ?>" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-md-3 vertical2 animated fadeInUpShort" data-id="3">
                <h3><?php the_field('vertical_2_label'); ?></h3>
                <p><?php the_field('vertical_2_excerpt'); ?></p>
                <a href="<?php the_field('vertical_2_excerpt_link'); ?>" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-md-3 vertical3 animated fadeInUpShort" data-id="4">
                <h3><?php the_field('vertical_3_label'); ?></h3>
                <p><?php the_field('vertical_3_excerpt'); ?></p>
                <a href="<?php the_field('vertical_3_excerpt_link'); ?>" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
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
	                <span class="tag animated fadeInUpShort" data-id="1">best from the PRactice</span>
	                <h3 class="headline animated fadeInUpShort" data-id="2">Share <br>the Good</h3>
                	<p class="paragraph animated fadeInUpShort" data-id="3"><?php the_field('share_the_good_content_part_1'); ?></p> 
               </div>
            </div>
            <div class="col-md-6">
                <div class="shareRel animated fadeInUpShort" data-id="4">
                	<img src="<?php echo get_template_directory_uri();?>/images/maple.png"  class="img-fluid"/>
                	<div class="shareAbs d-flex justify-content-center align-items-center">
                   		<div>
                       		<h5>under the mapple tree</h5>
                    		<p>Lorem ipsum dolor sit amet, eu aeque meliore luptatum vel, ut novum viderer qui. Modo purto zril duo an.</p>
                    		<a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                   		</div>
                	</div>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-6 pr-2">
               	<div class="shareRel animated fadeInUpShort" data-id="5">
                	<img src="<?php echo get_template_directory_uri();?>/images/Symbol.png"  class="img-fluid"/>
                	<div class="shareAbs d-flex justify-content-center align-items-center">
                   		<div>
                       		<h5>under the mapple tree</h5>
                    		<p>Lorem ipsum dolor sit amet, eu aeque meliore luptatum vel, ut novum viderer qui. Modo purto zril duo an.</p>
                    		<a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
                   		</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
               	<div class="customDivOne mr-auto pt-5 animated fadeInUpShort" data-id="6">
                	<p class="paragraph"><?php the_field('share_the_good_content_part_2'); ?></p> 
               </div>
            </div>
        </div>
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
                    <?php the_field('life_@_practice_video_url'); ?>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 pt-3 text-center">
                <p><?php the_field('life@practice_content'); ?></p>
                <a href="#" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>

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
	                <h2 class="animated fadeInUpShort" data-id="4"><?php the_field('blog_highlight_title'); ?></h2>
	                <p class="blogDesc animated fadeInUpShort" data-id="5"><?php the_field('blog_highlight_content'); ?></p>
               </div>
            </div>
        </div>
    </div>
</section>

<!-- VIEWPOINT -->

<section class="container-fluid d-flex align-items-center viewpointSection">
    <div class="container">
        <div class="row">
            <div class="view-owl-carousel owl-carousel owl-theme">
            <?php if(have_rows('viewpoint')) : while ( have_rows('viewpoint') ) : the_row(); ?>
              <?php
              // getting cover image
              $image = get_sub_field('cover_image');
              ?>
              <div class="item">
                <a href="<?php the_sub_field('url'); ?>" style="background-image: url('<?php echo $image["url"]; ?>')">
                  <div class="colorOverlay">
                      <div class="issueName"><?php the_sub_field('viewpoint_tag'); ?></div>
                      <h4 class="title">
                      <div class="issueTitle"><?php the_sub_field('viewpoint_title'); ?></div>
                      <div class="issueSubTitle"><?php the_sub_field('subtitle'); ?></div>
                      </h4>
                  </div> 
                </a>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
    </div>
</section>
	

<?php
get_footer();
