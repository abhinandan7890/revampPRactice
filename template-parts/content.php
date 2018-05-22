<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package revampedpractice
 */

?>
<header>
  <?php // Breadcrumb function
  if ( function_exists('yoast_breadcrumb') )
    { 
      yoast_breadcrumb('<div class="breadcrumbs">','</div>'); 
    }
  ?>
  <h1 class="singleTitle"><?php the_title();?></h1>
	<div class="singlePostImg">
    <?php
      global $post;
      if (has_post_thumbnail($post->ID)):
        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
        if(empty($src[0])):
          $src[0] = 'http://staging.the-practice.net/wp-content/themes/revampedpractice/images/default-image.jpg';
        endif;
      endif;
    ?>
    <img src="<?php echo $src[0]; ?>" class="img-fluid w-100" />
	</div>
  <div class="data-meta">
    <span class="postAuthor"><?php echo get_field('author');?></span>
      <span class="dividerpost"></span>
      <?php the_time('F j, Y') ; ?>
  </div>
</header>
<div class="singlePostContent">
  <?php the_content();?>
</div>
<div class="singleFooter">
  <ul class="socialIcons">
    <li><a href="#" title="Share in Instagra"><i class="fa fa-instagram"></i></a></li>
    <li><a href="#" title="Share in Facebook"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#" title="Share in Twitter"><i class="fa fa-twitter"></i></a></li>
  </ul>
</div>
