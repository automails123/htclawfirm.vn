<?php

/*Template Name: Contact Layout*/
get_header();  
?>
<div class="banner-feature"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/bg-blog.jpg" class="mx-auto d-block img-fluid" alt="Martoyo liên hệ"></div>
<div class="wrap-crumbs"><div class="container py-3"><?php if(function_exists('breadcrumb')){breadcrumb();} ?></div></div>
<div class="contact-form pt-4 pt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-sm-1 mb-5">
        <h3 class="text-uppercase item-line pb-2 mb-3 mb-md-5 position-relative">Nhập nội dung</h3>
        <div class="wrap-form-contact bg-even px-4 py-3">
          <?php echo contactForm(); ?>                  
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="pr-md-5">
          <div class="pr-lg-5">
            <h3 class="text-uppercase item-line pb-2 mb-3 mb-md-5 position-relative">Thông tin</h3>
            <h2 class="mb-4">CÔNG TY TNHH MARTOYO APPLIED MATERIALS</h2>
            
            <ul class="address list-unstyled mb-4">
              <?php if(get_option('address_company') !='') {echo'<li class="address-icon">'.get_option('address_company').'</li>';}?>
              <?php if(get_option('hotline') !='') {echo'<li class="hotline-icon">'.get_option('hotline').'</li>';}?>
              <?php if(get_option('phone_company') !='') {echo'<li class="fax-icon">'.get_option('phone_company').'</li>';}?>
              <?php if(get_option('mail_company') !='') {echo'<li class="mail-icon">'.get_option('mail_company').'</li>';}?>
            </ul>
            <ul class="list-unstyled social-icon d-flex align-items-center flex-wrap">
              <li class="pr-4 text-center"><a href="<?php echo get_option('facebook');?>" class="d-block" target="_blank" title="Facebook Martoyo"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="pr-4 text-center"><a href="<?php echo get_option('twitter');?>" class="d-block" target="_blank" title="Twitter Martoyo"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="text-center"><a href="<?php echo get_option('youtube');?>" class="d-block" target="_blank" title="Youtube Martoyo"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul> 
          </div>
        </div>              
      </div>      
    </div>
  </div>
  <?php if(get_option('google_map') !='') { echo'<div class="map">'.get_option('google_map').'</div>';}?>
</div>
<?php get_footer(); ?>

