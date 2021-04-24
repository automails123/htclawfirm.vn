<?php 
	$postid = get_the_ID(); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h3 class="text-uppercase text-center title-h2 mb-4 mb-md-5">', '</h3>' );?>		
	<div class="entry-content content-project">	
     	<div class="content-product">
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
			?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
