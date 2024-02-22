<?php
/*
Template Name: страница блога

*/

get_header(); ?>



         <section class="section_news">
			
          <div class="container"> 
			   <h1 class="h1"><?php the_title()?></h1>
            <div class="news_items">
  <?php 
	apply_filters( 'excerpt_length', 20 );
	$posts_new = get_posts();
foreach ($posts_new as $post_new) : ?>
			
				 <div class="news_item">
              <div class="news_item-left"><img src="<?php  echo get_the_post_thumbnail_url($post_new->ID,'medium');?>" alt=""></div>  <div class="news_item-right"><?php 
$excerpt = $post_new->post_content;
$text = mb_substr( $excerpt,0,300 )." ...";
echo $text;?><a href="<?php  echo get_permalink($post_new->ID);?>" class="news_item-link">Подробнее</a></div>
             
            </div> <?php
  
endforeach;    
?>
	
	
	
	
	
	
	
	
	
	
</div> </div>
          </section>
<?php
get_footer();
