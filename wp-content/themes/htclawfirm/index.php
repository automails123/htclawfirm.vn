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

    <?php if(function_exists('getSliderBanner')){
      // echo '<div class="banner-home shaw-down">';
      //   echo '<div data-slider>';
      //     echo getSliderBanner();
      //   echo '</div></div>';
    } ?>
    <div class="banner d-flex align-items-center justify-content-center">
      <div class="container text-center">
          <p class="des">HTC, a boutique law firm, addressing the values of</p>
          <h1><span>H</span>ONESTY – <span>T</span>RUST – <span>C</span>OMPLIANCE</h1>
      </div>
    </div>
    <div class="block-special">
      <div class="container">
        <div class="row row-space">
          <div class="col-sm-4 my-3">
            <div class="item text-center h-100 py-3 px-3 px-sm-2 p-md-3">
              <div class="img-h1 d-flex justify-content-center align-items-center mb-4">
                <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/honesty.svg" class="img-fluid img-n mx-auto" alt="'.get_bloginfo( 'name' ).'">'; ?>  
                <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/honesty_h.svg" class="img-fluid img-h mx-auto" alt="'.get_bloginfo( 'name' ).'">'; ?>                   
              </div>
              <h3 class="mb-4"><strong class="d-block text-uppercase mb-2">Honesty</strong>is the best for building a long-term development and relationship</h3>
              <div class="px-md-3">
                <p class="mb-2">"A lawyer's dealings should be just and fair; HONESTY shines with great advantage there"</p>
                <p>(William Cowper)</p>                
              </div>
            </div>
          </div>
          <div class="col-sm-4 my-3">
            <div class="item text-center h-100 py-3 px-3 px-sm-2 p-md-3">
              <div class="img-h1 d-flex justify-content-center align-items-center mb-4">
                <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/trust.svg" class="img-fluid img-n mx-auto" alt="'.get_bloginfo( 'name' ).'">'; ?>      
                <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/trust_h.svg" class="img-fluid img-h mx-auto" alt="'.get_bloginfo( 'name' ).'">'; ?>               
              </div>
              <h3 class="mb-4"><strong class="d-block text-uppercase mb-2">Trust</strong>is our most valuable assets and gift from you</h3>
              <div class="px-md-3">
                <p class="mb-2">“The single most important word that defines a brand in a business to business, especially in today digital world, is TRUST"</p>
                <p>(Gal Borenstein)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 my-3">
            <div class="item text-center h-100 py-3 px-3 px-sm-2 p-md-3">
              <div class="img-h1 d-flex justify-content-center align-items-center mb-4">
                <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/compliance.svg" class="img-fluid img-n mx-auto" alt="'.get_bloginfo( 'name' ).'">'; ?>                   
                <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/compliance_h.svg" class="img-fluid img-h mx-auto" alt="'.get_bloginfo( 'name' ).'">'; ?>                   
              </div>
              <h3 class="mb-4"><strong class="d-block text-uppercase mb-2">Compliance</strong>is our ultimate policy via ensuring your legal compliance</h3>
              <div class="px-md-3">
                <p class="mb-2">“It is the job of a lawyer to enforce compliance with the regulations.”</p>
                <p>(Osho)</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container mt-3 mb-5">
      <div class="info-about py-4 px-4 px-md-5 text-center">
        <h2 class="text-uppercase title-item text-center mb-4">about us</h2>
        <p class="mb-4">HTC INTERNATIONAL LAW FIRM is a full-service law firm formed in 2017 by experienced and enthusiastic lawyers. Over the years of operation, we have come to be a consistently reliable and effective partner for our clients.</p>
        <p class="mb-4">We are more than just your legal advisors; we are your trusted source for all of your legal needs. Delivering our principles of Honesty, Trust, and Compliance our mission is to provide our clients with reliable legal solutions by applying proper legal regulations.</p> 
        <p class="mb-4">Our strength is in national and cross-border M&A, corporate and investment, dispute settlement in the areas of real estate, renewable energy, education, medical services, and trading and taxes. </p>
        <p class="mb-4">We also work closely with alliances, partners, and other boutique firms in other areas of laws and services to widen and strengthen our care to the clients.</p>
        <a class="d-inline-block text-uppercase link-more py-2 px-5 text-nowrap" href="<?php bloginfo('url'); ?>/about-us" title="more info">more info</a>
      </div>
    </div>
  <div class="py-5 block-info">
    <div class="container py-md-3">
      <div class="row space-2">
        <div class="col-sm-4 mb-4 mb-sm-0">
          <div class="block-1">
            <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/pracetice.png" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>      
            <a href="<?php bloginfo('url'); ?>/practice" title="Practice">
            <h4 class="text-uppercase text-center mb-0 py-3 px-3 px-sm-2 p-md-3">Pracetice</h4></a>
          </div>
        </div>
        <div class="col-sm-4 mb-4 mb-sm-0">
          <div class="block-1">
            <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/ask_us.png" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            <h4 class="text-uppercase text-center mb-0 py-3 px-3 px-sm-2 p-md-3">New to law! ask us!</h4>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="block-1">
            <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/need_lawyer.png" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            <h4 class="text-uppercase text-center mb-0 py-3 px-3 px-sm-2 p-md-3">Need lawyer?</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5">
    <div class="container">
      <h2 class="text-uppercase title-h2 mb-3 mb-md-5 text-center">OUR ASSET YOUR VALUE</h2>
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
  <div class="news-home pt-3 pb-3 py-md-5">
    <div class="container">
      <h2 class="text-uppercase title-h2 mb-3 mb-md-5 text-center">news</h2>
      <div class="row row-space">
        <div class="col-12 col-md-8 my-3">
          <div class="row row-space h-100">
            <div class="col-12 col-md-8 pr-md-0">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 h-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="col-12 col-md-4 pl-md-0">
              <div class="item-new h-100">
                <div class="inner-new px-4 py-4">
                  <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
                  HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-6 col-md-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 px-md-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 px-md-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 px-md-3 pt-3 pb-4">
              <h3 class="text-uppercase mb-3">CONDITIONS FOR INDUSTRIAL PROPERTY REPRESENTATION SERVICE BUSINESS</h3>
              HTC commit to consult and supply effective solution in front of complicated problem, for the best interests of clients.
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 my-3">
          <div class="item-new">
            <div class="h-img">
              <?php echo '<img loading="lazy" src="'.get_template_directory_uri().'/assets/images/news.jpg" class="img-fluid d-block w-100 img-cover" alt="'.get_bloginfo( 'name' ).'">'; ?>              
            </div>
            <div class="inner-new px-3 px-md-3 pt-3 pb-4">
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
