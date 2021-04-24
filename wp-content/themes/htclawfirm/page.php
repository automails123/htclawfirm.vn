<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();$page_slug = get_queried_object()->post_name; 
?>
<div class="baner-p banner-<?php echo $page_slug; ?> d-flex align-items-center justify-content-center position-relative">
	<?php if ( has_post_thumbnail() ) {
		echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'img-fluid mx-auto d-block h-100 w-100 img-cover','alt' => get_the_title(), 'loading' => 'lazy') );
	} ?>
	<div class="container position-absolute h-100">
		<div class="des-p position-absolute">
		<h1 class="text-uppercase"><?php if($page_slug === 'about-us') { echo 'Why us?';} else {echo get_the_title(); } ?></h1>		
	</div>
	</div>
</div>
<div class="area-page">
	<!-- <div class="col-md-3 d-none d-md-block">
      <?php get_sidebar(); ?>
    </div> -->
	<?php if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/page/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.			
	endif; ?>	
</div>
<?php get_footer();
