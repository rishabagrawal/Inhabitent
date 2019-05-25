<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		    <section class="home-hero"> 
	 			<img src="<?php echo get_template_directory_uri()?>/assets/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo">
		    </section>

		  <div class= "front-page-content">
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
				<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' .
				$term->slug . '.svg'
				?>">
			<p><?php echo $term->description; ?></p> 
			<p> 
				<a href="<?php echo get_term_link($term); ?>">
				<?php echo $term->name; ?> Stuff
		</a>
			</p>	

			</div>
			<?php


		endforeach;
		?>
		</div><!-- .product-terms -->
		
	</section>



		<section class= "fp-journal">
			<h2>Inhabitent Journal</h2>
				
				<?php
	$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );

	$journal_posts = get_posts( $args ); // returns an array of posts
	?>
	<div class="journal-entry-entry">
	<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
	
	<div class="journal entry">
		<?php if(has_post_thumbnail()):?>
		<div class="thumbnail-wrapper">
			<img src="<?php // echo get_the_post_thumbnail(); ?>">
			<?php the_post_thumbnail('large'); ?>
	</div>
	<?php endif; ?>

	<div class="fp-post-meta">
		<?php echo get_the_date(); ?> /
		<?php echo get_comments_number(); ?> Comments 
		</div>

	<a href="<php echo get_thepermalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
	</div>	

		 
	
	<?php endforeach; wp_reset_postdata(); ?>
	</div>
	
</section>

<section class="fb-adventure"> <!--adventure-->
		<h2>Latest Adventures</h2>
	<ul class="adventure-entry-entry">
		
		<li class="adventure-entry nature">
		   <a href="#"><h3>Getting back to nature in a canoe</h3></a>
	</li>
	
		
		<li class="adventure-entry beach">
		 <a href="#"><h3>A night with friends at the beach</h3></a>
	</li>
		<li class="adventure-entry mountain">
		<a href="#"><h3>Taking in the view at Big Mountain</h3></a>
	</li>
		<li class="adventure-entry sky">
		<a href="#"><h3>Star-Gazing at the night sky</h3></a>
	</li>

	</ul>
	
</section> <!--adventure ending-->
</div> <!-- front page content ends here for div -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
