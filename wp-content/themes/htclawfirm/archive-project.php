<?php get_header(); ?>
<div class="baner-p banner-proj d-flex align-items-center justify-content-center position-relative">
  <img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/bg_project.jpg" class="mx-auto d-block img-fluid h-100 w-100 img-cover" alt="<?php echo get_the_title(); ?>">
  <div class="des-p position-absolute">
    <h1 class="text-uppercase"><?php echo get_the_title(); ?></h1>    
  </div>
</div>
<div class="container">
  <div class="row py-3 py-md-5 justify-content-center">
    <?php 
      $post_proj = new WP_Query(array(
        'post_type' => 'project',
        'post_status' => 'publish',
        'posts_per_page' => -1,          
      ));
      if($post_proj->have_posts()) {
        while ($post_proj->have_posts()) {
          $post_proj->the_post(); 
          $post_id = get_the_ID();
          echo '<div class="col-sm-6 my-3"><a href="' . get_the_permalink() . '" title="' . get_the_title() .'"><div class="block-archive">'. get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-fluid mx-auto d-block img-cover w-100', 'alt' => get_the_title(), 'loading'=> 'lazy')).'<h3 class="m-0 text-uppercase px-3 py-3 text-center">'.get_the_title().'</h3></div></a></div>';
        } 
      }  
      wp_reset_postdata();  
    ?>
  </div>
</div>
<?php get_footer();
