<?php 
	$category = get_the_category();
	//$parent = get_cat_name($category[0]->category_parent);
	$parent = get_category($category[0]->category_parent);  
	$parentSlug = $parent->slug;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h1 class="title-post text-capitalize mb-4">', '</h1>' );?>	
	<div class="entry-content mb-4">		
		<?php		
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );			

			/*wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );*/
		echo share_social();
		?>

	</div><!-- .entry-content -->

	<?php if ( is_single() ) : ?>
		<?php //twentyseventeen_entry_footer(); ?>
	<?php endif; ?>

</article><!-- #post-## -->


