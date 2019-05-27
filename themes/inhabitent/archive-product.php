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
		
		<h2>Shop Stuff</h2>
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
		<?php the_title(); ?>
		<?php if ( has_post_thumbnail() ) : ?>

		
			<?php the_post_thumbnail( 'medium_large' ); ?>
			<?php echo CFS()->get ('product_price'); ?>
		<?php endif; ?>
		

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


</article><!-- #post-## -->


			<?php endwhile; ?>

</section>	

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
