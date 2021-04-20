<?php 
	$postid = get_the_ID(); 
	$features = get_post_meta($postid, 'features', true); 
	$remark = get_post_meta($postid, 'remark', true);
	$features_en = get_post_meta($postid, 'features_en', true); 
	$remark_en = get_post_meta($postid, 'remark_en', true);
	$price = get_post_meta($postid, 'price', true);
	$slider = get_post_meta($postid, 'tdc_gallery_id', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h3 class="text-capitalize title-block mb-4 d-md-none"><strong>', '</strong></h3>' );?>		
	<div class="entry-content">		
		<div class="row mb-4 gallary-product">
            <div class="col-md-6 mb-4 mb-md-0">
              	<?php if($slider) { ?>
	                <div class="wrap-single-img mb-4 box-shadown">
	                  <div class="slider-for">
	                  	<?php 
				        foreach ($slider as $image) { ?>
				        	<div class="d-table">
		                      <div class="d-table-cell p-2">
		                        <img src="<?php echo wp_get_attachment_url($image, 'large'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid mx-auto d-block">
		                      </div>
		                    </div>
				    	<?php } ?>	                    
	                  </div>
	                </div>
	                <div class="slider-nav">
	                	<?php 
				        	foreach ($slider as $image) { ?>
				        		<div class="item px-1">
				                    <div class="border-1 p-1 fix-h-thumb d-flex align-items-center">
				                      <img src="<?php echo wp_get_attachment_url($image, 'large'); ?>" class="img-fluid d-block mx-auto" alt="">
				                    </div>
				                </div>				        		
				    	<?php }	?>
	                </div>  
	            <?php } else { ?>
	            	<div class="wrap-single-img">
	                  <div class="slider-for">
	                    <div class="d-table">
	                      <div class="d-table-cell p-3">
	                        <?php echo get_the_post_thumbnail($postid, 'full', array( 'class' => 'img-fluid mx-auto d-block')); ?>  
	                      </div>
	                    </div>
	                  </div>
	                </div>
	           	<?php } ?>
            </div>
	        <div class="col-md-6">
	            <?php the_title( '<h3 class="text-capitalize title-block mb-4 d-none d-md-block"><strong>', '</strong></h3>' );?>	
	            <?php if($price) {
	            	echo '<div class="wrap-price mb-2"><strong>Giá:</strong> <span class="price pl-2"><strong>'.$price.'</strong></span></div>';
	            }?>
	            <div class="mb-3">
	            <?php if($lang=='en_US') {
	            	if($features_en) {
				        echo $features_en;
	        		} if($remark_en) {
			        	echo $remark_en;
	        		}
	         	} else {
	         		if($features) {
				        echo $features;
	        		} if($remark) {
			        	echo $remark;
	        		}
	         	} ?>	
	         	</div>
	         	<div class="mb-3">
	            	<strong class="text-capitalize">Liên hệ ngay:</strong> 
	            	<div class="mt-2 box-lh row align-items-center justify-content-center">
	            		<div class="col pr-0">
		            		<a class="d-block text-center px-1 py-2 phone-1" href="tel:19000316" title="1900 0316"><i class="icon fa fa-phone pr-2"></i>1900 0316</a>	            			
	            		</div>
	            		<div class="col">
		            		<a class="d-block text-center px-1 py-2 phone-2" href="tel:+8402743772386" title="+84 274 377 2386"><i class="fa fa-mobile pr-2" aria-hidden="true"></i>+84 274 377 2386</a>	            			
	            		</div>
	            	</div>
	            </div> 
	            <div class="box-ycbgia text-capitalize text-center py-3 cursor-pointer px-2" data-toggle="modal" data-target="#tktyc">
	            	Gửi yêu cầu báo giá
	            </div>

	        </div>
        </div>
     	<div class="content-product">
			<?php		
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				) );			
				/*wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );*/
			?>
		</div>
		<div class="mb-5">
			<?php echo share_social();?>  
		</div>
		 
	</div><!-- .entry-content -->
</article><!-- #post-## -->
