<?php 
if (has_post_thumbnail($post->ID)) :
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
  else:
    $src[0] = 'http://staging.the-practice.net/wp-content/themes/revampedpractice/images/default-image.jpg';
endif;
?>
<div class="col-md-6">
  <img src="<?php echo $src[0]; ?>" class="img-fluid w-100"/>
</div>
<div class="col-md-6">
  <h4><?php the_title();?></h4>
  <div class="data-meta">
    <span class="postAuthor"><?php echo get_field('author');?></span>
    <span class="dividerpost"></span>
    <?php  the_time('F j, Y')  ?>
  </div>
  <p><?php  the_excerpt(); ?></p>
  <a href="<?php the_permalink();?>" class="prDbtn"><i class="fa fa-angle-left"></i>explore<i class="fa fa-angle-right"></i></a>  
</div>  