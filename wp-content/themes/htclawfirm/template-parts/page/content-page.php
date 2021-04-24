	<!-- <div class="d-flex justify-content-center align-items-center">
		<span class="double-line"></span>
	    <?php the_title( '<h2 class="text-uppercase title-item m-0 px-2">', '</h2>' ); ?>
		<span class="double-line"></span>
	</div> -->
	
	<div class="entry-content">	
		
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

