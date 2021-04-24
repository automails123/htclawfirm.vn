<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="Shortcut Icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico" type="image/x-icon">
<meta name="description" content="<?php bloginfo('description'); ?>" />
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
<?php wp_head();
  if (is_home() || is_front_page()) {?>
      <meta property="og:image" content="<?php echo get_template_directory_uri();?>/assets/images/banner.jpg"> 
    <?php } 
    //else {     
    //echo '<meta property="og:image" content="'. get_the_post_thumbnail_url(get_the_ID(),'full')   .'" />';    
  //}
?>
</head>
<body <?php body_class(); ?>>
  <?php $unique_id = esc_attr( uniqid( 'search-form-' ) );  ?>
  <header id="header" class="header py-2">
    <div class="container ">
      <nav class="navbar navbar-expand-lg p-0">
        <h1 class="logo m-0"><span class="text-logo"><?php bloginfo('description'); ?></span><a class="d-block wrap-logo" href="<?php bloginfo('url'); ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" class="img-fluid d-block" alt="<?php echo get_bloginfo( 'name' ); ?>"></a></h1>
        <button class="navbar-toggler btn-m ml-auto" type="button" data-toggle="collapse" data-target="#menu-primary" aria-controls="menu-primary" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span>
        </button>
        <div id="menu-primary" class="navbar-collapse collapse mt-4 mt-md-0 pb-3 pb-md-0">
          <div class="d-flex flex-wrap align-items-center ml-auto flex-column flex-md-row">
            <?php if ( has_nav_menu( 'top' ) ) : ?>               
              <?php wp_nav_menu( array(
                'theme_location' => 'top',
                'menu_id'        => 'top-menu',
                'menu_class' => 'navbar-nav',
              ) ); ?>          
            <?php endif; ?> 
            <div class="line_h d-none d-lg-block mx-3">&nbsp;</div>
            <div class="btn-searchbox search-h mb-4 mb-md-0 position-relative">
              <i class="fa fa-search d-none icon-s d-lg-block" aria-hidden="true"></i>
              <div class="search-area">
                <form class="inner-search position-relative p-3" role="search" method="get" action="<?php echo get_permalink(); ?>">  
                  <input id="<?php echo $unique_id; ?>" type="search"  class="search-field input-searchbox rounded pl-2" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s">
                  <button class="btn btn-searchbox py-0" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>                    
              </div>  
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header><!-- /header -->
  <main class="main">


