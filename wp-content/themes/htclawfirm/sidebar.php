<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// $Catalog = get_category( get_query_var( 'cat' ) );
// $cat_id = $Catalog->cat_ID;
// $child_categories=get_categories(array( 'parent' => $cat_id ));
//echo '<pre>' , var_dump($Catalog) , '</pre>';exit();

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
$taxonomy = 'menu-products';
$terms = get_terms( array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
    'orderby'   => 'parent', 
    'order' => 'DESC',
) );

?>

<div class="slider-bar">
  <div class="dm-right mb-5">
    <h3 class="text-uppercase px-2 py-3 text-center">Sản phẩm</h3>
    <?php 
      if ( $terms && !is_wp_error( $terms ) ) : 
        echo '<ul class="list-menu list-inline px-2 px-lg-3 box-2">';
          foreach ( $terms as $term ) {              
            if($term->parent == 0) { 
              $term_children = get_term_children($term->term_id,$taxonomy); ?>
              <li class="px-0 li-parent <?php if($term_children) { echo "menu-item-has-children"; }?>"><a class="text-capitalize" href="<?php echo get_term_link($term->slug, $taxonomy); ?>" title="<?php echo $term->name; ?>"><span class="pr-3"><?php echo $term->name; ?></span><?php if($term_children) { echo '<strong><i class="pull-right fa fa-angle-down pt-1" aria-hidden="true"></i></strong>'; }?></a>
                <?php if($term_children) {
                  echo '<ul class="menu-list list-inline pl-2 pl-lg-3">';
                    foreach($term_children as $child){
                      $chTerm = get_term_by( 'id', $child, $taxonomy);
                      $termLink = get_term_link( $chTerm );
                      echo "<li class='px-0'><a href='$termLink' title='$chTerm->name'>".$chTerm->name."</a></li>";
                    }                      
                  echo '</ul>';
                }
              echo '</li>';
            } 
          } ?>
        <?php echo '</ul>'; 
      endif; ?>
  </div>
  <?php echo list_case('tin-tuc');  ?>
</div>
