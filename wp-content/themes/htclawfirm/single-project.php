<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); //get_the_title
$post_type = get_post_type_object( get_post_type($post) ); 
	$terms = get_the_terms( get_the_ID(),$taxonomy_name);
?>
<div class="baner-p banner-proj d-flex align-items-center justify-content-center position-relative">
  <img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/bg_project.jpg" class="mx-auto d-block img-fluid h-100 w-100 img-cover" alt="<?php echo get_the_title(); ?>">
  <div class="des-p position-absolute">
    <h1 class="text-uppercase"><?php echo $post_type->label; ?></h1>    
  </div>
</div>
<div class="container py-4 py-md-5 single-project">
    <?php 
		/* Start the Loop */
		while ( have_posts() ) : the_post(); 
			get_template_part( 'template-parts/post/content-project', get_post_format() );
			// If comments are open or we have at least one comment, load up the comment template.
			// echo '<div class="mb-4">';
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;
			// echo '</div>';
		endwhile; // End of the loop.		
		//if(function_exists('related_taxomy_posts')){related_taxomy_posts();}	
	?>	 
</div>	

<?php get_footer();
