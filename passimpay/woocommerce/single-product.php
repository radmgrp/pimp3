<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
 <div class="aline n4">
            <div class="content">
<div class="component-wrap">
                   
       <div class="column n1">
                  
			
                       <?php get_template_part('template-parts/menu','left'); ?>
                       
    
    
   
                    </div>
                       <div class="column n2">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
      echo "<h1 class='prod_title'>". get_the_title()."</h1>";
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		//do_action( 'woocommerce_after_main_content' );
 	
    
    
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
	
	?>
   </div>   </div> </div>   </div>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
<style>
.single_button_cart{
width:calc(50% - 5px);
font-size:0.8rem !important;
background:#947b15  !important;
color:#000  !important;
border-radius:8px  !important;
}
.prod_title{
text-align:left;
border:none;
font-size:1.6rem !important;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
background:#f9d025 !important;
    border-bottom: 1px solid #cfc8d8 !important;
}

.summary_white>.clickBuyButton {
display:none !important;
}



</style>