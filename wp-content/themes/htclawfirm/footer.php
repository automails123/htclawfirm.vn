</main>
<footer class="footer pt-5">
  <div class="container pb-3">
    <div class="row">
      <div class="col-md-8 text-center text-md-left mb-4 mb-md-0">
        <img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/logo_white.png" class="img-fluid d-block d-md-inline-block mb-3 mx-auto" alt="<?php bloginfo('description'); ?>">
        <h2 class="mb-0">CÔNG TY TNHH MARTOYO APPLIED MATERIALS</h2>
      </div>
      <div class="col-md-4 text-left text-md-right">        
        <?php echo newsLetter(); ?>
      </div>
    </div>
    <div class="line my-4 my-md-5"></div>
    <div class="row">
      <div class="col-sm-12 col-md-4 mb-4 mb-md-0">
        <h3 class="text-uppercase mb-4">Thông tin liên hệ</h3>       
        <ul class="address list-unstyled mb-4">
          <?php if(get_option('address_company') !='') {echo'<li class="address-icon">'.get_option('address_company').'</li>';}?>
          <?php if(get_option('hotline') !='') {echo'<li class="hotline-icon">'.get_option('hotline').'</li>';}?>
          <?php if(get_option('phone_company') !='') {echo'<li class="fax-icon">'.get_option('phone_company').'</li>';}?>
          <?php if(get_option('mail_company') !='') {echo'<li class="mail-icon">'.get_option('mail_company').'</li>';}?>
        </ul>
        <ul class="list-unstyled social-icon d-flex align-items-center flex-wrap">
          <li class="pr-3 text-center"><a href="<?php echo get_option('facebook');?>" class="d-block" target="_blank" title="Facebook Martoyo"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="pr-3 text-center"><a href="<?php echo get_option('twitter');?>" class="d-block" target="_blank" title="Twitter Martoyo"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="text-center"><a href="<?php echo get_option('youtube');?>" class="d-block" target="_blank" title="Youtube Martoyo"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>    
      </div>
      <div class="col-sm-12 col-md-5">
        <div class="row">
          <div class="col-6">
             <h3 class="text-uppercase mb-4">Liên kết nhanh</h3>
              <ul class="list-unstyled list-i">
               <li><a href="<?php bloginfo('url'); ?>/ve-chung-toi" title="Về Chúng Tôi">Về Chúng Tôi</a></li>
               <li><a href="<?php bloginfo('url'); ?>/du-an/" title="Dự án">Dự án</a></li>
               <li><a href="<?php bloginfo('url'); ?>/lien-he" title="Liên hệ">Liên hệ</a></li>
               <li><a href="<?php bloginfo('url'); ?>/tin-tuc" title="Tin tức">Tin tức</a></li>
              </ul>
           </div>
           <div class="col-6">
             <h3 class="text-uppercase mb-4">Sản phẩm</h3>
             <ul class="list-unstyled list-i">
                <?php
                  $taxonomy_product = 'menu-products';
                  $terms = get_terms( array(
                    'taxonomy' => $taxonomy_product,
                    'hide_empty' => false,
                    'orderby'   => 'parent', 
                    'order' => 'DESC',
                ) );

                if ( $terms && !is_wp_error( $terms ) ) : 
                  foreach ( $terms as $term ) {
                    if($term->parent == 0) { 
                      echo "<li><a href='".get_term_link($term->slug, $taxonomy_product)."' title='".$term->name."'>".$term->name."</a></li>";
                    } 
                  }
                endif; ?>                    
             </ul>
           </div>

        </div>         
      </div>
      <div class="col-sm-12 col-md-3">
        <h3 class="text-uppercase mb-4">Tin tức</h3>
        <?php if(function_exists('news_footer')){ echo news_footer(); } ?>
      </div>
    </div>
  </div>
  <div class="footer-b py-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <?php if(get_option('address_company') !='') {echo'<div class="d-flex align-items-baseline mb-2 mb-lg-0"><img loading="lazy" src="'.get_template_directory_uri().'/assets/images/map.svg" class="img-fluid d-block mr-2" alt="'.get_bloginfo( 'name' ).'">'.get_option('address_company').'</div>';}
          if(get_option('phone_company') !='') {echo'<div class="d-flex align-items-baseline mb-2 mb-lg-0"><img loading="lazy" src="'.get_template_directory_uri().'/assets/images/phone.svg" class="img-fluid d-block mr-2" alt="'.get_bloginfo( 'name' ).'">'.get_option('phone_company');}
          if(get_option('hotline') !='') {echo '<span class="mx-2">|</span>'.get_option('hotline').'</div>';}
          if(get_option('mail_company') !='') {echo'<div class="d-flex align-items-baseline mb-2 mb-lg-0"><img loading="lazy" src="'.get_template_directory_uri().'/assets/images/mail.svg" class="img-fluid d-block mr-2" alt="'.get_bloginfo( 'name' ).'">'.get_option('mail_company').'</div>';}
        ?>
      </div>
    </div>
  </div>  
</footer>
<a id="totop" class="totop d-flex align-items-center justify-content-center" href="#" title="To top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<div class="overlg-bg"></div>
<!-- Modal -->
<div class="modal fade" id="tktyc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase">Thiết kế theo yêu cầu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="d-flex justify-content-center align-items-center mb-3 mb-md-5">
          <span class="double-line"></span>
            <h3 class="text-uppercase title-yc m-0 px-2">Yêu Cầu Báo Giá</h3>
          <span class="double-line"></span>
        </div>
        <?php if(function_exists('tktyc_Form')){tktyc_Form();} ?>      
      </div>
      <div class="modal-footer text-center justify-content-center">
        <strong class="py-3 text-capitalize">Chân thành cảm ơn quý Khách Hàng đã tin tưởng sản phẩm/dịch vụ công ty chúng tôi!</strong>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo get_template_directory_uri();?>/assets/js/script.js"></script>
<?php
  if(get_queried_object_id() == '20' || get_queried_object_id() == '22') {
    echo "<script src='https://www.google.com/recaptcha/api.js' async defer></script>";
  }
  ?>
  <?php wp_footer(); ?>
  
</body>
</html>