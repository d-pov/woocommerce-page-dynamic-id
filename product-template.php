<?php 
/*
Template Name: PRODUCT TEMPLATE
Template Post Type: post, page, product
*/
get_header(); ?>

      <div>
        <?php
          global $product;
	  $id = $product->get_id();
        ?>
        
        <?php
  	   echo do_shortcode('[product_page id="' . $id . '"]');
         ?>
      </div>
      	
<?php get_footer(); ?>
