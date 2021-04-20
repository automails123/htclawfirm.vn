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
    <p></p>
    <div class="container mb-5">
      <div class="info-about py-3 px-4 px-md-5 text-center">
        <h2 class="text-uppercase title-item text-center mb-4">about us</h2>
        <p>HTC INTERNATIONAL LAW FIRM is a full-service law firm formed in 2017 by experienced and enthusiastic lawyers. Over the years of operation, we have come to be a consistently reliable and effective partner for our clients.</p>
        <p>We are more than just your legal advisors; we are your trusted source for all of your legal needs. Delivering our principles of Honesty, Trust, and Compliance our mission is to provide our clients with reliable legal solutions by applying proper legal regulations.</p> 
        <p>Our strength is in national and cross-border M&A, corporate and investment, dispute settlement in the areas of real estate, renewable energy, education, medical services, and trading and taxes. </p>
        <p>We also work closely with alliances, partners, and other boutique firms in other areas of laws and services to widen and strengthen our care to the clients.</p>
        <a class="d-inline-block text-uppercase link-more py-2 px-5" href="#" title="more info">more info</a>
      </div>
    </div>
  <div class="py-5 block-info">
    <div class="container py-md-3">
      <div class="row space-2">
        <div class="col-4">
          <div class="block-1">
            <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/pracetice.png" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            <h4 class="text-uppercase text-center mb-0 py-3 px-3">Pracetice</h4>
          </div>
        </div>
        <div class="col-4">
          <div class="block-1">
            <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/ask_us.png" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            <h4 class="text-uppercase text-center mb-0 py-3 px-3">New to law! ask us!</h4>
          </div>
        </div>
        <div class="col-4">
          <div class="block-1">
            <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/need_lawyer.png" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            <h4 class="text-uppercase text-center mb-0 py-3 px-3">Need lawyer?</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5">
    <div class="container">
      <h2 class="text-uppercase title-h2 mb-5 text-center">OUR ASSET YOUR VALUE</h2>
      <div class="row row-space">
        <div class="col-4 my-3">          
          <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/asset_1.jpg" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>   
        </div>
        <div class="col-4 my-3">          
          <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/asset_1.jpg" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>   
        </div>
        <div class="col-4 my-3">          
          <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/asset_1.jpg" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>   
        </div>
      </div>
    </div>
  </div>
  <div class="news-home py-5">
    <div class="container">
      <h2 class="text-uppercase title-h2 mb-5 text-center">news</h2>
      <div class="row row-space">
        <div class="col-8 my-3">
          <div class="row row-space h-100">
            <div class="col-8 pr-0">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="col-4 pl-0">
              <div class="item-new h-100">
                <div class="inner-new px-4 py-4">
                  <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
                  HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>
        <div class="col-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>
        <div class="col-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>
        <div class="col-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
      
	<div class="partner py-5">
		<div class="container">
			<h2 class="text-uppercase title-item text-center mb-4">OUR CUSTOMERS</h2>
			<?php if(function_exists('show_partners')){ echo show_partners(); } ?>
		</div>
	</div>
	  
<?php get_footer();
