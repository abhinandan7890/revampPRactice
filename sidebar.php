<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package revampedpractice
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary">
	<?php
	// Check if single page
	if(is_page()){
		?>
		<div class="row pageSidebar">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	<?php
	} else {
		$category = get_the_category();
		$cat = $category[0]->cat_name;
		$currentID = get_the_ID();
	?>
	    <div class="row featuredBlock">
	   		<div class="col-md-12"><h5 class="blogFAhead">Featured Article</h5></div>
		 	<?php 
			$blogQuery = new WP_Query( array( 'category_name' => $cat, 'posts_per_page' => 3,'post__not_in' => array($currentID),  ) );
			if($blogQuery -> have_posts()) : while ($blogQuery -> have_posts()) : $blogQuery -> the_post();
				$dataId++;
				echo '<div class="col-md-12 blogFA">';
				get_template_part( 'template-parts/archive', 'block' );
				echo '</div>';
			endwhile; endif; wp_reset_query();
			} // end of single post featured section
			?>
		</div>
</aside>