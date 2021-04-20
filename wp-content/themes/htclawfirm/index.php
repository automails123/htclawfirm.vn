<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();?>

    <?php if(function_exists('getSliderBanner')){?>
      <div class="banner-home shaw-down">
        <div data-slider>
          <?php echo getSliderBanner(); ?>
        </div>
      </div>
    <?php } ?>
    
   		<div class="partner py-5 bg-even">
   			<div class="container">
   				<div class="d-flex justify-content-center align-items-center mb-4">
   					<span class="double-line"></span>
	   			    <h2 class="text-uppercase title-item m-0 px-2">Đối tác</h2>
	   				<span class="double-line"></span>
   				</div>
   				<?php if(function_exists('show_partners')){ echo show_partners(); } ?>
   			</div>
   		</div>
	  
<?php get_footer();
