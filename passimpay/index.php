<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); 
?>

   <div class="container">
	   <h1 class="h1">Каталог  Блога</h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
		<div class="header" id="paymentMethods" style="margin-top: 60px;">
			<div class="separete"></div>
			<h1 class="title"><?php the_title()?></h1>
			<div class="separete"></div>
		</div>
		<div class="lal">
			<?php //the_content()?>
		</div>
                <?php endwhile; ?>
<?php endif; ?>
   
   </div>

<?php
get_footer();