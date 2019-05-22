<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		  <section class="home-hero"> </section>

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
			<!-- <img src="<?php // echo get_the_post_thumbnail(); ?>"> -->
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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
