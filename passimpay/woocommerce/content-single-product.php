<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

?>


<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
<div class="product_wrapper">
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
 <div class="summary_white">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    remove_action('woocommerce_single_product_summary',  'woocommerce_template_single_excerpt', 20);
    remove_action('woocommerce_single_product_summary',  'woocommerce_template_single_meta',40); 
    
    

function qfurs_productShoes_2() {
	global $product;
	global $post;
 	$attributes= $product->get_attributes();

	if ( ! $attributes ) {echo "</div>";
		return ;
		}
 
 $bb="  </div><div class='product_characters-title'>Характеристики</div><div class='product_characters'>";
	foreach ( $attributes as $attribute ) {

$bb.= "<div class='product_characters-row'><div>".$attribute["name"]."</div><div>".$attribute["options"][0]."</div></div>";

	}
$bb.="</div>";
echo $bb;
}

add_action( 'woocommerce_single_product_summary', 'qfurs_productShoes_2',60);

  do_action( 'woocommerce_single_product_summary');
        ?>


      </div> 
	<div class="product_logos-blog"></div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
    add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    unset( $tabs['reviews'] );
    return $tabs;
}
 
 
 
  add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab0' );
function woo_new_product_tab0( $tabs ) {

 
	$tabs['test_tab0'] = array(
		'title' 	=> __( 'Характеристики ', 'woocommerce' ),
		'priority' 	=> 30,
		'callback' 	=> 'woo_new_product_tab_content0'
	);
 
	return $tabs;
 
}
function woo_new_product_tab_content0() {
 
		global $product;
	global $post;
 	$attributes= $product->get_attributes();
 
	echo '<h2>Характеристики</h2>';
$bb="<div class='product_characters'>";
	foreach ( $attributes as $attribute ) {

$bb.= "<div class='product_characters-row'><div>".$attribute["name"]."</div><div>".$attribute["options"][0]."</div></div>";

	}
$bb.="</div>";
echo $bb;
 
}  
 
 
 
 
 
 
 
 
 
 add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
 
	// Adds the new tab
 
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Оплата ', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);
 
	return $tabs;
 
}
function woo_new_product_tab_content() {
 
	// The new tab content
 
	echo '<h2>Оплата </h2>';
	echo '<p>Here\'s your new product tab.</p>';
 
}
    add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab2' );
function woo_new_product_tab2( $tabs ) {

 
	$tabs['test_tab2'] = array(
		'title' 	=> __( 'Доставка ', 'woocommerce' ),
		'priority' 	=> 60,
		'callback' 	=> 'woo_new_product_tab_content2'
	);
 
	return $tabs;
 
}
function woo_new_product_tab_content2() {
 
	// The new tab content
 
	echo '<h2>Доставка</h2>';
	echo '<p>Here\'s your new product tab.</p>';
 
}  

    remove_action('woocommerce_after_single_product_summary',  'woocommerce_output_related_products',20);    
	do_action( 'woocommerce_after_single_product_summary' );
    
    
    if( empty( $_COOKIE[ 'woocommerce_recently_viewed_2' ] ) ) { 
		$viewed_products = array();
	} else {
		$viewed_products = (array) explode( '|', $_COOKIE[ 'woocommerce_recently_viewed_2' ] );
	}
 
	if ( empty( $viewed_products ) ) {
		return;
	}
 
	
	$viewed_products = array_reverse( array_map( 'absint', $viewed_products ) );
    $dd=get_the_ID();
foreach ($viewed_products as $key =>$value) {
 if($value==$dd){unset($viewed_products[$key]);}

}

    
$viewed_products= array_slice($viewed_products,0, 4);
	$title = '<h3>Вы уже смотрели</h3>';
 
	$product_ids = join( ",", $viewed_products );

echo $title . do_shortcode( "[products ids='$product_ids']" );
	?>
</div>

<?php //do_action( 'woocommerce_after_single_product' ); ?>
<style>


.product_characters-row{
display:flex;
justify-content: space-between;
border-bottom:1px dotted #000;
margin-bottom:4px;
line-height:1rem;
}
.product_characters-row div {
padding:0 3px;
width:fith-content;
background:#ebecec;
margin-bottom:-2px;
}




.product_characters-title{

margin-top:20px;

font-size:1.2rem;
font-weight:bold;
}

.buttons_ads-wrapper{
display:flex;
justify-content: space-between;

}
.buttons_ads-wrapper button{
border-radius:8px;
background:#947b15;
}
.add_cart-num{

    height: fit-content;
    padding: 30px 0;

}
.woocommerce div.product {
background:#ebecec;
padding:20px 20px ;
box-sizing:border-box;


}
.summary_white{
background:#FFF;
padding:16px;
box-sizing:border-box;
}
.product_wrapper{
display:flex;
gap:5%;
}
.woocommerce-product-gallery{
width:40%;
}
.product_wrapper .summary {
width:40%;
}
.product_wrapper .summary {
width:40%
}
.product_wrapper .product_logos-blog{
width:20%;

}
</style>