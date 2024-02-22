<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>
 <div class="aline n4">
            <div class="content">
                <div class="component-wrap">
<div class="column n1">        <?php get_template_part('template-parts/menu','left'); ?></div>
<div class="column n2">
<header class="woocommerce-products-header">
<?php woocommerce_breadcrumb(array('delimiter' => '&nbsp; / &nbsp;', 'home' => 'Главная')); ?>
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="h1_left h1_enter woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<div class="col-xs-12">
		   <?php
      $category = get_queried_object(); 
     $pp= $category->term_id;
$cat_args = array(
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => false,
    'parent'     => $pp
);
$child_categories = get_terms( 'product_cat', $cat_args );

$cat_args = array(
    'taxonomy'   => "product_cat",
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => false,
    'parent'     => $pp
);
$child_categories = get_terms($cat_args);



  if ( $child_categories ) { ?>
              				    <div class="category-childs">
        <div class="category-image">
        
        
        <?php
        
            global $wp_query;
    $cat = $wp_query->get_queried_object();

    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true ); 

    $image = wp_get_attachment_url( $thumbnail_id ); 
     if($image){
      echo '<img src="'.$image.'" alt="">';
      }
                       ?>
        </div>
 
        

        <ul class="bx_catalog_tile_ul">
       <?php
        foreach ($child_categories as $term ) { ?>
          <li id="bx_1847241719_1225">
                                    <div class="bx_catalog_tile_title"><a href="<?php echo esc_url( get_term_link( $term ) ) ?>"><?php   echo $term->name; ?></a></div></li>
      
        
        <?php
    
        }
       
       ?>
            
            </ul>
    </div>
       <?php
  }
    
    ?> 
    


<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	echo '<div class="top_paginatia">'; do_action( 'woocommerce_before_shop_loop' );  echo'</div>';

	
	

	woocommerce_product_loop_start();
	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
 ?>
 	<?php $dat = SCF::gets(get_the_ID());  ?>		
		     	
 <h2 class="h2_line"><?php echo $dat["cat_title"]; ?></h2>
 <article>
<?php echo $dat["cat_text"]; ?>
  </article>
 
</div>

<style>
.quantity_wrap{
display:flex;
}
.add_cart-num{
justify-content: space-between;
}
.loading{

padding-right:0px !important;

}

@media (max-width:900px){

ul.products li.product, .woocommerce-page ul.products li.product {
    width: calc(33% - 7px) !important;
}

}
@media (max-width: 600px){
ul.products li.product, .woocommerce-page ul.products li.product {
    width: calc(50% - 5px) !important;
}
}
</style>

</div></div></div>

<?php
get_footer( 'shop' );