<?php // global $post; ?>
   <div <?php post_class('borderCustom pt-3'); ?> >
    <span class="date"><?php the_time('F j, Y') ?></span>
    <a href="<?php the_permalink(); ?>">
              <h5 class="blogTitle">
               <?php 
                  if (strlen("the_title()") > 30) { 
                the_title(); 
             } 
            if (strlen("the_title()") < 30) { 
                echo substr(get_the_title(), 0, 30); 
            } 
                  ?>
            </h5>
            </a>
    <div class="blogDesc">
        <p>
        <?php  echo wp_trim_words( get_the_content(), 5 ); ?></p> 
        
        </div>
    <?php 
    
		if (has_post_thumbnail($post->ID)) :
	    	$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'archiveSize');
        if(empty($src[0])):
            $src[0] = 'http://staging.the-practice.net/wp-content/themes/revampedpractice/images/default-image.jpg';
        endif;
    endif;
	?>
    <div class="blogFigWrap">
       <div class="blogFigure">
        <img src="<?php echo $src[0]; ?>" class="img-fluid" alt=""/>
           <div class="blogCaption d-flex justify-content-center align-items-center">
               <a href="<?php the_permalink();?>" class="prDbtn"><i class="fa fa-angle-left"></i>Read More<i class="fa fa-angle-right"></i></a>
           </div>
       </div>
    </div>
    
    
</div>
