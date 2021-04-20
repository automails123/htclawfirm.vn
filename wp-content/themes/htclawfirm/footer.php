</main>
<footer class="footer pt-5">
  <div class="container pb-5">
    <img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" class="img-fluid d-block mb-4 mx-auto" alt="<?php bloginfo('description'); ?>">
    <div class="text-center">
      © 2021 COPYRIGHT HTC INTERNATIONAL LAW FIRM
    </div>
  </div>
  <div class="footer-b py-4">
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