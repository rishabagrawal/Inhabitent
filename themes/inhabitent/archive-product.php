<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		<section> 
		
		<h1>Shop Stuff</h1>
		<?php
		$terms = get_terms(
		   array('taxonomy' => 'product-type', 
		   'hide_empty'=> 0)
		   
		);
	   ?>
	   <div class ="product-terms">
	   <?php

   //    var_dump($terms)
   foreach($terms as $term):
	   ?>
	   <div class="product-term">
	  
	   <p> 
		   <a href="<?php echo get_term_link($term); ?>">
		   <?php echo $term->name; ?> 
   </a>
	   </p>	

	   </div>
	   <?php


   endforeach;
   ?>
   </div><!-- .product-terms -->
   
</section>
<section class="product-grid">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php echo get_permalink(); ?>">

			<?php the_post_thumbnail( 'medium_large' ); ?>
</a>
			
		<?php endif; ?>
		

	
		
	</header><!-- .entry-header -->

	<div class="product-text-container">
		<div class="after-dot"><?php the_title(); ?></div>
		<div class = "price"><?php echo CFS()->get ('product_price'); ?></div>
	</div>



</article><!-- #post-## -->


			<?php endwhile; ?>

</section>	

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
