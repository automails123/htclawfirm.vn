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

get_header(); ?>
<div class="banner-feature"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/bg-blog.jpg" class="mx-auto d-block img-fluid" alt="Martoyo Dự Án"></div>
<div class="wrap-crumbs"><div class="container py-3"><?php if(function_exists('breadcrumb')){breadcrumb();} ?></div></div>
<div class="area-page py-4 py-md-5">
	<div class="container">	
		<div class="row">
			<div class="col-md-3 d-none d-md-block">
		      <?php get_sidebar(); ?>
		    </div>
    		<div class="col-12 col-md-9">
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
		    		
	</div>
</div>
<?php get_footer();
